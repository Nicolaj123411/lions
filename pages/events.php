<div id="wrapper">
	<?php
		require 'includes/header.php';
	?>
<section class="main_content_events">
	<div class="event"> 
		<div id="headline_box">EVENTS</div>
		<div id="next_event">
			<button class="accordion">
				<div class="flex">
					<div class="event-desc">
						<h1>NÆSTE EVENT</h1>

						<h3>Jubilæumskoncert</h3>

						<p>
							I september 2017 er det 30 år siden at Lions Fjends blev stiftet, som en lokal afdeling af den verdensomspændende humanitære organisation Lions Clubs International. Dette fejrer vi med en koncert med Prinsens Musikkorps og solist Mette Poulsen på Kongenshus Efterskole onsdag 15. november 2017, kl. 19-21:30. Under koncerten donerer vi midler til projekter i bl.a. lokalområdet.
						</p>

					<ul class="info_icon">
						<i class="fa fa-wheelchair"></i>
						<i class="fa fa-coffee"></i>
						<i class="fa fa-eur"></i>
						<i class="fa fa-blind"></i>
						<i class="fa fa-paw"></i>
					</ul>
					</div>
					<div class="event-image">
						<img src="img/event_billeder/julekoncert.jpg" alt="Event picture">
							<div class="img-overlay">
								<p>Starter om</p>
								<div>
									<h3>8</h3>
									<h4>Dage</h4>
								</div>
								<div>
									<h3>12</h3>
									<h4>Timer</h4>
								</div>
							</div>
					</div>
				</div>
				
			</button>
			<div class="accordion-content">
				<div class="event_desc_wrapper">

					
				<h5>Jubilæumskoncert</h5>
				<p>
					I september 2017 er det 30 år siden at Lions Fjends blev stiftet, som en lokal afdeling af den verdensomspændende humanitære organisation Lions Clubs International. Dette fejrer vi med en koncert med Prinsens Musikkorps og solist Mette Poulsen på Kongenshus Efterskole onsdag 15. november 2017, kl. 19-21:30.
				</p>

				<h5>Tilmelding</h5> 
				
			
				<p>
					Billetter til arrangementet (incl. kaffe og kage) koster kr. 50,- og kan købes og betales med Dankort.Desuden kan billetter reserveres hos Ejvind Jakobsen, tlf. 40411296.
				</p>
		
				<h5>Tidsplan</h5>
				<div class="tidsplan">
				<span>19:00 -  </span><p>Velkomst og donationer samt servering af kaffe og kage</p>
				<span>20:00 -  </span><p>Koncert med Prinsens Musikkorps og solist Mette Poulsen</p>
				<span>21:00 -  </span><p>Afslutning</p>
				
				</div>
			
				</div>
			</div>
		</div>

<?php
$query = $handler->query('SELECT lions_event.id, event_date, title, content, img FROM lions_event INNER JOIN event_content on lions_event.id = event_content.event_id GROUP BY lions_event.id');

	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
?>
			<button class="accordion">
				<div class="flex">
				<div class="event-desc">
					<h1><?php echo $r->title ?></h1>

					<h3><?php echo $r->event_date ?></h3>
					<p>
						<?php echo $r->content ?>
					</p>
				<ul class="info_icon">
					<i class="fa fa-wheelchair"></i>
					<i class="fa fa-coffee"></i>
					<i class="fa fa-eur"></i>
					<i class="fa fa-blind"></i>
				</ul>
				</div>
				<div class="event-image">
					<img src="img/<?php echo $r->img ?>" alt="Event picture">
						<div class="img-overlay">
							<p>Starter om</p>
							<div>
								<h3>14</h3>
								<h4>Dage</h4>
							</div>
							<div>
								<h3>8</h3>
								<h4>Timer</h4>
							</div>
						</div>
					</div>
				</div>
				
			</button>


			<div class="accordion-content">
				<div class="event_desc_wrapper">
<?php
$id = $r->id;
		$query2 = $handler->query("SELECT * FROM `event_content` WHERE event_id = '$id'");

	while ($p = $query2->fetch(PDO::FETCH_OBJ)) {
		?>
				<h5><?php echo $p->title; ?></h5>
				<p>
					<?php echo $p->content; ?>
				</p>

				
		<?php
	}
?>

<h5>Tidsplan</h5>
<div class="tidsplan">
<?php
	$query2 = $handler->query("SELECT * FROM `event_time` WHERE event_id = '$id'");

	while ($p = $query2->fetch(PDO::FETCH_OBJ)) {
		?>
		<span><?php echo $p->event_times; ?> - </span><p><?php echo $p->description; ?></p>
		<?php
	}
				?>				
		</div>	
		</div>
		</div>
	
<?php
}
?></div>
</div>
</section>
</div>