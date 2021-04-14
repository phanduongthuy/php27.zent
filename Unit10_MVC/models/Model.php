<?php 
	require_once 'Connection.php';
	class Model{
		var $table;
		var $connection;
	
	function __construct(){
		$connection_obj = new Connection();
		$this->connection = $connection_obj->conn;
	}

	function all() {
		$sql = "SELECT * FROM ".$this->table;
			$result = $this->connection->query($sql);
			$this->table = array();
			while ($row = $result-> fetch_assoc()) {
				$this->table[]=$row;
			}
			return $this->table;
		
	}
	function find($id) {
		$sql = "SELECT * FROM ".$this->table." WHERE id =".$id;
		return $this->connection->query($sql)->fetch_assoc();
	}
	public function delete($id){	
		$sql = "DELETE FROM ".$this->table." WHERE id = ".$id;
		return $this->connection->query($sql);
	}
}

 ?>