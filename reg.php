<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>




/* Full-width input fields */
input[type=text], input[type=password], input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #464b64;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:25px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
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
<form action="/action_page.php">
  <div class="container">
  <a href="index.php"><b style="margin-left:1000px; font-size:20px;font-weight:400;">Go Back</b></a>
    <h1 style="text-align:center; font-weight:600; font-size:50px;">Register</h1>
    <p style="text-align:center; font-weight:600;">Please fill in this form to create an account.</p>
    <hr>
<label for="Company Name"><b style="font-size:22px;font-weight:700;">Company Name</b></label>
    <input type="text"style="font-size:17px;" placeholder="Enter Company Name" name="Company Name" required>
    <label for="Name" ><b style="font-size:22px;font-weight:700;">Name</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Name" name="Name" required>

    <label for="Email"><b style="font-size:22px;font-weight:700;">E-mail</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Email" name="Email" required>
<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Telephone No</b></label> &nbsp &nbsp
    <input type="number" style="font-size:17px; width:150px;" placeholder="Code" name="Company Contact">&nbsp &nbsp
	
    <input type="number" style="font-size:17px;  width:400px;" placeholder="Number" name="Company Contact">
	<br>
    <label for="Contact Person"><b style="font-size:25px; font-weight:600;">Contact Person </b></label>
    <input type="number" style="font-size:17px;" placeholder="Contact Person" name=" Contact Person" required><br>
	
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
 <!-- <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div> -->
</form>
</div>
<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
