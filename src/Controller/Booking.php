<?php
class Booking extends Router
{
    public function Home()
    {
        if ($this->isPost()) {
            $_SESSION['room_number'] = $_POST['room_number'];

            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if (!isset($_SESSION['customer_id'])) {
                echo 'chua dang nhap';
                // Người dùng chưa đăng nhập, điều hướng về trang đăng nhập
                header('Location: Login');
                exit();
            }
        }
        echo $_SESSION['customer_id'] . '<br>';

        echo $_SESSION['full_name'] . '<br>';

        echo $_SESSION['email'] . '<br>';
        echo $_SESSION['login_status'] . '<br>';
        echo $_SESSION['room_number'] . '<br>';
        echo $_SESSION['from_date'] . '<br>';
        echo $_SESSION['to_date'] . '<br>';
        echo $_SESSION['guest_count'] . '<br>';
        // exit();
        // $getInfCustomer = $this-> Model('CustomerModel');
        // $getCusInf = $getInfCustomer -> infCusOnId();

        // Nếu người dùng đã đăng nhập, hiển thị trang booking
        echo $this->View('layout_master', [
            'page' => 'Booking',
            // 'getlistcus' => $getCusInf,
            // Có thể truyền thêm thông tin người dùng nếu cần
            // 'full_name' => $_SESSION['full_name']
        ]);
    }
}
