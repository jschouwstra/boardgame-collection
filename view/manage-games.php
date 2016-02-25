<?php
require "model/Game.php";
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
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr>
            <th>Game</th>
            <th>Category</th>
            <th>Duration</th>
            <th>Last Played</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $Game = new Game($db);
        $result = $Game->getAll();
        ?>

        <?php
        foreach($result as $row){
        ?>
        <tr class="odd gradeX">
            <td><?php echo $row['Name'];?></td>
            <td>Boardgame</td>
            <td>6-8 hrs</td>
            <td class="center">20-05-2014</td>
            <td><a href="?view=game_edit&id=<?php echo $row['ID'];?>">Edit</a></td>
            <td><a href="?view=game_edit&id=<?php echo $row['ID'];?>&delete=1">Delete</a></td>
        </tr>

        <?php
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