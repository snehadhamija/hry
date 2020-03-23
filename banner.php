<div class="banner-section">
		   <h3 class="tittle">One Stop Solution for MSME's & SMES's <i class=""></i></h3>
			<div class="banner">
                 <div  class="callbacks_container">
					<ul class="rslides" id="slider4" style="height:310px;">
					       <li>
							  <img src="images/11.jpg" class="img-responsive" alt="" />

							</li>
							<li>
								 <img src="images/22.jpg" class="img-responsive" alt="" />
							</li>
						</ul>
					</div>
					<!--banner-->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
		 <div class="clearfix"> </div>
			   
			 </div>
			   <!--//banner-->
			 