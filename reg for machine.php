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
      <div class="col-md-8 main" style="background:#fff">
      
  <br>
  <br>
      <a href="index.php"><b style="margin-right:15px; font-size:20px;font-weight:400; float:right;margin-top:20px;">Go Back</b></a>
   <h1 style="text-align:center; font-weight:600; font-size:50px;">Seller/Buyer</h1>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Sale')"style="font-color:#FFFFFF;background-color:#464b64;">Seller</button>
  <button class="tablinks" onclick="openCity(event, 'Purchase')">Buyer</button>

</div>

<div id="Sale" class="tabcontent">
  <div class="container">
  		
    <center><h2 style="text-align:center; font-weight:400; font-size:40px;"> Seller</h2></center>


    <hr>
				
		
			
	<form class="contact100-form validate-form">
					<div class="wrap-input100 validate-input" data-validate="Name is required" style=" border-bottom: none; outline:none;">
					<span class="label-input100" style="font-weight:200; font-size:20px;">Type Of Machinary</span><br>
 <div class="New"><span><input type="radio" value="1" name="sale"  id="new" onclick="f(this)"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;New Machinery</label></span> <br>
<span><input  &nbsp; &nbsp; type="radio" value="2" name="sale"  id="old" onclick="f(this)"><label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp; &nbsp;Old Machinery <label></span><br><span><input &nbsp; &nbsp; type="radio" value="3" name="sale" id="any" onclick="f(this)"> <label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp;&nbsp; Any (Both) </label></span>
</div>
</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Enquiring As-</span>
               
                  <select class="dropdown-product selectpicker" id="youaresale" name="enquring"onchange="mfg_sale();" style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                    <option value="">Select You are Enquiring As</option>
					 <option value="Manufacturer">I am Machinery Manufacturer</option>
                    <option value="Consultant">I am Consultant</option>
                    <option value="Scrap Trader">I am Scrap Trader</option>
                    <option value="Other">Other</option>
                  </select>
                      </div> 		<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Category of Machinary-</span>
					               <select class="dropdown-product selectpicker" id="relcat" name="category" style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                <option value="">Select Proper Category  </option>
				<option value="Chemical and Pharma Machinery">Chemical and Pharma Machinery</option>
<option value="Cattle Feed Machinery">Cattle Feed Machinery</option>
<option value="Cement Plant">Cement Plant</option>
<option value="Ceramic Machinery">Ceramic Machinery</option>
<option value="Chilling Plant">Chilling Plant</option>
<option value="Cooling Tower">Cooling Tower</option>
<option value="Cosmetic Machinery">Cosmetic Machinery</option>
<option value="Dairy - Milk Processing Plant">Dairy - Milk Processing Plant</option>
<option value="Diesel Generator Sets">Diesel Generator Sets</option>
<option value="Earthmoving Machinery">Earthmoving Machinery</option>
<option value="Electric Motors">Electric Motors</option>
<option value="Engineering Machinery">Engineering Machinery</option>
<option value="Food Processing and Beverages Machinery">Food Processing and Beverages Machinery</option>
<option value="Ginning Pressing Machinery">Ginning Pressing Machinery</option>
<option value="Grain Processing Machinery">Grain Processing Machinery</option>
<option value="Laboratory Equipments">Laboratory Equipments</option>
<option value="Mineral Grinding and Processing Machinery">Mineral Grinding and Processing Machinery</option>
<option value="Miscellenious Machinery">Miscellenious Machinery</option>
<option value="Oxygen Nitrogen Gas Plants">Oxygen Nitrogen Gas Plants</option>
<option value="Packaging and Printing Machinery">Packaging and Printing Machinery</option>
<option value="Paper and Pulp Machinery">Paper and Pulp Machinery</option>
<option value="Plastic Machinery">Plastic Machinery</option>
<option value="Plywood Laminate and Woodworking Machinery">Plywood Laminate and Woodworking Machinery</option>
<option value="Power Plant">Power Plant</option>
<option value="Refinery and Oil Mill">Refinery and Oil Mill</option>
<option value="Rolling Mill Foundry and Furnaces">Rolling Mill Foundry and Furnaces</option>
<option value="Rubber Machinery">Rubber Machinery</option>
<option value="Solvent Extraction Plant">Solvent Extraction Plant</option>
<option value="Steam Boilers and Thermic Fluid Heaters">Steam Boilers and Thermic Fluid Heaters</option>
<option value="Storage Tanks">Storage Tanks</option>
<option value="Sugar Mill Machinery">Sugar Mill Machinery</option>
<option value="Textile Machinery">Textile Machinery</option>
<option value="Transformer">Transformer</option>
<option value="Weigh Bridge">Weigh Bridge</option>
<option value="Other">Other</option>

				
				
            			  
</select>
</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name of Machinery(s) or plant</span>
					<input class="input100" type="text" name="machineryorplant" placeholder="Enter Name of Machinery(s) or plant">
					<span class="focus-input100"></span>
				</div>
				
								<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Capacity/Size</span>
					<input class="input100" type="text" name="capacity" placeholder="Enter Capacity/Size">
					<span class="focus-input100"></span>
				</div>
			<div class="wrap-input100 validate-input" data-validate="Name is required" id="status" style="display:block;">
					<span class="label-input100">Status of Machinery(s) or Plant is</span>
				<select class="dropdown-product selectpicker"  name="plant"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Status of Machinery(s) or Plant is</option>
					<option value="Never Used or Un Used">Never Used or Un Used</option>
					<option value="On Production">On Production </option>
					<option value="Occasionally Usage">Occasionally Usage</option>
					<option value="Idle on Foundation">Idle on Foundation</option>
                    <option value="Power Discconected">Power Disconnected</option>
                    <option value="Kept Aside">Kept Aside</option>
                    <option value="Dismantled">Dismantled Completely</option>
                  </select><span class="focus-input100"></span>
				</div>
							<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Requirement is</span>
				<select class="dropdown-product selectpicker" id="sreqtime" name="rseqtime"  style="width:100%;height:40px;font-size:15px  font-family: Poppins-Regular;border:0px;outline:none;">
                    <option value="">----Select Your requirement is----</option>
					<option value="Urgent">Urgent/Immediate</option>
					<option value="Within Week">Within Week</option>
					<option value="Within 15 Days">Within 15 Days</option>
                    <option value="Within One Month">Within One Month</option>
                  

                  </select>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Description of Your Machinery<small>(Like as Capacity, Model, MFG Date,Power Load, Man-Power for Operation)</small></span>
					<textarea class="input100" name="message" placeholder="Description of Machinery."></textarea>
					<span class="focus-input100"></span>
				</div>
								  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Company</span>
					<input class="input100" type="text" name="company" placeholder="Enter Company">
					<span class="focus-input100"></span>
				</div>
				  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Contact Person:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"> Contact's</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"> Expected Sale Price</span>
<select class="dropdown-product selectpicker" id="price" name="price"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Expected Sale Price</option>
          <option value="Never Used or Un Used"><=50,000</option>
          <option value="On Production">50,000 to <=2,00000</option>
          <option value="Occasionally Usage">2,00000 to <=5,00000</option>
          <option value="Idle on Foundation">5,00000 to <=7,00000</option>
                    <option value="Power Discconected">7,00000 to <=10,00000</option>
                    <option value="Kept Aside">Above 10,00000</option>
                  </select>
					<span class="focus-input100"></span>
				</div>
			  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Register Office Address</span>
					<input class="input100" type="text" name="address" placeholder="Enter Office Address" id="Rsaddress">
					<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
					<span class="label-input100"> Country</span>
					<input class="input100" type="text" name="address" placeholder="Enter Country" id="rscountry">

<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" >
					<span class="label-input100"> State</span>
					<input class="input100" type="text" name="state" placeholder="Enter State" id="rsstate">

<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"> City</span>
					<input class="input100" type="text" name="city" placeholder="Enter City" id="rscity">

<span class="focus-input100"></span>
				</div>
 <div class="wrap-input100 validate-input">
					<span class="label-input100"> Pincode</span>
		<input class="input100" type="number" name="pincode" placeholder="Enter Pincode" id="rspincode">
 <span class="focus-input100"></span>
				</div>
					<div style="display:none; border-bottom: none; outline:none;" id="factories_saler" class="wrap-input100 validate-input" >
<div class="New"><span><input type="checkbox" value="same" id="same_as_sale" name="same" onchange="fs();"><label style="font-size:15px;margin:4px;font-weight:bold;"> &nbsp; &nbsp;Same as above</label></span> <br>

</div>
				 	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Factory Address</span>
					<input class="input100" type="text" name="address" placeholder="Enter Office Address" id="fsaddress">
					<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
					<span class="label-input100"> Country</span>
					<input class="input100" type="text" name="address" placeholder="Enter Country" id="fscountry">

<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" >
					<span class="label-input100"> State</span>
					<input class="input100" type="text" name="state" placeholder="Enter State" id="fsstate">

<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"> City</span>
					<input class="input100" type="text" name="city" placeholder="Enter City" id="fscity">

<span class="focus-input100"></span>
				</div>
 <div class="wrap-input100 validate-input">
					<span class="label-input100"> Pincode</span>
		<input class="input100" type="number" name="pincode" placeholder="Enter Pincode" id="fspincode">
 <span class="focus-input100"></span>
				</div>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<script>
	function f(a)
	{
		
		var check = a.value;
		if (check =="1")
		{
			document.getElementById('status').style.display="none";
		}
		else
		{
			document.getElementById('status').style.display="block";
		}
	}
	</script>
	<div id="Purchase" class="tabcontent">
  <div class="container">
 
    <center><h2 style="text-align:center; font-weight:400; font-size:40px;"> Buyer</h2></center>


    <hr>
				

			 <form class="contact100-form validate-form">
			
					<div class="wrap-input100 validate-input" data-validate="Name is required" style=" border-bottom: none; outline:none;">
					<span class="label-input100" style="font-weight:200; font-size:20px;">Type Of Machinary</span><br>
 <div class="New"><span><input type="radio" value="1" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;New Machinery</label></span> <br>
<span><input  &nbsp; &nbsp; type="radio" value="2" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp; &nbsp;Old Machinery <label></span><br><span><input &nbsp; &nbsp; type="radio" value="3" name="sale" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp;&nbsp; Any (Both) </label></span>
</div>
</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Enquiring As-</span>
               
                  <select class="dropdown-product selectpicker" id="youare" name="enquring" onchange = "mfg()" style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                    <option value="">Select You are Enquiring As</option>
					 <option value="Manufacturer">I am End User</option>
                    <option value="Consultant">I am Consultant</option>
                    <option value="Scrap Trader">I am Scrap Trader</option>
                    <option value="Other">Other</option>
                  </select>
                      </div> 		<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Category of Machinary-</span>
					               <select class="dropdown-product selectpicker" id="relcat" name="category" style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                <option value="">Select Proper Category  </option>
				<option value="Chemical and Pharma Machinery">Chemical and Pharma Machinery</option>
<option value="Cattle Feed Machinery">Cattle Feed Machinery</option>
<option value="Cement Plant">Cement Plant</option>
<option value="Ceramic Machinery">Ceramic Machinery</option>
<option value="Chilling Plant">Chilling Plant</option>
<option value="Cooling Tower">Cooling Tower</option>
<option value="Cosmetic Machinery">Cosmetic Machinery</option>
<option value="Dairy - Milk Processing Plant">Dairy - Milk Processing Plant</option>
<option value="Diesel Generator Sets">Diesel Generator Sets</option>
<option value="Earthmoving Machinery">Earthmoving Machinery</option>
<option value="Electric Motors">Electric Motors</option>
<option value="Engineering Machinery">Engineering Machinery</option>
<option value="Food Processing and Beverages Machinery">Food Processing and Beverages Machinery</option>
<option value="Ginning Pressing Machinery">Ginning Pressing Machinery</option>
<option value="Grain Processing Machinery">Grain Processing Machinery</option>
<option value="Laboratory Equipments">Laboratory Equipments</option>
<option value="Mineral Grinding and Processing Machinery">Mineral Grinding and Processing Machinery</option>
<option value="Miscellenious Machinery">Miscellenious Machinery</option>
<option value="Oxygen Nitrogen Gas Plants">Oxygen Nitrogen Gas Plants</option>
<option value="Packaging and Printing Machinery">Packaging and Printing Machinery</option>
<option value="Paper and Pulp Machinery">Paper and Pulp Machinery</option>
<option value="Plastic Machinery">Plastic Machinery</option>
<option value="Plywood Laminate and Woodworking Machinery">Plywood Laminate and Woodworking Machinery</option>
<option value="Power Plant">Power Plant</option>
<option value="Refinery and Oil Mill">Refinery and Oil Mill</option>
<option value="Rolling Mill Foundry and Furnaces">Rolling Mill Foundry and Furnaces</option>
<option value="Rubber Machinery">Rubber Machinery</option>
<option value="Solvent Extraction Plant">Solvent Extraction Plant</option>
<option value="Steam Boilers and Thermic Fluid Heaters">Steam Boilers and Thermic Fluid Heaters</option>
<option value="Storage Tanks">Storage Tanks</option>
<option value="Sugar Mill Machinery">Sugar Mill Machinery</option>
<option value="Textile Machinery">Textile Machinery</option>
<option value="Transformer">Transformer</option>
<option value="Weigh Bridge">Weigh Bridge</option>
<option value="Other">Other</option>

				
				
            			  
</select>
</div>
	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name of Machinery(s) or plant</span>
                     <input type="text"style="font-size:15px; font-family: Poppins-Regular;" placeholder="Enter Name of Machinery(s) or plant" name="machineryorplant" required>
                        
                      </div>
			
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Capacity/Size</span>
   <input type="text"style="font-size:15px; font-family: Poppins-Regular;" placeholder="Enter Capacity/Size" name="capacity" required>
   <span class="focus-input100"></span>
				</div>
			<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Requirement is</span>
				<select class="dropdown-product selectpicker" id="reqtime" name="reqtime"  style="width:100%;height:40px;font-size:15px  font-family: Poppins-Regular;border:0px;outline:none;">
                    <option value="">----Select Your requirement is----</option>
					<option value="Urgent">Urgent/Immediate</option>
					<option value="Within Week">Within Week</option>
					<option value="Within 15 Days">Within 15 Days</option>
                    <option value="Within One Month">Within One Month</option>
                    <option value="Within Six Months">Within Six Month</option>
                    <option value="Any Time">Any Time</option>
                  </select>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Description of Your Machinery<small>(Like as Capacity, Model, MFG Date,Power Load, Man-Power for Operation)</small></span>
					<textarea class="input100" name="message" placeholder="Description of Machinery."></textarea>
					<span class="focus-input100"></span>
				</div>
								  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Company</span>
					<input class="input100" type="text" name="company" placeholder="Enter Company">
					<span class="focus-input100"></span>
				</div>
				  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Contact Person</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"> Contact's:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"> Expected Price</span>
<select class="dropdown-product selectpicker" id="price" name="price"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Expected Price<option>
          <option value="Never Used or Un Used"><=50,000</option>
          <option value="On Production">50,000 to <=2,00000</option>
          <option value="Occasionally Usage">2,00000 to <=5,00000</option>
          <option value="Idle on Foundation">5,00000 to <=7,00000</option>
                    <option value="Power Discconected">7,00000 to <=10,00000</option>
                    <option value="Kept Aside"> Above 10,00000</option>
                    
                  </select>
					<span class="focus-input100"></span>
				</div>
			  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Register Office Address</span>
					<input class="input100" type="text" name="address" placeholder="Enter Office Address" id="Rbaddress">
					<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
					<span class="label-input100"> Country</span>
					<input class="input100" type="text" name="address" placeholder="Enter Country" id="rbcountry">

<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" >
					<span class="label-input100"> State</span>
					<input class="input100" type="text" name="state" placeholder="Enter State" id="rbstate">

<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"> City</span>
					<input class="input100" type="text" name="city" placeholder="Enter City" id="rbcity">

<span class="focus-input100"></span>
				</div>
 <div class="wrap-input100 validate-input">
					<span class="label-input100"> Pincode</span>
		<input class="input100" type="number" name="pincode" placeholder="Enter Pincode" id="rbpincode">
 <span class="focus-input100"></span>
				</div>
				<div style="display:none; border-bottom: none; outline:none;" id="factories_buyer" class="wrap-input100 validate-input" >
				<div class="New"><span><input type="checkbox" id="same_as" value="same" name="same" onchange="fb();"><label style="font-size:15px;margin:4px;font-weight:bold;"> &nbsp; &nbsp;Same as above</label></span> <br>
				</div>
				
				 	<div class="wrap-input100 validate-input " data-validate="factory address is required">
					<span class="label-input100	">Factory Address</span>
					<input class="input100" type="text" name="address" placeholder="Enter factory Address" id="fbaddress">
					<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
					<span class="label-input100"> Country</span>
					<input class="input100" type="text" name="address" placeholder="Enter Country" id="fbcountry">

<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" >
					<span class="label-input100"> State</span>
					<input class="input100" type="text" name="state" placeholder="Enter State" id="fbstate">

<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100"> City</span>
					<input class="input100" type="text" name="city" placeholder="Enter City" id="fbcity">

<span class="focus-input100"></span>
				</div>
 <div class="wrap-input100 validate-input">
					<span class="label-input100"> Pincode</span>
		<input class="input100" type="number" name="pincode" placeholder="Enter Pincode" id="fbpincode">
 <span class="focus-input100"></span>
				</div>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	
<script>
function fs()
{
	var address= document.getElementById("Rsaddress").value;
	var country= document.getElementById("rscountry").value;
	var state= document.getElementById("rsstate").value;
	var city= document.getElementById("rscity").value;
	var pin= document.getElementById("rspincode").value;
	
	if(document.getElementById("same_as_sale").checked == true)
	{
		document.getElementById("fsaddress").value=address ;
		document.getElementById("fscountry").value= country;
		document.getElementById("fsstate").value= state;
		document.getElementById("fscity").value= city;
		document.getElementById("fspincode").value= pin;
	}
	else{
		document.getElementById("fsaddress").value="" ;
		document.getElementById("fscountry").value= "";
		document.getElementById("fsstate").value= "";
		document.getElementById("fscity").value= "";
		document.getElementById("fspincode").value= "";
	}
}
function fb()
{
	var address= document.getElementById("Rbaddress").value;
	var country= document.getElementById("rbcountry").value;
	var state= document.getElementById("rbstate").value;
	var city= document.getElementById("rbcity").value;
	var pin= document.getElementById("rbpincode").value;
	
	if(document.getElementById("same_as").checked == true)
	{
		document.getElementById("fbaddress").value=address ;
		document.getElementById("fbcountry").value= country;
		document.getElementById("fbstate").value= state;
		document.getElementById("fbcity").value= city;
		document.getElementById("fbpincode").value= pin;
	}
	else{
		document.getElementById("fbaddress").value="" ;
		document.getElementById("fbcountry").value= "";
		document.getElementById("fbstate").value= "";
		document.getElementById("fbcity").value= "";
		document.getElementById("fbpincode").value= "";
	}
}
</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>


	<script type="text/javascript" src="js/main.js"></script>


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
<script>
function mfg_sale()
{
	var m = document.getElementById("youaresale").value;
	if(m == "Manufacturer")
	{
		document.getElementById("factories_saler").style.display="block"
	}
	else
	{
		document.getElementById("factories_saler").style.display="none"
	}
}


function mfg()
{
	var m = document.getElementById("youare").value;
	if(m == "Manufacturer")
	{
		document.getElementById("factories_buyer").style.display="block"
	}
	else
	{
		document.getElementById("factories_buyer").style.display="none"
	}
}
</script>
<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>