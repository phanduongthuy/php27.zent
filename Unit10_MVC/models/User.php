<?php 
	require_once 'Model.php';

	class User extends Model{
		var $table = 'users';
		public function create($data) {
			$sql = "INSERT INTO users(name,email,password,avatar) VALUES ('".$data['name']."','".$data['email']."','".md5($data['pass'])."', '".$data['avatar']."')";

			return $this->connection->query($sql);
		}
		public function update($data) {
			if ($_FILES["avatar"]["name"]=='') {
				$sql = "UPDATE users SET name = '".$data['name']."',email = '".$data['email']."' WHERE id = ".$data['id'];
			} else {
				$sql = "UPDATE users SET name = '".$data['name']."',email = '".$data['email']."',avatar = '".$data['avatar']."' WHERE id = ".$data['id'];
			}

			return $this->connection->query($sql);
		}
	}

?>


	

