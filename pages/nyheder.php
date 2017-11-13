<div id="wrapper">
	<?php
		require 'includes/header.php';
	?>
	<section id="main_content_nyheder">
		
		<div id="nyheder">
			<div id="headline_box">NYHEDER</div>
<?php
$query = $handler->query("SELECT * FROM `news`");

	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
		?>
				<div class="nyheder_next">
					<h2><?php echo $r->title; ?></h2>
					<img src="img/<?php echo $r->img; ?>" alt="nyhed">
					
						<?php echo $r->content; ?>
					
					<h3>Pressekontakt</h3>
					<p>Flemming Høj Sørensen</p>
					<p>Presseansvarlig i Lions Danmark</p>
					<p>Mobil  24 27 20 9</p>
					<p>E-mail: <a href="mailto:prd.md@lions.dk">prd.md@lions.dk</a></p>
				</div>
		<?php
	}
?>
		</div>
	</section>
</div>
