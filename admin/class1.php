<?php 

$url = 'http://localhost:8090/haryana';
$collection_name = 'menuCatService';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,TRUE);

 
?>
<?php
$nameids = $_POST['dataposts']; 
	?>
	<?php
											
										foreach($response as $key => $value)  
										{	
										if($value['category'] ['id'] == $nameids)
										{
							?>
				<option><?php echo $value['service'];?></option>

<?php
}
										}
?>