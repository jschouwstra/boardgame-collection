<?php
require "connection.php";
require "model/Game.php";
require "model/Category.php";

$Game = new Game($db);
$Category = new Category($db);
?>
<div class="row">
	<div class="col-xs-12">
		<h2>Edit Game</h2>   
	</div>
</div>  
<?php
$ID = filter_input(INPUT_GET, 'id');
$result = $Game->getById($ID);
foreach($result as $row){ ?>
<div class="container-fluid">
	<form action="" method="POST" role="form">
		<div class="form-group row">
			<input name="Game_ID" type="hidden" value="<?php echo $row['ID']; ?>">
			<div class="col-xs-2">
				<label>Name</label>
			</div>
			<div class="col-xs-9">
				<input name="Game_Name" type="text" class="form-control" value="<?php echo $row['Name']; ?>">
			</div>
		</div>   
<?php } ?>

		<div class="form-group row">
			<div class="col-xs-2">
				<label>Category</label>
			</div>
			<div class="col-xs-9">
				<?php
					$sql = "SELECT TBL_Category.* FROM TBL_Game,TBL_Category
							WHERE 
							TBL_Category.ID = 	TBL_Game.Category_ID AND
							TBL_Game.ID 	= 	$ID";
					$query = $db->prepare($sql);
					$query->execute();
					$result = $query->fetchAll();
					foreach($result as $row){
						echo $row['Name'];
					}
				?>
				<select name="Category_ID" class="form-control">
					<?php
					$resultCategory = $Category->getAll();
					foreach($resultCategory as $row){?>
						<option  value="<?php echo $row['ID']; ?>"><?php echo $row['Name']; ?></option>		
						<?php } ?>
				</select>
			</div>
		</div>   
		<br/><br/>
		<button name="ok">Ok</button>
	</form>
	<span id="ErrorMessage"></span>
</div>
<?php
if ($_GET['delete'] == 1){
	echo "you want to delete?";
}

if (isset($_POST['ok'])) {
	if ($_POST['Game_Name'] == null) {
		echo "This field may not be blank.";
	}
	if (strlen($_POST['Game_Name']) < 3) {
		echo "too short!";
	} else {

		//procedural
		//TODO: make it a method
		// pdo Update
		$Game_Name 		= $_POST['Game_Name'];
		$Game_ID 		= $_POST['Game_ID'];
		$Category_ID 	= $_POST['Category_ID'];

		//query
		$sql = "UPDATE TBL_Game
		SET Category_ID =?, Name =?
		WHERE TBL_Game.ID =?
		";

		$statement = $db -> prepare($sql);
		$statement -> execute(array(
			$Category_ID,
			$Game_Name,
			$Game_ID,

		));



		header("Refresh:0");
	}

} else {

}
