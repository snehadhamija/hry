<?php 
$url = 'http://localhost:8090/haryana';
$collection_name = 'menuCategory';
$request_url = $url . '/' . $collection_name;
$curl = curl_init($request_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response,TRUE);

?>
<?php

	?>
	<?php
											
										foreach($response as $key => $value)  
										{	
										if($value['menu']['id'] == $nameid)
										{
										?>
		<option value="<?php echo $value['id'];?>"><?php echo $value['category'];?></option>
		<?php
		}
		}
		?>
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
$nameid = $_POST['value']; 
	?>
	<?php
											
										foreach($response as $key => $value)  
										{	
										if($value['menu']['category'] ['id'] == $nameid)
										{
							?>
				<option><?php echo $value['service'];?></option>

<?php
}
										}
?>