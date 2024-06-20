<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Font Awesome for calendar icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <p style='font-weight: bold; color:#FF8A08; margin-bottom:0px;'>SUNHOUSE</p>
            <!-- <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img class="bi" width="70" height="50" role="img" aria-label="Bootstrap" src="public/images/logo-black.png" alt="" srcset="">

            </a> -->
        </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="Home" class="nav-link px-2">Trang chủ</a></li>
            <li><a href="Room" class="nav-link px-2">Tin tức</a></li>
            <li><a href="Room" class="nav-link px-2">Bài viết</a></li>
            <li><a href="AboutUs" class="nav-link px-2">Về chúng tôi</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Đăng nhập</button>
            <button type="button" class="btn btn-primary">Đăng ký</button>
            <a href="Logout">Đăng xuất</a>
        </div>
    </header>
    <?php
    require_once 'src/View/Pages/' . $data['page'] . '.php'
    ?>

    <!-- Footer -->
    <!-- <div class="container"> -->
        

    <footer class="py-5 container">
        <div class="row">
            <div class="col-4 ">
                <h5>Liên hệ</h5>
                <ul class="nav flex-column">
                    <p>0123 *** 789</p>
                    <p>32 Nguyễn Bỉnh Khiêm, Phường 01, <br> Gò Vấp, Hồ Chí Minh 70000, Việt Nam</p>

                </ul>
            </div>
            <div class="col-4">
                <h5>Liên kết nhanh</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-4">
                <form>
                    <h5>Liên hệ với chúng tôi</h5>
                    <p>Nhận thông báo về sự kiện hàng tháng</p>
                    <div class="">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" style="float:right; margin-top: 15px;" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <!-- Custom JS -->
        <script src="public/js/scripts.js"></script>
    </footer>
    <!-- </div> -->
</body>

</html>