<?php 
    class RoomDetail extends Router{
        public function Home(){
            // $from_date = $_POST['from_date'];
            // $to_date = $_POST['to_date'];
            // $guest_count = $_POST['guest_count'];
            $_SESSION['room_type_id'] = $_POST['room_type_id'];
            $_SESSION['type_name']  = $_POST['type_name'];
            $_SESSION['base_price'] = $_POST['base_price'];

            $getModelRoomDetail = $this->Model('RoomTypeModel');
            $getInerRoomType = $getModelRoomDetail -> getRoomTypeInner();

            //Lay Booking
            $getBooking = $this->Model('BookingModel');
            // $getCalculate = $getBooking-> calculatePrice();

            // try {
                // Tính toán số đêm và tổng tiền
                $result = $getBooking->calculatePrice(
                    $_SESSION['from_date'],
                    $_SESSION['to_date'],
                    $_SESSION['base_price']
                );
                // var_dump ($result);
                // Lưu kết quả vào $_SESSION
                $_SESSION['nights'] = $result['nights'];
                $_SESSION['total_price'] = $result['total_price'];

            // } catch (Exception $e) {
            //     $_SESSION['error_message'] = $e->getMessage();
            // }

            // Chuyển hướng đến trang hiển thị kết quả
            // header('Location: DisplayResult');
            // exit();
            if($this->isPost()){
                echo $this->View('layout_master', [
                    'page' => 'Room_Detail',
                    // 'from_date' => $from_date,
                    // 'to_date' => $to_date,
                    // 'guest_count' => $guest_count,
                    'room_type_id' => $_SESSION['room_type_id'],
                    'type_name' => $_SESSION['type_name'],
                    'getinerroomtype' => $getInerRoomType,
                    // 'error_message' => isset($error_message) ? $error_message : ''
                ]);
            }
            
        }
    }
?>
