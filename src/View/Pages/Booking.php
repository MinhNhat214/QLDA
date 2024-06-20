<div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <div class="p-3 bg-body-tertiary">
                    <span class="fw-bold">Thông tin khách hàng</span>
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
                        <span class="lh-sm">Thông tin đặt phòng</span>
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
                        <span><?php  var_dump ($_SESSION['from_date'] )?></span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Đến ngày</span>
                        <span><?php var_dump ($_SESSION['to_date']) ?></span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <span class="lh-sm">Số khách</span>
                        <span><?php echo $_SESSION['guest_count'] ?></span>
                    </div>
                    <hr />
                    <div class="d-flex justify-content-between mt-2">
                        <span>Tổng cộng </span> <span class="text-success">$85.00</span>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>