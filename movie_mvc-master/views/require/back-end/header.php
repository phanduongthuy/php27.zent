<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin-movie</title>

  <!-- Favicons -->
  <link href="public/back-end/img/zoom.png" rel="icon">
  <link href="public/back-end/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="public/back-end/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="public/back-end/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="public/back-end/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="public/back-end/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="public/back-end/css/style.css" rel="stylesheet">
  <link href="public/back-end/css/style-responsive.css" rel="stylesheet">
  <script src="public/back-end/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>PT-<span>flix</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme"></span>
              </a>
            
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"></span>
              </a>
            
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"></span>
              </a>
            
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="?admin=auth&mod=logout&act=logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>  
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="?admin=admin&mod=user&act=detail&id=<?= $_SESSION['auth']->id ?>"><img src="<?= "uploads/".$_SESSION['auth']->avatar ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?= $_SESSION['auth']->name ?></h5>
          <li class="mt">
            <a class="active" href="?admin=admin&mod=admin&act=admin">
              <i class="fa fa-dashboard"></i>
              <span>Trang chủ</span>
              </a>
          </li> 
          <hr class="sidebar-divider" width="80%">
          <li class="sub-menu">
            <div class="sidebar-heading"><i>Nhân sự</i></div>
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Quản lý người dùng</span>
              </a>
            <ul class="sub">
              <li><a href="?admin=admin&mod=user&act=list"><i class="fa fa-list"></i> Xem danh sách</a></li>
              <li><a href="?admin=admin&mod=user&act=create"><i class="fa fa-plus"></i> Tạo mới</a></li>
            </ul>
          </li>
         <hr class="sidebar-divider" width="80%">
          <li class="sub-menu">
             <div class="sidebar-heading"><i>Tài nguyên</i></div>
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Quản lý danh mục</span>
              </a>
            <ul class="sub">
              <li><a href="?admin=admin&mod=category&act=list"><i class="fa fa-list"></i> Xem danh sách</a></li>
              <li><a href="?admin=admin&mod=category&act=create"><i class="fa fa-plus"></i> Tạo mới</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-film"></i>
              <span>Quản lý phim</span>
              </a>
            <ul class="sub">
              <li><a href="?admin=admin&mod=movie&act=list"><i class="fa fa-list"></i> Xem danh sách</a></li>
              <li><a href="?admin=admin&mod=movie&act=create"><i class="fa fa-plus"></i> Tạo mới</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-video-camera"></i>
              <span>Quản lý nguồn video</span>
              </a>
            <ul class="sub">
              <li><a href="?admin=admin&mod=video&act=list"><i class="fa fa-list"></i> Xem danh sách</a></li>
              <li><a href="?admin=admin&mod=video&act=create"><i class="fa fa-plus"></i> Tạo mới</a></li>
            </ul>
          </li>
          <hr class="sidebar-divider" width="80%">
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->