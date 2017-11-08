<?php
$event_id = $_GET['event_id'];
	if ($handler->query("DELETE FROM `event` WHERE id = '$event_id'")){
		echo "<script>window.location.replace('?admin_page=events&success=true');</script>";
		die();
	}else{
		echo "den blev ikke slettet!";
	}
?>