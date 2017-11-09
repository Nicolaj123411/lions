

<div id="wrapper">
	<?php 
include 'includes/header.php';
 ?>
<section id="main_content">
	<section class="flex" id="news_card">

		<article class="news_card_1">
			<img src="img/nyheder_billeder/nyheder_3.jpg" alt="">
			<p id="news_card_headline">Lions yder hurtig hjælp: 250.000 kr. til børnene i Caribien</p>
			<p>Lions katastrofehjælp yder hjælpen via UNICEF, der allerede er på stedet. Det er utroligt vigtigt, da tusindvis af børn i Caribien lige nu står med et akut behov for vand, mad og beskyttelse...</p>
			<p id="news_card_bottomlink">LÆS MERE</p>
		</article>

		<article class="news_card_2">
			<img src="img/nyheder_billeder/nyheder_1.jpg" alt="">
			<p id="news_card_headline">Marathon på indlandsisen: Kørestol ingen hindring</p>
			<p>Steen og Peder Mondrup - bedre kendt som Team Tvilling - udfordrer indlandsisen i kørestol - med støtte fra Lions Klubberne i hovedstadszonen. Sammen med storebror deltager de i verdens koldeste marathon.</p>
			<p id="news_card_bottomlink">LÆS MERE</p>
		</article>
 
		<article class="news_card_3">
			<img src="img/nyheder_billeder/nyheder_2.jpg" alt="">
			<p id="news_card_headline">100.000 kroner til ofrene for katastrofen i Sri Lanka</p>
			<p>Lions Klubbernes Katastrofehjælp har besluttet at støtte hjælpearbejdet i Sri Lanka med 100.000 kroner.
			</p>
			<p id="news_card_bottomlink">LÆS MERE</p>
		</article>

	</section>


	<section class="flex" id="donations">
		<article>
			<ul class="stat_icon">
				<i class="fa fa-user-plus"></i>
			</ul>
			<p id="Value_medlemmer" ></p>
			<p id="donation_text">DANSKE MEDLEMMER</p>
			
		</article>

		<article>
			<ul class="stat_icon">			
				<i id="stat_icon" class="fa fa-money"></i>
			</ul>
			<p id="value_DONERET"></p>
			<p id="donation_text">DONERET MILIONER I ÅR</p>
			
		</article>

		<article>	
			<ul class="stat_icon">
				<i id="stat_icon" class="fa fa-globe"></i>
			</ul>
			<p id="value_lande">190</p>
			<p id="donation_text">LANDE MED LIONS</p>
			
		</article>

		<article>
			<ul class="stat_icon">
				<i id="stat_icon" class="fa fa-users"></i>
			</ul>
			<p id="value_klubber">300</p>
			<p id="donation_text">DANSKE KLUBBER</p>
			
		</article>
	</section>

	<?php 
		include 'includes/kalender.php';
	?>
</section>
</div>

<script>


function animateValue(id, start, end, duration) {
    // Der forventes interger (tal) i value - da der bliver brugt "math" funktioner
    
    var obj = document.getElementById(id);
    var range = end - start;
    // minTimer skal være 50 - da ændringer ikke er brugbare for det menneskelige øje
    var minTimer = 50;
    // Den beregner intervallet imellem tid og "afstand" i mellem start og end
    var stepTime = Math.abs(Math.floor(duration / range));
    
   // resultater fra oven over sættes sammen her
    stepTime = Math.max(stepTime, minTimer);
    
    var startTime = new Date().getTime();
    var endTime = startTime + duration;
    var timer;
  
    function run() {
        var now = new Date().getTime();
        var remaining = Math.max((endTime - now) / duration, 0);
        var value = Math.round(end - (remaining * range));
        obj.innerHTML = value;
        if (value == end) {
            clearInterval(timer);
        }
    }
    
    timer = setInterval(run, stepTime);
    run();
}

animateValue("Value_medlemmer", 0, 7000, 2000);
animateValue("value_DONERET", 0, 30, 2000);
animateValue("value_lande", 0, 190, 2000);
animateValue("value_klubber", 0, 300, 2000);
</script>
