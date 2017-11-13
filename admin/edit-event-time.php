<?php
require 'config.php';
$time = $_GET['time'];
$id = $_GET['id'];
$beskrivelse = $_GET['description'];

$sql = "UPDATE event_time SET event_times='$time',description='$beskrivelse' WHERE id=$id";

$query = $handler->prepare($sql);
if($query->execute()){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
	echo "Det virkede ikke!";
}
