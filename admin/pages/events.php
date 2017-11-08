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
					<a href="new-event.php">Opret event</a>
					<h1>Rediger events</h1><p>Oversigt over events</p>
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

$query = $handler->query('SELECT event.id, event_date, title, content, img FROM EVENT INNER JOIN event_content on event.id = event_content.event_id GROUP BY event.id');
if($query->rowCount()){
	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
		?>
			<div class="table-row">
				<ul class="flex">
					<li style="flex: 1;"><?php echo $r->event_date; ?></li>
					<li><?php echo $r->title; ?></li>
					<li style="flex: 4;"><?php echo $r->content; ?></li>
					<li><img src="<?php echo $r->img; ?>" alt=""></li>
					<li>
						<a class="orange-bg" href="?admin_page=event-detail&event_id=<?php echo $r->id; ?>">REDIGER</a>
						<a class="red-bg" href="?admin_page=delete-event&event_id=<?php echo $r->id; ?>">SLET</a>
					</li>
				</ul>	
			</div>
		<?php
	}
}else{
	echo "No results";
}

?>
			</div>
		
