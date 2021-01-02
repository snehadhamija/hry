
<?php include("main.php"); ?>
<br>
<br>
<br>
 
  <form action="/NAMV2/register" method="post"  onsubmit="return validateRegistration();" enctype="multipart/form-data" >
                                <div class="mid-top-space natinal-agricul-market pad">
                                    <div class="commodity-header" style="border-color: #b45834;background-color: #b45834; color:white !important;padding: 5px 7px;">NAM Registration form</div>
                                    <div class="commodity-list">
                                        <div class="modal-body" style="padding:10px 0;">
                                            <div class="" style="box-shadow: 0 0 3px #eee;">
                                                <div style="width:100%; background:#F5f5f5; text-align:left; padding:10px; margin:20px auto; font-weight:bold;">Fill Following Information
                                                </div>
                                                <div class="box_cont">
                                                    <script>
                                                       var utype;

													   function regCategory(id) {
															var fpctypeT = document.getElementById("fpctypeT").value;
															var utype = document.getElementById("utype").value;
															var fpctypeP = document.getElementById("fpctypeP").value;
																if("P"== utype.trim() && "LP"== fpctypeP.trim() && document.getElementById("statelevel").checked == true ){            
																	$("#showServiceTerritory").show(); 
																	$("#showTotalTurnover").show(); 
																}else{
																	 $("#showServiceTerritory").hide(); 
																	 $("#showTotalTurnover").hide();
																}
													   }

                                                        function showbox(id) {
                                                          //  document.getElementById("fpctypeT").value = null;
                                                           document.getElementById("enamMandi").checked = false;
                                                            document.getElementById("nonEnamMandi").checked = false; 
                                                            $(".regiWithEnamMandiModel").hide(200); 
                                                            $(".unifiedLicenseNoModel").hide(200); 
                                                            $(".unifiedLicenseNoModelSLevel").hide(200);
                                                            $(".unifiedLicenseNoModelMLevel").hide(200);
                                                            $("#farmerfpo_id").show();
                                                            $("#apmcLicAstrk").hide();
                                                            $("#cmpNameAstrk").hide();
                                                          //  alert(document.getElementById("enamMandi").value);
                                                              var statelevel = document.getElementById("statelevel").value;
                                                              var utype = document.getElementById("utype").value;
                                                          //  document.getElementById("fpctypeT").value = null;
                                                              var enamMandi = document.getElementById("enamMandi").value;
                                                              var fpctypeT = document.getElementById("fpctypeT").value;
															  var apmclevel = document.getElementById("apmclevel").value;
																var registerlevel = document.getElementsByName("registerlevel");
															var stateApmcCheck = "";
															for (var i = 0; i < registerlevel.length; i++) {
                                                                    if ( registerlevel[i].checked) {
																		stateApmcCheck = registerlevel[i].value;
                                                                    }
                                                                }
                                                            utype = id;
															$(".mydisplayboxForFpcFpo").hide(200);
                                                            if (id == "A" || id == "P") {
                                                                $(".mydisplaybox").show(300);
                                                                $(".mydisplayboxfpcfpo").hide(200);
                                                                $(".mydisplayboxfirm").hide(200);
																$(".mydisplayboxForFpcFpo").hide(200);
                                                            } else {
                                                                $(".mydisplaybox").hide(200);																
                                                            }
                                                            if (id == "F") {															    
                                                                $(".mydisplayboxfpcF").show(300);
                                                                $(".mydisplaybox").hide(200);
                                                                $("#stlevel").hide(200);																
                                                            } else {
                                                                $(".mydisplayboxfpcF").hide(200);
                                                                $("#stlevel").show(200); 
                                                            }
                                                            if (id == "P") {
                                                                $(".mydisplayboxfpcSP").show(300);
                                                              document.getElementById('landlineDiv').style.display = "block";
                                                              document.getElementById('yearofestablishDiv').style.display = "block";
                                                              document.getElementById('gstDiv').style.display = "block";
                                                              document.getElementById('uploadlogistickDiv').style.display = "block";
                                                              document.getElementById('bdetailsDiv').style.display = "none";

                                                              document.getElementById('banknameDiv').style.display = "none";
                                                              document.getElementById('accountnameDiv').style.display = "none";
                                                              document.getElementById('bankaccountnoDiv').style.display = "none";
                                                              document.getElementById('IFSCcodeDiv').style.display = "none";
                                                              document.getElementById('passbookDiv').style.display = "none";
                                                              document.getElementById('idproofDiv').style.display = "none";


                                                            } else {
                                                                $(".mydisplayboxfpcSP").hide(200);
                                                                 document.getElementById('landlineDiv').style.display = "none";
                                                              document.getElementById('yearofestablishDiv').style.display = "none";
                                                              document.getElementById('gstDiv').style.display = "none";
                                                              document.getElementById('uploadlogistickDiv').style.display = "none";
                                                              document.getElementById('bdetailsDiv').style.display = "block";

                                                              document.getElementById('banknameDiv').style.display = "block";
                                                              document.getElementById('accountnameDiv').style.display = "block";
                                                              document.getElementById('bankaccountnoDiv').style.display = "block";
                                                              document.getElementById('IFSCcodeDiv').style.display = "block";
                                                              document.getElementById('passbookDiv').style.display = "block";
                                                              document.getElementById('idproofDiv').style.display = "block";

                                                            }



                                                            if (id == "T") {
                                                                $(".mydisplayboxfpcT").show(300);
                                                                $(".mydisplaybox").show(300);
																$(".mydisplayboxForFpcFpo").hide(200);
                                                            } else {
                                                                $(".mydisplayboxfpcT").hide(200);
                                                            }
                                                            if (id == "FF") {
                                                                $(".mydisplayboxfpcfpo").show(300);
                                                                $(".mydisplayboxfirm").show(300);
                                                                $(".mydisplaybox").hide(200);
																$(".mydisplayboxForFpcFpo").show(200);

																
                                                            } else {
                                                                $(".mydisplayboxfpcfpo").hide(200);
																$(".mydisplayboxfirm").hide(300);
                                                            }
                                                                          
																	if("TA"==fpctypeT.trim() && "T"==utype.trim() ) { //&& document.getElementById("enamMandi").checked
                                                                                                                                             document.getElementById("enamMandi").checked = false;
                                                                                                                                          document.getElementById("nonEnamMandi").checked = false; 
																		$(".regiWithEnamMandiModel").show(300);
                                                                                                                                              //  $(".unifiedLicenseNoModel").show(300);
																		//$(".unifiedLicenseNoModel").show(300);
//																	if(document.getElementById("statelevel").checked ){
//																		  $(".unifiedLicenseNoModelSLevel").show(300); 
//                                                                                                                                                $(".unifiedLicenseNoModelMLevel").hide(200);
//																	}
//																	if(document.getElementById("apmclevel").checked ){
//																		$(".unifiedLicenseNoModelSLevel").show(300); 
//																		$(".unifiedLicenseNoModelMLevel").show(300);
//																	}
                                                                                                                                       }else{
                                                                                                                                          document.getElementById("enamMandi").checked = false;
                                                                                                                                          document.getElementById("nonEnamMandi").checked = false; 
                                                                                                                                         
																	$(".regiWithEnamMandiModel").hide(200); 
                                                                                                                                        $(".unifiedLicenseNoModel").hide(200); 
																	$(".unifiedLicenseNoModelSLevel").hide(200);
																	$(".unifiedLicenseNoModelMLevel").hide(200);
                                                                   }
														// Unified Table show and hide
														var fpctypeT = document.getElementById("fpctypeT").value;
														var utype = document.getElementById("utype").value;
                                                        var fpctypeP = document.getElementById("fpctypeP").value;
													if("TA" == fpctypeT.trim() && "T" == utype.trim() && document.getElementById("statelevel").checked == true 
																   && document.getElementById("enamMandi").checked == true){
																	fetchUnifiedLicense();
																}else{
																	$("#blockUnifiedLicense").hide();
																	$('#unifiedLicenseTableLeft').find('tbody tr').remove();
																}


																if("P"== utype.trim() && "LP"== fpctypeP.trim() && document.getElementById("statelevel").checked == true ){            
																	$("#showServiceTerritory").show(); 
																	$("#showTotalTurnover").show(); 
																}else{
																	 $("#showServiceTerritory").hide(); 
																	 $("#showTotalTurnover").hide();
																}
                                                                                                                                
                                                                                                                                var fpctypeF = document.getElementById("fpctypeF").value;
																if(utype == "F" && fpctypeF == "IF"){
																	$("#farmerfpo_id").hide();
																}
                                                                                                                                if(utype.trim() == "T" || utype.trim() == "A"){ // Registration Type == buyer or Commission Agent 
                                                                                                                                             $("#farmerfpo_id").show();
                                                                                                                                             $("#apmcLicAstrk").show();
                                                                                                                                             $("#cmpNameAstrk").show();                                      
                                                                                                                                    }else{
                                                                                                                                             $("#farmerfpo_id").hide();
                                                                                                                                             $("#apmcLicAstrk").hide();
                                                                                                                                             $("#cmpNameAstrk").hide();      
                                                                                                                                    }
																																	
																																	if(utype.trim() == "T"){
				if(fpctypeT.trim() == "TA" && document.getElementById("nonEnamMandi").checked == true ){
					 $("#apmcLicAstrk").hide();
				}
			}
			
}
                                                                                                                                
                                                                                                                                



															function clearApmcT(select) {
                                                                select.value = "";
                                                            };

                                                            function clearApmcF(select) {
                                                                select.value = "";
                                                            };

                                                        function showboxselection(id) {
                                                          //  alert("inside state/apmc");
                                                       //   document.getElementById("utype").value = null;
                                                       //   document.getElementById("fpctypeT").value = null;
                                                           document.getElementById("enamMandi").checked = false;
                                                            document.getElementById("nonEnamMandi").checked = false; 
                                                            $(".regiWithEnamMandiModel").hide(200); 
                                                            $(".unifiedLicenseNoModel").hide(200); 
							    $(".unifiedLicenseNoModelSLevel").hide(200);
							    $(".unifiedLicenseNoModelMLevel").hide(200);
															var registerlevel = document.getElementsByName("registerlevel");
															var stateApmcCheck = "";
															for (var i = 0; i < registerlevel.length; i++) {
                                                                    if ( registerlevel[i].checked) {
																		stateApmcCheck = registerlevel[i].value;
                                                                    }
                                                                }
															  var statelevel = document.getElementById("statelevel").value;
                                                              var utype = document.getElementById("utype").value;
                                                              var fpctypeT = document.getElementById("fpctypeT").value;
                                                              var enamMandi = document.getElementById("enamMandi").value;
															  var apmclevel = document.getElementById("apmclevel").value;

                                                            if (id == "S") {
                                                                $(".mydisplayboxstate").show(300);
                                                            } else {
                                                                $(".mydisplayboxstate").hide(200);
                                                            }
                                                            if (id == "M") {

                                                                $(".mydisplayboxstate").show(300);
                                                                $(".mydisplayboxapmc").show(300);

                                                            } else {
                                                                $(".mydisplayboxapmc").hide(200);
                                                            }
															
															if("TA"==fpctypeT.trim() && "T"==utype.trim() ) {     //&& "E"==enamMandi.trim()       
																		$(".regiWithEnamMandiModel").show(300);
																		//$(".unifiedLicenseNoModel").show(300); 
																	//if(stateApmcCheck == "S" && "TA"==fpctypeT.trim() && "T"==utype.trim() && "E"==enamMandi.trim()){
																		//$(".unifiedLicenseNoModelSLevel").c
																		//$(".unifiedLicenseNoModelMLevel").hide(200); 
																	//}
																	//if(stateApmcCheck == "M" && "TA"==fpctypeT.trim() && "T"==utype.trim() && "E"==enamMandi.trim()){
																		//$(".unifiedLicenseNoModelMLevel").show(300);
																		//$(".unifiedLicenseNoModelSLevel").show(300);
																	//}																	
																}else{
																	$(".regiWithEnamMandiModel").hide(200);
                                                                                                                                        $(".unifiedLicenseNoModel").hide(200); 
																	$(".unifiedLicenseNoModelSLevel").hide(200);
                                                                                                                                        $(".unifiedLicenseNoModelMLevel").hide(200);  
																}
																
																// Unified Table Show hide 
																	var fpctypeT = document.getElementById("fpctypeT").value;
																	var utype = document.getElementById("utype").value;
																  if("TA" == fpctypeT.trim() && "T" == utype.trim() && document.getElementById("statelevel").checked == true 
																   && document.getElementById("enamMandi").checked == true){
																	fetchUnifiedLicense();
																}else{
																	$("#blockUnifiedLicense").hide();
																	$('#unifiedLicenseTableLeft').find('tbody tr').remove();
																}
																var fpctypeT = document.getElementById("fpctypeT").value;
																var utype = document.getElementById("utype").value;
																var fpctypeP = document.getElementById("fpctypeP").value;
																if("P"== utype.trim() && "LP"== fpctypeP.trim() && document.getElementById("statelevel").checked == true ){            
																	$("#showServiceTerritory").show(); 
																	$("#showTotalTurnover").show(); 
																}else{
																	 $("#showServiceTerritory").hide(); 
																	 $("#showTotalTurnover").hide();
																}

                                                        }	


                                                        function showboxfpcfpo(id) {
															var fpctypeP = document.getElementById("fpctypeP").value;
                                                            document.getElementById("enamMandi").checked = false;
                                                            document.getElementById("nonEnamMandi").checked = false; 
                                                            $(".regiWithEnamMandiModel").hide(200); 
                                                            $(".unifiedLicenseNoModel").hide(200); 
							    $(".unifiedLicenseNoModelSLevel").hide(200);
							    $(".unifiedLicenseNoModelMLevel").hide(200);
                                                            $("#farmerfpo_id").show();
                                                            var registerlevel = document.getElementsByName("registerlevel");
															var stateApmcCheck = "";
															for (var i = 0; i < registerlevel.length; i++) {
                                                                    if ( registerlevel[i].checked) {
																		stateApmcCheck = registerlevel[i].value;
                                                                    }
                                                                }
                                                            var utype = document.getElementById("utype").value;
                                                            var fpctypeT = document.getElementById("fpctypeT").value;
                                                             var enamMandi = document.getElementById("enamMandi").value;
															 var apmclevel = document.getElementById("apmclevel").value;
                                                            if (id == "FF") {
                                                                $(".mydisplayboxfpcfpo").show(300);
                                                                $(".mydisplayboxfirm").show(300);
                                                                $(".mydisplaybox").hide(200);
																                                $(".mydisplayboxForFpcFpo").show(200);
																                                $("#cmpNameAstrk").show(300);
                                                                $("#companyname").prop('required',true);

                                                            } else {
                                                                $(".mydisplayboxfpcfpo").hide(200);
																$(".mydisplayboxForFpcFpo").hide(200);
                                                                $(".mydisplayboxfirm").hide(200);
                                                                if (utype == "T") {
                                                                    $(".mydisplaybox").show(200);
                                                                }


                                                            }

                                                               if (id == "IF") 
								                                {
								                                	$("#cmpNameAstrk").hide(300);
								                                }
								                                if (id == "CO") 
								                                {
								                                	$("#cmpNameAstrk").show(300);
								                                }
								                                if (id == "FG") 
								                                {
								                                	$("#cmpNameAstrk").show(300);
								                                }

                                                             if("TA"==fpctypeT.trim() && "T"==utype.trim()   ){        //&& "E"==enamMandi.trim()    
                                                                $(".regiWithEnamMandiModel").show(300);	
                                                                // $(".unifiedLicenseNoModel").show(300);	
																//$(".unifiedLicenseNoModel").show(300);	
																	//if(stateApmcCheck == "S" && "TA"==fpctypeT.trim() && "T"==utype.trim() && "E"==enamMandi.trim()){
																		//$(".unifiedLicenseNoModelSLevel").show(300); 
																	//}
																	//if(stateApmcCheck == "M" && "TA"==fpctypeT.trim() && "T"==utype.trim() && "E"==enamMandi.trim()){
																		//$(".unifiedLicenseNoModelMLevel").show(300);
																		//$(".unifiedLicenseNoModelSLevel").show(300);
																	//}		
                                                                 }else{
                                                                    $(".regiWithEnamMandiModel").hide(200);
                                                                    $(".unifiedLicenseNoModel").hide(200); 
																	$(".unifiedLicenseNoModelSLevel").hide(200);
																    $(".unifiedLicenseNoModelMLevel").hide(200);  																   
                                                                  }
																// Unified Table Show and hide  
																var fpctypeT = document.getElementById("fpctypeT").value;
																var utype = document.getElementById("utype").value;
																  if("TA" == fpctypeT.trim() && "T" == utype.trim() && document.getElementById("statelevel").checked == true 
																   && document.getElementById("enamMandi").checked == true){
																	fetchUnifiedLicense();
																}else{
																	$("#blockUnifiedLicense").hide();
																	$('#unifiedLicenseTableLeft').find('tbody tr').remove();
																}	
                                                                                                                                
                                                                                                                                // hide Company Reg Asterisk symbol
                                                                                                                                var fpctypeF = document.getElementById("fpctypeF").value;
																if(utype == "F" && fpctypeF == "IF"){
																	$("#farmerfpo_id").hide();
																}


                              

																
								if(utype.trim() == "T"){
									if(fpctypeT.trim() == "TA" && document.getElementById("nonEnamMandi").checked == true ){
										 $("#apmcLicAstrk").hide();
									}
								}
                                                        }
                                                        
                                                         function showUnifiedLicenseNo(id) {
															var fpctypeP = document.getElementById("fpctypeP").value;
															var registerlevel = document.getElementsByName("registerlevel");
															var stateApmcCheck = "";
															for (var i = 0; i < registerlevel.length; i++) {
                                                                    if ( registerlevel[i].checked) {
																		stateApmcCheck = registerlevel[i].value;
                                                                    }
                                                                }			
                                                            var statelevel = document.getElementById("statelevel").value;
															var apmclevel = document.getElementById("apmclevel").value;
                                                            var utype = document.getElementById("utype").value;
                                                            var fpctypeT = document.getElementById("fpctypeT").value;
                                                            if ( "TA"==fpctypeT.trim() && "T"==utype.trim() ) {  //id == "E" &&                                                                
                                                             // $(".unifiedLicenseNoModel").show(300);
                                                             // $(".unifiedLicenseNoModel").show(300);
                                                              if(id == "E"){
                                                                $(".unifiedLicenseNoModel").show(300);
                                                              }else{
																$(".unifiedLicenseNoModel").hide(200);	
                                                                 $(".unifiedLicenseNoModelSLevel").hide(200);
                                                                 $(".unifiedLicenseNoModelMLevel").hide(200); 
                                                              }
																	if(stateApmcCheck == "S" && "TA"==fpctypeT.trim() && "T"==utype.trim() && id == "E"){
																		$(".unifiedLicenseNoModelSLevel").show(300);
                                                                                                                                                $(".unifiedLicenseNoModelMLevel").hide(200);
																	}
																	if(stateApmcCheck == "M" && "TA"==fpctypeT.trim() && "T"==utype.trim() && id == "E"){
																		$(".unifiedLicenseNoModelMLevel").show(300);
																		$(".unifiedLicenseNoModelSLevel").show(300);
																	}
                                                            } else {
																 $(".unifiedLicenseNoModelSLevel").hide(200);
																 $(".unifiedLicenseNoModelMLevel").hide(200);
                                                            }
																
																// Unified Table Show hide  
																var fpctypeT = document.getElementById("fpctypeT").value;
																var utype = document.getElementById("utype").value;
																  if("TA" == fpctypeT.trim() && "T" == utype.trim() && document.getElementById("statelevel").checked == true 
																   && document.getElementById("enamMandi").checked == true){
																	fetchUnifiedLicense();
																}else{
																	$("#blockUnifiedLicense").hide();
																	$('#unifiedLicenseTableLeft').find('tbody tr').remove();
																}
																// (arshad )
																if(utype.trim() == "T"){
																	if(fpctypeT.trim() == "TA" && document.getElementById("nonEnamMandi").checked == true ){
																		 $("#apmcLicAstrk").hide();
																	}
																}
															
															
                                                        }
                                                    </script>
                                                    <!--<script>
                                                      function showbox(elem)
                                                      {
                                                        
                                                           if(elem == "P")
                                                            {

                                                              document.getElementById('landlineDiv').style.display = "block";
                                                              document.getElementById('yearofestablishDiv').style.display = "block";
                                                              document.getElementById('gstDiv').style.display = "block";
                                                              document.getElementById('uploadlogistickDiv').style.display = "block";
                                                              document.getElementById('bdetailsDiv').style.display = "none";

                                                              document.getElementById('banknameDiv').style.display = "none";
                                                              document.getElementById('accountnameDiv').style.display = "none";
                                                              document.getElementById('bankaccountnoDiv').style.display = "none";
                                                              document.getElementById('IFSCcodeDiv').style.display = "none";
                                                              document.getElementById('passbookDiv').style.display = "none";
                                                              document.getElementById('idproofDiv').style.display = "none";
                                                              
                                                            }

                                                            else
                                                            {
                                                              document.getElementById('landlineDiv').style.display = "none";
                                                              document.getElementById('yearofestablishDiv').style.display = "none";
                                                              document.getElementById('gstDiv').style.display = "none";
                                                              document.getElementById('uploadlogistickDiv').style.display = "none";
                                                              document.getElementById('bdetailsDiv').style.display = "block";

                                                              document.getElementById('banknameDiv').style.display = "block";
                                                              document.getElementById('accountnameDiv').style.display = "block";
                                                              document.getElementById('bankaccountnoDiv').style.display = "block";
                                                              document.getElementById('IFSCcodeDiv').style.display = "block";
                                                              document.getElementById('passbookDiv').style.display = "block";
                                                              document.getElementById('idproofDiv').style.display = "block";



                                                            }
                                                        }
                                                        
                                                    </script>-->
                                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        
													<div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                Registration Type
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <select class="form-control" onchange="showbox(this.value)" name="utype" id="utype">
                                                                        <option value="-select-">-select-</option>
                                                                        <option value="F">Seller</option>
                                                                        <option value="T">Buyer</option>
                                                                        <option value="A">Commission Agent</option>
                                                                        <option value="P">Service Provider</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        
                                                        

                                                        <div style="display:none;" class="mydisplayboxfpcT">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Registration Category
                                                                    <span style="color:#F00">*</span>

                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <select class="form-control" name="fpctypeT" onchange="showboxfpcfpo(this.value)" onfocus="clearApmcT(this);" id="fpctypeT">
                                                                            <option value="-select-">-select-</option>
                                                                            <option value="TA">Trader</option>
                                                                            <option value="CA">Commission Agent</option>
																			<option value="CO">Co-Operative</option>
																			<option value="EX">Exporter</option>
																			<option value="PO">Processor</option>
																			<option value="GA">Government Agency</option>
																			<option value="RT">Retailor</option>
																			<option value="AG">Aggregator</option>
																			<option value="OT">Other</option>
																			</select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         
                                             

                                                        <div style="display:none;" class="mydisplayboxfpcF">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Registration Category
                                                                    <span style="color:#F00">*</span>

                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <select class="form-control" name="fpctypeF" onchange="showboxfpcfpo(this.value)" onfocus="clearApmcF(this);" id="fpctypeF">
                                                                            <option value="-select-">-select-</option>
                                                                            <option value="IF">Individual Farmer</option>
                                                                            <option value="FG">Farmer Group</option>
																			<option value="CO">Co-Operative</option>
																			<option value="TA">Trader</option>
																			<option value="AG">Aggregator</option>
																			<option value="CA">Commission Agent</option>
																			<option value="FF">FPO/FPC</option>
																			<option value="GA">Government Agency</option>
																			<option value="OT">Other</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div style="display:none;" class="mydisplayboxfpcSP">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Registration Category
                                                                    <span style="color:#F00">*</span>

                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <select class="form-control" name="fpctypeP" id="fpctypeP" onchange="regCategory(this.value)">
                                                                            <option value="-select-">-select-</option>
                                                                            <option value="HA">Hamal</option>
                                                                            <option value="LP">Logistic Provider</option>
																			<option value="LU">Loader / Unloader</option>
																			<option value="GD">Grader</option>
																			<option value="WH">Warehouse</option>
																			<option value="CS">Cold Storage Operator</option>
																			<option value="PK">Packer</option>
																			<option value="QA">Quality Assayer</option>
																			<option value="OT">Other</option>
                                                                        </select>
                                                                </div>

                                                            </div>
                                                        </div>
														</div><br>
														 <div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:15px;">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                Registration Level
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <span id="stlevel"><input type="radio" name="registerlevel" id="statelevel" onclick="setDefault()" value="S" onchange="showboxselection(this.value)" /> State</span>
                                                                <input type="radio" name="registerlevel" id="apmclevel" onclick="setDefault()" value="M" onchange="showboxselection(this.value)" /> APMC
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


                                                        </div>
														</div>
														 <div class="row">
                                                        <div style="display:none;" class="mydisplayboxstate" >
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;" >
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Registered With State
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <select class="form-control" name="mandistate" onChange="dyanamicStateChange(this.id,this.id);" id="mandistate">
                                                                            <option  selected  value="-select-">-select-</option>
                                                                           <!--  <option  selected  value="TL-28-TELANGANA">TELANGANA</option> -->     	
                                                                         
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>

														<div style="display:none;" id="showServiceTerritory">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;">
																	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																		Service Territory :

																	</div>
																	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
																		<select class="form-control" name="serviceTerritory" id="serviceTerritory">
																			<option selected value="">Service Territory</option>
																			<option value="I">Intra State</option>
																			<option value="IS">Inter State</option>
																		</select>
																	</div>
																</div>
														</div>

                                                        <div style="display:none;" class="mydisplayboxapmc">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Registered with APMC
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <select class="form-control" name="apmcname" id="apmcname">
                                                                       <option  selected  value="-select-">-select-</option>
																   	 <!-- <option  selected  value="30-NIZAMABAD">NIZAMABAD</option>    	 
																	  <option  selected  value="49-HYDERABAD">HYDERABAD</option>  -->
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                          <div class="clearfix"></div>
                                                         <!--------------- Enam Mandi Trader check --------------------->
                                                         <div class="row">
                                                        <div style="display:none;" class="regiWithEnamMandiModel">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Registered with eNam Mandi
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
															   <input type="radio" name="regiWithEnam" id="enamMandi" onclick="setDefaultNamRegiMandi()" value="E" onchange="showUnifiedLicenseNo(this.value)" /> Yes
                                                                <input type="radio" name="regiWithEnam" id="nonEnamMandi" onclick="setDefaultNamRegiMandi()" value="N" onchange="showUnifiedLicenseNo(this.value)" /> No
                                                                
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div style="display:none;" class="unifiedLicenseNoModel">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    eNAM Trader ID
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="unifiedLicenseNo" id="unifiedLicenseNo" maxlength="40" onchange="validateUnifiedTrader();" />           
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                         <!--------------- Unified License No ends here --------------------->
                                                         <div class="clearfix"></div>
                                                          <!--------------- Applying for State --------------------->   
															 <div class="row">								
                                                            <div style="display:none;" class="unifiedLicenseNoModelSLevel" >
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;" >
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Applying For State
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <select class="form-control" name="applystate" onChange="onApplyStateChange(this.value);" id="applystate">
                                                                            <option  selected  value="-select-">-select-</option>
																  <!-- <option  selected  value="TL-28-TELANGANA">TELANGANA</option>     	
                                                                  <option  selected  value="MH-296-MAHARASHTRA">MAHARASHTRA</option>  -->      
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                                          <div style="display:none;" class="unifiedLicenseNoModelMLevel" >
                                                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:25px;" >    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                Apply For APMC
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                         <!--<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">-->
<!--                                                             <div style="height: 6em; width: 20em; overflow: auto;" id="interest">   -->
                                                                <!-- <input type="checkbox" id="sports" name="interest" value="sports">
                                                                <label for="sports">Sports</label> -->
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 multichk_deopWrap">
                                                                 <div class="dropdown-container-chk">
                                                        <div class="dropdown-button noselect">
                                                            <div class="dropdown-label">APMC</div>
                                                            <div class="dropdown-quantity">(<span class="quantity">Any</span>)</div>
                                                            <i class="fa fa-filter"></i>
                                                        </div>
                                                        <div class="dropdown-list" style="display: none;">
                                                            <input type="search" placeholder="Search APMC" class="dropdown-search" id="multichkAPMC"/>
                                                            <ul></ul>
                                                        </div>
                                                <!--</div>-->  
<!--                                                            </div>-->
                                                         </div>
                                                                </div>
                                                             </div>
                                                          </div>
                                                          
                                                                                                                 
                                                                                                                             
                                                                                                                             
                                                                                                                             
                                                                                                                             
                                                                                                                             
                                                          <input type="hidden" name="selectApmcList" id="selectApmcList" /> 
														</div>
<!--							 <script>
                                                            function getInterest(){
                                                                 var apmcList = document.getElementsByName("interest"); 
                                                                    for (var i = 0; i < apmcList.length; i++) {
                                                                      if ( apmcList[i].checked) {
                                                                //  alert("Apmc list interest =>"+x[i].value);
                                                                        selectedAPMCList = selectedAPMCList + apmcList[i].value + "_" ;
                                                                }
                                                              }
                                                                    document.getElementById("selectApmcList").value = selectedAPMCList.substring(0, selectedAPMCList.lastIndexOf("_"));
                                                                   // alert("selectedAPMCList=>"+selectedAPMCList);
                                                            }
                                                        </script> -->
<!--							 <input type="button" value="submit" name="submit" onclick="getInterest();" /> -->
                                                          <!--------------- Applying for State  --------------------->
                                                        <div class="clearfix"></div>
                                                        
<!---------------- changes farmer registration ------------------------------------->
                                                        <div style="width:100%; background:#F5f5f5; text-align:left; padding:10px; margin:20px auto; font-weight:bold;">Registration Form
                                                        </div>
                                                        <div class="row">
                                                          <!--   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                                                    Title
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                                                                    <select class="form-control" name="nametitle" id="nametitle">
                                                                        <option value="-select-">-select-</option>
                                                                        <option>Mr</option>
                                                                        <option>Mrs</option>
                                                                        <option>Ms</option>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                            
                                                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                                                    Full Name
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                                                                   <input type="text" autocomplete="off" class="form-control" name="fname" id="fname" maxlength="150" />
                                                                </div>
                                                            </div>
															  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                Gender
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <select class="form-control" name="gender" id="gender">
                                                                    <option value="-select-">-select-</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="F">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        </div>
                                                      <!--   <div class="row">
                                                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                                                   Middle Name :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                                                                   <input type="text" autocomplete="off" class="form-control" name="mname" id="mname" maxlength="20"   />
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                                                 Last Name 
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                                                                   <input type="text" autocomplete="off" class="form-control" name="lname" id="lname" maxlength="40"/>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                           <div class="col-xs-12  col-sm-12"  style="padding-top:20px;">
                                                                <div class="col-xs-12 col-sm-2">Address (Street)  <span style="color:#F00">*</span> :</div>
                                                                <div class="col-xs-12 col-sm-10">
                                                                    <textarea style="width:100%;" rows="2"  cols="30" maxlength="100" name="area" id="area"> </textarea>
                                                                </div>
                                                            </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                Date of Birth
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <input type="text" autocomplete="off" class="form-control" name="dob" readonly="readonly" id="dob" placeholder="DD/MM/YYYY" />

                                                            </div>

                                                        </div>
														
                                                        </div>
                                                        <!-- <div class="row" style="clear:both;">                   
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Son/Daughter/Wife  <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class=" col-xs-12 col-sm-8">
                                                                    <select class="form-control" name="relationtype" id="relationtype">
                                                                    <option value="-select-">-select-</option>
                                                                    <option>Son Of</option>
                                                                    <option>Daughter Of</option>
                                                                    <option>Wife Of</option>
                                                                </select>
                                                                </div>
                                                       </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top:20px;">
                                                            <div class="col-xs-12 col-sm-12 input_sundaughter" >
                                                                        <input type="text" autocomplete="off" class="form-control" maxlength="30" name="relationtypename" id="relationtypename" />
                                                                    </div>
                                                        </div>                                                    
                                                        </div>  -->                                    
                                                      <!--  <div class="row">
                                                              
                                                        </div> -->
                                                        
                                                        <!-- <div class="row">
                                                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">City/Village <span style="color:#F00">*</span>:</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="city" id="city"  maxlength="20" />
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Post <span style="color:#F00">*</span>:</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="post" id="post"  maxlength="20" />
                                                                </div>
                                                        </div> 
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Pincode :</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="pin" id="pin" maxlength="6" onblur="onblurPinCode()" />
                                                                </div>
                                                        </div>
                                                        							
							    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">State <span style="color:#F00">*</span>:</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="hidden" class="form-control" name="state" id="state" />
                                                                    <select class="form-control" name="stateId" id="stateId" onchange="onChangeStateId(this)">
                                                                        <option value="-select-">-select-</option>
                                                                    </select>
                                                                </div>
                                                            </div> 
															
                                                        </div>
                                                        <div class="row">
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">District <span style="color:#F00">*</span>:</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="hidden"  class="form-control" name="district"  id="district" />
                                                                    <select class="form-control" name="districtId" id="districtId" onchange="onChangeDistrictId(this)">
                                                                        <option value="-select-">-select-</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        
                                                       
                                                            
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Tehsil <span style="color:#F00">*</span>:</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                     <input type="hidden" class="form-control" name="tehsil" id="tehsil" />
                                                                    <select class="form-control" name="tehsilId" id="tehsilId" onchange="onChangeTehsilId(this)">
                                                                        <option value="-select-">-select-</option>
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        </div>
                                                        <div class="row">
<!--
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Block :</div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="block" id="block"  maxlength="20" />
                                                                </div>
                                                        </div> -->
                                                            <!--this field are added change max lenght-->
                                                        <script>
                                                                  function phototypeFunction() 
                                                                  {
                                                                    
                                                                    var idtype = document.getElementById("photoidtype").value;

                                                                    if(idtype == "Adhaar")
                                                                    {
                                                                      document.getElementById("idnumber").placeholder="----/----/----";
                                                                    }

                                                                    else
                                                                    {

                                                                      document.getElementById("idnumber").placeholder="";
                                                                    }
                                                                    
                                                                  }
                                                                </script>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Photo Id Type
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                              <select class="form-control" name="photoidtype" onchange="phototypeFunction(this.value)" id="photoidtype">
                                                                    <option value="-select-">-select-</option>
                                                                    <option value="Adhaar">Aadhaar</option>
                                                                    <option value="PAN card">PAN card</option>
                                                                    <option>Ration card</option>
                                                                    <option>Driving licence</option>
                                                                    <option>VoterID</option>
                                                                    <option>Passport</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                            
                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Photo ID Number
                                                                <span style="color:#F00">*</span> :
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <input type="text" autocomplete="off" class="form-control" onblur="onBlurPhotoIdNo()" name="idnumber" id="idnumber" placeholder="" maxlength="16" />
                                                            </div>
                                                        </div>


                                                                


                                                        </div>
                                                        <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Mobile No.
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="mobile" id="mobile" maxlength="10" />
                                                                </div>
                                                        </div>
                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Alternate Mobile No. :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="altmobile" id="altmobile" maxlength="10" />
                                                                </div>
                                                              </div>   
															</div>  
														 <div class="row">	
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Email ID
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="email" id="email" maxlength="50" />
                                                                </div>
                                                            </div>
															<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    License No.  <span style="color:#F00" id="apmcLicAstrk">*</span>
																	:
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="apmclicenno" id="apmclicenno" maxlength="50" />
                                                                </div>
                                                            </div>
                                                        </div>
														<div class="row">                                                        
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                       Company Name  <span style="color:#F00" id="cmpNameAstrk">*</span>:                                                                 
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="companyname" id="companyname" maxlength="100" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Company Reg  <span id="farmerfpo_id" style="color:#F00">*</span>:
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="companyregistno" id="companyregistno" maxlength="50" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="row">                                                        
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;display: none" id="landlineDiv">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                       Landline No  <span style="color:#F00">*</span>:                                                                 
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                   <input type="text" autocomplete="off" class="form-control" name="landline" id="landline" maxlength="10" />
                                                                </div>
                                                            </div>

															
														<div style="display:none;" id="showTotalTurnover">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
																	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
																		  Total Turnover :                                                                 
																	</div>

																	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
																		<input type="text" autocomplete="off" class="form-control" name="totalturnover" id="totalturnover" maxlength="50"/>
																	</div>
																</div>

														</div>
                                                            

                                                      </div>




														                          <div class="row">                                                        
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px; display: none;" id="yearofestablishDiv">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                       Year of Establishment  <span style="color:#F00">*</span>:                                                                 
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <!-- <input type="text" autocomplete="off" class="form-control" name="yearofestablish" id="yearofestablish" maxlength="100" /> -->
																	<input type="text" autocomplete="off" class="form-control" name="yearofestablish" readonly="readonly" id="yearofestablish" placeholder="DD/MM/YYYY" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px; display: none;" id="gstDiv">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    GST :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="gst" id="gst" maxlength="50" />
                                                                </div>
                                                            </div>
                                                      </div>
                                                       
														<div id="bdetailsDiv" style="width:100%; background:#F5f5f5; text-align:left; padding:10px; margin:20px auto; font-weight:bold;">Bank Details
                                                        </div>		
                                                        <div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;" id="banknameDiv">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Bank Name
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="fpcBank" maxlength="50" id="fpcBank" />
                                                                </div>
                                                            </div>
															
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;" id="accountnameDiv">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Account Holder Name as per Bank A/C
                                                                    <span style="color:#F00">*</span>

                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="fpcBankAccountName" maxlength="50" id="fpcBankAccountName" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" id="bankaccountnoDiv">
                                                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Bank Account No
                                                                    <span style="color:#F00">*</span> :
                                                                  </div>
                                                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="password" autocomplete="off" class="form-control" name="fpcBankAccount" id="fpcBankAccount"  maxlength="18" oncopy="return false" onpaste="return false" />
                                                                </div>
                                                              </div>
															                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                   Confirm Account No
																                                      <span style="color:#F00">*</span>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="typeagainaccount" id="typeagainaccount" maxlength="18" oncopy="return false" onpaste="return false"/>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                      <div class="row" id="IFSCcodeDiv">
                                                             <!--this field are added change max lenght-->
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    IFSC Code
                                                                    <span style="color:#F00">*</span> :
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="password" autocomplete="off" class="form-control" name="fpcIfsc" id="fpcIfsc" maxlength="11" oncopy="return false" onpaste="return false"/>
                                                                </div>
                                                            </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:20px;">
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                    Confirm IFSC Code
																	                                   <span style="color:#F00">*</span>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                    <input type="text" autocomplete="off" class="form-control" name="typeagainifsc" id="typeagainifsc" maxlength="11" oncopy="return false" onpaste="return false" />
                                                                </div>
                                                        </div><!--this field are added change max lenght-->
                                                      </div>

                                                        <div class="row">
                                                              <div class="col-xs-12  col-sm-12" style="padding-top:20px;" id="passbookDiv">
                                                                <div class="col-xs-12 col-sm-5">
                                                                   Upload Copy Of Passbook/Cancelled Check in Support :
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 btn-upload">
                                                                    
                                                                    <div class="fileUpload btn btn-primary">
                                                                        <span>Upload File</span>
                                                                        <input id="uploadBtn"  class="upload" type="file" name="passbook" accept="image/jpg,image/jpeg,.pdf" onchange="loadFile(this);" />
                                                                    </div>
                                                                    <img class="preview_img" src="#" alt="your Image" id="passbookImage"/>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="col-xs-12  col-sm-12" style="padding-top:20px;" id="idproofDiv">
                                                                <div class="col-xs-12 col-sm-5">
                                                                   Upload One Scan Copy Of Id Proof :
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 btn-upload">
                                                                    
                                                                    <div class="fileUpload btn btn-primary">
                                                                        <span>Upload File</span>
                                                                        <input id="uploadBtn1"  class="upload" name="idproof" type="file" accept="image/jpg,image/jpeg,.pdf" onchange="loadIdProofFile(this);" />
                                                                    </div>
                                                                    <img class="preview_img" src="#" alt="your Image"  id="idProofImage"/>
                                                                    
                                                                </div>
                                                        </div>

                                                        <div class="col-xs-12  col-sm-12" style="padding-top:20px;display: none;" id="uploadlogistickDiv">
                                                                <div class="col-xs-12 col-sm-5">
                                                                   Upload Copy of Logistick Details :
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6 btn-upload">
                                                                    
                                                                    <div class="fileUpload btn btn-primary">
                                                                        <span>Upload File</span>
																		<input type = "file" name = "uploadlogistick" id="uploadlogistick" size = "50" />
                                                                        <!-- <input id="uploadBtn"  class="upload" name="uploadlogistick" type="file" accept="image/*" onchange="uploadIdlogisticFile(this);" /> -->
                                                                    </div>
                                                                    <!-- <img class="preview_img" src="#" alt="your Image"  id="uploadLogisticImage"/> -->
                                                                    
                                                                </div>
                                                        </div>

                                                        
                                                        
                                                        </div>
                                                         <div class="row">
                                                        <div class="col-xs-12 col-sm-12" style="padding-top:20px;">
                                                                <div class="col-xs-12 col-sm-5 col-md-3">Registration Acknowledgement:
                                                                </div>
                                                                <div class="col-xs-12 col-sm-7 ">
                                                                    <input type="checkbox" id="GetSMS" onclick="return false" name="GetAcknowledge" value="SMS" checked="checked" />&nbsp;&nbsp; Get SMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="checkbox" id="GetEmail" onclick="return false" name="GetAcknowledge" value="EMAIL" checked="checked" /> &nbsp;&nbsp; Get Email
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="clearfix"></div>
                                                        
                                                        <div style="display: block;" id="blockUnifiedLicense">
                                                            <input type="hidden" id="uploadUnifiedLicense" name="uploadUnifiedLicense" value="" />
								<div style="width:100%;background:#F5f5f5;text-align:left;padding:10px;margin:20px auto;font-weight:bold;">Document required for Unified License</div>																
									<div class="row" style="margin-top:15px;">
                                                                           <table id="unifiedLicenseTableLeft" class="table table-bordered" style="width:95%;float:left;margin-left:30px;">
                                                                               <tbody></tbody>
                                                                            </table>
<!--                                                                            <table id="unifiedLicenseTableRight" class="table table-bordered" style="width:36%;float:left;">
                                                                               <tbody></tbody>
                                                                            </table>-->
															
									</div>
							</div>
                                                        
                                                       
                                                        <div class="clearfix"></div>
                                                        <div style="width:100%; margin:20px auto; border-top:1px solid #eeeeee;"></div>
                                                        <div style="width:180px; margin:20px auto;">
                                                            <input type="hidden" name="pageName" value="/home/index.html" />

                                                            <input type="hidden" name="currentPageName" value="/home/other_register.html" />
                                                            <div style="width:90px; float:left;">
                                                                <input type="submit" value="Submit" style="padding:5px 15px; background:#F1EFEF; cursor:pointer; border:none; border-radius:5px;" />
                                                            </div>
                                                            <div style="width:90px; float:left;">
                                                                <input type="button" value="Cancel" onclick="location.href='index.html';" style="padding:5px 15px; background:#F1EFEF; cursor:pointer; border:none; border-radius:5px;" />
                                                            </div>
                                                        </div>
											<!------------------------- end changes -------------------->			
														
                                                    </div>
                                                    <!--box_cont-->
                                                </div>
                                                <!--boxes-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
							<?php include("footer.php"); ?>