<?php 
	require_once 'models/Post.php';
	
	class PostController
	{
		var $model;
		function __construct()
		{
			$this->model = new Post();
		}
		function list(){
			$posts = $this->model->all();
			require_once 'views/post/list.php';
		}
		function detail(){

			$id = $_GET['id'];

			$post = $this->model->find($id);

			require_once 'views/post/detail.php';
		}
		function add(){
			
		}
		function add_process(){
			
		}
		function edit(){
			
		}
		function edit_process(){
			
		}
		function delete(){
			
		}
	}
 ?>