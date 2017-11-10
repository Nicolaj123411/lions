<?php

require 'config.php';

$sql = "INSERT INTO event( event_date, public) VALUES ('yyyy-mm-dd','1')";

$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er oprettet et event i databasen!";
}else{
	echo "Det virkede ikke!";
}
$id = $handler->lastInsertId();
$sql = "INSERT INTO event_content(event_id, img, title, content) VALUES ('$id','billede','Event titel','Event indhold')";

$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er oprettet et event i databasen!";

	echo "id på den sidst indsatte id er: " . $handler->lastInsertId();
}else{
	echo "Det virkede ikke!";
}

