<?php
$id = $_GET['event_id'];
$table = $_GET['table'];
if (isset($_GET['table'])) {
	$sql = "DELETE FROM $table WHERE id = $id";
	$query = $handler->prepare($sql);
	$query->execute();
}

$sql = "DELETE FROM lions_event WHERE id = $id";
$query = $handler->prepare($sql);
$query->execute();

$sql = "DELETE FROM event_content WHERE event_id = $id";
$query = $handler->prepare($sql);
$query->execute();

$sql = "DELETE FROM event_time WHERE event_id = $id";
$query = $handler->prepare($sql);
$query->execute();
header('Location: ' . $_SERVER['HTTP_REFERER']);