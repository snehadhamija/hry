<?php

$menu =  $_POST['menu'];
$sid = $_POST['sequenceId'];
$data = array(
   "menu"=>$menu,
"sequenceId"=>$sid  
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8090/haryana/menu/create");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
echo "<pre>";
echo "$output";

?>