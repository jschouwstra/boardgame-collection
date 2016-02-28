<?php
$User = new User($db);
$Game = new Game($db);
$Category = new Category($db);
$User->redirectWithoutSession();
?>
<div class="row">
	<div class="col-md-12">
		<h2>New Game</h2>   
	</div>
</div>    


<div class="container-fluid">
	<form action="" method="POST" role="form">
		<div class="form-group row">
			<input name="Game_ID" type="hidden" >
			<div class="col-xs-2">
				<label>Name</label>
			</div>
			<div class="col-xs-9">
				<input name="Game_Name" type="text" class="form-control" value="">
			</div>
		</div>   
		<div class="form-group row">
			<div class="col-xs-2">
				<label>Category</label>
			</div>
			<div class="col-xs-9">
			
				<select name="Category_ID" class="form-control">
					<?php
						$result = $Category->getAll($db);
						while ($row = $result->fetch_assoc()) {
							echo "<option value=\"1\">".$row['Name']."</option>";
						}
					?>			
				</select>
			</div>
		</div>   
		<br/><br/>
		<button name="ok">Ok</button> <button>Cancel</button>
	</form>
	<span id="ErrorMessage"></span>
</div>

<?php
$User_ID = $_SESSION['ID'];

$Game_Name = stripslashes($_POST['Game_Name']);
$Game_Name = mysqli_real_escape_string($db,$Game_Name);

if(isset($_POST['ok'])){
	//validation
	$Game->newGame($db,$User_ID,$Game_Name);

}
?>