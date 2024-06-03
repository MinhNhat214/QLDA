<?php
require_once "src/core/DBInteraction.php";
// $DBInteraction = new DBInteraction;
class RoomModel extends DBInteraction
{
    public function getRoom()
    {
        $result = $this->getRaw('SELECT * FROM rooms');
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }

}