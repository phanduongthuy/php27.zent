<?php 
	require_once 'Model.php';

	class Post extends Model{
		var $table = 'posts';
		
		public function create($data) {
			$sql = "INSERT INTO posts(title,description,thumbnail,content,slug,category_id,created_at) VALUES ('".$data['title']."','".$data['description']."','".$data['thumbnail']."','".$data['content']."','".$data['slug']."','".$data['category_id']."')";

			return $this->connection->query($sql);
		}
		public function update($data) {
			if ($_FILES["thumbnail"]["name"]=='') {
				$sql = "UPDATE posts SET title = '".$data['title']."',description = '".$data['description']."',content = '".$data['content']."',slug = '".$data['slug']."',category_id = '".$data['category_id']."' WHERE id = ".$data['id'];
			}else {
				$sql = "UPDATE posts SET title = '".$data['title']."',description = '".$data['description']."',thumbnail = '".$data['thumbnail']."',content = '".$data['content']."',slug = '".$data['slug']."',category_id = '".$data['category_id']."' WHERE id = ".$data['id'];

			}

			return $this->connection->query($sql);
		}
		
	}

?>