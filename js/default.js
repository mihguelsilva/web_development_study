document.addEventListener("DOMContentLoaded", function() {
    let buttonExample = document.querySelectorAll("button.example");
    buttonExample.forEach(function(element, index) {
	element.addEventListener("mouseover", function(e) {
	    e.target.style.backgroundColor = "rgba(1,1,1,.6)";
	});
	element.addEventListener("mouseout", function(e) {
	    e.target.style.backgroundColor = "rgba(1,1,1,.4)";
	});
	element.addEventListener("click", function(e) {
	    let divExampleSub = e.target.nextElementSibling;
	    if (!divExampleSub.style.display) {
		divExampleSub.style.display = "block";
		e.target.style.backgroundColor = "rgba(255,255,255,.6)";
	    } else if (divExampleSub.style.display == "none") {
		divExampleSub.style.display = "block";
		e.target.style.backgroundColor = "rgba(255,255,255,.6)";
	    } else if (divExampleSub.style.display == "block") {
		divExampleSub.style.display = "none";
		e.target.style.backgroundColor = "rgba(1,1,1,.4)";
	    }
	});
    });
});
