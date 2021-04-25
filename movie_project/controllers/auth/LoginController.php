<?php 
	require_once 'BaseAuthController.php';
	require_once 'models/User.php';
	class LoginController extends BaseAuthController{
		
		 public function loginForm() {
		 	// var_dump($_SESSION) ;
		 	if (!empty($_SESSION['auth'])) {
		 		return $this->redirect('?admin=admin&mod=admin&act=admin');
		 	}
			$this->view('views/auth/login',[]);
		}
		public function login()
		{
			$data = $_POST;
			$modelUser = new User();

			$users = $modelUser->all();
			// var_dump($users);
			// die;
			foreach ($users as $user) {
				var_dump($user->email == $data['email'] && $user->password == md5($data['password']));
				if ($user->email == $data['email'] && $user->password == md5($data['password'])) {
					$_SESSION['auth'] = $user;
					return $this->redirect('?admin=admin&mod=admin&act=admin');

				}
			}

			return $this->back();

		}
	}

 ?>