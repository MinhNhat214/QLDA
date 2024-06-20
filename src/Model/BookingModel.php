<?php
require_once "src/core/DBInteraction.php";
class BookingModel extends DBInteraction
{
    public function getRoom()
    {
        $getRoom = $this->getRaw('SELECT * FROM booking');
        if ($getRoom) {
            return $getRoom;
        } else {
            return [];
        }
    }
}
