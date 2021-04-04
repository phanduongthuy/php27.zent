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


	$query = "INSERT INTO posts(title,description,thumbnail,content,slug,category_id,created_at) VALUES ('".$data['title']."','".$data['description']."','".$data['thumb']."','".$data['content']."','".$data['slug']."','".$data['category_id']."', '".$data['created_at']."')";

	
	// echo $query;
	//Thuc thi cau lenh
	
 	$result = $conn->query($query);
 	if ($result == true) {
 		setcookie('msg', 'Thêm mới thành công!', time() + 5);
 		header('location: posts.php');
 	}else {
 		setcookie('msg', 'Thêm mới không thành công!', time() + 5);
 		header('location: post_add.php');
 	}

 ?>