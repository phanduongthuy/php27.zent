<?php 
	session_start();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		unset($_SESSION['infor'][$id]);
	}

	setcookie('msg', 'Xóa thành công!', time() +5);
	header('location: list.php');
 ?>