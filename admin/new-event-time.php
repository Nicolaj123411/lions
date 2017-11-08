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
				<li class="menu-active"><a href="#">Events <span style="font-weight: 100; font-size: 12px;">- Ny event tid</span></a></li>
				<li><a href="#">Nyheder</a></li>
			</ul>
		</nav>

		<section id="main-area">
			<div id="table">
				<div class="flex table-header">
					<h1>Tilføj ny tid</h1>
				</div>

				<div class="table-row">
					<ul class="flex">
						<li style="flex: 1;"><h1>Tidspunkt</h1></li>
						<li style="flex: 10;"><h1>Beskrivelse</h1></li>
						<li>
							<h1>Action</h1>
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
							<input class="update buttons" type="submit" value="Tilføj">
						</li>
					</ul>	
					</form>
				</div>

		</section>
	</section>

	</div>
</body>
</html>