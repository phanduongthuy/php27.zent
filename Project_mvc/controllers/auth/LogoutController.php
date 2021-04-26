<?php 
	require_once 'BaseAuthController.php';
	/**
	 * 
	 */
	class LogoutController extends BaseAuthController
	{
		
		public function logout(){
			unset($_SESSION['auth']);
			return $this->redirect('?admin=auth&mod=login&act=loginForm');
		}
	}

 ?>