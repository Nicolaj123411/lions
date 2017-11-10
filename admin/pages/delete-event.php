<?php
$id = $_GET['event_id'];
$table = $_GET['table'];

$sql = "DELETE FROM $table WHERE id = $id";
$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er slettet i databasen!";
}else{
	echo "Det virkede ikke!";
}
?>