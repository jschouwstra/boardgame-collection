<?php
$Game = new Game($db);
$User = new User($db);
$User->redirectWithoutSession();
?>
<div class="row">
	<div class="col-md-12">
		<h2>Manage Games</h2>   
	</div>
</div>    

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
<div class="panel-heading">
Your Game Collection
</div>
<div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Game</th>
        </tr>
        </thead>
        <tbody>
        
            <?php
            $User_ID = $_SESSION['ID'];

            $result = $User->getAllGames($db,$User_ID);
            while($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo "<td>";
                echo $row["Name"]. "<br>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        
        </tbody>
        </table>
        </div>

        </div>
    </div>
    <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->