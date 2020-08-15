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
      <?php include("left-nav.php"); ?><div style="padding:40px">
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

      
   </body>
</html>
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
 
    <center><h2 style="text-align:center; font-weight:400; font-size:40px;"> Employee</h2></center>


    <hr>
				

			 <form class="contact100-form validate-form">
			
										<div class="wrap-input100 validate-input" data-validate="Name is required" style=" border-bottom: none; outline:none;">
					<span class="label-input100" style="font-weight:200; font-size:20px;">Type Of Employee</span><br>
 <div class="New"><span><input type="radio" value="1" name="emp" id="fresher" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;Fresher</label></span> <br>
<span><input  &nbsp; &nbsp; type="radio" value="2" name="emp" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp; &nbsp;Experience<label></span><br>
</div>
</div>
						<div class="wrap-input100 validate-input" data-validate="Name is required">
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
			
				
 <div class="wrap-input100 validate-input" data-validate="Name is required" style=" border-bottom: none; outline:none;" id="empstatus">
					<span class="label-input100" >What is Your Current Employement Status</span><br>
 <div class="New"><span><input type="radio" value="4" name="empl" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;Employed</label></span> <br>
<span><input  &nbsp; &nbsp; type="radio" value="5" name="empl" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;">&nbsp; &nbsp;Self-Employed </label></span><br><span><input &nbsp; &nbsp; type="radio" value=63" name="empl" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;Unemployed </label></span>
<br><span><input &nbsp; &nbsp; type="radio" value="7" name="empl" onchange="form4_buttonActive();"><label style="font-size:15px;margin:4px;font-weight:normal;"> &nbsp; &nbsp;Student </label></span>
</div>
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
<div id="cid_7" class="wrap-input100 validate-input" >
      <span class="label-input100"> Date of Birth</span>
				<input class="input100" type="text" name="email" placeholder="DD/MM/YYYY">
					<span class="focus-input100"></span>
				</div>
         
            
          


				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"> Contact's</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>
<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100"> Expected Annual Salary</span>
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
					<span class="label-input100">Last Company you are worked for</span>
<textarea class="input100" name="res" placeholder="Company" id="work"></textarea>
   <span class="focus-input100"></span>
				</div>
			
			<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100"> Training and Certifications</span>
				
                    <textarea class="input100" name="message" placeholder="Training and Certificates"></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Describe Your Skill</span>
					<textarea class="input100" name="message" placeholder="Skills"></textarea>
					<span class="focus-input100"></span>
				</div>
        <div id="cid_303" class="wrap-input100 validate-input" style=" border-bottom: none; outline:none;">
			
        <span class="label-input100" id="label_303" for="input_303"> Upload Resume: </span>

          <input type="file" id="input_303" name="q303_uploadResume" class="form-upload" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload" />
        </div>

			  	<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100"> Address</span>
					<input class="input100" type="text" name="address" placeholder="Enter Address" id="Rbaddress">
					<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
					<span class="label-input100"> Country</span>
				<select class="dropdown-product selectpicker" id="country" name="country"style="width:100%;height:40px;font-size:15px; font-family: Poppins-Regular;border:0px;outline:none;">
                    <option value=""> Please Select </option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="China"> China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Curacao"> Curacao </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Republic of the Congo"> Republic of the Congo </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="South Sudan"> South Sudan </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="eSwatini"> eSwatini </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>

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
	