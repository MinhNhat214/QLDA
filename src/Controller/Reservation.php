<?php
class Reservation extends Router
{
    public function Home()
    {
        if ($this->isPost()) {
            $roomId = $_POST['room_id'];
            $guestCount = $_POST['guest_count'];
            $price = $_POST['price'];
            $roomNumber = $_POST['room_number'];
            $roomModel = $this->Model("RoomModel");
            $roomDetail = $roomModel->getRoomID($roomId);

            echo $this->View('layout_master', [
                'page' => 'Reservations',
                'room' => $roomDetail,
                'room_id' => $roomId,
                'guest_count' => $guestCount,
                'price' => $price,
                'room_number' => $roomNumber,
            ]);
        }
    }
    // public function Room() {
    //     // goi ham ra xai
    //     $listroom = $this->Model("BookNowModel");
    //     $roomList = $listroom->getRoom();
    //     $bookfrom = $listroom->Bookform();
    //     // $ispost = $listroom->ListRoom();
    //     echo $this->View('layout_master', [
    //         'page' => 'Book_Now',
    //         'list' => $roomList,
    //         // 'ispost' => $ispost
    //     ]);
    // }
}
