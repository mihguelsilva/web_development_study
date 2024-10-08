"use-strict";
document.addEventListener("DOMContentLoaded", () => {
    let divPractice = document.querySelector("div#practice-1");
    let divPracticeStyle = getComputedStyle(divPractice);
    setInterval(() => {
	let left = Number(divPracticeStyle.left.replace('px', ''));
	console.log(left);
	if (left < 300) {
	    divPractice.firstElementChild.innerText = "Data";
	} else if (left > 300) {
	    divPractice.firstElementChild.innerText = "Info";
	};
    }, 1000);
    
});
