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