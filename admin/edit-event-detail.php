<?php
require 'config.php';
$dato = $_GET['dato'];
$overskrift = $_GET['headline'];
$beskrivelse = $_GET['desc'];
$id = $_GET['id'];
$event = $_GET['event'];


$sql = "UPDATE event_content SET title='$overskrift',`content`='$beskrivelse' WHERE id=$id";
$query = $handler->prepare($sql);
$query->execute();


$sql = "UPDATE lions_event SET event_date='$dato' WHERE id=$event";
$query = $handler->prepare($sql);
if($query->execute()){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
	echo "Det virkede ikke!";
}