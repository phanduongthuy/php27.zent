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
			// print_r($categories);
			require_once 'views/category/list.php';
		}
		function detail(){

			//Lấy id:
			$id = $_GET['id'];

			$category = $this->model->find($id);
			// print_r($categories);
			require_once 'views/category/detail.php';
		}
		function add(){
			echo "<br>form them moi category";
		}
		function add_process(){
			echo "<br>process them moi category";
		}
		function edit(){
			echo "<br> Form sua category";
		}
		function edit_process(){
			echo "<br> process sua category";
		}
		function delete(){
			echo "<br> Delete category";
		}
		

	}



 ?>