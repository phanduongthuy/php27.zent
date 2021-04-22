
<?php 
require_once 'views/require/front-end/header.php';
?>
<!-- main-area -->
<main>

    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="public/front-end/images/movie_details_bg.jpg">
        <div class="container">
<?php foreach ($tab as $key => $value) {
    if ($key == 0){ echo '
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img src="uploads/'.$value->image.'" style="width: 320px; height: 370px;">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h3>
                           
                                '.$value->name.'
                            
                        </h3>
                        <div class="banner-meta">
                            <ul>
                                <li class="category">
                                    <a >'.$value->category_id.'</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-eye"></i> '.$value->view_count.' </span>
                                    <span><i class="far fa-clock"></i> '.$value->time.' min</span>
                                </li>
                            </ul>
                        </div>
                        <p>'.$value->description.'</p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <li class="streaming">
                                    <h6>Prime Video</h6>
                                    <span>Streaming Channels</span>
                                </li>
                                <li class="watch"><a href="'. $value->source.'" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="movie-details-btn">
                    <a href="uploads/'.$value->image.'" class="download-btn" download>Download <img src="fonts/download.svg" alt></a>
                </div>
            </div>
            ';}} ?>
        </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- episode-area -->

            <section class="episode-area episode-bg" data-background="public/front-end/images/episode_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">ONLINE FILM</span>

                                        <h2 class="title">Xem Full Tại Đây</h2>
                                    </div>
                                 
                                    <div class="total-views-count">
                                        <p><?=$value->view_count ?><i class="far fa-eye"></i></p>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="video-count">Các video khác</span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>

                                                 <?php foreach ($tab as $value) { ?>
                                                
                                                <li><a href="<?= $value->source?>" class="popup-video"><i class="fas fa-play"></i> <?= $value->tentap?></a> <span class="duration"><i class="far fa-clock"></i> <?=$value->time ?> Min</span></li>
                                                <?php } ?>
                                                </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        <div class="col-lg-4">
            <div class="episode-img">
                <img src="images/episode_img.jpg" alt>
            </div>
        </div>
    </div>
</div>
</section>
<!-- episode-area-end -->

</main>
<!-- main-area-end -->

<?php 
require_once 'views/require/front-end/footer.php';
?>