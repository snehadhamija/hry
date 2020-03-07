<?php
$response = api::call();
class Api{
public function call(){
    $url = 'http://localhost:8080/haryana';
    $collection_name = 'menu';
    $request_url = $url . '/' . $collection_name;
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response,TRUE);
    echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
    echo "<tr style='font-weight: bold;'>";  
    echo "<td width='150' align='center'>Class</td>";  
    echo "</tr>";
    foreach($response as $key => $value) 
        {
            echo '<td width="150" align=center>' . $value['menu'] . '</td>';
            echo '</tr>';
        }
    return $response;
    }  

function is_iterable($var)
{
    return $var !== null 
        && (is_array($var) 
            || $var instanceof Traversable 
            || $var instanceof Iterator 
            || $var instanceof IteratorAggregate
            );
}
}

function convert_to_array($response){
    if(!is_array($response)){
        $response = (array)$response;
    }
return $response;
}
?>