<?php 
	require_once 'products.php';
	session_start();

	$maSP = $_GET['maSP'];


	//Kiểm tra xem sản phẩm có key $maSP giỏ hàng có số lượng là bào nhiêu?
	if (isset($_SESSION['cart'][$maSP])) {
		$_SESSION['cart'][$maSP]['soLuong'] +=1;//Nếu đã tồn tại thì chỉ tăng số lượng lên 1
	} else {
		$product = $product[$maSP];

		$product['soLuong'] = 1;//Nếu chưa tồn tại sản phẩm nào có key maSP thì số lượng =1

		$_SESSION['cart'][$maSP] = $product;
	}

	header('location: cart.php');
 ?>