<?php
class ThanhToanThanhCong extends Router {
    public function Home() {
        if ($this->isPost()) {
            // Kiểm tra xem tất cả các biến session có tồn tại hay không
            if (isset($_SESSION['from_date'])){ //$_SESSION['email'], $_SESSION['password'], $_SESSION['from_date'], $_SESSION['to_date'], $_SESSION['guest_count'], $_SESSION['total_price'])) {
                $dataInsert = [
                    'check_in_date' => $_SESSION['from_date'],
                    'check_out_date' => $_SESSION['to_date'],
                    'number_of_guests' => $_SESSION['guest_count'],
                    'total_price' => $_SESSION['total_price'],
                    'created_at' => date('Y-m-d H:i:s')
                ];


                $customerModel = $this->Model('BookingModel');

                $insertStatus = $customerModel->insertBooking('bookings', $dataInsert);
            } else {
                // Xử lý khi thiếu dữ liệu session
                $insertStatus = false;
                echo 'Thiếu thông tin đặt phòng';
            }
        } else {
            $insertStatus = null; // Khi trang lần đầu được load mà không có POST request
        }

        // Render view
        echo $this->View('layout_master', [
            'page' => 'ThanhToanThanhCong',
            'insertStatus' => $insertStatus
        ]);
    }
}
