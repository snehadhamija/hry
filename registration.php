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
   <h1 style="text-align:center; font-weight:600; font-size:50px;">Employer/ Emplooyee</h1>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'employer')"style="font-color:#FFFFFF;background-color:#464b64;">Employer</button>
  <button class="tablinks" onclick="openCity(event, 'employee')">Employee</button>

</div>

<div id="employer" class="tabcontent">
  <div class="container">
  		
    <center><h2 style="text-align:center; font-weight:400; font-size:40px;"> Employer</h2></center>


    <hr>
				
		
			
	<form class="contact100-form validate-form">
					<div class="wrap-input100 validate-input" data-validate="Name is required" style=" border-bottom: none; outline:none;">
					<span class="label-input100" style="font-weight:200; font-size:20px;">Type Of Employee</span><br>
 <div class="New"><span><input type="radio" value="1" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;Fresher</label></span> <br>
<span><input  &nbsp; &nbsp; type="radio" value="2" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp; &nbsp;Experience<label></span><br><span><input &nbsp; &nbsp; type="radio" value="3" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp; Any (Both) </label></span>
</div>
</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Company-</span>
                	<input class="input100" type="text" name="companyname" placeholder="Enter Company name">
               
                      </div> 		<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Job Title-</span>
					               <select class="dropdown-product selectpicker" id="relcat" name="category" style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                <option value="">Select Job Title </option>
				<option value= "Administrative Assistant">Administrative Assistant</option>
<option value= "Receptionist">Receptionist</option>
<option value= "Office Manager">Office Manager</option>
<option value= "Auditing Clerk">Auditing Clerk</option>
<option value= "Bookkeeper">Bookkeeper</option>
<option value= "Account Executive">Account Executive</option>
<option value= "Branch Manager">Branch Manager</option>
<option value= "Business Manager">Business Manager</option>
<option value= "Quality Control Coordinator">Quality Control Coordinator</option>
<option value= "Administrative Manager">Administrative Manager</option>
<option value= "Chief Executive Officer">Chief Executive Officer</option>
<option value= "Business Analyst">Business Analyst</option>
<option value= "Risk Manager">Risk Manager</option>
<option value= "Human Resources">Human Resources</option>
<option value= "Office Assistant">Office Assistant</option>
<option value= "Secretary">Secretary</option>
<option value= "Office Clerk">Office Clerk</option>
<option value= "File Clerk">File Clerk</option>
<option value= "Account Collector">Account Collector</option>
<option value= "Administrative Specialist">Administrative Specialist</option>
<option value= "Executive Assistant">Executive Assistant</option>
<option value= "Program Administrator">Program Administrator</option>
<option value= "Program Manager">Program Manager</option>
<option value= "Administrative Analyst">Administrative Analyst</option>
<option value= "Data Entry">Data Entry</option>
<option value= "Team Leader">Team Leader</option>
<option value= "Manager">Manager</option>
<option value= "Assistant Manager">Assistant Manager</option>
<option value= "Executive">Executive</option>
<option value= "Director">Director</option>
<option value= "Coordinator">Coordinator</option>
<option value= "Administrator">Administrator</option>
<option value= "Controller">Controller</option>
<option value= "Officer">Officer</option>
<option value= "Organizer">Organizer</option>
<option value= "Supervisor">Supervisor</option>
<option value= "Superintendent">Superintendent</option>
<option value= "Head">Head</option>
<option value= "Overseer">Overseer</option>
<option value= "Chief">Chief</option>
<option value= "Foreman">Foreman</option>
<option value= "Controller">Controller</option>
<option value= "Principal">Principal</option>
<option value= "President">President</option>
<option value= "Lead">Lead</option>
<option value= "Computer Scientist">Computer Scientist</option>
<option value= "IT Professional">IT Professional</option>
<option value= "UX Designer & UI Developer">UX Designer & UI Developer</option>
<option value= "SQL Developer">SQL Developer</option>
<option value= "Web Designer">Web Designer</option>
<option value= "Web Developer">Web Developer</option>
<option value= "Help Desk Worker/Desktop Support">Help Desk Worker/Desktop Support</option>
<option value= "Software Engineer">Software Engineer</option>
<option value= "Data Entry">Data Entry</option>
<option value= "DevOps Engineer">DevOps Engineer</option>
<option value= "Computer Programmer">Computer Programmer</option>
<option value= "Network Administrator">Network Administrator</option>
<option value= "Information Security Analyst">Information Security Analyst</option>
<option value= "Artificial Intelligence Engineer">Artificial Intelligence Engineer</option>
<option value= "Cloud Architect">Cloud Architect</option>
<option value= "IT Manager">IT Manager</option>
<option value= "Technical Specialist">Technical Specialist</option>
<option value= "Application Developer">Application Developer</option>
<option value= "Chief Technology Officer (CTO)">Chief Technology Officer (CTO)</option>
<option value= "Chief Information Officer (CIO)">Chief Information Officer (CIO)</option>
<option value= "Sales Associate">Sales Associate</option>
<option value= "Sales Representative">Sales Representative</option>
<option value= "Sales Manager">Sales Manager</option>
<option value= "Retail Worker">Retail Worker</option>
<option value= "Store Manager">Store Manager</option>
<option value= "Sales Representative">Sales Representative</option>
<option value= "Sales Manager">Sales Manager</option>
<option value= "Real Estate Broker">Real Estate Broker</option>
<option value= "Sales Associate">Sales Associate</option>
<option value= "Cashier">Cashier</option>
<option value= "Store Manager">Store Manager</option>
<option value= "Account Executive">Account Executive</option>
<option value= "Account Manager">Account Manager</option>
<option value= "Area Sales Manager">Area Sales Manager</option>
<option value= "Direct Salesperson">Direct Salesperson</option>
<option value= "Director of Inside Sales">Director of Inside Sales</option>
<option value= "Outside Sales Manager">Outside Sales Manager</option>
<option value= "Sales Analyst">Sales Analyst</option>
<option value= "Market Development Manager">Market Development Manager</option>
<option value= "B2B Sales Specialist">B2B Sales Specialist</option>
<option value= "Sales Engineer">Sales Engineer</option>
<option value= "Merchandising Associate">Merchandising Associate</option>
<option value= "onstruction Worker">onstruction Worker</option>
<option value= "Taper">Taper</option>
<option value= "Plumber">Plumber</option>
<option value= "Heavy Equipment Operator">Heavy Equipment Operator</option>
<option value= "Vehicle or Equipment Cleaner">Vehicle or Equipment Cleaner</option>
<option value= "Carpenter">Carpenter</option>
<option value= "Electrician">Electrician</option>
<option value= "Painter">Painter</option>
<option value= "Welder">Welder</option>
<option value= "Handyman">Handyman</option>
<option value= "Boilermaker">Boilermaker</option>
<option value= "Crane Operator">Crane Operator</option>
<option value= "Building Inspector">Building Inspector</option>
<option value= "Pipefitter">Pipefitter</option>
<option value= "Sheet Metal Worker">Sheet Metal Worker</option>
<option value= "Iron Worker">Iron Worker</option>
<option value= "Mason">Mason</option>
<option value= "Roofer">Roofer</option>
<option value= "Solar Photovoltaic Installer">Solar Photovoltaic Installer</option>
<option value= "Well Driller">Well Driller</option>

<option value="Other">Other</option>
</select>
</div>

	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Job Location</span>
                  	<input class="input100" type="text" name="loc" placeholder="Enter Job Location">
                        
                      </div>
			
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Job Responsibilities</span>
<textarea class="input100" name="res" placeholder="Enter Resposblties."></textarea>
   <span class="focus-input100"></span>
				</div>
			<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100"> Job Requirements</span>
				<select class="dropdown-product selectpicker" id="status" name="plant"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Job Requirements are</option>
          <option value="Never Used or Un Used">Never Used or Un Used</option>
          <option value="On Production">On Production </option>
          <option value="Occasionally Usage">Occasionally Usage</option>
          <option value="Idle on Foundation">Idle on Foundation</option>
                    <option value="Power Discconected">Power Disconnected</option>
                    <option value="Kept Aside">Kept Aside</option>
                    <option value="Dismantled">Dismantled Completely</option>
                  </select><span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Company and Benefits</span>
					<textarea class="input100" name="message" placeholder="Company Benfits"></textarea>
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
					<span class="label-input100"> Annual Salary</span>
<select class="dropdown-product selectpicker" id="salary" name="salary"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Enter salary</option>
          <option value="Never Used or Un Used"><=500000</option>
          <option value="On Production">50000 to <=200000</option>
          <option value="Occasionally Usage">200000 to <=500000</option>
          <option value="Idle on Foundation">500000 to <=700000</option>
                    <option value="Power Discconected">700000 to <=1000000</option>
                    <option value="Kept Aside">Above 1000000</option>
                    
                  </select>
					<span class="focus-input100"></span>
				</div>
			  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100"> Address</span>
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
	
	<div id="employee" class="tabcontent">
  <div class="container">
 
    <center><h2 style="text-align:center; font-weight:400; font-size:40px;"> Buyer</h2></center>


    <hr>
				

			 <form class="contact100-form validate-form">
			
										<div class="wrap-input100 validate-input" data-validate="Name is required" style=" border-bottom: none; outline:none;">
					<span class="label-input100" style="font-weight:200; font-size:20px;">Type Of Employee</span><br>
 <div class="New"><span><input type="radio" value="1" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;Fresher</label></span> <br>
<span><input  &nbsp; &nbsp; type="radio" value="2" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp; &nbsp;Experience<label></span><br><span><input &nbsp; &nbsp; type="radio" value="3" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp; Any (Both) </label></span>
</div>
</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Company-</span>
                	<input class="input100" type="text" name="companyname" placeholder="Enter Company name">
               
                      </div> 		<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">What position are you applying for?
-</span>
					               <select class="dropdown-product selectpicker" id="relcat" name="category" style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                <option value="">Select your position are you applying for?
 </option>
				<option value= "Administrative Assistant">Administrative Assistant</option>
<option value= "Receptionist">Receptionist</option>
<option value= "Office Manager">Office Manager</option>
<option value= "Auditing Clerk">Auditing Clerk</option>
<option value= "Bookkeeper">Bookkeeper</option>
<option value= "Account Executive">Account Executive</option>
<option value= "Branch Manager">Branch Manager</option>
<option value= "Business Manager">Business Manager</option>
<option value= "Quality Control Coordinator">Quality Control Coordinator</option>
<option value= "Administrative Manager">Administrative Manager</option>
<option value= "Chief Executive Officer">Chief Executive Officer</option>
<option value= "Business Analyst">Business Analyst</option>
<option value= "Risk Manager">Risk Manager</option>
<option value= "Human Resources">Human Resources</option>
<option value= "Office Assistant">Office Assistant</option>
<option value= "Secretary">Secretary</option>
<option value= "Office Clerk">Office Clerk</option>
<option value= "File Clerk">File Clerk</option>
<option value= "Account Collector">Account Collector</option>
<option value= "Administrative Specialist">Administrative Specialist</option>
<option value= "Executive Assistant">Executive Assistant</option>
<option value= "Program Administrator">Program Administrator</option>
<option value= "Program Manager">Program Manager</option>
<option value= "Administrative Analyst">Administrative Analyst</option>
<option value= "Data Entry">Data Entry</option>
<option value= "Team Leader">Team Leader</option>
<option value= "Manager">Manager</option>
<option value= "Assistant Manager">Assistant Manager</option>
<option value= "Executive">Executive</option>
<option value= "Director">Director</option>
<option value= "Coordinator">Coordinator</option>
<option value= "Administrator">Administrator</option>
<option value= "Controller">Controller</option>
<option value= "Officer">Officer</option>
<option value= "Organizer">Organizer</option>
<option value= "Supervisor">Supervisor</option>
<option value= "Superintendent">Superintendent</option>
<option value= "Head">Head</option>
<option value= "Overseer">Overseer</option>
<option value= "Chief">Chief</option>
<option value= "Foreman">Foreman</option>
<option value= "Controller">Controller</option>
<option value= "Principal">Principal</option>
<option value= "President">President</option>
<option value= "Lead">Lead</option>
<option value= "Computer Scientist">Computer Scientist</option>
<option value= "IT Professional">IT Professional</option>
<option value= "UX Designer & UI Developer">UX Designer & UI Developer</option>
<option value= "SQL Developer">SQL Developer</option>
<option value= "Web Designer">Web Designer</option>
<option value= "Web Developer">Web Developer</option>
<option value= "Help Desk Worker/Desktop Support">Help Desk Worker/Desktop Support</option>
<option value= "Software Engineer">Software Engineer</option>
<option value= "Data Entry">Data Entry</option>
<option value= "DevOps Engineer">DevOps Engineer</option>
<option value= "Computer Programmer">Computer Programmer</option>
<option value= "Network Administrator">Network Administrator</option>
<option value= "Information Security Analyst">Information Security Analyst</option>
<option value= "Artificial Intelligence Engineer">Artificial Intelligence Engineer</option>
<option value= "Cloud Architect">Cloud Architect</option>
<option value= "IT Manager">IT Manager</option>
<option value= "Technical Specialist">Technical Specialist</option>
<option value= "Application Developer">Application Developer</option>
<option value= "Chief Technology Officer (CTO)">Chief Technology Officer (CTO)</option>
<option value= "Chief Information Officer (CIO)">Chief Information Officer (CIO)</option>
<option value= "Sales Associate">Sales Associate</option>
<option value= "Sales Representative">Sales Representative</option>
<option value= "Sales Manager">Sales Manager</option>
<option value= "Retail Worker">Retail Worker</option>
<option value= "Store Manager">Store Manager</option>
<option value= "Sales Representative">Sales Representative</option>
<option value= "Sales Manager">Sales Manager</option>
<option value= "Real Estate Broker">Real Estate Broker</option>
<option value= "Sales Associate">Sales Associate</option>
<option value= "Cashier">Cashier</option>
<option value= "Store Manager">Store Manager</option>
<option value= "Account Executive">Account Executive</option>
<option value= "Account Manager">Account Manager</option>
<option value= "Area Sales Manager">Area Sales Manager</option>
<option value= "Direct Salesperson">Direct Salesperson</option>
<option value= "Director of Inside Sales">Director of Inside Sales</option>
<option value= "Outside Sales Manager">Outside Sales Manager</option>
<option value= "Sales Analyst">Sales Analyst</option>
<option value= "Market Development Manager">Market Development Manager</option>
<option value= "B2B Sales Specialist">B2B Sales Specialist</option>
<option value= "Sales Engineer">Sales Engineer</option>
<option value= "Merchandising Associate">Merchandising Associate</option>
<option value= "onstruction Worker">onstruction Worker</option>
<option value= "Taper">Taper</option>
<option value= "Plumber">Plumber</option>
<option value= "Heavy Equipment Operator">Heavy Equipment Operator</option>
<option value= "Vehicle or Equipment Cleaner">Vehicle or Equipment Cleaner</option>
<option value= "Carpenter">Carpenter</option>
<option value= "Electrician">Electrician</option>
<option value= "Painter">Painter</option>
<option value= "Welder">Welder</option>
<option value= "Handyman">Handyman</option>
<option value= "Boilermaker">Boilermaker</option>
<option value= "Crane Operator">Crane Operator</option>
<option value= "Building Inspector">Building Inspector</option>
<option value= "Pipefitter">Pipefitter</option>
<option value= "Sheet Metal Worker">Sheet Metal Worker</option>
<option value= "Iron Worker">Iron Worker</option>
<option value= "Mason">Mason</option>
<option value= "Roofer">Roofer</option>
<option value= "Solar Photovoltaic Installer">Solar Photovoltaic Installer</option>
<option value= "Well Driller">Well Driller</option>

<option value="Other">Other</option>
</select>
</div>

	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Job Location</span>
                  	<input class="input100" type="text" name="loc" placeholder="Enter Job Location">
                        
                      </div>
			
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Job Responsibilities</span>
<textarea class="input100" name="res" placeholder="Enter Resposblties."></textarea>
   <span class="focus-input100"></span>
				</div>
			<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100"> Job Requirements</span>
				<select class="dropdown-product selectpicker" id="status" name="plant"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Job Requirements are</option>
          <option value="Never Used or Un Used">Never Used or Un Used</option>
          <option value="On Production">On Production </option>
          <option value="Occasionally Usage">Occasionally Usage</option>
          <option value="Idle on Foundation">Idle on Foundation</option>
                    <option value="Power Discconected">Power Disconnected</option>
                    <option value="Kept Aside">Kept Aside</option>
                    <option value="Dismantled">Dismantled Completely</option>
                  </select><span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Company and Benefits</span>
					<textarea class="input100" name="message" placeholder="Company Benfits"></textarea>
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
					<span class="label-input100"> Annual Salary</span>
<select class="dropdown-product selectpicker" id="salary" name="salary"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                     <option value="">Enter salary</option>
          <option value="Never Used or Un Used"><=500000</option>
          <option value="On Production">50000 to <=200000</option>
          <option value="Occasionally Usage">200000 to <=500000</option>
          <option value="Idle on Foundation">500000 to <=700000</option>
                    <option value="Power Discconected">700000 to <=1000000</option>
                    <option value="Kept Aside">Above 1000000</option>
                    
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