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
		function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : +1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("Value_medlemmer", 0, 1400000, 20);


	function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : +1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("value_DONERET", 0, 10000, 2000);

	function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : +1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("value_lande", 0, 190, 2000);

	function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : +1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("value_klubber", 0, 300, 2000);



</script>
