<!DOCTYPE HTML>
<html>
<?php //include("api.php"); ?>
<?php include("HEAD.PHP"); ?>
<body>
	<!-- header-section-starts -->  
     <?php include("top-nav.php"); ?>
		
	<div class="full">
    <div class="col-md-4 top-nav" style="position:relative; background: #464B64;">
			<?php include("left-nav.php"); ?>
		<!--banner-section-->
	<div class="col-md-8 main">
		<div class="banner-section" style="width:100%;">
		   <h3 class="tittle"></h3>
			<div class="banner">
              <?php
   
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8090/haryana/menuCatService');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
$result = curl_exec($ch);
 
$result_obj = json_decode($result, TRUE);
 $cid = $_GET['id'];
foreach ($result_obj as $key => $obj) {
    if($obj['id']==$cid)
	
    echo $obj['detail']."<br />";
	
}
?>   
					
	  			
			 
		 <div class="clearfix"> </div>
			   
			 </div>

			<!--//banner-section-->
			<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
	
	     