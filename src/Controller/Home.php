<?php 
class Home extends Router {
    //Home này gọi model, model gọi database, xử lý dữ liệu trong model
    //Home này gọi view, trong view có giao diện
    public function SayHi() {
        echo $this -> View('layout_master',[
            'page' => 'List_room'
        ]);
        $listroom = $this -> Model('RoomModel');
    }
    public function Show(){
        // goi ham ra xai
        $listroom = $this->Model("RoomModel");
        // echo $listroom -> getRoom();
        // goi giao dien
        // thay layout o tham so 1
        $roomList = $listroom->getRoom();
        echo $this->View('layout_master',[
            //Thay doi content ở đây
            'page'=>'List_Room',
            'list' => $roomList
        ]);
    }
}
?>