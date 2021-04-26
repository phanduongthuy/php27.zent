
<?php 
    require_once 'views/require/front-end/header.php';
 ?>

    <!-- main-area -->
    <main>

        <!-- blog-details-area -->
        <section class="blog-details-area blog-bg" data-background="public/front-end/images/blog_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-post-item blog-details-wrap">
                            <div class="blog-post-thumb">
                                <img src="public/front-end/images/blog_thumb01.jpg" alt>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-details-top-meta">
                                    <span class="user"><i class="far fa-user"></i> by <a href="#">Admin</a></span>
                                    <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                </div>
                                <h2 class="title">Your Free Movie Streaming Purposes</h2>
                                <p>Đây là dự án web động đầu tiên của tôi.</p>
                                <blockquote>
                                    <i class="fas fa-quote-right"></i>
                                    <p>Watch Mobflx movies & TV shows online or stream rights to your smart TV, game console, PC, mobile more.</p>
                                    <figure><span>Frenk Smith</span> Founder ceo</figure>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog-sidebar">
                            <div class="widget blog-widget">
                                <div class="widget-title mb-30">
                                    <h5 class="title">Danh mục</h5>
                                </div>
                                <div class="sidebar-cat">
                                    <ul>
                                        <?php foreach ($countMovie as $count) {?>
                                        <li><?= $count->name?> <span><?= $count->count?> </span></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget blog-widget">
                                <div class="widget-title mb-30">
                                    <h5 class="title">Phim mới gần đây</h5>
                                </div>
                                <div class="rc-post">
                                    <ul>
                                        <?php foreach ($fiveMv as $mv) {?>
                                            
                                        
                                        <li class="rc-post-item">
                                            <div class="thumb">
                                                <a href="?admin=client&mod=home&act=detail&slug=<?=$mv->slug?>"><img src="uploads/.<?=$mv->image?>" style="width: 50px; height: 75px;"></a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="blog-details.html"><?=$mv->name?></a></h5>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->
<?php 
    require_once 'views/require/front-end/footer.php';
 ?>