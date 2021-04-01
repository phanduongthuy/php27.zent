 <?php 
 	require_once 'connection.php';
 	$data = $_POST;

 	$target_file = "uploads/" . basename($_FILES["avatar"]["name"]);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
	
	$data['avat'] = "/".$_FILES["avatar"]["name"];

	$query = "INSERT INTO users(name,email,password,avatar,created_at) VALUES ('".$data['name']."','".$data['email']."','".md5($data['pass'])."', '".$data['avat']."', '".$data['created_at']."')";
	// echo $query;
	//Thuc thi cau lenh
	
	$result = $conn->query($query);
	if ($result == true) {
 		setcookie('msg', 'Thêm mới thành công!', time() + 5);
 		header('location: users.php');
 	}else {
 		setcookie('msg', 'Thêm mới không thành công!', time() + 5);
 		header('location: user_add.php');
 	}
  ?>