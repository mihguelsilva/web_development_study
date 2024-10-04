document.addEventListener("DOMContentLoaded", function() {
/*    let asideSummary = document.querySelector("aside#summary");                                                                                     
    let h2Title = document.querySelectorAll("h2.title");                                                                                            
    h2Title.forEach(function(element, index) {                                                                                                      
        asideSummary.innerHTML += `<a class='summary' href='#${element.id}' style='display:block;color:white;font-size:14pt;font-family:Arial;cursor:pointer;text-decoration:none;border:1px solid rgba(255,255,255,.1);padding:5px;'>${element.getAttribute('name')}</a>`;                                                                                      
    });                                                                                                                                             
    let aSummary = document.querySelectorAll("a.summary");                                                                                          
    aSummary.forEach(function(element, index) {                                                                                                     
        element.addEventListener("mouseover", function(e){                                                                                          
            e.target.style.backgroundColor = "rgba(255,255,255,.1)";                                                                                
        });                                                                                                                                         
        element.addEventListener("mouseout", function(e){
	    e.target.style.backgroundColor = "rgba(1,1,1,.0)";
	});
    });*/
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
