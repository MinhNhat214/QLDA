<div class="container">
    <main>
        <div class="row g-5">

            <div class="col">
                <form method="post" action="ThanhToanThanhCong">
                    <div class="p-3 bg-body-tertiary">
                        <span style="font-size: 24px; color: #FF8A08" class="fw-bold">Thông tin khách hàng</span>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Họ và tên</span>
                            <span><?php echo $_SESSION['full_name'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Số điện thoại</span>
                            <span><?php echo $_SESSION['phone'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Email</span>
                            <span><?php echo $_SESSION['email'] ?></span>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between mt-2">
                            <span style="font-size: 24px; color: #FF8A08" class="lh-sm">Thông tin đặt phòng</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Dạng phòng</span>
                            <span><?php echo $_SESSION['type_name'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Số phòng</span>
                            <span><?php echo $_SESSION['room_number'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span class="lh-sm">Giá phòng/đêm</span>
                            <span><?php echo $_SESSION['base_price'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span class="lh-sm">Từ ngày</span>
                            <span><?php echo ($_SESSION['from_date']) ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span>Đến ngày</span>
                            <span><?php echo ($_SESSION['to_date']) ?></span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <span class="lh-sm">Số khách</span>
                            <span><?php echo $_SESSION['guest_count'] ?></span>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between mt-2">
                            <span class="text-success"style="font-size: 24px;">Tổng cộng </span>
                            <span class="text-success"style="font-size: 24px;"><?php echo $_SESSION['total_price'] ?></span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Xác nhận thanh toán</button>
                </form>
            </div>


            <div class="col"  style="width: 200px">
                <img src="public/images/home-about/home-about.png" class="img-fluid w-100" alt="card-horizontal-image">
            </div>
        </div>
    </main>
</div>