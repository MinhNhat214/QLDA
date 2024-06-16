<?php
// $data['isGet'];
?>
<div class="container">
    <h1>Trang home page</h1>
    <div class="d-flex justify-content-center">
        <form action="Room" method="post">
            <div class="row" class="row g-4" style="border:1px solid black; padding:20px 180px;">
                <div class="col-4">
                    <label for="fromDate">Từ ngày:</label>
                    <div class="input-group date" id="fromDate">
                        <input type="text" class="form-control" name="from_date" placeholder="Chọn ngày bắt đầu" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <label for="toDate">Đến ngày:</label>
                    <div class="input-group date" id="toDate">
                        <input type="text" class="form-control" name="to_date" placeholder="Chọn ngày kết thúc" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <label for="">Số khách</label>
                    <select name="guest_count" class="form-select" style="width: 90px; height: 35px;" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3+</option>
                    </select>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" style="margin-top: 8px; height: 60px; width:150px;" type="submit">
                        Đặt ngay
                    </button>
                </div>
            </div>
        </form>
    </div>

    <h5>Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Saepe, ex expedita?
        Odio vel adipisci debitis accusamus
        assumenda eveniet at? Unde natus quidem
        accusamus aperiam corrupti fugiat ipsam
        nihil temporibus distinctio?</h5>

</div>