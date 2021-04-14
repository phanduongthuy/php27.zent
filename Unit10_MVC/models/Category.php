<?php 
	require_once 'Model.php';
	require_once 'public/slug.php';
	/**
	 * 
	 */
	class Category extends Model{
		
		var $table = 'categories';
		
		public function parent_id(){
			$sql = "SELECT * FROM categories WHERE parent_id is NULL";
			$result = $this->connection->query($sql);

				// Tạo 1 mảng để chứa dữ liệu
			$parent_id = array();

			while($row = $result->fetch_assoc()) { 
				$parent_id[] = $row;
			};
			return $parent_id;
		}
		public function create($data) {
			if ($parent['id']==0) {
				$sql = "INSERT INTO categories(name,thumbnail,slug,description) VALUES ('".$data['name']."', '".$data['thumbnail']."', '".$data['slug']."', '".$data['description']."')";
			}else {
				$sql = "INSERT INTO categories(name,parent_id,thumbnail,description) VALUES ('".$data['name']."', '".$data['parent_id']."', '".$data['thumbnail']."', '".$data['slug']."', '".$data['description']."')";
			}

			return $this->connection->query($sql);
		}
		public function update($data) {
			if ($data['parent_id']==0) {
				if ($_FILES["thumbnail"]["name"]=='') {
					$sql = "UPDATE categories SET name = '".$data['name']."',parent_id = null,slug='".$data['slug']."',description='".$data['description']."' WHERE id = ".$data['id'];
				}else{
					$sql = "UPDATE categories SET name = '".$data['name']."',parent_id = null,thumbnail = '".$data['thumbnail']."',slug='".$data['slug']."',description='".$data['description']."' WHERE id = ".$data['id'];
				}
				
			}else {
				if ($_FILES["thumbnail"]["name"]=='') {
					$sql = "UPDATE categories SET name = '".$data['name']."',parent_id = '".$data['parent_id']."',slug='".$data['slug']."',description='".$data['description']."' WHERE id = ".$data['id'];
				}
				else{
					$sql = "UPDATE categories SET name = '".$data['name']."',parent_id = '".$data['parent_id']."',thumbnail = '".$data['thumbnail']."',slug='".$data['slug']."',description='".$data['description']."' WHERE id = ".$data['id'];
				}
			}


			return $this->connection->query($sql);
		}
	}

 ?>