// ACCORDION 
var accordions = document.getElementsByClassName("accordion");

for (var i = 0; i < accordions.length; i++) {
	accordions[i].onclick = function(){
		this.classList.toggle('is-open');
		var content = this.nextElementSibling;

		if (content.style.maxHeight) {
			//Accordion er åben så vi skal lukke den
			content.style.maxHeight = null;
		}else{
			//Accordion er lukket så den skal åbnes
			content.style.maxHeight = content.scrollHeight + "px";
		}
	}
}

// DONATION COUNTER

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

animateValue("value", 0, 100, 2000);