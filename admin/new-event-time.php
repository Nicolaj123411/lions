<?php
require 'config.php';
$id = $_GET['event_id'];

$sql = "INSERT INTO event_time(event_id, event_times, description) VALUES ($id,'08:00','Indtast beskrivelse')";

$query = $handler->prepare($sql);
if($query->execute()){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
	echo "Det virkede ikke!";
}
