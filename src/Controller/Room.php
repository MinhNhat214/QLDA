<?php
class Room extends Router
{
    public function Home()
    {
        if ($this->isPost()) {
            // get Post
            $_SESSION['from_date'] = $_POST['from_date'];
            $_SESSION['to_date'] = $_POST['to_date'];
            $_SESSION['guest_count'] = $_POST['guest_count'];
            // $from_date = $_POST['from_date'];
            // $to_date = $_POST['to_date'];
            // $guest_count = $_POST['guest_count'];
            // goi Model
            $listroom = $this->Model("RoomTypeModel");
            $listType = $listroom->getRoomTypes();

            // $listroomtype = $this->Model('RoomTypeModel');
            // $getRoomType = $listroomtype->getRoomTypes();
            // goi View
            echo $this->View('layout_master', [
                'page' => 'Room_page',
                'list' => $listType,
                'from_date' => $_SESSION['from_date'],
                'to_date' => $_SESSION['to_date'],
                'guest_count' => $_SESSION['guest_count']
            ]);
        }

        
        if ($this->isGet()) {
            $from_date = null;
            $to_date = null;
            $guest_count = null;

            $listroom = $this->Model("RoomTypeModel");
            $roomList = $listroom->getRoomTypes();
            echo $this->View('layout_master', [
                'page' => 'Room_page',
                'list' => $roomList,
                'from_date' => $from_date,
                'to_date' => $to_date,
                'guest_count' => $guest_count

                // 'room_type'=>$getRoomType
            ]);
        }
    }
}
