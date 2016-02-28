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
	public function getCategory($db){

	}	

	public function editById($ID){
	
	}

	public function newGame($db,$User_ID,$Game_Name){
		//Create new game and attach it to current user.
		$sql = "INSERT INTO TBL_Game 
		(Name,User_ID)
		VALUES 
		('$Game_Name','$User_ID')";
		$db->query($sql);
		header("location: index.php?view=manage-games"); // Redirecting To Other Page

	}	

	public function getAllGames($db,$User_ID) {	
        // $sql="
        //     SELECT TBL_Game.* 
        //     FROM TBL_Game, JTBL_Game_User,TBL_User
        //     WHERE 
        //     	TBL_Game.ID = JTBL_Game_User.Game_ID
        //     AND 
        //     	TBL_User.ID = JTBL_Game_User.User_ID

        //     AND TBL_User.ID = '$User_ID';
        // ";
        $sql="
            SELECT Name, User_ID 
            FROM ".self::TABLENAME."
            WHERE 
            	TBL_Game.User_ID = '$User_ID';
        ";        
        $result = $db->query($sql);
        return $result;   

	}	

}

