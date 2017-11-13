<?php
$page = 	$_GET['page'];
$image = 	$_GET['new_image'];
$id =  		$_GET['id'];
$sql = "UPDATE $page SET img='$image' WHERE id ='$id'";

$query = $handler->prepare($sql);
if($query->execute()){
	header("location: javascript://history.go(-1)");
}else{
	echo "Det virkede ikke!";
}
