<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="favicon.ico">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="public/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="public/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>

  <div class="limiter">
    <div class="container-login100" style="background-image: url(&#x27;public/login/images/bg-01.jpg&#x27;);">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Account Login
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" action="?admin=auth&mod=login&act=login" method="POST">

          <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="email" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="public/login/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="public/login/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="public/login/js/popper.js"></script>
  <script src="public/login/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="public/login/js/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="public/login/js/moment.min.js"></script>
  <script src="public/login/js/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="public/login/js/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="public/login/js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="js_1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
</body>
</html>
