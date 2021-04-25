<?php 
	require_once 'BaseController.php';
	require_once 'models/Movie.php';
	require_once 'models/video.php';
	require_once 'models/Category.php';
	class HomeController extends BaseController{
		var $modelMovie;
		function __construct()
		{
			$this->modelMovie = new Movie();
			
		}
		public function index(){
			// first home
			$threeNew = $this->modelMovie->getThreeNewMovie();
			foreach ($threeNew as $three) {
				$modelVideo = new Video();
				$findSource = $modelVideo->findSource($three->id);
				$three->source = $findSource;

				$cateModel = new Category(); 
                $category = $cateModel->find($three->category_id);
                $three->category_id = $category->name;
	            
			}
			// end first home
			
			// second home
			 $sixMvL = $this->modelMovie->getSixNewMovieL();

			 foreach ($sixMvL as $six) {
			 	$cateModel = new Category(); 
                $category = $cateModel->find($six->category_id);
                $six->category_id = $category->name;
			 } 

			 $sixMvB = $this->modelMovie->getSixNewMovieB();

			 foreach ($sixMvB as $sixB) {
			 	$cateModel = new Category(); 
                $category = $cateModel->find($sixB->category_id);
                $sixB->category_id = $category->name;
			 }
			 // end second home
			
			 // thrid home
			 
			 $topView = $this->modelMovie->getTopView();

			 foreach ($topView as $top) {
			 	$modelVideo = new Video();
				$findSource = $modelVideo->findSource($top->id);
				$top->source = $findSource;

			 	$cateModel = new Category(); 
                $category = $cateModel->find($top->category_id);
                $top->category_id = $category->name;
     //            echo "<pre>";
				 // 	print_r($top->source->source);
				 // echo "</pre>";
			 }

			 // die;
			 // end thrid home

			$this->view('views/home/index',[
				'threeNew'=>$threeNew,
				'sixMvL'=>$sixMvL,
				'sixMvB'=>$sixMvB,
				'topView'=>$topView
			]);
		}

		public function category(){
			$modelVideo = new Video(); 	
			$cateModel = new Category(); 
			// Phim hành động
			$allHd = $this->modelMovie->getAllHd();

			foreach ($allHd as $hd) {
			 	
				$findSource = $modelVideo->findSource($hd->id);
				$hd->source = $findSource;

			
                $category = $cateModel->find($hd->category_id);

                $hd->category_id = $category->name;
			 }

			 // end
			
			// Phim hoạt hình
			$allHh = $this->modelMovie->getAllHh();

			foreach ($allHh as $hh) {
				$findSource = $modelVideo->findSource($hh->id);
				$hh->source = $findSource;

                $category = $cateModel->find($hh->category_id);
                $hh->category_id = $category->name;
			 }

			 // end

			 // Phim cổ trang
			$allCt = $this->modelMovie->getAllCt();

			foreach ($allCt as $ct) {
				$findSource = $modelVideo->findSource($ct->id);
				$ct->source = $findSource;

                $category = $cateModel->find($ct->category_id);
                $ct->category_id = $category->name;
			 }

			 // end
			// Phim tâm lý
			$allTl = $this->modelMovie->getAllTl();

			foreach ($allTl as $tl) {
				$findSource = $modelVideo->findSource($tl->id);
				$tl->source = $findSource;

                $category = $cateModel->find($tl->category_id);
                $tl->category_id = $category->name;
			 }

			 // end

			 // Phim khoa học viễn tưởng
			$allKhvt = $this->modelMovie->getAllKhvt();

			foreach ($allKhvt as $kh) {
				$findSource = $modelVideo->findSource($kh->id);
				$kh->source = $findSource;

                $category = $cateModel->find($kh->category_id);
                $kh->category_id = $category->name;
			 }

			 // end

			// $all = $this->modelMovie->all();

			$this->view('views/home/category',[
				'allHd'=>$allHd,
				'allHh'=>$allHh,
				'allCt'=>$allCt,
				'allTl'=>$allTl,
				'allKhvt'=>$allKhvt

			]);
		}

		public function detail(){
			$cateModel = new Category(); 
			
			$slug = $_GET['slug'];
			$tab = $this->modelMovie->detailMovie($slug);
			foreach ($tab as  $value) {
				$category = $cateModel->find($value->category_id);
            $value->category_id = $category->name;
			}
			$this->view('views/home/detail',[
				'tab' => $tab



			]);
		}

		public function movie(){

			$allMovie = $this->modelMovie->getAllMovie();
			foreach ($allMovie as $all) {
				$modelVideo = new Video();
				$findSource = $modelVideo->findSource($all->id);
				$all->source = $findSource;

				$cateModel = new Category(); 
                $category = $cateModel->find($all->category_id);
                $all->category_id = $category->name;
	            
			}


			$this->view('views/home/movie',[
				'allMovie' => $allMovie

			]);
		}

		public function tvserries(){
			$allTvSerries = $this->modelMovie->getAllTvSerries();
			foreach ($allTvSerries as $all) {
				$modelVideo = new Video();
				$findSource = $modelVideo->findSource($all->id);
				$all->source = $findSource;

				$cateModel = new Category(); 
                $category = $cateModel->find($all->category_id);
                $all->category_id = $category->name;
	            
			}
			$this->view('views/home/tvserries',[
				'allTvSerries' => $allTvSerries

			]);
		}
		public function search(){
			$modelVideo = new Video(); 	
			$data = $_POST;

			$findName = $this->modelMovie->findName($data['search']);

			foreach ($findName as $find) {
				$findSource = $modelVideo->findSource($find->id);
				$find->source = $findSource;
			}
			$this->view('views/home/search',[
				'findName' => $findName
			]);
		}
		public function about(){
			$modelVideo = new Video(); 
			$countMovie = $this->modelMovie->countMovie();

			$fiveMv = $this->modelMovie->getFiveNew();
			foreach ($fiveMv as $mv) {
				$findSource = $modelVideo->findSource($mv->id);
				$mv->source = $findSource;
			}
			$this->view('views/home/about',[
				'countMovie'=> $countMovie,
				'fiveMv'=>$fiveMv


			]);
		}

	}

 ?>
