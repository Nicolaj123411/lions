<?php

require 'config.php';

$sql = "INSERT INTO event( event_date, public) VALUES ('yyyy-mm-dd','1')";

$query = $handler->prepare($sql);
$query->execute();

$id = $handler->lastInsertId();
$sql = "INSERT INTO event_content(event_id, img, title, content) VALUES ('$id','billede','Event titel','Event indhold')";

$query = $handler->prepare($sql);
if($query->execute()){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
	echo "Det virkede ikke!";
}

