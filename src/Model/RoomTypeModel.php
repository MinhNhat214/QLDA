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
    public function getRoomTypeInner()
    {
        $sql = "
            SELECT rooms.room_id, rooms.room_number, room_types.base_price, room_types.type_name, room_types.room_type_id
            FROM rooms
            INNER JOIN room_types
            ON rooms.room_type_id = room_types.room_type_id
        ";
        $getRaw = $this->getRaw($sql);
        if ($getRaw) {
            return $getRaw;
        } else {
            return [];
        }
    }
    public function getRoomType()
    {
        $sql = "
            SELECT rooms.room_id, rooms.room_number, room_types.base_price, room_types.type_name, room_types.room_type_id
            FROM rooms
            INNER JOIN room_types
            ON rooms.room_type_id = room_types.room_type_id
            ORDER BY rooms.room_type_id;
        ";
        $getRaw = $this->getRaw($sql);
        if ($getRaw) {
            return $getRaw;
        } else {
            return [];
        }
    }
}
