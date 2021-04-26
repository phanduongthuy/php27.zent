
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
                        <h2 class="title">Phim <span>Bộ</span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="?admin=client&mod=home&act=index">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Phim bộ</li>
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
            <div class="row tr-movie-active">
                <?php foreach ($allTvSerries as $movie) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer" style="min-height: 505px;">
                    <div class="movie-item movie-item-three mb-50">
                        <div class="movie-poster">
                            <img src="<?= "uploads/".$movie->image?>" style="width: 310px; height: 350px;">
                            <ul class="overlay-btn">
                                <li><a href="<?= $movie->source->source?>" class="popup-video btn">Xem Ngay</a></li>
                                <li><a href="?admin=client&mod=home&act=detail&slug=<?= $movie->slug?>" class="btn">Chi Tiết</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="?admin=client&mod=home&act=detail&slug=<?= $movie->slug?>"><?= $movie->name?></a></h5>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality"><?php if($movie->quality == 0){echo "SD";}else if($movie->quality == 1){echo "HD";}else if($movie->quality == 2){echo "Full HD";}else{echo "2K";}?></span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> <?= $movie->time?> min</span>
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