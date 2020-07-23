<?php 

$response = api::call();
class Api{
public static function call(){
$url = 'http://localhost:8090/haryana';
$collection_name = 'menu';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,TRUE);
   
?>

  
  <div class="demo" class="column">
   <span class="menu"> </span>

	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
           
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
		
        </div>
		
					
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <div class="collapse navbar-collapse js-navbar-collapse">
			<ul class="nav navbar-nav" style="background: #bc3232;">
        <?php 
		 // get menu name
		 foreach($response as $key => $value) 
        {
			echo '<li  class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">';
            echo  $value['menu'] . '<span class="caret"></span>';
            echo '</a>';
			// get menu category
			$id = $value['id'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'http://localhost:8090/haryana/menuCategory');
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$result = curl_exec($ch);
			$result_obj = json_decode($result, TRUE);
			echo '<ul class="dropdown-menu mega-dropdown-menu">';
			foreach ($result_obj as $key => $obj) 
			{
     			if($obj['menu']['id']==$id)
	 			{
					echo '<li  class="col-md-3 col-sm-4 col-xs-6" style="height:50px;">
                      <a href="service.php?id='.$obj["id"].'" style="white-space: pre-wrap;color:black;">'.$obj['category']."</a>";
	 			}
				echo "</li>";
			}
 			echo "</ul></li>";
			
        }
		
		?>
	
        </ul>
			
    </nav>
<?php   
    }  

}
?>
        
        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
              $( ".top-menu ul" ).slideToggle(300, function() {
                // Animation complete.
              });
            });
        </script>
    <!-- script-for-nav  	
        <ul class="side-icons" style="position:relative;top:0px;">
                <li><a class="fb" href="#"></a></li>
                <li><a class="twitt" href="#"></a></li>
                <li><a class="goog" href="#"></a></li>
                <li><a class="drib" href="#"></a></li>
        </ul>
        -->
    </div>
</div>
	<!-- responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //responsive-tabs -->

	<!-- Carousel Auto-Cycle -->
	<script>
		$(document).ready(function () {
			$('.carousel').carousel({
				interval: 6000
			})
		});
	</script>
	<!-- // Carousel Auto-Cycle -->

	<!-- Nav Js -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
					$(this).toggleClass('open');
				}
			);
		});
	</script>