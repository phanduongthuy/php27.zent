<?php 
	require_once 'models/Category.php';
	require_once 'models/Post.php';
	
	class PostController
	{
		var $model;
		function __construct()
		{
			$this->model = new Post();
			
		}
		function list(){
			$posts = $this->model->all();
			require_once 'views/post/list.php';
		}
		function detail(){

			$id = $_GET['id'];

			$post = $this->model->find($id);

			require_once 'views/post/detail.php';
		}
		public function create(){
			$cate_model = new Category();
			$categories = $cate_model->all();
			// print_r($categories);
			require_once 'views/post/create.php';
		}
		public function store(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug(strtolower($data['title']));
			$target_file = "uploads/" . basename($_FILES["thumbnail"]["name"]);
		    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
			
			$data['thumbnail'] = "/".$_FILES["thumbnail"]["name"];
			//
			//Thực hiện câu lệnh
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công!',time()+5);
			}

			header('location: ?mod=post&act=list');
		}
		public function edit(){

			$id = $_GET['id'];
			
			$cate_model = new Category();

			$categories = $cate_model->all();

			$post = $this->model->find($id);
			require_once 'views/post/edit.php';

		}
		public function update(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug(strtolower($data['title']));
			$target_file = "uploads/" . basename($_FILES["thumbnail"]["name"]);
		    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
			
			$data['thumbnail'] = "/".$_FILES["thumbnail"]["name"];
			//
			//Thực hiện câu lệnh

			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Sửa thành công!',time()+5);
			} else {
				setcookie('error','Sửa không thành công!',time()+5);
			}

			header('location: ?mod=post&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
	
			header('location: ?mod=post&act=list');
		}
		
	}
 ?>