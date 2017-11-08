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
					<h1>Event navn:</h1>
					<form action="edit-event-detail.php" method="get">
						<input type="text" value="<?php echo getEventNameById ($_GET['event_id']) ?>">
						<input type="submit" value="Opdater navn">
					</form>
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
				<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
				<ul class="flex">
					<li><input type="date" value="2017-06-01"></li>
					<li><input type="text" value="<?php echo $r->title; ?>"></li>
					<li style="flex: 4;"><textarea name="desc" form="event_tid"><?php echo $r->content; ?></textarea></li>
					<li><img src="<?php echo $r->img; ?>" alt="" height="100" width="100"">
					</li>
					<li>
						<a class="red-bg" href="?admin_page=delete-event&event_id= <?php echo $r->event_id; ?>">SLET</a>
						<a class="green-bg" href="#">OPDATER</a>
						<a class="green-bg" href="edit-image.php">SKIFT BILLEDE</a>
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
					<a href="new-event.php">Tilføj tid</a>
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

				<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li>
								<input name="time" id="time" type="text" value="08:45" placeholder="08:45">
						</li>
						<li style="flex: 10;">
							<textarea name="desc" form="event_tid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At pariatur corporis doloribus beatae reiciendis ea, ipsum eius cumque sed dolorem?</textarea>

							<input type="text-area" value="">
						</li>
						<li>
							<input class="update buttons" type="submit" value="OPDATER">
							<input class="delete buttons" type="submit" value="SLET">
						</li>
					</ul>	
					</form>
				</div>

								<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li>
								<input name="time" id="time" type="text" value="08:45" placeholder="08:45">
						</li>
						<li style="flex: 10;">
							<textarea name="desc" form="event_tid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At pariatur corporis doloribus beatae reiciendis ea, ipsum eius cumque sed dolorem?</textarea>

							<input type="text-area" value="">
						</li>
						<li>
							<input class="update buttons" type="submit" value="OPDATER">
							<input class="delete buttons" type="submit" value="SLET">
						</li>
						</form>
					</ul>	
				</div>
								<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li>
								<input name="time" id="time" type="text" value="08:45" placeholder="08:45">
						</li>
						<li style="flex: 10;">
							<textarea name="desc" form="event_tid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At pariatur corporis doloribus beatae reiciendis ea, ipsum eius cumque sed dolorem?</textarea>

							<input type="text-area" value="">
						</li>
						<li>
							<input class="update buttons" type="submit" value="OPDATER">
							<input class="delete buttons" type="submit" value="SLET">
						</li>
						</form>
					</ul>	
				</div>
			</div>
		</section>
	</section>

	</div>
</body>
</html>