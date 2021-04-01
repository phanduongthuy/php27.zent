<?php 
	require_once 'connection.php';
	require_once 'create_slug.php';
	$data = $_POST; 

	$target_file = "uploads/" . basename($_FILES["thumb"]["name"]);
    move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file);
	
	$data['thumb'] = "/".$_FILES["thumb"]["name"];

	//Create slug
	
	$data['slug'] = create_slug($data['name']);

	//Create description
	$query = "SELECT name FROM categories WHERE id =". $data['parent_id'];
	
	// echo $query;
	
	$result = $conn->query($query);
	 
	 // Tạo 1 biến để chứa dữ liệu
    
    $parent_id =  $result->fetch_assoc();
    
	//Cau lenh truy van
	if ($data['parent_id']==0) {
		$data['description'] = "Chuyên mục " .$data['name'];

		$query = "UPDATE categories SET name = '".$data['name']."',parent_id = null ,thumbnail = '".$data['thumb']."',slug = '".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id = ".$data['id'];
		// $query = "INSERT INTO categories(name,parent_id,thumbnail,slug,description,created_at) VALUES ('".$data['name']."',null,'".$data['thumb']."','".$data['slug']."', '".$data['description']."', '".$data['created_at']."')";
	} else {
		$data['description'] = "Chuyên mục ". strtolower($parent_id['name']) . " - " .$data['name'];
		$query = "UPDATE categories SET name = '".$data['name']."',parent_id = '".$data['parent_id']."' ,thumbnail = '".$data['thumb']."',slug = '".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id = ".$data['id'];
		// $query = "INSERT INTO categories(name,parent_id,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$data['category']."','".$data['thumb']."','".$data['slug']."', '".$data['description']."', '".$data['created_at']."')";
	}
	

	//Thuc thi cau lenh
	
 	$result = $conn->query($query);

 	if ($result == true) {
 		setcookie('msg', 'Cập nhật thành công!', time() + 5);
 		header('location: categories.php');
 	}else {
 		setcookie('msg', 'Cập nhật không thành công!', time() + 5);
 		header('location: category_add.php');
 	}

 ?>