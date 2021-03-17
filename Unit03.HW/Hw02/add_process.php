<?php
	session_start(); 
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	}
	if (isset($_POST['address'])) {
		$address = $_POST['address'];
	}


	$_SESSION['infor'][$id] = [
		'id'=>$id,
		'name'=>$name,
		'phone'=>$phone,
		'email'=>$email,
		'gender'=>$gender,
		'address'=>$address,
	];

	// echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
	setcookie('msg','Thêm mới thành công!', time() + 5 );
	header('location: list.php');




?>