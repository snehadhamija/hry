<?php include("head.php"); ?> 
<?php include("left.php"); ?> 
<?php include("script.php") ?>

<?php 
$response = api::call();
class Api{
public static function call(){
$url = 'http://localhost:8090/haryana';
$collection_name = 'menu';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,TRUE);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu</title>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Menu</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-default">
					<div class="panel-heading">
                    <p style="font-size:14px;"><a href="welcome.php">Home</a>-><a href="menu.php">Menu</a>-><a href="menu_detail.php">Edit Menu</a>
			</p>
                    </div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<fieldset>
								<!-- menu list-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Menu</label>
									<div class="col-md-9">
							<select name="menu" id="menu" class="form-control" onchange="myfun(this.value)">
									<option> Select Any menu</option>
									
									
										<?php
											
										foreach($response as $key => $value) 
										{	
										?>
										<?php
											if($value['id'] !=100)
											{
										?>
											<option value="<?php echo $value['id']; ?>"> <?php echo $value['menu'];?> </option>
											<?php
											}
											
										}
										
										?>
								</select>
								</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name" >Menu Category</label>
									<div class="col-md-9">
									<select name="subcategory" id="dataget" class="form-control" onchange="myfuns(this.value)" >
									<option> Select Category </option>
											
								</select>
								</div>
								</div>
									<div class="form-group">
									<label class="col-md-3 control-label" for="name" >Menu Category Service</label>
									<div class="col-md-9">
									<select name="subcategory" id="dataget1" class="form-control" onchange="addmenu()">
									<option> Select service </option>
									</select>
									</div>
									</div>
							<div class="form-group" style="display:none;" id="addmenus">
							<label class="col-md-3 control-label" for="name">Add New Menu</label>
							<div class="col-md-9">
							<input type="text" name="addmenu" id="addmenu" placeholder="Add New Menu Name" class="form-control">
							</div>
							</div>
								<div class="form-group">
								<label class="col-md-3 control-label" for="name">Sequence Id</label>
								<div class="col-md-9">
								<input type="text" name="sequenceid" id="sequenceid" class="form-control" maxlength="100" placeholder="sequence id">
								</div>
								</div>
								<br>
								<button class="btn btn-primary"> Submit </button>
							</fieldset>
						</form>
						</div>
					</div>
			</div><!--/.col-->
			<!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
<script type="text/javascript">
  function myfun(datavalue){
	  $.ajax({
		  url:'class.php',
		  type: 'POST',
		  data:{datapost : datavalue},
		  success: function(result){
		  $('#dataget').html(result);
	  }
		  
	  });
  }

	function addmenus()
	{
		var heading = document.getElementById('menu').value;
		//alert(heading);
		if(heading == 'other')
		{
			document.getElementById('addmenus').style.display = 'block';
		}
		else
		{
			document.getElementById('addmenus').style.display = 'none';
		}
	}
	</script>
<?php
}
}
?>