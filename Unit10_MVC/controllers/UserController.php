<?php 
	require_once 'models/User.php';
	
	class UserController
	{
		var $model;
		public function __construct()
		{
			$this->model = new User();
		}
		public function list(){
			$users = $this->model->all();
			require_once 'views/user/list.php';
		}
		public function detail(){

			$id = $_GET['id'];

			$user = $this->model->find($id);

			require_once 'views/user/detail.php';
		}
		public function create(){
			require_once 'views/user/create.php';
		}
		public function store(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$target_file = "uploads/" . basename($_FILES["avatar"]["name"]);
		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
			
			$data['avatar'] = "/".$_FILES["avatar"]["name"];

			//
			//Thực hiện câu lệnh
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công!',time()+5);
			}

			header('location: ?mod=user&act=list');
		}
		public function edit(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require_once 'views/user/edit.php';

		}
		public function update(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$target_file = "uploads/" . basename($_FILES["avatar"]["name"]);
		    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
			
			$data['avatar'] = "/".$_FILES["avatar"]["name"];
			//
			//Thực hiện câu lệnh

			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Sửa thành công!',time()+5);
			} else {
				setcookie('error','Sửa không thành công!',time()+5);
			}

			header('location: ?mod=user&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
	
			header('location: ?mod=user&act=list');
		}
		
	}
 ?>