<?php
class User {
	private $db;
	const TABLENAME = "TBL_Game";
	public function __construct($db){
		$this->db = $db;
	}
	public function redirectWithoutSession() {
		if(!isset($_SESSION['username'])){
		    header("location: index.php?view=login"); // Redirecting To Other Page
		}
	}
	public function redirectWithSession() {
		if(isset($_SESSION['username'])){
		    header("location: index.php?view=dashboard"); // Redirecting To Other Page
		}
	}	
	public function assignSession($username,$password, $db) {
		$this->db;
	    //If empty
	    if(empty($_POST["username"]) || empty($_POST["password"])) {
	      $error = "Both fields are required.";
	    }
	    //If fields are filled
	    else {
	      // To protect from MySQL injection
	      $username = stripslashes($username);
	      $password = stripslashes($password);
	      $username = mysqli_real_escape_string($db, $username);
	      $password = mysqli_real_escape_string($db, $password);
	      $password = md5($password);
	      
	      //Check username and password from database
	      $sql="SELECT ID FROM TBL_User WHERE Username='$username' and Password='$password'";
	      $result=mysqli_query($db,$sql);
	      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	      //If username and password exist in our database then create a session.
	      //Otherwise echo error. 
	      if(mysqli_num_rows($result) == 1) {
	        $_SESSION['username'] = $username; // Initializing Session
	        $_SESSION['ID'] = $row['ID'];
	        $view = "home";
	         header("location: index.php?view=dashboard"); // Redirecting To Other Page
	      }
	      //If incorrect username or password
	      else {
	        $error = "Incorrect username or password.";
	      }
	    }
	}

	//Get all this User's Games
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
?>