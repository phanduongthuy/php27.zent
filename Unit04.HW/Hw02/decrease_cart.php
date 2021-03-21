<?php 
	session_start();

	$maSP = $_GET['maSP'];
//Kiểm tra xem sản phẩm có key $maSP giỏ hàng có số lượng là bào nhiêu?
//Nếu lớn hơn 1 khi click xóa sp chỉ xóa bớt 1
//Nếu = 1 xsex xóa luôn sản phẩm khỏi giỏ hàng
	if ($_SESSION['cart'][$maSP]['soLuong'] > 1) {  
		$_SESSION['cart'][$maSP]['soLuong'] -= 1;
	} else {
		unset($_SESSION['cart'][$maSP]); //

	}

	
	header('location: cart.php');  //Trở lại giỏ hàng


 ?>