<?php
//GET info
$page = 	$_GET['page'];
$image = 	$_GET['new_image'];
$id =  		$_GET['id'];

//KØR UPDATE HER!

$sql = "UPDATE $page SET img='$image' WHERE id ='$id'";

$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er indsat i databasen!";
}else{
	echo "Det virkede ikke!";
}
