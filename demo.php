<?php
   
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8090/haryana/menuCatService');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
$result = curl_exec($ch);
 
$result_obj = json_decode($result, TRUE);
 $cid = $_GET['id'];
foreach ($result_obj as $key => $obj) {
    if($obj['id']==$cid)
	
    echo $obj['service']."<br />";
	
}
 
//echo '<pre>'; print_r($result_obj); echo '</pre>';
?>