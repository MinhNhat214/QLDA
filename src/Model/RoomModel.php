<?php
require_once "src/core/DBInteraction.php";
// $DBInteraction = new DBInteraction;
class RoomModel extends DBInteraction
{
    public function getRaw($sql)
    {
        $dataFetch = [];
        $statement = $this->query($sql, [], true);
        if ($statement && is_object($statement)) {
            $dataFetch = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataFetch;
    }
    function oneRaw($sql)
    {
        $kq = $this -> query($sql, '', true);
        if (is_object($kq)) {
            // lấy một hàng dữ liệu từ kết quả của một truy vấn SQL
            $dataFetch = $kq->fetch(PDO::FETCH_ASSOC);
        }
        return $dataFetch; 
    }
    public function getRoom()
    {
        // Thực hiện truy vấn để lấy thông tin của phòng có room_id là 1
        $result = $this->getRaw('SELECT * FROM rooms');

        // Kiểm tra xem có kết quả trả về hay không
        if ($result) {
            // Trả về kết quả nếu có
            return $result;
        } else {
            // Trả về một giá trị mặc định hoặc một mảng rỗng nếu không có kết quả
            return []; // hoặc return null; hoặc return false; tùy thuộc vào yêu cầu của bạn
        }
    }
}
