<?php 
	require_once 'models/User.php';
	require_once 'BaseController.php';
	class UserController extends BaseController{
		var $model;
		public function __construct()
		{	
			parent::__construct();
			$this->model = new User();
		}
		public function list(){
			$users = $this->model->all();
			$this->view('views/user/list', [
				'users' => $users
			]);
		}
		public function detail(){

			$id = $_GET['id'];

			$user = $this->model->find($id);
			$this->view('views/user/detail', [
				'user'=> $user
			]);
		}
		public function create(){
			$this->view('views/user/create',[]);
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

			$this->redirect('?admin=admin&mod=user&act=list');
		}
		public function edit(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			$this->view('views/user/edit',[
				'user' => $user
			]);

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

			$this->redirect('?admin=admin&mod=user&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
	
			$this->redirect('?admin=admin&mod=user&act=list');
		}
		
	}
 ?>