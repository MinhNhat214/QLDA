<?php
require_once "src/core/DBInteraction.php";
class RoomTypeModel extends DBInteraction
{
    public function getRoomTypes()
    {
        $getRaw = $this->getRaw('SELECT * FROM room_types');
        if ($getRaw) {
            return $getRaw;
        } else {
            return [];
        }
    }
    // public function getTypeName()
    // {
    //     $getRaw = $this->oneRaw('SELECT * FROM room_types WHERE room');
    //     if ($getRaw) {
    //         return $getRaw;
    //     } else {
    //         return [];
    //     }
    // }
}


