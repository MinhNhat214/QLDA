<?php
require_once "src/core/DBInteraction.php";
class ReservationModel extends DBInteraction
{
    public function getRoom()
    {
        $getRoom = $this->getRaw('SELECT * FROM rooms');
        if ($getRoom) {
            return $getRoom;
        } else {
            return [];
        }
    }
    public function getRoomID($roomId)
    {
        // $getRoomID = $this->getRaw('SELECT * FROM rooms WHERE room_id = :room_id');
        $params =['room_id'=>$roomId];
        $getRoomID = $this->getRaw('SELECT * FROM rooms WHERE room_id = :room_id',$params,true);
        return $getRoomID;
    }
     
    // public function getRoomDetail($roomId)
    // {
    //     $sql = "SELECT * FROM rooms WHERE room_id = :room_id";
    //     $params = ['room_id' => $roomId];
    //     $roomDetail = $this->query($sql, $params, true);

    //     return $roomDetail ? $roomDetail->fetch(PDO::FETCH_ASSOC) : null;
    // }


}