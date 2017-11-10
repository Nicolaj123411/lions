<?php
require 'config.php';
$time = $_GET['time'];
$id = $_GET['id'];
$beskrivelse = $_GET['descriptions'];

echo $sql = "UPDATE event_time SET event_times='$time',description='$beskrivelse' WHERE id=$id";
die();
$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er opdateret i databasen!";
}else{
	echo "Det virkede ikke!";
}
