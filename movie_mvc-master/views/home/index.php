
<?php 
    require_once 'views/require/front-end/header.php';
 ?>
  <!-- main-area -->
  <main>

    <!-- slider-area -->
    <section class="slider-area slider-bg" data-background="public/front-end/images/s_slider_bg.jpg">
        <div class="slider-active">
            <?php foreach ($threeNew as $three) { ?>   
                <div class="slider-item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-0 order-lg-2">
                                <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="<?= "uploads/".$three->image?>" style="width: 450px; height: 500px; border: 10px solid #E4D804;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s"><?php if ($three->type == 0) {
                                     echo "Phim Lẻ";} else{echo "Phim Bộ";} ?></h6>
                                     <h2 class="title" data-animation="fadeInUp" data-delay=".4s"><?= $three->name?></h2>
                                     <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                        <ul>
                                            <li class="quality">
                                                <span><?php if($three->age == 0){echo "18<sup>-</sup>";}else{echo "18 <sup> +</sup>";}?></span>
                                                <span><?php if($three->quality == 0){echo "SD";}else if($three->quality == 1){echo "HD";}else if($three->quality == 2){echo "Full HD";}else{echo "2K";}?></span>
                                            </li>
                                            <li class="category">
                                                <span><?= $three->category_id?></span>
                                            </li>
                                            <li class="release-time">
                                                <!-- <span><i class="far fa-calendar-alt"></i> 2021</span> -->
                                                <span><i class="far fa-clock"></i> <?= $three->time?> phút</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="<?= $three->source->source?>" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg2" data-background="public/front-end/images/ucm_bg02.jpg">
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title title-style-three text-center text-lg-left">
                        <span class="sub-title">ONLINE FILM</span>
                        <h2 class="title">Phim Mới Phát Hành</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ucm-nav-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="phimLe-tab" data-toggle="tab" href="#phimLe" role="tab" aria-controls="phimLe" aria-selected="true">Phim Lẻ</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="phimBo-tab" data-toggle="tab" href="#phimBo" role="tab" aria-controls="phimBo" aria-selected="false">Phim Bộ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <!-- Phim Lẻ -->
                <div class="tab-pane fade show active" id="phimLe" role="tabpanel" aria-labelledby="phimLe-tab">
                    <div class="ucm-active-two owl-carousel">
                        <?php foreach ($sixMvL as $six) { ?>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="?admin=client&mod=home&act=detail&slug=<?= $six->slug?>"><img src="<?= "uploads/".$six->image?>" style="height: 270px;"></a>
                            </div>
                            <div class="movie-content">
                                <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $six->slug?>"><?= $six->name?></a></h5>
                                <span class="rel"><?= $six->category_id?></span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a><?php if($six->quality == 0){echo "SD";}else if($six->quality == 1){echo "HD";}else if($six->quality == 2){echo "Full HD";}else{echo "2K";}?></a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-eye"></i><?= $six->view_count?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- Phim Bộ  -->
                <div class="tab-pane fade" id="phimBo" role="tabpanel" aria-labelledby="phimBo-tab">
                    <div class="ucm-active-two owl-carousel">
                        <?php foreach ($sixMvB as $sixB) { ?>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="?admin=client&mod=home&act=detail&slug=<?= $sixB->slug?>"><img src="<?= "uploads/".$sixB->image?>" style="height: 270px;"></a>
                            </div>
                            <div class="movie-content">
                                <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $sixB->slug?>"><?= $sixB->name?></a></h5>
                                <span class="rel"><?= $sixB->category_id?></span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a><?php if($sixB->quality == 0){echo "SD";}else if($sixB->quality == 1){echo "HD";}else if($sixB->quality == 2){echo "Full HD";}else{echo "2K";}?></a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-eye"></i><?= $sixB->view_count?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- gallery-area -->
    <div class="gallery-area position-relative">
        <div class="gallery-bg"></div>
        <div class="container-fluid p-0 fix">
            <div class="row gallery-active">
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="public/front-end/images/gallery_01.jpg" alt>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="public/front-end/images/gallery_02.jpg" alt>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="public/front-end/images/gallery_03.jpg" alt>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gallery-item">
                        <img src="public/front-end/images/gallery_04.jpg" alt>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-nav"></div>
    </div>
    <!-- gallery-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg2" data-background="public/front-end/images/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title title-style-three text-center mb-70">
                        <span class="sub-title">top rated movies</span>
                        <h2 class="title">Top Online Shows Watch</h2>
                    </div>
                </div>
            </div>
            <div class="row movie-item-row">
                <?php foreach ($topView as $top) { ?>
                    <div class="custom-col-">
                        <div class="movie-item movie-item-two">
                            <div class="movie-poster">
                                <img src="<?= "uploads/".$top->image?>" style="height: 270px;">
                                <ul class="overlay-btn">
                                    <li><a href="<?= $top->source->source?>" class="popup-video btn">Watch Now</a></li>
                                    <li><a href="?admin=client&mod=home&act=detail&slug=<?= $top->slug?>" class="btn">Details</a></li>
                                </ul>
                            </div>
                            <div class="movie-content">
                                <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $top->slug?>"><?= $top->name?></a></h5>
                                <span class="rel"><?= $top->category_id?></span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a><?php if($top->quality == 0){echo "SD";}else if($top->quality == 1){echo "HD";}else if($top->quality == 2){echo "Full HD";}else{echo "2K";}?></a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-eye"></i><?= $top->view_count?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- top-rated-movie-end -->

</main>
<!-- main-area-end -->
<?php 
    require_once 'views/require/front-end/footer.php';
 ?>