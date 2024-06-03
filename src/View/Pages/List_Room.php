<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang List_room</title>
</head>

<body>
    <!-- Trong file List_Room.php -->
    <?php
    foreach ($data['list'] as $room) {
        echo $room['room_id'].'</br>';
        // Thay 'room_id' bằng tên trường dữ liệu mà bạn muốn hiển thị
        // Các thông tin khác về phòng có thể in ra ở đây
    }
    ?>
</body>

</html>