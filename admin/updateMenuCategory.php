<?php
$id = $_POST['cid'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost:8090/haryana/menuCategory/create");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);

$data = array(
    'category' =>$_POST['menu'],
    'menuId' => $_POST['cid'],
	'imgurl' => 'null',
	'sequenceId' =>$_POST['sequenceId']
);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);
echo "<pre>";
print_r($info);

?>