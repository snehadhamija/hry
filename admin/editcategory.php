<!DOCTYPE html>

<?php include("head.php"); ?> 
<?php include("top.php"); ?> 
<?php include("left.php"); ?>

<?php include("script.php"); ?>
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
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
	
            
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Menu Category</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.php"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Tables</a></li>
                               
                                <li class="active"><a href="#">Menu Category</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row" id="cancel-row">
                
                  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Menu Category</h4>
                                    </div>                 
                                </div>
                            </div><div class="form-group">
									<label class="col-md-3 control-label" for="name">Menu</label>
									<div class="col-md-9">
							<select name="menu" id="menu" class="form-control" onChange="addmenus();">
										<?php
											
										foreach($response as $key => $value) 
										{	
										?>
										
										<?php
											if($value['id'] != 100)
											{
											
											echo  '<option>'.$value['menu'] .'</option>' ;
									
											}
										
										}
										echo  '<option value="other">'.other .'</option>' ;
										?>
								</select>
									
									</div>
									</div>
                        <div class="form-group">
									<label class="col-md-3 control-label" for="name">Menu Category</label>
									<div class="col-md-9">
									<select name="menucategory" id="menucategory" class="form-control" onChange="addmenus1();">
										<?php
											
										$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, 'http://localhost:8090/haryana/menuCategory');
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				$result = curl_exec($ch);
				$result_obj = json_decode($result, TRUE);
				foreach ($result_obj as $key => $obj) 
				{
     			if($obj['menu']['id'] == 1)
	 			{
				echo  '<option>'.$obj["category"].'</option>' ;
				}
				}
				echo  '<option value="other">'.other .'</option>' ;
										?>
								</select>
									
									</div>
									</div>
										
                            
                               
                             
								
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input name="submit" type="submit" onclick="submitform()" class="btn btn-default btn-md pull-right">
									</div>
								</div>			      
                               </div>
									</div>                 
                                                    
                        </div>
                </div>

            </div>     

            

    <aside class="control-sidebar control-sidebar-light-color cs-content">
    

         
    </aside>
	<script>
	$(document).ready(function(){

  // Country
  $('#menu').change(function(){

     var menuid = $(this).val();

     // Empty state and city dropdown
     $('#menucategory').find('option').not(':first').remove();
     $('#menucategoryservice').find('option').not(':first').remove();

     // AJAX request
     $.ajax({
       url: 'ajaxfile.php',
       type: 'post',
       data: {request: 1, menuid: menuid},
       dataType: 'json',
       success: function(response){

         var len = response.length;

         for( var i = 0; i<len; i++){
           var id = response[i]['id'];
           var name = response[i]['name'];

           $("#sel_state").append("<option value='"+id+"'>"+name+"</option>");

         }
       }
     });

  });

  // State
  $('#sel_state').change(function(){
     var stateid = $(this).val();

     // Empty city dropdown
     $('#sel_city').find('option').not(':first').remove();

     // AJAX request
     $.ajax({
       url: 'ajaxfile.php',
       type: 'post',
       data: {request: 2, stateid: stateid},
       dataType: 'json',
       success: function(response){

         var len = response.length;

         for( var i = 0; i<len; i++){
           var id = response[i]['id'];
           var name = response[i]['name'];

           $("#sel_city").append("<option value='"+id+"'>"+name+"</option>");

         }
       }
     });
   });
});
</script>
  
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/preview-equation/default-light/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 11:11:14 GMT -->
</html>
<script>
	function addmenus()
	{
		var heading = document.getElementById('menu').value;
		//alert(heading);
		if(heading == 'other')
		{
			document.getElementById('addmenus').style.display = 'block';
		}
		else
		{
			document.getElementById('addmenus').style.display = 'none';
		}
	}
		
	</script>
	
<?php

}}
?>