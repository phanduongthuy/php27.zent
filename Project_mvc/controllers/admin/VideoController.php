<?php 
	require_once 'models/Movie.php';
	require_once 'models/Video.php';
	require_once 'models/User.php';
	require_once 'BaseController.php';
	
	class VideoController extends BaseController{
		var $model;
		function __construct()
		{
			parent::__construct();
			$this->model = new Video();
			
		}
		function list(){
			$videos = $this->model->all();
			foreach ($videos as $video) {
	            $userModel = new User();
	            $user = $userModel->find($video->user_id);
	            $video->user_id = $user->name;
				$movieModel = new Movie();
	            if (!empty($video->movie_id)) {
	                $movie = $movieModel->find($video->movie_id);
	                $video->movie_id = $movie->name;
	            } else {
	                $video->movie_id = "Không có thuộc vào phim nào!";
	            }
	        }
			$this->view('views/video/list',[
				'videos'=>$videos
			]);
		}
		function detail(){

			$id = $_GET['id'];

			$video = $this->model->find($id);
			$this->view('views/video/detail',[
				'video'=>$video
			]);
		}
		public function create(){
			$movie_model = new Movie();
			$movies = $movie_model->all();
			
			$this->view('views/video/create',[
				'movie_model'=> $movie_model,
				'movies'=> $movies
			]);
		}
		public function store(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			//
			//Thực hiện câu lệnh
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới không thành công!',time()+5);
			}

			$this->redirect('?admin=admin&mod=video&act=list');
		}
		public function edit(){

			$id = $_GET['id'];
			
			$movie_model = new Movie();

			$movies = $movie_model->all();

			$video = $this->model->find($id);

			$this->view('views/video/edit',[
				'movie_model' =>$movie_model,
				'movies'=> $movies,
				'video'=> $video
			]);

		}
		public function update(){
			//Lấy dữ liệu qua phương thức POST
			$data = $_POST;
			//Tiền xử lý dữ liệu
			//
			//Thực hiện câu lệnh

			$success = $this->model->update($data);
			if ($success) {
				setcookie('success','Sửa thành công!',time()+5);
			} else {
				setcookie('error','Sửa không thành công!',time()+5);
			}

			$this->redirect('?admin=admin&mod=video&act=list');
		}
		public function destroy(){
			$id = $_GET['id'];

			$success = $this->model->delete($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa không thành công!',time()+5);
			}
	
			$this->redirect('?admin=admin&mod=video&act=list');
		}
		
	}
 ?>