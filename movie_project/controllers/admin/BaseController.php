<?php 
	class BaseController{
		function __construct(){
			if (empty($_SESSION['auth'])) {
				return $this->redirect('?admin=auth&mod=login&act=loginForm');
			}
		}
		public function view($name, $data = []){
			extract($data);
			require_once $name.'.php';
		}

		public function redirect($path){
			header("Location: $path");
		}

		public function back(){
			return $this->redirect($_SERVER['HTTP_REFERER']);
		}
	}


 ?>