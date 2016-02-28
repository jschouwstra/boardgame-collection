<?php
class Category {
	public $ID = "";
	public $Name = "";
	const TABLENAME = "TBL_Category";
	function __construct($db){
		$this->db = $db;
	}

	public function getAll($db){
        $sql="
            SELECT Name
            FROM ".self::TABLENAME.
            ";
        ";        
        $result = $db->query($sql);
        return $result;   
	}

}