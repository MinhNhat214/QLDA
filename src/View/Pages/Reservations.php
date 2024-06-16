<!-- src/View/Pages/Reservations.php -->
<div class="container">
    <h1>Chi tiết đặt phòng</h1>
    <hr>
    <?php if (isset($data['room'])): ?>
    <?php foreach ($data['room'] as $item) : ?>
        <p>Mã phòng: <?php echo htmlspecialchars($item['room_id']); ?></p>
        <p>Giá phòng/đêm: <?php echo htmlspecialchars($item['price']); ?></p>
        <p>Số phòng: <?php echo htmlspecialchars($item['room_number']); ?></p>
        <p>Số khách: <?php echo ($data['guest_count']); ?></p>
        <!-- Add more details as necessary -->
    <?php endforeach?>
    <?php else: ?>
        <p>Không tìm thấy thông tin chi tiết phòng.</p>
    <?php endif; ?>
</div>

