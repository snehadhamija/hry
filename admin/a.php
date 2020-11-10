<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8090",
  CURLOPT_URL => "http://13.235.134.10:8090/haryana/menu/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\"menuId\":1,\n\"menu\":\"Haryana1 State Govt. Industrial Policies / Schemes\",\n\"sequenceId\":1\n}",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "Content-Type: application/json"

  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}