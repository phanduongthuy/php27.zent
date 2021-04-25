<?php 
	require_once 'BaseController.php';
	require_once 'models/Category.php';
	require_once 'models/Movie.php';
	require_once 'models/User.php';
	require_once 'public/slug.php';
	
	class MovieController extends BaseController{
		public $model;
		function __construct()
		{
			parent::__construct();
			$this->model = new Movie();
			
		}
		public function list(){	
			$movies = $this->model->all();

			foreach ($movies as $movie) {
	            $userModel = new User();
	            $user = $userModel->find($movie->user_id);
	            $movie->user_id = $user->name;
				$cateModel = new Category();
				$category = $cateModel->find($movie->category_id);
                $movie->category_id = $category->name;
	        }
			$this->view('views/movie/list',[
				'movies'=>$movies
			]);

	        
	    }
			
		function detail(){

			$id = $_GET['id'];

			$movie = $this->model->find($id);
			$this->view('views/movie/detail',[
				'movie'=> $movie
			]);
		}
		public function create(){
			$cate_model = new Category();
			$categories = $cate_model->all();

			$this->view('views/movie/create',[
				'categories'=> $categories
			]);
		}
		public function store(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug($data['name']);
			$target_file = "uploads/" . basename($_FILES["image"]["name"]);
		    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			
			$data['image'] = "/".$_FILES["image"]["name"];
			//
			//Thực hiện câu lệnh
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công!',time()+5);
			}

			$this->redirect('?admin=admin&mod=movie&act=list');
		}
		public function edit(){

			$id = $_GET['id'];
			
			$cate_model = new Category();

			$categories = $cate_model->all();

			$movie = $this->model->find($id);
			$this->view('views/movie/edit', [
				'cate_model'=>$cate_model,
				'categories' => $categories,
				'movie' => $movie
			]);

		}
		public function update(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			$data['slug'] = create_slug($data['name']);
			$target_file = "uploads/" . basename($_FILES["image"]["name"]);
		    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			
			$data['image'] = "/".$_FILES["image"]["name"];
			//
			//Thực hiện câu lệnh

			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Sửa thành công!',time()+5);
			} else {
				setcookie('error','Sửa không thành công!',time()+5);
			}

			$this->redirect('?admin=admin&mod=movie&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
	
			$this->redirect('?admin=admin&mod=movie&act=list');
		}

		
	}
 ?>