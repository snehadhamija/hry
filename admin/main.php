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
<?php
$url1 = 'http://localhost:8090/haryana';
$collection_name1 = 'menuCategory/{menuCategoryId}';
$request_url1 = $url1 . '/' . $collection_name1;
$curl1 = curl_init($request_url1);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
$response1 = curl_exec($curl1);
curl_close($curl1);
$response1 = json_decode($response1,TRUE);
?>
<?php
$url2 = 'http://localhost:8090/haryana';
$collection_name2 = 'menuCatService';
$request_url2 = $url2 . '/' . $collection_name2;
$curl2 = curl_init($request_url2);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
$response2 = curl_exec($curl2);
curl_close($curl2);
$response2 = json_decode($response2,TRUE);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menu</title>
<script>
var mid = '';
</script>


		
        
	
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
                    </div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<fieldset>
								<!-- menu list-->
							
	<div class="form-group">
									<label class="col-md-3 control-label" for="name">Menu</label>
									<div class="col-md-9">
							<select name="menu" id="menu" class="form-control" >
									
									
										<?php
											
										foreach($response as $key => $value) 
										{	
										?>
										<?php
											if($value['id'] !=100)
											{
											echo  '<option value="'.$value["id"].'">'.$value["menu"].'</option>' ;
										}	
										}										
										echo  '<option value="other">'.other .'</option>' ;
											?>
								</select>
									
									</div>
									</div>

										<div class="form-group">
									<label class="col-md-3 control-label" for="name">Menu</label>
									<div class="col-md-9">
							<select name="menu" id="menu" class="form-control" >
									
									
										<?php
											
										foreach($response1 as $key => $value1) 
										{	
										?>
										<?php
											if($value1['menu']['id'] == 1)
											{
											echo  '<option>'.$value1['category'] .'</option>' ;
											}
										}										
										
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
									<label class="col-md-3 control-label" for="name">Description</label>
									<div class="col-md-9">
									<input type="text" name="descript" id="descript" class="form-control" maxlength="100" placeholder="Description for google Search">
									</div>
								</div>
                               <div class="form-group">
									<label class="col-md-3 control-label" for="name">Detail</label>
									<div class="col-lg-8 nopadding">
										<textarea style="width:700px; height:200px" id="txtEditor" name="txtEditor"></textarea>
										<textarea id="txtEditorContent" name="editor" hidden="" required></textarea>
									</div>
								</div>
									

                                <!-- title list-->
								
                                <!-- Detail list-->
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input name="submit" type="submit" class="btn btn-default btn-md pull-right">
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