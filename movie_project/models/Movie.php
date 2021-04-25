<?php 
	require_once 'Model.php';

	class Movie extends Model{
		var $table = 'movies';

		public function create($data) {
			$sql = "INSERT INTO movies(name,description,user_id,image,type,category_id,age,quality,time,slug) VALUES ('".$data['name']."','".$data['description']."','".$_SESSION['auth']->id."','".$data['image']."','".$data['type']."','".$data['category_id']."','".$data['age']."','".$data['quality']."','".$data['time']."','".$data['slug']."')";

			return $this->connection->query($sql);
		}
		public function update($data) {
			if ($_FILES["image"]["name"]=='') {
				$sql = "UPDATE movies SET name = '".$data['name']."',description = '".$data['description']."',user_id = '".$_SESSION['auth']->id."',type = '".$data['type']."',category_id = '".$data['category_id']."',age = '".$data['age']."',quality = '".$data['quality']."',time = '".$data['time']."',slug = '".$data['slug']."' WHERE id = ".$data['id'];

			}else {

				$sql = "UPDATE movies SET name = '".$data['name']."',description = '".$data['description']."',user_id = '".$_SESSION['auth']->id."',image = '".$data['image']."',type = '".$data['type']."',category_id = '".$data['category_id']."',age = '".$data['age']."',quality = '".$data['quality']."',time = '".$data['time']."',slug = '".$data['slug']."' WHERE id = ".$data['id'];
				
			}
			return $this->connection->query($sql);
		}
		public function getFiveNew(){
			$sql = "SELECT * FROM ". $this->table. " ORDER BY created_at DESC LIMIT 5";
			$result = $this->connection->query($sql);
			$fiveMv = array();
			while ($row = $result->fetch_object()) {
				$fiveMv[] = $row;
			}
			return $fiveMv;
		}
		public function getThreeNewMovie(){
			$sql = "SELECT * FROM ". $this->table. " WHERE type = 0 ORDER BY created_at DESC LIMIT 3";
			$result = $this->connection->query($sql);
			$threeMV = array();
			while ($row = $result->fetch_object()) {
				$threeMV[] = $row;
			}
			return $threeMV;
		}
		public function getSixNewMovieL(){
			$sql = "SELECT * FROM ". $this->table. " WHERE type = 0 ORDER BY id DESC LIMIT 6";
			$result = $this->connection->query($sql);
			$sixMvL = array();
			while ($row = $result->fetch_object()) {
				$sixMvL[] = $row;
			}
			return $sixMvL;
		}
		public function getSixNewMovieB(){
			$sql = "SELECT * FROM ". $this->table. " WHERE type = 1 ORDER BY id DESC LIMIT 6";
			$result = $this->connection->query($sql);
			$sixMvB = array();
			while ($row = $result->fetch_object()) {
				$sixMvB[] = $row;
			}
			return $sixMvB;
		}

		public function getTopView(){
			$sql = "SELECT * FROM ".$this->table. " ORDER BY view_count DESC LIMIT 10";
			$result = $this->connection->query($sql);
			$topView = array();
			while($row = $result->fetch_object()) {
				$topView[] = $row;
			}
			return $topView;
		}
		
		public function getAllHd(){
			$sql = "SELECT m.* FROM ".$this->table. " m JOIN categories c ON m.category_id = c.id WHERE c.name like 'Phim hành động%' ORDER BY created_at DESC";
			$result = $this->connection->query($sql);
			$allHd = array();
			while($row = $result->fetch_object()) {
				$allHd[] = $row;
			}
			return $allHd;
		}
		public function getAllHh(){
			$sql = "SELECT m.* FROM ".$this->table. " m JOIN categories c ON m.category_id = c.id WHERE c.name like 'Phim hoạt hình' ORDER BY created_at DESC";
			$result = $this->connection->query($sql);
			$allHh = array();
			while($row = $result->fetch_object()) {
				$allHh[] = $row;
			}
			return $allHh;
		}

		public function getAllCt(){
			$sql = "SELECT m.* FROM ".$this->table. " m JOIN categories c ON m.category_id = c.id WHERE c.name like 'Phim cổ trang%' ORDER BY created_at DESC";
			$result = $this->connection->query($sql);
			$allCt = array();
			while($row = $result->fetch_object()) {
				$allCt[] = $row;
			}
			return $allCt;
		}

		public function getAllTl(){
			$sql = "SELECT m.* FROM ".$this->table. " m JOIN categories c ON m.category_id = c.id WHERE c.name like 'Phim tâm lý%' ORDER BY created_at DESC";
			$result = $this->connection->query($sql);
			$allTl = array();
			while($row = $result->fetch_object()) {
				$allTl[] = $row;
			}
			return $allTl;
		}

		public function getAllKhvt(){
			$sql = "SELECT m.* FROM ".$this->table. " m JOIN categories c ON m.category_id = c.id WHERE c.name like 'Phim khoa học viễn tưởng%' ORDER BY created_at DESC";
			$result = $this->connection->query($sql);
			$allKhvt = array();
			while($row = $result->fetch_object()) {
				$allKhvt[] = $row;
			}
			return $allKhvt;
		}

		public function detailMovie($slug){
			$sql = "SELECT m.*, v.source, v.`name` AS 'tentap'  FROM movies m JOIN videos v ON  v.movie_id = m.id WHERE m.slug like '".$slug."'";
			$result = $this->connection->query($sql);
			$tab = array();
			while ($row = $result->fetch_object()) {
				$tab[] = $row;
			}

			return $tab;
		}

		public function getAllMovie(){
			$sql = "SELECT * FROM ". $this->table. " WHERE type = 0";
			$result = $this->connection->query($sql);
			$allMovie = array();
			while ($row = $result->fetch_object()) {
				$allMovie[] = $row;
			}
			return $allMovie;
		}
		public function getAllTvSerries(){
			$sql = "SELECT * FROM ". $this->table. " WHERE type = 1";
			$result = $this->connection->query($sql);
			$allTvSerries = array();
			while ($row = $result->fetch_object()) {
				$allTvSerries[] = $row;
			}
			return $allTvSerries;
		}

		public function findName($data){
			$sql = "SELECT * FROM ". $this->table. " WHERE name like '%$data%'";
			$result = $this->connection->query($sql);
			$findName = array();
			while ($row = $result->fetch_object()) {
				$findName[] = $row;
			}
			return $findName;
		}

		public function countMovie(){
			// select c.name, count(m.id) form  FROM movies m JOIN categories c ON m.category_id = c.id group by c.name 
			$sql = "SELECT c.name, count(m.id) as count FROM movies m JOIN categories c ON m.category_id = c.id GROUP BY c.name";
			$result = $this->connection->query($sql);
			$countMovie = array();
			while ($row = $result->fetch_object()) {
				$countMovie[] = $row;
			}
			return $countMovie;
		}
		// public function findCate($str){
		// 	$sql = "SELECT DISTINCT c.* FROM movies m JOIN categories c ON m.category_id = c.id WHERE c.name like '%".$str."%'";
		// 	$result = $this->connection->query($sql);
		// 	$cateId = array();
		// 	while ($row = $result->fetch_assoc()) {
		// 		$cateId[] = $row;
		// 	}

		// 	// echo "<pre>";
		// 	// print_r($cateId);
		// 	// echo "</pre>";
		// 	$all = array();
		// 	foreach ($cateId as $value) {
		// 		$sql = "SELECT * FROM movies WHERE category_id = " . $value['id'];
		// 		echo "$sql";
		// 		$result = $this->connection->query($sql);
		// 		$cateId1 = array();
		// 		while ($row = $result->fetch_assoc()) {
		// 			$cateId1[] = $row;
		// 			$all = array_merge($all, $cateId1);
		// 		}
		// 	}
		// 	return $all;
		// }
	}

?>