<?php
require 'config.php';
$id = $_GET['event_id'];

$sql = "INSERT INTO event_content(event_id, img, title, content) VALUES ('$id','Nyt billede','Ny titel','nyt indhold')";

$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er opdateret i databasen!";
}else{
	echo "Det virkede ikke!";
}
