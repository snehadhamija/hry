<?php include("head.php"); ?> 

<?php include("left.php"); ?>
<?php include("script.php"); ?>
<?php 
$mysqli = NEW MySQLi('localhost','root','','haryana');
$resultSet = $mysqli->query("select menu FROM menu");
 ?>
 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Insert New Menu</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading">
                    <p style="font-size:14px;"><a href="welcome.php">Home</a>-><a href="menu.php">Menu</a>-><a href="menu_detail.php">Edit Menu</a>
			
</p>
                    </div><br>
 <select name="menu"
 <?php
 while ($rows = $resultSet -> fetch_assoc())
 {
 $menu= $rows['menu'];
 echo"<option value='$menu'> $menu </option>";
 }
 ?>
 </select>
