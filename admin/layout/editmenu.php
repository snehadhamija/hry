<?php include("head.php"); ?> 
<?php include("left.php"); ?> 
<?php include("script.php") ?>
<style>
label{
	color:Blue;
	font-size:20px
}
</style>
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
                                  <p style="font-size:14px;"><a href="index.php">Home</a>-><a href="table.php">Menu</a>-><a href="editmenu.php">Edit Menu</a>
			
</p>
                    </div><br>
					
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<fieldset>
								<!-- menu list-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Menu</label>
									<div class="col-md-9">
									<select name="menu" id="menu" class="form-control" onChange="addmenus();">
										<?php
											
										foreach($response as $key => $value) 
										{
										
											if($value['id'] != 100)
											{
											echo  '<option >'.$value['menu'] .'</option>' ;
											
											}
										}
										echo  '<option value="other">'.Other .'</option>' ;
										?>
							
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
                               
									

                                <!-- title list-->
								
                                <!-- Detail list-->
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input name="submit" type="submit" onclick="submitform()" class="btn btn-default btn-md pull-right">
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
			<!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

   <script>
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