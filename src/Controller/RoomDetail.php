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
            
            // $getroommodel = $this->Model('RoomModel');
            // $getRoomNumberOnRoomType = $getroommodel -> getRoomOnRoomType($data['room_type_id']);
            
            if($this->isPost()){
                echo $this->View('layout_master', [
                    'page' => 'Room_Detail',
                    // 'from_date' => $from_date,
                    // 'to_date' => $to_date,
                    // 'guest_count' => $guest_count,
                    'room_type_id' => $_SESSION['room_type_id'],
                    'type_name' => $_SESSION['type_name'],
                    'getinerroomtype' => $getInerRoomType
                ]);
            }
            
        }
    }
?>
