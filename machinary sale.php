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


<form action="/action_page.php">
  <div class="container">
    <h1 style="text-align:center; font-weight:600; font-size:50px;">Register for Seller.</h1>
    <p style="text-align:center; font-weight:600;">Please fill Your Seller Profile.</p>
    <hr>

    <label for="Name" ><b style="font-size:22px;font-weight:700;">Name</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Name" name="Name" required>
<label for="Firm Name"><b style="font-size:22px;font-weight:700;">Company Name</b></label>
    <input type="text"style="font-size:17px;" placeholder="Enter Company Name" name="Firm Name" required>
    <label for="Email"><b style="font-size:22px;font-weight:700;">E-mail</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Email" name="Email" required>

    <label for="Contact Person"><b style="font-size:25px; font-weight:600;">Contact Person</b></label>
    <input type="number" style="font-size:17px;" placeholder="Contact Person" name="Contact Person" required><br>
	<label for="Firm Contact"><b style="font-size:25px; font-weight:600;">Product</b></label>
    <input type="number" style="font-size:17px;" placeholder="Product" name="product" required>
	<label for="Model"><b style="font-size:25px; font-weight:600;">Model</b></label>
	<input type="number" style="font-size:17px;" placeholder="Model" name="Contact Person" required><br>
	<label for="Firm Contact"><b style="font-size:25px; font-weight:600;">Expected Cost</b></label>
    <input type="Number-format" style="font-size:17px;" placeholder="Enter Exp.Cost" name="Cost" required>
	
<label for="Pincode" ><b style="font-size:22px;font-weight:700;">Pincode</b></label>
    <input type="number -format" style="font-size:17px;" placeholder="Enter Pincode" name="pincode" required><br>
	<label for="Pincode" ><b style="font-size:22px;font-weight:700;">Locality/Address</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter Address" name="Address" required>
        <label for="state" ><b style="font-size:22px;font-weight:700;">State</b></label>
    <input type="text" style="font-size:17px;" placeholder="Enter State" name="State" required>

          
            <div style="width: 459px;height: 1px;background: darkgray;margin-top: 14px;"></div>
         <p class="showGst" style="margin-top: 10px"><strong style="font-size:22px;font-weight:700;">GST Number</strong><!--<span class="stepBg helpIco"></span>--><span style="padding-left: 136px;">GSTN will get you genuine customers.</span></p>
         <div class="fldCont showGst" style="width: 71%;display: inline-block;"><input type="text"  name="" placeholder="15 digit GST Number e.g. 22AAAAA0000A1Z5" id="gst_in" value="" onblur="gstin_valid();form4_buttonActive()" maxlength="15" class="inputFld" style="padding-left: 20px; font-size:17px;">
          <!-- <span class="checkB"><input type="checkbox" name="" id="gstR"><label for="gstR" class="stepBg"></label><label>I will update later</label></span> -->
          <div class="GSTIN"><span><input type="radio" value="1" name="gstUpdte" onchange="form4_buttonActive();"><label> &nbsp; &nbsp;I don't remember</label></span>
<span><input  &nbsp; &nbsp; type="radio" value="2" name="gstUpdte" onchange="form4_buttonActive();"><label>&nbsp; &nbsp;I don't have it &nbsp; &nbsp;</label></span><span><input &nbsp; &nbsp; type="radio" value="3" name="gstUpdte" onchange="form4_buttonActive();"><label> &nbsp; &nbsp; I am exempted</label></span>
</div>
<label for="description"><b style="font-size:25px; font-weight:600;">Description of Your Product</b></label><br>
 <textarea  class="form-textarea"  cols="125" rows="6" data-component="textarea" aria-labelledby="label_14"></textarea>
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
