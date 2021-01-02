<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<?php
$response = api::call();
class Api{
public static function call(){

$url1 = 'http://localhost:8090/haryana';
$collection_name1 = 'menuCategory/{menuCategoryId}';
$request_url1 = $url1 . '/' . $collection_name1;
$curl1 = curl_init($request_url1);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
$response1 = curl_exec($curl1);
curl_close($curl1);
$data =  json_decode($response1,TRUE);
//print_r ($response);
return $data;
}
}
?> 