<?php 
	require_once 'models/Category.php';
	class CategoryController {
		var $model;
		function __construct()
		{
			$this->model = new Category();
		}

		function list(){
			$categories = $this->model->all();
			require_once 'views/category/list.php';
		}
		function detail(){

			//Lấy id:
			$id = $_GET['id'];

			$category = $this->model->find($id);
			// print_r($categories);
			require_once 'views/category/detail.php';
		}
		public function create(){
			$parents = $this->model->parent_id();
			require_once 'views/category/create.php';
		}
		public function store(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug(strtolower($data['name']));
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

			header('location: ?mod=category&act=list');
		}
		public function edit(){

			$id = $_GET['id'];

			$parents = $this->model->parent_id();
			$category = $this->model->find($id);
			require_once 'views/Category/edit.php';

		}
		public function update(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug(strtolower($data['name']));
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

			header('location: ?mod=category&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
	
			header('location: ?mod=category&act=list');
		}
		

	}



 ?>