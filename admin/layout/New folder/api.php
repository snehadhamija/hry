<?php include("head.php"); ?> 

<?php include("left.php"); ?>
<?php include("script.php"); ?>
<body style="background:red">

<?php 
$response=mysqli_connect("localhost","root","","haryana");
$GLOBALS['con']=$response;
function getMenus($id=Null)
{
	if ($id==Null)
	{
		$query=mysqli_query($GLOBALS['con'],"select * from menu");
		$all_data=array();
		while($row=mysqli_fetch_assoc($query)){
			array_push($all_data,$row);
		}
	
		return $all_data;
	}
	else
	{
		$query=mysqli_query($GLOBALS['con'],"select * from menu where id='".$id."'");
		$all_data=array();
		while($row=mysqli_fetch_assoc($query)){
			array_push($all_data,$row);
		}
		return $all_data;
	}	
	}

function getmenuCategory($cid=Null){
	if ($cid==Null){
		$query=mysqli_query($GLOBALS['con'],"select * from menuCategory");
		$all_data=array();
		while($row=mysqli_fetch_assoc($query)){
			array_push($all_data,$row);
		}
		return $all_data;
	}
	else
	{
		$query=mysqli_query($GLOBALS['con'],"select * from menuCategory where cid='".$cid."'");
		$all_data=array();
		while($row=mysqli_fetch_assoc($query)){
			array_push($all_data,$row);
		}
		return $all_data;
	}	
	}

function getmenuCatService($category_id=Null){
	if ($category_id==Null){
		$query=mysqli_query($GLOBALS['con'],"select * from menuCatService");
		$all_data=array();
		while($row=mysqli_fetch_assoc($query)){
			array_push($all_data,$row);
		}
		return $all_data;
	}
	else
	{
		$query=mysqli_query($GLOBALS['con'],"select * from menuCatService where category='".$category_id."'");
		$all_data=array();
		while($row=mysqli_fetch_assoc($query)){
			array_push($all_data,$row);
		}
		return $all_data;
	}	
	}

if(isset($_REQUEST['type'])){
	if($_REQUEST['type']=="menuCategory"){
		echo json_encode(getmenuCategory($_REQUEST['cid']));
	}
		if($_REQUEST['type']=="menuCatService"){
		echo json_encode(getmenuCatService($_REQUEST['category_id']));
		}
	}

else{
	echo json_encode(getMenus());
}


?>

