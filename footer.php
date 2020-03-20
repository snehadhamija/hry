
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


</body>
</html>