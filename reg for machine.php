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
   <h1 style="text-align:center; font-weight:600; font-size:50px;">Machinary Sale/Purchase</h1>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Sale')"style="font-color:#FFFFFF;background-color:#464b64;">Sales</button>
  <button class="tablinks" onclick="openCity(event, 'Purchase')">Purchase</button>

</div>

<div id="Sale" class="tabcontent">
 
<form action="/action_page.php">
  <div class="container">
    <h1 style="text-align:center; font-weight:600; font-size:40px;"> Sales Machinary</h1>

    <hr>
	<h3> Type of Machinary Sale</h3>
 <div class="New"><span><input type="radio" value="1" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;"> &nbsp; &nbsp;New Machinary</label></span> &nbsp; &nbsp; &nbsp; &nbsp
<span><input  &nbsp; &nbsp; type="radio" value="2" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;">&nbsp; &nbsp;Old Machinary &nbsp;  &nbsp; &nbsp &nbsp;</label></span><span><input &nbsp; &nbsp; type="radio" value="3" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;"> &nbsp; &nbsp; Both Type</label></span>
</div>
<label for="Company Name"><b style="font-size:22px;font-weight:700;">Company Name</b></label>
    <input type="text"style="font-size:17px;" placeholder="Enter Company Name" name="Company Name" required>
    <label for="Name" ><b style="font-size:22px;font-weight:700;">Person Name</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Name Person" name="Name" required>

    <label for="Email"><b style="font-size:22px;font-weight:700;">E-mail Id</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Email Id" name="Email" required>

    <label for="Contact Person"><b style="font-size:25px; font-weight:600;">Contact Person</b></label>
    <input type="number" style="font-size:17px;" placeholder="Contact Person" name="Contact Person" required><br>
	<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Category Of Machinary</b></label>
    <input type="number" style="font-size:17px;" placeholder="Enter Machinary" name="product" required>
	<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Sub-Category Of Machinary</b></label>
    <input type="number" style="font-size:17px;" placeholder="Enter Sub category of Machinary" name="product" required>
	<label for="Model"><b style="font-size:25px; font-weight:600;">Model</b></label>
	<input type="number" style="font-size:17px;" placeholder="Model" name="Contact Person" required><br>
	<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Expected Cost</b></label>
    <input type="Number" style="font-size:17px;" placeholder="Enter Exp.Cost" name="Cost" required><br>
	  <label for="Address" ><b style="font-size:22px;font-weight:700;">Present Address</b></label>

	<label for="Address" ><b style="font-size:22px;font-weight:700;"></b></label>
	<input type="number" style="font-size:17px; width:22%;" placeholder="H.No" name="Present  Address">&nbsp;
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 1" name="Present  Address">&nbsp 
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 2" name="Present  Address"><br>
<input type="checkbox" id="Address" name="Address" value="address">
<label for="Address"> Same As Above</label><br>
  <label for="Address" ><b style="font-size:22px;font-weight:700;">Permanent Address</b></label>
<input type="number" style="font-size:17px; width:19%;" placeholder="H.No" name="Present  Address">&nbsp;
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 1" name="Present  Address">&nbsp 
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 2" name="Present  Address"><br>
        <label for="state" ><b style="font-size:22px;font-weight:700;">Country</b></label> &nbsp; &nbsp;
 <input type="text" style="font-size:17px; width:300px;" placeholder="Enter Country" name="Country">&nbsp &nbsp
 <label for="state" ><b style="font-size:22px;font-weight:700;">State</b></label> &nbsp; &nbsp;
 <input type="text" style="font-size:17px; width:300px;" placeholder="Enter State" name="Company Contact">&nbsp &nbsp
 <label for="state" ><b style="font-size:22px;font-weight:700;">Pincode</b></label> &nbsp; &nbsp;
 <input type="number" style="font-size:17px; width:200px;" placeholder="Enter Pincode" name="Company Contact"><br>
          <label for="Company Contact"><b style="font-size:25px; font-weight:600;">Contact Details</b></label> &nbsp &nbsp
          <input type="number" style="font-size:17px; width:15%" placeholder="Code" name="Company Contact">&nbsp &nbsp
	
    <input type="number" style="font-size:17px;  width:65%;" placeholder="Telphone No" name="Company Contact"><br>
	  <label for="Company Contact"><b style="font-size:25px; font-weight:600;">Company Contact</b></label> &nbsp &nbsp
	 <input type="number" style="font-size:17px; " placeholder="10 Digit Whatsapp No" name="Company Contact">
	<br>
       
        
         
<label for="description"><b style="font-size:25px; font-weight:600;">Description of Your Machinary(Like as Capacity, Model, MFG Date)</b></label><br>
<textarea id="description" style="width:100%; height:100px">Enter the desccription of Machinary</textarea>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
 <!-- <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div> -->
</form>
</div>


<div id="Purchase" class="tabcontent">

 
 <form action="/action_page.php">
  <div class="container">
    <h1 style="text-align:center; font-weight:600; font-size:40px;">Purchase Machinary</h1>

    <hr>
	<h3> Type of Machinary Purchase</h3>
 <div class="New"><span><input type="radio" value="1" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;"> &nbsp; &nbsp;New Machinary</label></span> &nbsp; &nbsp; &nbsp; &nbsp
<span><input  &nbsp; &nbsp; type="radio" value="2" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;">&nbsp; &nbsp;Old Machinary &nbsp;  &nbsp; &nbsp &nbsp;</label></span><span><input &nbsp; &nbsp; type="radio" value="3" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;"> &nbsp; &nbsp; Both Type</label></span>
</div>
<label for="Company Name"><b style="font-size:22px;font-weight:700;">Company Name</b></label>
    <input type="text"style="font-size:17px;" placeholder="Enter Company Name" name="Company Name" required>
    <label for="Name" ><b style="font-size:22px;font-weight:700;">Person Name</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Name Person" name="Name" required>

    <label for="Email"><b style="font-size:22px;font-weight:700;">E-mail Id</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Email Id" name="Email" required>

    <label for="Contact Person"><b style="font-size:25px; font-weight:600;">Contact Person</b></label>
    <input type="number" style="font-size:17px;" placeholder="Contact Person" name="Contact Person" required><br>
	<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Category Of Machinary</b></label>
    <input type="number" style="font-size:17px;" placeholder="Enter Machinary" name="product" required>
	<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Sub-Category Of Machinary</b></label>
    <input type="number" style="font-size:17px;" placeholder="Enter Sub category of Machinary" name="product" required>
	<label for="Model"><b style="font-size:25px; font-weight:600;">Model</b></label>
	<input type="number" style="font-size:17px;" placeholder="Model" name="Contact Person" required><br>
	<label for="Company Contact"><b style="font-size:25px; font-weight:600;">Expected Cost</b></label>
    <input type="Number" style="font-size:17px;" placeholder="Enter Exp.Cost" name="Cost" required><br>
	  <label for="Address" ><b style="font-size:22px;font-weight:700;">Present Address</b></label>

	<label for="Address" ><b style="font-size:22px;font-weight:700;"></b></label>
	<input type="number" style="font-size:17px; width:22%;" placeholder="H.No" name="Present  Address">&nbsp;
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 1" name="Present  Address">&nbsp 
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 2" name="Present  Address"><br>
<input type="checkbox" id="Address" name="Address" value="address">
<label for="Address"> Same As Above</label><br>
  <label for="Address" ><b style="font-size:22px;font-weight:700;">Permanent Address</b></label>
<input type="number" style="font-size:17px; width:19%;" placeholder="H.No" name="Present  Address">&nbsp;
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 1" name="Present  Address">&nbsp 
<input type="text" style="font-size:17px; width:30%;" placeholder="Address 2" name="Present  Address"><br>
        <label for="state" ><b style="font-size:22px;font-weight:700;">Country</b></label> &nbsp; &nbsp;
 <input type="text" style="font-size:17px; width:300px;" placeholder="Enter Country" name="Country">&nbsp &nbsp
 <label for="state" ><b style="font-size:22px;font-weight:700;">State</b></label> &nbsp; &nbsp;
 <input type="text" style="font-size:17px; width:300px;" placeholder="Enter State" name="Company Contact">&nbsp &nbsp
 <label for="state" ><b style="font-size:22px;font-weight:700;">Pincode</b></label> &nbsp; &nbsp;
 <input type="number" style="font-size:17px; width:200px;" placeholder="Enter Pincode" name="Company Contact"><br>
          <label for="Company Contact"><b style="font-size:25px; font-weight:600;">Contact Details</b></label> &nbsp &nbsp
          <input type="number" style="font-size:17px; width:15%" placeholder="Code" name="Company Contact">&nbsp &nbsp
	
    <input type="number" style="font-size:17px;  width:65%;" placeholder="Telphone No" name="Company Contact"><br>
	  <label for="Company Contact"><b style="font-size:25px; font-weight:600;">Company Contact</b></label> &nbsp &nbsp
	 <input type="number" style="font-size:17px; " placeholder="10 Digit Whatsapp No" name="Company Contact">
	<br>
       
        
         
<label for="description"><b style="font-size:25px; font-weight:600;">Description of Your Machinary<small>(Like as Capacity, Model, MFG Date)</small></b></label><br>
<textarea id="description" style="width:100%; height:100px">Enter the desccription of Machinary</textarea>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
 <!-- <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div> -->
</form>
</div>


<div id="Both" class="tabcontent">
  <h3>Both</h3>
  <p>Both is the capital of Japan.</p>
</div>
<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
	<script>
document.getElementsByClassName('tablinks')[0].click()
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
