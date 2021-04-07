<?php 

	// Lớp bài viết
	class posts {
		var $title;
		var $slug;
		var $description;
		var $content;

		function show_post($title, $slug, $description, $content) {
			echo "<h3>Thông tin bài viết:</h3>";
			echo "Tiêu đề: " .$this->title = $title;
			echo "<br>Đường dẫn: ".$this->slug = $slug;
			echo "<br>Mô tả: ".$this->description = $description;
			echo "<br>Nội dung: ".$this->content = $content;
		}
		
		
	}

	//Lớp danh mục
	 
	 class cagetory { 
	 	var $name;
	 	var $slug;
	 	var $parent_id;
	 	var $thumbnail;
	 	var $description;
	 	
	 	function show_category($name, $slug, $parent_id, $thumbnail, $description) {
			echo "<h3>Thông tin danh mục:</h3>";
			echo "Tên danh mục: " .$this->name = $name;
			echo "<br>Đường dẫn: ".$this->slug = $slug;
			echo "<br>Danh mục cha: ".$this->parent_id = $parent_id;
			echo "<br>Ảnh hiển thị: ".$this->thumbnail = $thumbnail;
			echo "<br>Mô tả: ".$this->description = $description;
		}
	 }


	 //Lớp người dùng
	
	
	class users {
		var $name;
		var $email;
		var $password;
		var $avatar;
		function show_user($name, $email, $password, $avatar) {
			echo "<h3>Thông tin người dùng:</h3>";
			echo "Tên người dùng: " .$this->name = $name;
			echo "<br>Email: ".$this->email = $email;
			echo "<br>Mật khẩu: ".$this->password = $password;
			echo "<br>Ảnh đại diện: ".$this->avatar = $avatar;
		}
	}
	function create_slug($str){
	
		$unicode = array(
			
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			
			'd'=>'đ',
			
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			
			'i'=>'í|ì|ỉ|ĩ|ị',
			
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			
			'D'=>'Đ',
			
			'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			
			'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			
			'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			
			'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			
			'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			
		);
		
		foreach($unicode as $nonUnicode=>$uni){
			
			$str = preg_replace("/($uni)/i", $nonUnicode, $str);
			
		}
		$str = str_replace(' ','-',$str);
		
		return $str;
		
	}


	$posts_1 = new posts();
	$posts_1->title = 'Sự kiện ra mắt iphone 13';
	$posts_1->slug = create_slug(strtolower($posts_1->title));
	$posts_1->description = 'Không phụ lòng mong đợi siêu phẩm của iFan, Apple đã có lịch trình làng 1 siêu phẩm mới ....';
	$posts_1->content = 'iphone 13 được thiết kế tràn viên vuông cạnh không khác gì với iphone 12 nhưng điểm khác về ngoại hình ở chỗ thiết bị "Táo" thứ 13 này không có cổng sạc lightning...';
 	$posts_1->show_post($posts_1->title, $posts_1->slug, $posts_1->description, $posts_1->content);

	$cagetory_1 = new cagetory();
	$cagetory_1->name = 'Tin trong nước';
	$cagetory_1->slug = create_slug(strtolower($cagetory_1->name));
	$cagetory_1->parent_id = '1';
	$cagetory_1->thumbnail = 'img.jpg';
	$cagetory_1->description = 'Chuyên mục Thời sự - '.$cagetory_1->name;
	$cagetory_1->show_category($cagetory_1->name, $cagetory_1->slug, $cagetory_1->parent_id, $cagetory_1->thumbnail, $cagetory_1->description);

	$user_1 = new users();
	$user_1->name = 'Phan Dương Thùy';
	$user_1->email = 'thuypd.hubt@gmail.com';
	$user_1->password = md5('112001');
	$user_1->avatar = 'avt.jpg';
	$user_1->show_user($user_1->name, $user_1->email, $user_1->password, $user_1->avatar);

 ?>