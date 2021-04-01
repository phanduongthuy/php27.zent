<?php 
	require_once 'connection.php';

	$data = $_POST; 
	// echo "<pre>";
	// 	print_r($data);
	// echo "</pre>";

	$target_file = "uploads/" . basename($_FILES["avatar"]["name"]);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
	
	$data['avat'] = "/".$_FILES["avatar"]["name"];
	// echo $data['avat'];
	//Cau lenh truy van
	
	$query = "UPDATE users SET name = '".$data['name']."',email = '".$data['email']."',avatar = '".$data['avat']."',created_at='".$data['created_at']."' WHERE id = ".$data['id'];
	// echo $query;
	//Thuc thi cau lenh
	
 	$result = $conn->query($query);

 	if ($result == true) {
 		setcookie('msg', 'Cập nhật thành công!', time() + 5);
 		header('location: users.php');
 	}else {
 		setcookie('msg', 'Cập nhật không thành công!', time() + 5);
 		header('location: user_edit.php');
 	}

 ?>