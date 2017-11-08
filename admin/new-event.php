<?php
	require 'config.php';
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="admin-body">
	<div class="wrapper">

	<section class="main-content flex">
		<nav id="sidebar">
			<h1>Mit overblik</h1>
			<ul>
				<li><a href="index.php">Forside</a></li>
				<li class="menu-active"><a href="#">Events <span style="font-weight: 100; font-size: 12px;">- Ny event</span></a></li>
				<li><a href="#">Nyheder</a></li>
			</ul>
		</nav>

		<section id="main-area">
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
					<form id="new-event" action="edit-event-detail.php" method="get">
						<input type="text" value="TITEL">
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
							<h1>Action</h1>
						</li>
					</ul>	
				</div>

				<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li><input type="date"></li>
						<li><input type="text" placeholder="Overskrift på Event"></li>
						<li style="flex: 4;"><textarea name="desc" form="event_tid" placeholder="Tilføj en beskrivelse til eventet. Denne beskrivelse vil blive vist som det første."></textarea></li>
						<li>
							<a class="green-bg" href="#">Opret event</a>
						</li>
					</ul>	
				</form>
				</div>

			</div>	

		</section>
	</section>

	</div>
</body>
</html>