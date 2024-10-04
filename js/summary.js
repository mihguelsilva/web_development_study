document.addEventListener("DOMContentLoaded", function() {
    let h2Title = document.querySelectorAll("h2.title");
    let asideSummary = document.querySelector("aside#summary");
    // button summary
    let buttonSummary = document.createElement("button");
    buttonSummary.setAttribute("id", "summary");
    // button summary style
    buttonSummary.style.width = "150px";
    buttonSummary.style.height = "35px";
    buttonSummary.style.cursor = "pointer";
    buttonSummary.style.fontSize = "14pt";
    buttonSummary.style.fontFamily = "Arial";
    buttonSummary.style.background = "none";
    buttonSummary.style.outline = "none";
    buttonSummary.style.border = "none";
    buttonSummary.style.backgroundColor = "rgba(1,1,1,.8)";
    buttonSummary.style.color = "rgba(255,255,255,.8)";
    buttonSummary.style.transition = "0.5s";
    // button icon
    let buttonIcon = document.createElement("i");
    buttonIcon.setAttribute("class", "fa fa-bars");
    // create b
    let b = document.createElement("b");
    b.append(" Summary");
    // add icon to button
    buttonSummary.append(buttonIcon);
    buttonSummary.append(b);
    // section summary
    let sectionSummary = document.createElement("section");
    sectionSummary.setAttribute("id", "summary");
    sectionSummary.style.width = "100%";
    sectionSummary.style.color = "white";
    sectionSummary.style.height = "400px";
    sectionSummary.style.display = "none";
    sectionSummary.style.backgroundColor = "rgba(1,1,1,.3)";
    sectionSummary.style.overflow = "auto";
    // append button summary at aside summary
    asideSummary.append(buttonSummary);
    // append a summary at section summary
    h2Title.forEach(function(element, index){
	let href = "#"+element.getAttribute("id");
	// create a summary
	let aSummary = document.createElement("a");
	aSummary.setAttribute("href", href);
	aSummary.setAttribute("class", "summary");
	aSummary.append(element.getAttribute("name"));
	aSummary.style.display = "block";
	aSummary.style.color = "white";
	aSummary.style.fontSize = "14pt";
	aSummary.style.fontFamily = "Arial";
	aSummary.style.cursor = "pointer";
	aSummary.style.textDecoration = "none";
	aSummary.style.boder = "1px solid rgba(255,255,255,.1)";
	aSummary.style.padding = "5px";
	// append a summary at section summary
	sectionSummary.append(aSummary);
    });
    // append section summary at aside summary
    asideSummary.append(sectionSummary);
    buttonSummary.addEventListener("click", function(e) {
	if (sectionSummary.style.display == "none") {
	    sectionSummary.style.display = "block";
	} else if (sectionSummary.style.display == "block") {
	    sectionSummary.style.display = "none";
	};
    });
    // a summary hover
    let aClassSummary = document.querySelectorAll("a.summary");
    aClassSummary.forEach(function(element, index) {
	element.addEventListener("mouseover", function(e) {
	    e.target.style.backgroundColor = "rgba(1,1,1,.5)";
	});
	element.addEventListener("mouseout", function(e) {
	    e.target.style.backgroundColor = "rgba(1,1,1,.0)";
	});
    });
});
