<?php 
    require_once 'views/require/front-end/header.php';
 ?>
        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="public/front-end/images/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Danh <span>Mục</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">danh mục</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- movie-area -->
            <section class="movie-area movie-bg" data-background="public/front-end/images/movie_bg.jpg">
                <div class="container">
                    <div class="row align-items-end mb-60">
                        <div class="col-lg-3">
                            <div class="section-title text-center text-lg-left">
                                <!-- <span class="sub-title"></span> -->
                                <h2 class="title">PHIM TRỰC TUYẾN</h2>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="movie-page-meta">
                                <div class="row tr-movie-menu-active text-center">
                                    <button class="active" data-filter="*">Tất cả</button>
                                    <button class data-filter=".cat-one">Phim hoạt hình</button>
                                    <button class data-filter=".cat-two">Phim cổ trang</button>
                                    <button class data-filter=".cat-three" >Phim hành động</button>
                                    <button class data-filter=".cat-four">Phim khoa học viễn tưởng</button>
                                    <button class data-filter=".cat-five">Phim tâm lý</button>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        <?php foreach ($allHd as $hd) { ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-three" style="min-height: 505px;">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="<?= "uploads/".$hd->image?>" style="width: 310px; height: 350px;">
                                    <ul class="overlay-btn">
                                        <li><a href="<?= $hd->source->source ?>" class="popup-video btn">Xem Ngay</a></li>
                                        <li><a href="?admin=client&mod=home&act=detail&slug=<?= $hd->slug?>" class="btn">Chi Tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $hd->slug?>"><?= $hd->name?></a></h5>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality"><?php if($hd->quality == 0){echo "SD";}else if($hd->quality == 1){echo "HD";}else if($hd->quality == 2){echo "Full HD";}else{echo "2K";}?></span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> <?= $hd->time?> min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php foreach ($allHh as $hh) { ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one" style="min-height: 505px;">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="<?= "uploads/".$hh->image?>" style="width: 310px; height: 350px;">
                                    <ul class="overlay-btn">
                                        <li><a href="<?php echo $hh->source->source;?>" class="popup-video btn">Xem Ngay</a></li>
                                        <li><a href="?admin=client&mod=home&act=detail&slug=<?= $hh->slug?>" class="btn">Chi Tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $hh->slug?>"><?= $hh->name?></a></h5>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality"><?php if($hh->quality == 0){echo "SD";}else if($hh->quality == 1){echo "HD";}else if($hh->quality == 2){echo "Full HD";}else{echo "2K";}?></span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> <?= $hh->time?> min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php foreach ($allCt as $ct) { ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two" style="min-height: 505px;">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="<?= "uploads/".$ct->image?>" style="width: 310px; height: 350px;">
                                    <ul class="overlay-btn">
                                        <li><a href="<?php echo $ct->source->source; ?>" class="popup-video btn">Xem Ngay</a></li>
                                        <li><a href="?admin=client&mod=home&act=detail&slug=<?= $ct->slug?>" class="btn">Chi Tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $ct->slug?>"><?= $ct->name?></a></h5>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality"><?php if($ct->quality == 0){echo "SD";}else if($ct->quality == 1){echo "HD";}else if($ct->quality == 2){echo "Full HD";}else{echo "2K";}?></span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> <?= $ct->time?> min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php foreach ($allTl as $tl) { ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-five" style="min-height: 505px;">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="<?= "uploads/".$tl->image?>" style="width: 310px; height: 350px;">
                                    <ul class="overlay-btn">
                                        <li><a href="<?php echo $tl->source->source; ?>" class="popup-video btn">Xem Ngay</a></li>
                                        <li><a href="?admin=client&mod=home&act=detail&slug=<?= $tl->slug?>" class="btn">Chi Tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $tl->slug?>"><?= $tl->name?></a></h5>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality"><?php if($tl->quality == 0){echo "SD";}else if($tl->quality == 1){echo "HD";}else if($tl->quality == 2){echo "Full HD";}else{echo "2K";}?></span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> <?= $tl->time?> min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php foreach ($allKhvt as $kh) { ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-four" style="min-height: 505px;">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="<?= "uploads/".$kh->image?>" style="width: 310px; height: 350px;">
                                    <ul class="overlay-btn">
                                        <li><a href="<?php echo $kh->source->source; ?>" class="popup-video btn">Xem Ngay</a></li>
                                        <li><a href="?admin=client&mod=home&act=detail&slug=<?= $kh->slug?>" class="btn">Chi Tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $kh->slug?>"><?= $kh->name?></a></h5>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality"><?php if($kh->quality == 0){echo "SD";}else if($kh->quality == 1){echo "HD";}else if($kh->quality == 2){echo "Full HD";}else{echo "2K";}?></span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> <?= $kh->time?> min</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap mt-30">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Tiếp</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-area-end -->

        </main>
        <!-- main-area-end -->

<?php 
    require_once 'views/require/front-end/footer.php';
 ?>