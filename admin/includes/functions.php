<?php

function getEventNameById ($id){
	global $handler;
	//Retunerer navn på event id

		$query = $handler->query("SELECT title FROM lions_event INNER JOIN event_content on lions_event.id = event_content.event_id WHERE lions_event.id = '$id'");

		if($query->rowCount()){
	$r = $query->fetch(PDO::FETCH_OBJ);
		return $r->title;
	}else{
		return "Ingen resultater";
	}
}
//funktion til at hente alle billederne ind fra mapperne i img mappen.
function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    return $ffs;
}
?>