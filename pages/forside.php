<div id="wrapper">
<section id="main_content">
	<section class="flex" id="news_card">
		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="news_card_headline">Overskrift 1</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eos quo repudiandae repellat exercitationem quam, aspernatur obcaecati nulla suscipit quod.</p>
			<p id="news_card_bottomlink">LÆS MERE</p>
		</article>
 
		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="news_card_headline">Overskrift 2</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore fugiat dolor, voluptatum impedit natus amet similique ipsam dolore dignissimos quidem ad, laborum aliquam quia eos facere nam numquam saepe pariatur!</p>
			<p id="news_card_bottomlink">LÆS MERE</p>
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="news_card_headline">Overskrift 3</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facere quia debitis laborum, porro dolorum esse tempore! Quas ducimus, ipsa numquam explicabo eos nemo atque, repudiandae sequi, dolores consequatur enim.</p>
			<p id="news_card_bottomlink">LÆS MERE</p>
		</article>
	</section>


	<section class="flex" id="donations">
		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="Value_medlemmer" ></p>
			<p id="donation_text">MEDLEMMER I DANMARK</p>
			
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="value_DONERET"></p>
			<p id="donation_text">DONERET MILIONER I ÅR</p>
			
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="value_lande">190</p>
			<p id="donation_text">LANDE MED LIONS</p>
			
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="value_klubber">300</p>
			<p id="donation_text">LOKALE KLUBBER I DANMARK</p>
			
		</article>
	</section>
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
    
    // get current time and calculate desired end time
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
