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
					s
				</select>
			</div>
		</div>   
		<br/><br/>
		<button name="ok">Ok</button> <button>Cancel</button>
	</form>
	<span id="ErrorMessage"></span>
</div>

<?php
$Game_Name = $_POST['Game_Name'];

if(isset($_POST['ok'])){
$sql = "INSERT INTO TBL_Game (Name) VALUES (:Name)";	
$statement = $db->prepare($sql);
$statement->execute(array(':Name'=>$Game_Name));
}
else{}
?>