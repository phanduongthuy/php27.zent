<?php 
	require_once 'Connection.php';

		class Post{
			var $connection;
			function __construct(){
				$connection_obj = new Connection();
				$this->connection = $connection_obj->conn;
			}

			function all() {
				$sql = "SELECT * FROM posts";
				// Thực thi câu lệnh
				$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				};
				return $posts;
			}
			function find($id) {
				$sql = "SELECT * FROM posts WHERE id =".$id;
				return $this->connection->query($sql)->fetch_assoc();
			}

		}
		
?>