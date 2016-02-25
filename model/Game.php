<?php
class Game {
	public $ID = "";
	public $Name ="";
	private $db;

	function __construct($db){
		$this->db = $db;
	}


	public function getAll(){
		$this->db;
		$sql = "SELECT TBL_Game.* FROM TBL_Game";
		$query = $this->db->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function getById($ID){
		$this->db;
		$sql = "SELECT TBL_Game.* FROM TBL_Game WHERE ID = $ID";
		$query = $this->db->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	public function getAllCategory(){
		$this->db;
		$sql = "SELECT TBL_Category.* FROM TBL_Game, JTBL_Game_Category,TBL_Category
		WHERE 
		TBL_Category.ID = 	JTBL_Game_Category.Category_ID AND
		TBL_Game.ID 	= 	JTBL_Game_Category.Game_ID";

		$query = $this->db->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}	

	public function editById($ID){
		$this->db;
		$Name = "new stuff";
		$sql = "UPDATE TBL_Game SET Name=? WHERE ID=?";
		$statement = $db->prepare($sql);
		$statement->execute(array($Name,$ID));
	
	}

}

