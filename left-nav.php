<?php 

$response = api::call();
class Api{
public function call(){
$url = 'http://localhost:8090/haryana';
$collection_name = 'menu';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,TRUE);
   
?>

   <div class="logo">
      <a href="index.php"><img src="images/logo.png" style="background:white; width:99%;margin-bottom:10px;" /></a>
  </div>
  <div class="demo">
   <span class="menu"> </span>

	<nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <!-- <h3>Menu</h3> -->
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <ul id="respMenu" class="ace-responsive-menu cl-effect-16" data-menu-style="vertical" style="text-align: left; padding: 10px;">
        <?php 
		 // get menu name
		 foreach($response as $key => $value) 
        {
			echo "<li><a href='#'>";
            echo '<span class=title>' . $value['menu'] . '</span>';
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
			echo "<ul>";
			foreach ($result_obj as $key => $obj) 
			{
     			if($obj['menu']['id']==$id)
	 			{
					echo "<li>
                      <a href='#'>".$obj['category']."</a>";
                 
						// get menu services
						
						$ch1 = curl_init();
						curl_setopt($ch1, CURLOPT_URL, 'http://localhost:8090/haryana/menuCatService');
						curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
						curl_setopt($ch1, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
						curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
						$result1 = curl_exec($ch1);
						$result_obj1 = json_decode($result1, TRUE);
						 echo "<ul>";
						foreach ($result_obj1 as $key => $obj1) 
						{
							if($obj1['menuCategory']['id']==$obj['id'])
							{										
							echo "<li>
                                <a href='service.php?id=".$obj1['id']."'>
                                    <i class='fa fa-diamond' aria-hidden='true'></i>".$obj1['service']."</a></li>";
							}	
						}
					echo "</ul>";
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