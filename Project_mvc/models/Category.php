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

			while($row = $result->fetch_object()) { 
				$parent_id[] = $row;
			};
			return $parent_id;
		}
		public function create($data) {

			if ($data['parent_id']==0) {
				$sql = "INSERT INTO categories(name,slug,description,user_id) VALUES ('".$data['name']."', '".$data['slug']."', '".$data['description']."', '".$_SESSION['auth']->id."')";
			}else {
				$sql = "INSERT INTO categories(name,parent_id,slug,description,user_id) VALUES ('".$data['name']."', '".$data['parent_id']."', '".$data['slug']."', '".$data['description']."', '".$_SESSION['auth']->id."')";
			}
			return $this->connection->query($sql);
		}
		public function update($data) {
			if ($data['parent_id']==0) {
				$sql = "UPDATE categories SET name = '".$data['name']."',parent_id = null,slug='".$data['slug']."',description='".$data['description']."',user_id = '".$_SESSION['auth']->id."' WHERE id = ".$data['id'];
				
			}else {
				$sql = "UPDATE categories SET name = '".$data['name']."',parent_id = '".$data['parent_id']."',slug='".$data['slug']."',description='".$data['description']."',user_id = '".$_SESSION['auth']->id."' WHERE id = ".$data['id'];
				
			}


			return $this->connection->query($sql);
		}
	}

 ?>