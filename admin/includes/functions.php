<?php

function getEventNameById ($id){
	global $handler;
	//Retunerer navn på event id

		$query = $handler->query("SELECT title FROM EVENT INNER JOIN event_content on event.id = event_content.event_id WHERE event.id = '$id'");

		if($query->rowCount()){
	$r = $query->fetch(PDO::FETCH_OBJ);
		return $r->title;
	}else{
		return "Ingen resultater";
	}
}
?>