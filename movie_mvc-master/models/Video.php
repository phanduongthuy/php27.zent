<?php 
	require_once 'Model.php';

	class Video extends Model{
		var $table = 'videos';
		
		public function create($data) {
			$sql = "INSERT INTO videos(name,movie_id,description,source,user_id) VALUES ('".$data['name']."','".$data['movie_id']."','".$data['description']."','".$data['source']."','".$_SESSION['auth']->id."')";

			return $this->connection->query($sql);
		}
		public function update($data) {
			$sql = "UPDATE videos SET name = '".$data['name']."',movie_id = '".$data['movie_id']."',description = '".$data['description']."',source = '".$data['source']."',user_id = '".$_SESSION['auth']->id."' WHERE id = ".$data['id'];
			return $this->connection->query($sql);
		}

		public function findSource($data){
			$sql = "SELECT * FROM " .$this->table. " WHERE movie_id = ".$data;
			return $this->connection->query($sql)->fetch_object();

		}
		
	}

?>