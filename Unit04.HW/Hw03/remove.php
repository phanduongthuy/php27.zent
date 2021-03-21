<?php 
	session_start();
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		unset($_SESSION[$name]);
	}

	setcookie('msg', 'Xóa thành công!', time() +5);
	header('location: index.php');
 ?>