<?php 

$response = api::call();
class Api{
public function call(){
    $url = 'http://localhost:8090/haryana';
    $collection_name = 'menu';
    $request_url = $url . '/' . $collection_name;
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
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
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <ul id="respMenu" class="ace-responsive-menu cl-effect-16" data-menu-style="vertical">
        <?php 
		 
		 foreach($response as $key => $value) 
        {
			echo "<li><a href='javascript:;'>";
            echo '<span class=title>' . $value['menu'] . '</span>';
            echo '</a></li>';
        }    
    return $response;
    }  

function is_iterable($var)
{
    return $var !== null 
        && (is_array($var) 
            || $var instanceof Traversable 
            || $var instanceof Iterator 
            || $var instanceof IteratorAggregate
            );
}
}
function convert_to_array($response){
    if(!is_array($response)){
        $response = (array)$response;
    }
return $response;
}
?>
 
            <li>
                <a href="javascript:;">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <span class="title">About Us</span>
			<span class="arrow"></span> 
                </a>
                <!-- Level Two-->
                <ul>
                    <li>
                        <a href="#">Sub Item One</a>
                    </li>
                    <li>
                        <a href="#">Sub Item Two</a>
                    </li>
                    <li>
                        <a href="#">Sub Item Three</a>
                    </li>
                    <li>
                        <a href="#">Sub Item Four</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="fa fa-crop" aria-hidden="true"></i>
                    <span class="title">4 Level Menu</span>
			<span class="arrow"></span> 
                </a>
                <!-- Level Two-->
                <ul>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Sub Item One						
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            Sub Item Two
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-amazon" aria-hidden="true"></i>
                            Sub Item Three							
                        </a>
                        <!-- Level Three-->
                        <ul>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 1</a></li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-diamond" aria-hidden="true"></i>Sub Item Link 2</a>
                                <!-- Level Four-->
                                <ul>
                                    <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Sub Item Link 1</a></li>
                                    <li><a href="#"><i class="fa fa-dashcube" aria-hidden="true"></i>Sub Item Link 2</a></li>
                                    <li><a href="#"><i class="fa fa-dropbox" aria-hidden="true"></i>Sub Item Link 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 3</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            Sub Item Four
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="" href="javascript:;">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="title">Services</span>
			<span class="arrow"></span> 
                </a>
                <ul>
                    <li>
                        <a href="#">Sub Item One
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">Sub Item Two							
                        </a>
                        <ul>
                            <li><a href="#">Sub Item Link 1</a></li>
                            <li><a href="#">Sub Item Link 2</a></li>
                            <li><a href="#">Sub Item Link 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Sub Item Three							
                        </a>
                        <ul>
                            <li><a href="#">Sub Item Link 1</a></li>
                            <li><a href="#">Sub Item Link 1</a></li>
                            <li><a href="#">Sub Item Link 1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Sub Item Four
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <span class="title">Products</span>
                </a>
            </li>
            <li class="last ">
                <a href="javascript:;">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span class="title">Contact Us</span>
                </a>
            </li>
        </ul>
    </nav>
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