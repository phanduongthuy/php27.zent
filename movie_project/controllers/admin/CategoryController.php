<?php 
	require_once 'models/Category.php';
	require_once 'BaseController.php';
	class CategoryController extends BaseController{
		var $model;
		function __construct()
		{
			parent::__construct();
			$this->model = new Category();
		}

		function list(){
			$categories = $this->model->all();
			$categoryModel = new Category();
			foreach ($categories as $cate) {
				if ($cate->parent_id != 0) {
					$parent = $categoryModel->find($cate->parent_id);
				$cate->parent = $parent->name;
				}else {
					$cate->parent = '';
				}
				
			}
			
			$this->view('views/category/list',[
				'categories' => $categories
			]);
			
		}
		function detail(){

			//Lấy id:
			$id = $_GET['id'];

			$category = $this->model->find($id);
			// print_r($categories);
			$this->view('views/category/detail',[
				'category' => $category
			]);
		}
		public function create(){
			$parents = $this->model->parent_id();
			$this->view('views/category/create',[
				'parents' => $parents
			]);
		}
		public function store(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug($data['name']);
			//
			//Thực hiện câu lệnh
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công!',time()+5);
			}

			$this->redirect('?admin=admin&mod=category&act=list');
		}
		public function edit(){

			$id = $_GET['id'];

			$parents = $this->model->parent_id();
			$category = $this->model->find($id);
			$this->view('views/category/edit',[
				'parents' => $parents,
				'category' => $category
			]);

		}
		public function update(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug($data['name']);
			//
			//Thực hiện câu lệnh

			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Sửa thành công!',time()+5);
			} else {
				setcookie('error','Sửa không thành công!',time()+5);
			}

			$this->redirect('?admin=admin&mod=category&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
			
			$this->redirect('?admin=admin&mod=category&act=list');
		}
		

	}



 ?>