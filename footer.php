</div>
</div>
  <div class="clearfix"> </div>
<link href="css/footer.css" rel='stylesheet' type='text/css' media="all">
<footer class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <section>
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <div class="">
                  <div class="row footer-agile-grids ">
                     <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Follow Us</h4>
                        <div class="footer-icons">
                           <ul style="margin:0px;padding:0px;">
                              <li class="mb-2">
                                 <a href="#"><span class="fab fa-facebook-f"></span></a>
                                 <h6 class="ml-3 text-left">Facebook</h6>
                              </li>
                              <li class="mb-2">
                                 <a href="#"><span class="fas fa-envelope"></span></a>
                                 <h6 class="ml-3 text-left">Gmail</h6>
                              </li>
                              <li class="mb-2">
                                 <a href="#"><span class="fab fa-twitter"></span></a>
                                 <h6 class="ml-3 text-left">Twitter</h6>
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                        <h4 class="pb-lg-3 pb-3">Links</h4>
                        <nav class="border-line">
                           <ul class="nav flex-column" id="foot">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home </a>
                              </li>
                              <li class="nav-item">
                                 <a href="about.php" class="nav-link">About</a>
                              </li>
                              <li class="nav-item">
                                 <a href="contact.php" class="nav-link">Contact</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="wthree-left-right col-lg-4 col-md-4 col-sm-12">
                        <h4 class="pb-lg-3 pb-3">Get In Touch</h4>
                        <div class="wls-hours-list">
                           <ul style="margin:0px;padding:0px;">
                              <li class="d-flex"><i style="font-size:24px" class="fa">&#xf095;</i>
<span class="time ml-auto">01666-232543, 234565</span></li>
                              <li class="d-flex"><i style="font-size:24px" class="fa">&#xf0e0;</i> <span class="time ml-auto">kboffice.india@gmail.com</span></li>
                              <li class="d-flex"><i style="font-size:24px" class="fa fa-clock-o" aria-hidden="true"></i> <span class="time ml-auto">10 AM - 6 PM</span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--<div class="copy-agile-right text-center">
            <p>© 2018 Molten. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
         </div>-->
      </footer>
  <div class="clearfix"> </div>
<div class="copy">
		    <p>&copy; 2020 HaryanaIndustries.com | All Rights Reserved | Developed by <a href="#">DGM Technology Pvt. Ltd.</a></p>
</div>
<div class="clearfix"> </div>
</div>
</div>
<script src="js/ace-responsive-menu.js" type="text/javascript"></script>
	
	<!--Plugin Initialization-->
    <script type="text/javascript">
	$(document).ready(function () {
		$("#respMenu").aceResponsiveMenu({
			resizeWidth: '768', // Set the same in Media query       
			animationSpeed: 'fast', //slow, medium, fast
			accoridonExpAll: false //Expands all the accordion menu on click
		});
	});
	</script>
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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
}
</script>
</body>
</html>