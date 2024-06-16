<?php 
class BookNow extends Router{
    public function Home() {
        if($this->isPost()){
            // goi Model
            $listroom = $this->Model("RoomModel");
            $roomList = $listroom->getRoom();

            $service = $this->Model('ServiceModel');
            $getService = $service->getService();
            
            $from_date = $_POST['from_date'];
            $to_date = $_POST['to_date'];
            $guest_count = $_POST['guest_count'];

            // goi View
            echo $this->View('layout_master', [
                'page' => 'Book_Now',
                'list' => $roomList,
                'from_date' => $from_date,
                'to_date' => $to_date,
                'get_service' => $getService
            ]);
        }
    }
}
?>

