<?php
require 'config.php';
$sql = "INSERT INTO news( title, content) VALUES ('Indtast titel','Skriv nyhed')";
$query = $handler->prepare($sql);
if($query->execute()){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
	echo "Det virkede ikke!";
}

