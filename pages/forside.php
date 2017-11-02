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
</section>
</div>
<div id="wrapper">
<section id="main_content">
	<section class="flex" id="donations">
		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="Value_medlemmer" >100</p>
			<p id="donation_text">MEDLEMMER</p>
			
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="value_DONERET">35245</p>
			<p id="donation_text">DONERET I ÅR</p>
			
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="value_lande">234</p>
			<p id="donation_text">LANDE</p>
			
		</article>

		<article>
			<img src="http://via.placeholder.com/350x250" alt="">
			<p id="value_klubber">234098</p>
			<p id="donation_text">LOKALKLUBBER</p>
			
		</article>
	</section>
</section>
</div>

<script>
/*
Ret i tallet "150000" - hvis du ønsker at countdown skal gå hurtigere
*/

function animateValue(id, start, end, duration) {
    // assumes integer values for start and end
    
    var obj = document.getElementById(id);
    var range = end - start;
    // no timer shorter than 50ms (not really visible any way)
    var minTimer = 50;
    // calc step time to show all interediate values
    var stepTime = Math.abs(Math.floor(duration / range));
    
    // never go below minTimer
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

animateValue("Value_medlemmer", 0, 7000, 10);
animateValue("value_DONERET", 0, 30, 1000);
animateValue("value_lande", 0, 190, 4265);
animateValue("value_klubber", 0, 300, 22342);
</script>
