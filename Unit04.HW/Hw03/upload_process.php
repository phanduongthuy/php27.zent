<?php
	session_start(); 
	// session_destroy();

	$name = $_POST['name'];

	// echo "<pre>";
	// 	print_r($_FILES['file_name']['tmp_name']);
	// echo "</pre>";
	
	$download = $_FILES["file_name"]["name"];

	$target_file = "uploads/" . basename($_FILES["file_name"]["name"]);
	move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_file);

	$_SESSION[$name] = array(
	 	'name' => $name,
	 	'file_name'=> $_FILES["file_name"]["tmp_name"],
	 	'download'=>$download,
	 );
	
	//  echo "<pre>";
	// 	print_r($_SESSION);
	// echo "</pre>";
	setcookie('msg','Thêm mới thành công!', time() + 5 );
	header('location: index.php');




?>