<?php
require_once "src/core/DBInteraction.php";
class RoomModel extends DBInteraction
{
    public function getRoom()
    {
        $getRaw = $this->getRaw('SELECT * FROM rooms');
        if ($getRaw) {
            return $getRaw;
        } else {
            return [];
        }
    }
    // public function getRoomID($roomId)
    // {
    //     // $getRoomID = $this->getRaw('SELECT * FROM rooms WHERE room_id = :room_id');
    //     $params =['room_id'=>$roomId];
    //     $getRoomID = $this->getRaw('SELECT * FROM rooms WHERE room_id = :room_id',$params,true);
    //     return $getRoomID;
    // }
    // public function getType($roomId){
    //     $params =['room_id'=>$roomId];
    //     $get_type = $this->oneRaw('SELECT * FROM rooms WHERE room_id = :room_id',$params);
    //     return $get_type;
    // }

    public function BookNow(){
        if($this->isPost()){
            $this->redirect($path='BookNow');
        }
    }
}