<?php 
	session_start();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}

	if (isset($_SESSION['infor'])) {
		$data = $_SESSION['infor'][$id];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<center>
			<legend style=" margin: 30px auto;"><h2>ZENTGROUP - PHP - SESSION</h2></legend>
			<h3>Thông tin sinh viên</h3>
		</center>
		<ul>
			<li>
				<span>Mã sinh viên: </span>
				<?php 
				    echo $data['id'];
				 ?>
			</li>
			<li>
				<span>Họ và tên: </span>
				<?php 
				    echo $data['name'];
				 ?>
			</li>
			<li>
				<span>Số điện thoại: </span>
				<?php 
				    echo $data['phone'];
				 ?>
			</li>
			<li>
				<span>Email: </span>
				<?php 
				    echo $data['email'];
				 ?>
			</li>
			<li>
				<span>Giới tính: </span>
				<?php 
				    echo $data['gender'];
				 ?>
			</li>
			<li>
				<span>Địa chỉ: </span>
				<?php 
				    echo $data['address'];
				 ?>
			</li>
		</ul>
	</div>
</body>
</html>