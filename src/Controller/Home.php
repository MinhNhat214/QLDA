<?php 
class Home extends Router {
    public function Home(){
        $listroom = $this->Model("RoomModel");
        // $roomList = $listroom->oneRaw();
        
        echo $this->View('layout_master', [
            'page' => 'Home_Page'
            // 'list' => $roomList,
        ]);
    }
}
?>