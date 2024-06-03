<?php 
class Home extends Router {
    public function SayHi() {
        echo $this -> View('layout_master',[
            'page' => 'List_room'
        ]);
        $listroom = $this -> Model('RoomModel');
    }
    public function Show(){
        // goi ham ra xai
        $listroom = $this->Model("RoomModel");
        $roomList = $listroom->getRoom();
        echo $this->View('layout_master',[
            //Thay doi content ở đây
            'page'=>'List_Room',
            'list' => $roomList
        ]);
    }
}
?>