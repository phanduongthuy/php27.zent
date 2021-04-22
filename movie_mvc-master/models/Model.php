<?php 
	require_once 'Connection.php';
	class Model{
		var $table;
		var $connection;
	
	public function __construct(){
		$connection_obj = new Connection();
		$this->connection = $connection_obj->conn;
	}

	public function all() {
		$sql = "SELECT * FROM ".$this->table;
			$result = $this->connection->query($sql);
			$this->table = array();
			while ($row = $result->fetch_object()) {
				$this->table[]=$row;
			}
			return $this->table;
		
	}
	 public function find($id) {
        $sql = "SELECT * FROM  $this->table WHERE id = $id";
        $result = $this->connection->query($sql);
        return $result->fetch_object();
    }
	public function delete($id){	
		$sql = "DELETE FROM ".$this->table." WHERE id = ".$id;
		return $this->connection->query($sql);
	}

	
}

 ?>