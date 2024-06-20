<div class="my-5" style="background-image: url(public/images/hero.jpg);">
    <div class="p-5 text-center rounded-3">
        <p style='font-size: 13px; font-weight: bold; color:#FF8A08; margin-bottom:0px;'>CHÀO MỪNG ĐẾN VỚI SUNHOUSE</p>
        <h1 class="text-white" style="padding: 100px">
            Trải nghiệm những điều tuyệt vời nhất<br>cho kỳ nghỉ của bạn.</h1>
    </div>
</div>
<div class="container">
    <div class="d-flex justify-content-center">
        <form action="Room" method="post">
            <div class="row" class="row g-4" style="padding:20px 180px; background-color:#6DC5D1">
                <div class="col-4">
                    <label style="font-weight: bold;" for="fromDate">Từ ngày:</label>
                    <div class="input-group date" id="fromDate">
                        <input type="text" class="form-control" name="from_date" placeholder="Chọn ngày bắt đầu" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <label style="font-weight: bold;" for="toDate">Đến ngày:</label>
                    <div class="input-group date" id="toDate">
                        <input type="text" class="form-control" name="to_date" placeholder="Chọn ngày kết thúc" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <label style="font-weight: bold;" for="">Số khách</label>
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

    <div style="margin-top: 100px;" class="row">
        <div class="col-6">
            <h6 style="color:#FF8A08">VỀ CHÚNG TÔI
            </h6>
            <h2 style="margin: 20px 0px">Chào mừng đến với SUNHOUSE</h2>
            <p style="color:#777C81">
                Tại Sun House, chúng tôi cam kết mang đến cho bạn một trải nghiệm tuyệt vời, kết hợp giữa sự sang trọng, tiện nghi và dịch vụ chuyên nghiệp.<br><br>

                Chúng tôi luôn hướng tới việc cung cấp một không gian nghỉ dưỡng lý tưởng, nơi khách hàng có thể thư giãn, tận hưởng và cảm nhận sự chăm sóc chu đáo Sứ mệnh của chúng tôi là mang đến những khoảnh khắc đáng nhớ, từ những chi tiết nhỏ nhất trong dịch vụ hàng ngày.
            </p>
        </div>
        <div class="col-6">
            <div class="img">
                <div class="box">
                    <img style="width:550px;" src="public/images/home-about/home-about.png" alt="">
                </div>
            </div>
        </div>
        <section class="services spad">
            <div class="container" style="margin-top: 8dvh;">
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-sm-6 ">
                        <div class="services__item">
                            <img src="public/images/services/services-1.png" alt="">
                            <h4>Wi-Fi</h4>
                            <p>Chúng tôi hiểu rằng việc duy trì kết nối Internet là rất quan trọng đối với bạn, dù là để làm việc,
                                giải trí hay giữ liên lạc với gia đình và bạn bè.
                                Chính vì vậy, Sun House cung cấp dịch vụ WiFi miễn phí tốc độ cao cho tất cả khách hàng.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="public/images/services/services-2.png" alt="">
                            <h4>Hồ Bơi</h4>
                            <p>Tại Sun House, chúng tôi tự hào mang đến cho quý khách một không gian thư giãn tuyệt vời tại
                                hồ bơi hiện đại của chúng tôi. Với thiết kế sang trọng và tiện nghi,
                                hồ bơi của chúng tôi là nơi lý tưởng để bạn thư giãn, bơi lội và tận hưởng những khoảnh khắc đáng nhớ.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="public/images/services/services-3.png" alt="">
                            <h4>Cà Phê</h4>
                            <p>Tại Sun House, chúng tôi tự hào mang đến cho quý khách những tách cà phê tuyệt vời nhất.Với không gian sang trọng, thoải mái và dịch vụ chuyên nghiệp,
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="public/images/services/services-4.png" alt="">
                            <h4>Bar Rượu Vang</h4>
                            <p>Tại Sun House, chúng tôi tự hào giới thiệu đến quý khách bar rượu vang sang trọng của chúng tôi.
                                Đây là nơi bạn có thể thưởng thức những loại rượu vang cao cấp trong không gian ấm cúng và thanh lịch,
                                lý tưởng để thư giãn sau một ngày dài hoặc tạo nên những khoảnh khắc đáng nhớ cùng bạn bè, đối tác.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="public/images/services/services-5.png" alt="">
                            <h4>TV HD</h4>
                            <p>Chúng tôi cung cấp một phân tích quan trọng về chiến lược tiếp thị của khách sạn, đánh dấu nó công nghiệp và thực tiễn cạnh tranh.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="public/images/services/services-6.png" alt="">
                            <h4>Thức Ăn</h4>
                            <p>Tại Sun House, chúng tôi tự hào mang đến cho quý khách những trải nghiệm ẩm thực đa dạng và phong phú.
                                Với các nhà hàng và quán ăn sang trọng, chúng tôi cam kết phục vụ những món ăn ngon miệng, được chế biến từ nguyên liệu tươi ngon nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dang phong -->
        <section class="Dangphong" style="margin-top: 100px;">
            <h6 class="row" style="color:#FF8A08;">
                CÁC DẠNG PHÒNG
            </h6>
            <div class="row text-center">
                <h2 style="margin: 20px 0px">KHÁM PHÁ CÙNG CHÚNG TÔI</h2>
            </div>
            <div class="row">
                <div class="card" style="margin: 20px 0px;">
                    <div class="row g-0">
                        <div class="col-7 col-sm-8">
                            <div class="card-body">
                                <h3 class="mb-0">Phòng cao cấp</h3>
                                <div class="mb-1 text-body-secondary">
                                    <h4 style="color:#FF8A08">50$</h4>
                                </div>
                                <p class="card-text mb-auto">Kích cở: 30m2</p>
                                <p class="card-text mb-auto">Phòng tối đa: 3 người</p>
                                <p class="card-text mb-auto">Dịch vụ: TV, WIFI, Phòng Tắm,...</p>
                                <button class="btn btn-primary text-warming" type="submit">
                                    Xem phòng
                                </button>
                            </div>
                        </div>
                        <div class="col-5 col-sm-4">
                            <div lass="img-fluid w-100" alt="card-horizontal-image"></div>
                            <img src="public/images/home-room/hr-1.jpg" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                    </div>
                </div>
                <div class="col-3" style=" margin: 0 20px; background-image: url(public/images/rooms/details/rd-1.jpg);"></div>

                
                <div class="card" style="margin: 20px 0px;">
                    <div class="row g-0">
                        <div class="col-7 col-sm-8">
                            <div class="card-body">
                                <h3 class="mb-0">Phòng cơ bản</h3>
                                <div class="mb-1 text-body-secondary">
                                    <h4 style="color:#FF8A08">50$</h4>
                                </div>
                                <p class="card-text mb-auto">Kích cở: 30m2</p>
                                <p class="card-text mb-auto">Phòng tối đa: 3 người</p>
                                <p class="card-text mb-auto">Dịch vụ: TV, WIFI, Phòng Tắm,...</p>
                                <button class="btn btn-primary text-warming" type="submit">
                                    Xem phòng
                                </button>
                            </div>
                        </div>
                        <div class="col-5 col-sm-4">
                            <div lass="img-fluid w-100" alt="card-horizontal-image"></div>
                            <img src="public/images/home-room/hr-2.jpg" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                    </div>
                </div>
                <div class="col-3" style=" margin: 0 20px; background-image: url(public/images/rooms/details/rd-2.jpg);"></div>

                <div class="card" style="margin: 20px 0px;">
                    <div class="row g-0">
                        <div class="col-7 col-sm-8">
                            <div class="card-body">
                                <h3 class="mb-0">Phòng đôi</h3>
                                <div class="mb-1 text-body-secondary">
                                    <h4 style="color:#FF8A08">50$</h4>
                                </div>
                                <p class="card-text mb-auto">Kích cở: 30m2</p>
                                <p class="card-text mb-auto">Phòng tối đa: 3 người</p>
                                <p class="card-text mb-auto">Dịch vụ: TV, WIFI, Phòng Tắm,...</p>
                                <button class="btn btn-primary text-warming" type="submit">
                                    Xem phòng
                                </button>
                            </div>
                        </div>
                        <div class="col-5 col-sm-4">
                            <div lass="img-fluid w-100" alt="card-horizontal-image"></div>
                            <img src="public/images/home-room/hr-3.jpg" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                    </div>
                </div>
                <div class="col-3" style=" margin: 0 20px; background-image: url(public/images/rooms/details/rd-3.jpg);"></div>

                <div class="card" style="margin: 20px 0px;">
                    <div class="row g-0">
                        <div class="col-7 col-sm-8">
                            <div class="card-body">
                                <h3 class="mb-0">Phòng sang <br>trọng</h3>
                                <div class="mb-1 text-body-secondary">
                                    <h4 style="color:#FF8A08" >50$</h4>
                                </div>
                                <p class="card-text mb-auto">Kích cở: 30m2</p>
                                <p class="card-text mb-auto">Phòng tối đa: 3 người</p>
                                <p class="card-text mb-auto">Dịch vụ: TV, WIFI, Phòng Tắm,...</p>
                                <button class="btn btn-primary text-warming" type="submit">
                                    Xem phòng
                                </button>
                            </div>
                        </div>
                        <div class="col-5 col-sm-4">
                            <div lass="img-fluid w-100" alt="card-horizontal-image"></div>
                            <img src="public/images/home-room/hr-4.jpg" class="img-fluid w-100" alt="card-horizontal-image">
                        </div>
                    </div>
                </div>
                <div class="col-3" style=" margin: 0 20px; background-image: url(public/images/rooms/details/rd-4.jpg);"></div>
            </div>
        </section>
    </div>

</div>