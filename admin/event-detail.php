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
				<li class="menu-active"><a href="#">Events</a></li>
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
					<form action="edit-event-detail.php" method="get">
						<input type="text" value="Loppemarked">
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

				<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li><input type="date" value="2017-06-01"></li>
						<li><input type="text" value="Overskrift på Event"></li>
						<li style="flex: 4;"><textarea name="desc" form="event_tid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At pariatur corporis doloribus beatae reiciendis ea, ipsum eius cumque sed dolorem?</textarea></li>
						<li><img src="https://images.unsplash.com/photo-1489251242924-a7289d345073?auto=format&fit=crop&w=2555&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="" height="100" width="100"">
						</li>
						<li>
							<a class="red-bg" href="#">SLET</a>
							<a class="green-bg" href="#">OPDATER</a>
							<a class="green-bg" href="edit-image.php">SKIFT BILLEDE</a>
						</li>
					</ul>	
				</form>
				</div>

								<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li></li>
						<li><input type="text" value="Overskrift 2 "></li>
						<li style="flex: 4;"><textarea name="desc" form="event_tid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At pariatur corporis doloribus beatae reiciendis ea, ipsum eius cumque sed dolorem?</textarea></li>
						<li><img src="https://images.unsplash.com/photo-1489251242924-a7289d345073?auto=format&fit=crop&w=2555&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="" height="100" width="100"">
						</li>
						<li>
							<a class="red-bg" href="#">SLET</a>
							<a class="green-bg" href="#">OPDATER</a>
							<a class="green-bg" href="edit-image.php">SKIFT BILLEDE</a>
						</li>
					</ul>	
				</form>
				</div>

								<div class="table-row">
					<form id="event_tid" class="row-edit" action="edit-event-detail.php" method="get">
					<ul class="flex">
						<li></li>
						<li><input type="text" value="Overskrift 3"></li>
						<li style="flex: 4;"><textarea name="desc" form="event_tid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At pariatur corporis doloribus beatae reiciendis ea, ipsum eius cumque sed dolorem?</textarea></li>
						<li><img src="https://images.unsplash.com/photo-1489251242924-a7289d345073?auto=format&fit=crop&w=2555&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="" height="100" width="100"">
						</li>
						<li>
							<a class="red-bg" href="#">SLET</a>
							<a class="green-bg" href="#">OPDATER</a>
							<a class="green-bg" href="edit-image.php">SKIFT BILLEDE</a>
						</li>
					</ul>	
				</form>
				</div>
			</div>	
			<div id="table">
				<div class="flex table-header">
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