<!doctype html>
<html class="no-js" lang>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PT-flix</title>
        <meta name="description" content>
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="public/front-end/images/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="public/front-end/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/front-end/css/animate.min.css">
        <link rel="stylesheet" href="public/front-end/css/magnific-popup.css">
        <link rel="stylesheet" href="public/front-end/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="public/front-end/css/owl.carousel.min.css">
        <link rel="stylesheet" href="public/front-end/css/flaticon.css">
        <link rel="stylesheet" href="public/front-end/css/odometer.css">
        <link rel="stylesheet" href="public/front-end/css/aos.css">
        <link rel="stylesheet" href="public/front-end/css/slick.css">
        <link rel="stylesheet" href="public/front-end/css/default.css">
        <link rel="stylesheet" href="public/front-end/css/style.css">
        <link rel="stylesheet" href="public/front-end/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="public/front-end/fonts/preloader.svg" alt>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-two">
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="public/front-end/images/mylogo.png" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="?admin=client&mod=home&act=index">Trang chủ</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="?admin=client&mod=home&act=category">Danh mục</a></li>
                                            <li class="menu-item-has-children"><a href="?admin=client&mod=home&act=movie">Phim Lẻ</a></li>
                                            <li class="menu-item-has-children"><a href="?admin=client&mod=home&act=tvserries">Phim Bộ</a></li>
                                            </li>
                                            <li><a href="?admin=client&mod=home&act=about">Giới thiệu</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="d-none d-xl-block">
                                                <div class="footer-search">
                                                    <form action="?admin=client&mod=home&act=search" method="POST"> 
                                                        <input type="text" placeholder="Tìm kiếm phim bạn yêu thích" name="search">
                                                        <button><i class="fas fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="header-lang">
                                                <form action="#">
                                                    <div class="icon"><i class="flaticon-globe"></i></div>
                                                    <select id="lang-dropdown">
                                                        <option value>En</option>
                                                        <option value>Au</option>
                                                        <option value>AR</option>
                                                        <option value>TU</option>
                                                    </select>
                                                </form>
                                            </li>
                                            <li class="header-btn"><a href="?admin=auth&mod=login&act=loginForm" class="btn">ĐĂng nhập</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->