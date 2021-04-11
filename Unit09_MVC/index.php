<?php 
	$mod = ''; //modules category, post, user
	$act = ''; //list, add, edit

	$mod = (isset($_GET['mod'])?$_GET['mod']:'home');
	$act = (isset($_GET['act'])?$_GET['act']:'error');

	switch ($mod) {
		case 'category':
			require_once 'controllers/CategoryController.php';
			$category = new CategoryController();
			switch ($act) {
				case 'list':
					$category->list();
					break;
				case 'detail':
					$category->detail();
					break;
				case 'add':
					$category->add();
					break;
				case 'edit':
					$category->edit();
					break;
				case 'delete':
					$category->delete();
					break;
				default:
					# code...
					break;
			}
			break;
		case 'post':
			require_once 'controllers/PostController.php';
			$post = new PostController();
			switch ($act) {
				case 'list':
					$post->list();
					break;
				case 'detail':
					$post->detail();
					break;
				case 'add':
					echo "form post";
					break;
				case 'edit':
					echo "form edit post";
					break;
				case 'delete':
					echo "Delete post";
					break;
				default:
					# code...
					break;
			}
			break;
		case 'user':
			require_once 'controllers/UserController.php';
			$user = new UserController();
			switch ($act) {
				case 'list':
					$user->list();
					break;
				case 'detail':
					$user->detail();
					break;
				case 'add':
					echo "form user";
					break;
				case 'edit':
					echo "form edit user";
					break;
				case 'delete':
					echo "Delete user";
					break;
				default:
					# code...
					break;
			}
			break;
		default:
			echo "Home";
			break;
	}

 ?>