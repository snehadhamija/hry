<link href="css/main.css" rel="stylesheet" type="text/css" />
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #464b64;
}

/* Style the buttons inside the tab */
.tab button {
  background-color:#464b64;
  float: left;
    color: white;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  font-color:#ffffff;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #314152;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #314152;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.input111 {
height:0px;
width:0px;
display:inline;	
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
<h1 style="text-align:center; font-weight:600; font-size:50px;">Register</h1>
    <p style="text-align:center; font-weight:600;">Please fill in this form to create an account.</p>
    <hr>
<form class="contact100-form validate-form">
    
	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Company</span>
					<input class="input100" type="text" name="Company Name" placeholder="Enter Company Name">
					<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter E-mail">
					<span class="focus-input100"></span>
				</div>
   <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Telephone No</span>
					<input class="input100" type="Number" name="Company Name" placeholder="Enter Tel. No">
					<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Contact Person</span>
					<input class="input100" type="text" name="contact person" placeholder="Enter Contact Person">
					<span class="focus-input100"></span>
				</div>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
  
 <!-- <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div> -->
</form>
</div>
<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>


	<script type="text/javascript" src="js/main.js"></script>
