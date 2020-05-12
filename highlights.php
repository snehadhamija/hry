<style>
table, th, td {
  border: 3px  solid silver;
}
tr{
  text-indent: 5px;
}

</style>
<?php
$link = $_GET['l'];
$l = "highlights/".$link.".php";
?>
<?php include("HEAD.PHP"); ?>
<body>
	<!-- header-section-starts -->  
   
		
	<div class="full">
    <div class="col-md-4 top-nav" style="position:relative;background: #464b64;">
			<?php include("left-nav.php"); ?>
		

    <div class="col-md-8 main">
	<br>
	<br>
	
       <?php include($l); ?>                     
							<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
