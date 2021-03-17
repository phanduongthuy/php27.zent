<?php 
	$id = '';
	$name = '';
	$phone = '';
	$email = '';
	$gender = '';
	$address = '';
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
?>
	<center>
		<legend style=" margin: 30px auto;"><h2>ZENTGROUP-PHP-Thực hành về gửi dữ liệu dùng POST</h2></legend>
		<hr width="70%" align="center">
		<h3>Thông tin sinh viên</h3>
	</center>
	
<?php 
	// print_r($_POST);
	echo "<ul>";
		echo "<li>";
			echo "<b>Mã sinh viên: </b>".$id;
		echo "</li>";
		echo "<li>";
			echo "<b>Họ và tên: </b>".$name;
		echo "</li>";
		echo "<li>";
			echo "<b>Số điện thoại: </b>".$phone;
		echo "</li>";
		echo "<li>";
			echo "<b>Email: </b>".$email;
		echo "</li>";
		echo "<li>";
			echo "<b>Giới tính: </b>".$gender;
		echo "</li>";
		echo "<li>";
			echo "<b>Địa chỉ: </b>".$address;
		echo "</li>";
	echo "</ul>";


 ?>