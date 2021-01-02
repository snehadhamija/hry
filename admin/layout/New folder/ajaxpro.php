<?php


   require('db_config.php');


   $sql = "SELECT * FROM menuCategory
         WHERE cid LIKE '%".$_GET['id']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['cid']] = $row['menu'];
   }


   echo json_encode($json);
?>