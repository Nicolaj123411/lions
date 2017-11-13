			<?php
				if(isset($_GET['success'])){
					if ($_GET['success'] == "true"){
						echo "<div class='success-message'><h1>Ændrigen er fortaget!</h1><a href='../index.php?page=events'>Tryk her for at se ændringen!</a></div>";
					}elseif ($_GET['success'] == "false"){
						echo "<h1>Ændringen mislykkedes</h1>";
					}
				}
			?>

			<div id="table">
				<div class="flex table-header">
					<a href="new-event-detail.php?event_id=<?php echo $_GET['event_id']; ?>">Tilføj indhold</a>
				</div>

				<div class="table-row">
					<ul class="flex">
						<li style="flex: 1;"><h1>dato</h1></li>
						<li><h1>Overskrift</h1></li>
						<li style="flex: 4;">
							<h1>Beskrivelse</h1>
						</li>
						<li>
							<h1>Billede</h1>
						</li>
						<li>
							<h1>Muligheder</h1>
						</li>
					</ul>	
				</div>

<?php
	if(isset($_GET['event_id'])){
		$event_id = $_GET['event_id'];
	}

	$query = $handler->query("SELECT event_content.id AS event_id, event.id, event_date, title, content, img FROM EVENT INNER JOIN event_content on event.id = event_content.event_id WHERE event.id = '$event_id'");
if($query->rowCount()){
	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
		?>
			<div class="table-row">
				<form id="<?php echo $r->event_id; ?>" class="row-edit" action="edit-event-detail.php" method="get">
					<input  type="hidden" name="id" value="<?php echo $r->event_id; ?>">
					<input  type="hidden" name="event" value="<?php echo $_GET['event_id']; ?>">
				<ul class="flex">
					<li><input placeholder="YYYY-MM-DD" name="dato" id="<?php echo $r->event_id; ?>" type="text" value="<?php echo $r->event_date; ?>"></li>
					<li><input name="headline" type="text" value="<?php echo $r->title; ?>"></li>
					<li style="flex: 4;"><textarea id="<?php echo $r->event_id; ?>" name="desc" form="<?php echo $r->event_id; ?>"><?php echo $r->content; ?></textarea></li>
					<li>
						<a href="?admin_page=edit-image&page=event_content&id=<?php echo$r->event_id; ?>"><img src="../img/<?php echo $r->img; ?>" alt="" height="100" width="100""></a>
					</li>
					<li>
						<a class="red-bg" href="?admin_page=delete-event&table=event_content&event_id= <?php echo $r->event_id; ?>">SLET</a>
						<a class="green-bg" href="#">OPDATER</a>
						<input type="submit" value="Opdater info">
						<a class="green-bg" href="?admin_page=edit-image&page=event_content&id=<?php echo $r->event_id; ?>">SKIFT BILLEDE</a>
					</li>
				</ul>	
			</form>
			</div>
		<?php
	}
}else{
		echo "Ingen resultater";
	}
	?>
</div>	




			<div id="table">
				<div class="flex table-header">
					<a href="new-event-time.php?event_id=<?php echo $event_id; ?>">Tilføj tid</a>
					<h1>Event tider</h1>
				</div>
				<div class="table-row">
					<ul class="flex">
						<li style="flex: 1;"><h1>Tidspunkt</h1></li>
						<li style="flex: 10;"><h1>Beskrivelse</h1></li>
						<li>
							<h1>Muligheder</h1>
						</li>
					</ul>	
				</div>
<?php
$query = $handler->query("SELECT * FROM event_time  WHERE event_id = '$event_id'");
if($query->rowCount()){
	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
?>
				<div class="table-row">
					<form id="<?php echo $r->id; ?>" class="row-edit" action="edit-event-time.php" method="get">
						<input type="hidden" name="id" value="<?php echo $r->id; ?>">
					<ul class="flex"> 
						<li>
								<input name="time" type="text" value="<?php  echo $r->event_times; ?>" placeholder="08:45">
						</li>
						<li style="flex: 10;">
							<input name="description"  type="text" value="<?php  echo $r->description; ?>">
							
						</li>
						<li>
							<input class="update buttons" type="submit" value="OPDATER">
							<a class="red-bg" href="?admin_page=delete-event&table=event_time&event_id= <?php echo $r->id; ?>">SLET</a>
						</li>
					</ul>	
					</form>
				</div>
		<?php
	}
}else{
		echo "Ingen resultater";
	}

?>
			

</div>
