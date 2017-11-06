
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
			<div id="table">
				<div class="flex table-header">
					<h1>Opret nyt event</h1><p>Udfyld felterne nedenfor</p>
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
					<ul class="flex">
						<li style="flex: 1;"><?php echo date("d/m/Y"); ?></li>
						<li>Overskrift på hvad end det nu er</li>
						<li style="flex: 4;">Tekst til tingen Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente cum, at officia pariatur ipsam aperiam unde qui libero voluptatibus!</li>
						<li><img src="http://via.placeholder.com/100x100" alt=""></li>
						<li>
							<a class="orange-bg" href="event-detail.php">REDIGER</a>
							<a class="red-bg" href="#">SLET</a>
							<a class="green-bg" href="#">OPDATER</a>
						</li>
					</ul>	
				</div>

				<div class="table-row">
					<ul class="flex">
						<li><?php echo date("d/m/Y"); ?></li>
						<li>Overskrift på hvad end det nu er</li>
						<li style="flex: 4;">Tekst til tingen Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente cum, at officia pariatur ipsam aperiam unde qui libero voluptatibus!</li>
						<li><img src="https://images.unsplash.com/photo-1464500422302-6188776dcbf3?auto=format&fit=crop&w=2621&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="" height="100" width="100"></li>
						<li>
							<a class="orange-bg" href="#">REDIGER</a>
							<a class="red-bg" href="#">SLET</a>
							<a class="green-bg" href="#">OPDATER</a>
						</li>
					</ul>	
				</div>

								<div class="table-row">
					<ul class="flex">
						<li><?php echo date("d/m/Y"); ?></li>
						<li>Overskrift på hvad end det nu er</li>
						<li style="flex: 4;">Tekst til tingen Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente cum, at officia pariatur ipsam aperiam unde qui libero voluptatibus!</li>
						<li><img src="https://images.unsplash.com/photo-1489251242924-a7289d345073?auto=format&fit=crop&w=2555&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="" height="100" width="100""></li>
						<li>
							<a class="orange-bg" href="#">REDIGER</a>
							<a class="red-bg" href="#">SLET</a>
							<a class="green-bg" href="#">OPDATER</a>
						</li>
					</ul>	
				</div>
			</div>
		</section>
	</section>

	</div>
</body>
</html>