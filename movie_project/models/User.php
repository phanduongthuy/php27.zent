<?php 
	require_once 'Model.php';

	class User extends Model{
		var $table = 'users';
		public function create($data) {
			$sql = "INSERT INTO users(name,birdth,address,email,password,avatar,permission) VALUES ('".$data['name']."','".$data['birdth']."','".$data['address']."','".$data['email']."','".md5($data['password'])."', '".$data['avatar']."','".$data['permission']."')";

			return $this->connection->query($sql);
		}
		public function update($data) {
			if ($_FILES["avatar"]["name"]=='') {
				$sql = "UPDATE users SET name = '".$data['name']."',birdth = '".$data['birdth']."',address = '".$data['address']."',email = '".$data['email']."',permission = '".$data['permission']."' WHERE id = ".$data['id'];
			} else {
				$sql = "UPDATE users SET name = '".$data['name']."',birdth = '".$data['birdth']."',address = '".$data['address']."',email = '".$data['email']."',avatar = '".$data['avatar']."',permission = '".$data['permission']."' WHERE id = ".$data['id'];
			}

			return $this->connection->query($sql);
		}
	}

?>


	

