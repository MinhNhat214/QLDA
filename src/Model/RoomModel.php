<?php
require_once "src/core/DBInteraction.php";
class RoomModel extends DBInteraction
{
    public function getRoom()
    {
        $getRaw = $this->getRaw('SELECT * FROM rooms');
        if ($getRaw){
            return $getRaw;
        } else {
            return [];
        }
    }
    public function getRoomOnRoomType($roomTypeId)
    {
        $params =['room_type_id'=>$roomTypeId];
        $getRoomID = $this->getRaw('SELECT * FROM rooms WHERE room_id = :room_id',$params,true);
        return $getRoomID;
    }
}