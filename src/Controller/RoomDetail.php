<?php 
    class RoomDetail extends Router{
        public function Home(){
            $from_date = $_POST['from_date'];
            $to_date = $_POST['to_date'];
            $guest_count = $_POST['guest_count'];
            $room_type_id = $_POST['room_type_id'];
            $type_name = $_POST['type_name'];

            if($this->isPost()){
                echo $this->View('layout_master', [
                    'page' => 'Room_Detail',
                    'from_date' => $from_date,
                    'to_date' => $to_date,
                    'guest_count' => $guest_count,
                    'room_type_id' => $room_type_id,
                    'type_name' => $type_name
                ]);

            }
        }
    }
?>
