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
    public function calculatePrice($from_date, $to_date, $base_price) {
        // Chuyển đổi chuỗi ngày thành đối tượng DateTime
        $start_date = DateTime::createFromFormat('d/m/Y', $from_date);
        $end_date = DateTime::createFromFormat('d/m/Y', $to_date);

        // Kiểm tra nếu việc chuyển đổi thành công
        if ($start_date && $end_date) {
            // Tính khoảng cách giữa hai ngày
            $interval = $start_date->diff($end_date);

            // Số đêm (chênh lệch ngày)
            $nights = $interval->days;

            // Tính tổng tiền
            $total_price = $nights * $base_price;

            return [
                'nights' => $nights,
                'total_price' => $total_price
            ];
        } else {
            throw new Exception("Định dạng ngày không hợp lệ.");
        }
    }
    public function insertBooking($table, $data)
    {
        $key = array_keys($data);
        $truong = implode(',', $key);
        $valuetb = ':' . implode(',:', $key);

        $sql = 'INSERT INTO ' . $table . ' (' . $truong . ') VALUES (' . $valuetb . ')';
        $kq = $this->query($sql, $data);
        return $kq;
    }
}
