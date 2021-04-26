<?php 
	require_once 'BaseController.php';
	class AdminController extends BaseController
	{
		public function __construct(){
			parent::__construct();
		}
		public function admin()
		{
			$this->view('views/admin/admin',[]);
		}
	}


 ?>