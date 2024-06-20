<div class="my-5" style="background-image: url(public/images/breadcrumb-bg.jpg);">
    <div class="p-5 text-center rounded-3">
        <!-- <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100">
            <use xlink:href="#bootstrap"></use>
        </svg> -->
        <!-- <h1 class="text-white">CÁC LOẠI PHÒNG</h1> -->
        <!-- <p class="col-lg-8 mx-auto fs-5 text-white text-bold">
            Home > <Span style="color: gray;">Room</Span>
        </p> -->
        <h1 class="text-white" style="padding: 100px">CÁC LOẠI PHÒNG</h1>
    </div>
</div>
<div class="container">
    <?php foreach ($data['list'] as $item) : ?>
        <form action="RoomDetail" method="post" class="row mb-1">
            <div class="card">
                <input type="number" name="room_type_id" value="<?php echo $item['room_type_id']?>">
                <div class="row g-0">
                    <div class="col-7 col-sm-8">
                        <div class="card-body">
                            <input type="text" name="type_name" value="<?php echo $item['type_name'] ?>">
                            <h3 class="mb-0">Phòng cao cấp</h3>
                            <div class="mb-1 text-body-secondary">
                                <input type="number" name="base_price" value="<?php echo $item['base_price'] ?>">
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
                        <div lass="img-fluid w-100" alt="card-horizontal-image"><?php echo $item['image_url'] ?></div>
                        <!-- <img src="public/images/home-room/hr-1.jpg" class="img-fluid w-100" alt="card-horizontal-image"> -->
                    </div>
                </div>
            </div>
        </form>
    <?php endforeach ?>
</div>