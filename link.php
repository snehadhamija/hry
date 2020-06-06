<style>
table, th, td {
  border: 3px  solid silver;
}
tr{
  text-indent: 5px;
}
.end tr td,th{
	padding:6px
}

</style>
<?php
$link = $_GET['l'];
$l = "controlled_area/".$link.".php";
?>
<?php include("HEAD.PHP"); ?>
<body>
	<!-- header-section-starts -->  
     <?php include("top-nav.php"); ?>
		
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
