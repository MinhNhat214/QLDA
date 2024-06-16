<div class="container">
    <hr>
    <table class="table">
        <thead class="table-info">
            <tr>
                <th>Dạng phòng</th>
                <th>Dịch vụ</th>
                <th>Giá phòng/đêm</th>
                <th>Số phòng</th>
                <th>Đặt phòng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['list']) && is_array($data['list'])) :
                foreach ($data['list'] as $item) : ?>
                    <form id="form_<?php echo $item['room_id'] ?>" action="/QLDA/Reservation" method="post">
                        <tr>
                            <td>
                                <input type="hidden" name="room_id" value="<?php echo htmlspecialchars($item['room_id']); ?>" readonly>
                            </td>
                            <td>
                                <input type="text" name="description" value="<?php foreach($data['get_service'] as $service){echo $service['description'];} ?>">
                            </td>
                            <td><input name="price" value="<?php echo htmlspecialchars($item['price']); ?>" readonly></td>
                            <td><input name="room_number" value="<?php echo htmlspecialchars($item['room_number']); ?>" readonly></td>
                            <td><button class="btn btn-success btn-sm" type="submit">Đặt ngay</button></td>
                        </tr>
                    </form>
            <?php endforeach;
            else :
                echo '<tr><td colspan="5">Không có dữ liệu</td></tr>';
            endif;
            ?>
        </tbody>
    </table>
</div>