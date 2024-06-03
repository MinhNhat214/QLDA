<div class="container">
    <hr>
    <table class="table">
        <thead class="table-info">
            <tr>
                <th>Dạng phòng</th>
                <th>Số khách</th>
                <th>Giá phòng/đêm</th>
                <th>Số phòng</th>
                <th>Đặt phòng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data['list'] as $item) : ?>
                <tr>
                    <td><?php echo $item['room_id'] ?></td>
                    <td>
                        <select class="form-select" id="validationTooltip04" required="">
                            <!-- <option selected="" disabled="" value="">Số khách</option> -->
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </td>
                    <td><?php echo $item['price_per_night'] ?> </td>
                    <td><?php echo $item['room_number'] ?> </td>
                    <td><button class="btn btn-success btn-sm" type="submit">Đặt ngay</button></td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>