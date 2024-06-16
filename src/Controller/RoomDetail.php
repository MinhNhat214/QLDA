<?php 
    class RoomDetail extends Router{
        public function Home(){
            echo $this->View('layout_master', [
                'page' => 'Room_Detail'
            ]);
        }
    }
?>