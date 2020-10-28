<!DOCTYPE html>
<?php
session_start();

$menu= "";
$sequenceId= "";
$id=0;
?>
<body style="background:#fff">
<?php include("head.php"); ?> 
<?php include("top.php"); ?> 
<?php include("left.php"); ?>
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
                        <h3>Menu</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.php"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Tables</a></li>
                              
                                <li class="active"><a href="#">Menu</a> </li>
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
                                        <h4>Menu</h4>
                                    </div>  
<div class="col-md-12" align="right">
       <button type="button" name="add_data" id="add_data" class="btn btn-success btn-xs">Add</button>
      </div>									
                                </div>
								
                            </div>
							
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
								
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
									    <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Menu</th>
												
                                                <th>img_url</th>
                                                <th>sequence_id</th>
												
                                                <th>Action</th>
												
                                            </tr>
                                        </thead>
										<tbody>
										
											<?php
											
										foreach($response as $key => $value) 
										{	
										?>
											<tr>
										<?php
											if($value['id'] != 100)
											{
											echo  '<td>'.$value['id'] .'</td>' ;
											echo  '<td>'.$value['menu'] .'</td>' ;
											echo  '<td>'.$value['imgurl'] .'</td>' ;
											echo  '<td>'.$value['sequenceId'] .'</td>' ;
											
										?>
                                                <td>  <div class="btn-group">
                                           <button type="button" class="btn btn-secondary btn-sm">Option</button>
                                            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                  <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
														<a class="dropdown-item" href="addmenu.php?id=<?php echo $value['id']; ?>">Add</a>
                                                          <a class="dropdown-item" href="editmenu.php?id=<?php echo $value['id']; ?>">Edit</a>
                                                          <a class="dropdown-item" href="table.php?id=<?php echo $value['id']; ?>">Delete</a>
                                                        
                                                       
                                                        </div>
                                                      </div></td>
											</tr>
										<?php
											} 
										}
										?>		
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
			   </div>
               
          
<?php
}
}
?> </div>
                </div>
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
        <!--  END CONTENT PART  -->
    
    <!-- END MAIN CONTAINER -->
    
    <!--  BEGIN FOOTER  -->
     <!--  END CONTROL SIDEBAR  -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'csv', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'print', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                ]
            },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

<!-- Mirrored from designreset.com/preview-equation/default-light/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 11:11:14 GMT -->