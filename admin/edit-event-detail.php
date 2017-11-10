<?php



require 'config.php';
$dato = $_GET['date'];
$overskrift = $_GET['headline'];
$beskrivelse = $_GET['desc'];
$id = $_GET['id'];

$sql = "UPDATE event_content SET title='$overskrift',`content`='$beskrivelse' WHERE id=$id";
$query = $handler->prepare($sql);
if($query->execute()){
	echo "der er opdateret i databasen!";
}else{
	echo "Det virkede ikke!";
}
