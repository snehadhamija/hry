<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/haryana/beat",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\n    \"fullName\": \"Sugasini.C\",\n    \"mobileNumber\": \"9787647062\",\n    \"email\": \"sugasini.c@stanzaliving.com\",\n    \"hostels\": [\n        {\n            \"id\": 109\n        }\n    ],\n    \"userProfiles\": [\n        {\n            \"id\": 18\n        },\n        {\n            \"id\": 23\n        }\n    ]\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: /",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 288",
    "Content-Type: application/json",
    "Host: localhost:8080",
    "Postman-Token: 25b83b1f-1944-4193-9120-f8b9f07379f9,806dec97-c3c3-4171-a850-221ee886856a",
    "User-Agent: PostmanRuntime/7.17.1",
    "cache-control: no-cache"
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
?>
