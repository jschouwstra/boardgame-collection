<?php
class Category {

	function __construct($db){
		$this->db = $db;
	}
	public $ID = "";
	public $Name = "";
	public function getAll(){
		$sql = "Select TBL_Category.* FROM TBL_Category";
		$query = $this->db->prepare($sql);
		$query->execute();

		$result = $query->fetchAll();
		return $result;


	}
}