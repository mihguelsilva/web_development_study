document.addEventListener("DOMContentLoaded", function() {
    let asideSummary = document.querySelector("aside#summary");                                                                                     
    let h2Title = document.querySelectorAll("h2.title");                                                                                            
    h2Title.forEach(function(element, index) {                                                                                                      
        asideSummary.innerHTML += `<a class='summary' href='#${element.id}' style='display:block;color:white;font-size:14pt;font-family:Arial;margi\
n-top:5px;cursor:pointer;'>${element.getAttribute('name')}</a>`;                                                                                      
    });                                                                                                                                             
    let aSummary = document.querySelectorAll("a.summary");                                                                                          
    aSummary.forEach(function(element, index) {                                                                                                     
        element.addEventListener("mouseover", function(e){                                                                                          
            e.target.style.backgroundColor = "rgba(255,255,255,.1)";                                                                                
        });                                                                                                                                         
        element.addEventListener("mouseout", function(e){
	    e.target.style.backgroundColor = "rgba(1,1,1,.0)";
	});
    });
});
