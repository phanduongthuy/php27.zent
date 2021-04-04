<?php 
	require_once 'connection.php';
	require_once 'create_slug.php';
	$data = $_POST; 
	 // echo "<pre>";
  //       print_r($data);
  //   echo "</pre>";
	$target_file = "uploads/" . basename($_FILES["thumbnail"]["name"]);
    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
	
	$data['thumb'] = "/".$_FILES["thumbnail"]["name"];

	//Create slug
	
	$data['slug'] = create_slug(strtolower($data['title']));

	if ($_FILES["thumbnail"]["name"]=='') {
		$query = "UPDATE posts SET title = '".$data['title']."',description = '".$data['description']."',content = '".$data['content']."',slug = '".$data['slug']."',category_id = '".$data['category_id']."',created_at='".$data['created_at']."' WHERE id = ".$data['id'];
	}else {
		$query = "UPDATE posts SET title = '".$data['title']."',description = '".$data['description']."',thumbnail = '".$data['thumb']."',content = '".$data['content']."',slug = '".$data['slug']."',category_id = '".$data['category_id']."',created_at='".$data['created_at']."' WHERE id = ".$data['id'];

	}
	
	
	// echo $query;
	//Thuc thi cau lenh
	
 	$result = $conn->query($query);
 	// die;
 	if ($result == true) {
 		setcookie('msg', 'Cập nhật thành công!', time() + 5);
 		header('location: posts.php');
 	}else {
 		setcookie('msg', 'Cập nhật không thành công!', time() + 5);
 		header('location: post_edit.php');
 	}

 ?>