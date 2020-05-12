

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>
<body>

<h2>Accordion</h2>
<div class="detail_text_grp">			
					
					<h2 class="blu">Basic Instructions & Features</h2>
					<p>To utilize the online services please follow these basic steps (wherever asked):</p>
					<ul>
						<li><strong>Login Id and password creation:</strong> On the web-portal <a href="http://hrylabour.gov.in/">www.hrylabour.gov.in,</a> the user has to create his / her login Id using operational email-id. The Login Id and password details will be sent on user’s registered email-id and Mobile number. Please make sure you are providing valid, operational email id and mobile number. (Please remember your user name and password)</li>
						<li><strong>Enter relevant information (as required):</strong> During registration the user has to create a profile which is their Basic Information Performa (BIP). This performa contains all the basic information of the factory like address, workers, amount of power used, details of occupier / manager, Manufacturing process & declaration etc. This information will be used as a base for other availing other services covered under Factories Act, 1948 such that he / she will not have to provide same information again and again.</li>
						<li><strong>Document Submission (as required):</strong> Make sure the documents are submitted in the prescribed format and size.</li>
						<li><strong>Fees Payment (if required):</strong> User has the option to pay fees online or offline as per convenience. </li>
						<li><strong>Submit application for processing</strong></li>
						<li><strong>Application Tracking:</strong>User can track application status online and relevant updates will be sent on registered mobile number and email id as well.</li>
						<li><strong>Online License / Certificate Generation:</strong> After successful application processing, online certificate / license containing a 16 digit number will be generated. User can download the document and start using.</li>
						<li><strong>License / Certificate Verification from 3rd party:</strong> User can get their certificate / license verified from 3rd party through 16 digit number provided on the document generated online.</li>
					</ul>
				</div>

<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
let accHeading = document.querySelectorAll(".accordion");
let accPanel = document.querySelectorAll(".accordion-panel");

for (let i = 0; i < accHeading.length; i++) {
    // Execute whenever an accordion is clicked 
    accHeading[i].onclick = function() {
        if (this.nextElementSibling.style.maxHeight) {
           hidePanels();     // Hide All open Panels 
        } else {
           showPanel(this);  // Show the panel
        } 
    };
}

// Function to Show a Panel
function showPanel(elem) {
  hidePanels();
  elem.classList.add("active");
  elem.nextElementSibling.style.maxHeight = elem.nextElementSibling.scrollHeight + "px";
}

// Function to Hide all shown Panels
function hidePanels() {
  for (let i = 0; i < accPanel.length; i++) {
      accPanel[i].style.maxHeight = null;
      accHeading[i].classList.remove("active");
  }

</script>