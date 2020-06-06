<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<style>
table, th, td {
  border: 3px  solid silver;
}
tr{
  text-indent: 25px;
}
.end tr td,th{
	padding:6px
}


</style>
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
	<a href="index.php"><b style="margin-right:15px; font-size:20px;font-weight:400; float:right;margin-top:20px;">Go Back</b></a>
<center>
<h2 style="font-weight:600;font-size:30px;">Apply For Services</h2>
<p style="font-weight:300;font-size:15px;">How to Apply-Application Procedure</p><center>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Investor')">Investor Facilitation Cell</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">CAF Filling Guide

</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Application Approval Process</button>
</div>

<div id="Investor" class="tabcontent">
<br>
<br>
  <center><h3>Investor Facilitation Cell</</h3></center>
  <br>
  <br>
 <img src="images/apply.jpg" style="background:white; width:99%;margin-bottom:10px;" />
</div>

<div id="Paris" class="tabcontent">  <br>
  <br>
  <center><h3>CAF Filling Guide</h3></center>
    <br>
  <br>
  <img src="images/caf.jpg" style="background:white; width:99%;margin-bottom:10px;" />
</div>

<div id="Tokyo" class="tabcontent">  <br>
  <br>
  <center><h3>Application Approval Process</h3></center>  <br>
  <br>
 <img src="images/application.jpg" style="background:white; width:99%;margin-bottom:10px;" />
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>