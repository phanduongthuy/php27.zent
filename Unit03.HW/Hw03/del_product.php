<?php 
	session_start();

	$maSP = $_GET['maSP'];

	if (isset($_SESSION['cart'][$maSP])) {  
		
		unset($_SESSION['cart'][$maSP]); //

	}

	
	header('location: cart.php');  //Trở lại giỏ hàng


 ?>