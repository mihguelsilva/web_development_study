let code;
document.addEventListener("DOMContentLoaded", function() {
    
    // header#header
    let header = document.querySelector("header#header");
    header.setAttribute('style', 'box-shadow:1px 1px 10px white;');
    let headerTitle = header.getAttribute("title").split(",");
    let sectionTitle = document.createElement("section");
    sectionTitle.setAttribute("id", "title");
    sectionTitle.setAttribute("style",'max-width:1000px;padding:100px;height:100%;box-sizing:border-box;background-color:rgba(1,1,1,.5);border-radius:20px;');
    let h1Header = document.createElement("h1");
    h1Header.setAttribute("style", "font-size:50pt;font-family:Arial;text-align:center;color:white;");
    h1Header.append(headerTitle[0]);
    let h2Header = document.createElement("h2");
    h2Header.setAttribute("style", "color: white;text-align:center;margin-top: 30px;font-size:25pt;font-family:Roboto;");
    h2Header.append(headerTitle[1]);
    sectionTitle.append(h1Header);
    sectionTitle.append(h2Header);
    header.append(sectionTitle);

    // section#my-commands
    let main = document.querySelector("main");
    let h2Content = document.querySelectorAll('h2.content');
    let sectionCommands = document.createElement("section");
    sectionCommands.setAttribute("id", "my-commands");
    sectionCommands.setAttribute("class", "content");
    let h2_mycommands = document.createElement("h2");
    h2_mycommands.style.fontSize = "40pt";
    h2_mycommands.style.fontFamily = "Roboto";
    h2_mycommands.append("PHP Commands");
    sectionCommands.append(h2_mycommands);
    let h2_preg_match = document.createElement("h2");
    h2_preg_match.setAttribute("class", "content");
    h2_preg_match.append("preg_match()");
    sectionCommands.append(h2_preg_match);
    let h2_preg_replace = document.createElement("h2");
    h2_preg_replace.setAttribute("class", "content");
    h2_preg_replace.append("preg_replace()");
    sectionCommands.append(h2_preg_replace);
    main.append(sectionCommands);
    let sectionContent = document.querySelectorAll('section.content');
    //icon
    let sectionCode = document.querySelectorAll('section.code');
    sectionCode.forEach(function(element, index) {
	let img = document.createElement('img');
	img.setAttribute('src', '/img/copy.png');
	img.setAttribute('width', '100%');
	img.setAttribute('alt', 'copy icon logo');
	let figureImg = document.createElement('figure');
	figureImg.setAttribute('class', 'copy');
	figureImg.append(img);
	element.insertBefore(figureImg, element.firstChild);
    });
    
    // media querys
    if (window.matchMedia("(min-width: 300px) and (max-width: 500px)").matches) {
	// header
	header.setAttribute('style', 'width:95%;background-size:100% 100%;background-image:url("/img/cellphone-gnu.png");height:280px;box-shadow: 1px 1px 10px white;');
	h1Header.setAttribute('style','font-size:30pt;text-align:center;color:white;');
	h2Header.setAttribute('style', 'font-size:20pt;text-align:center;color:white;margin-top:20px;');
	sectionTitle.setAttribute("style", 'padding: 50px;background-color:rgba(1,1,1,.7);border-radius:20px;');

	//main
	h2_mycommands.setAttribute('style', 'font-size:25pt;font-family:Roboto;');
	h2_preg_match.setAttribute('style','font-size:20pt;');
	h2_preg_replace.setAttribute('style','font-size:20pt;');
	h2Content.forEach(function(element, index) {
	    element.setAttribute('style', 'font-size:20pt;');
	});
	sectionContent.forEach(function(element, index) {
	    element.setAttribute('style', 'width: 95%;box-shadow:1px 1px 10px black;');
	});
	pContent.forEach(function(element, index) {
	    element.setAttribute('style', 'font-size: 13pt;');
	});
    };
    

    // functions
    let figureCopy = document.querySelectorAll('figure.copy');
    figureCopy.forEach(function(element, index) {
	if (element) {
	    element.addEventListener('click', function(e) {
		code = e.target.parentElement.nextElementSibling.innerText;
		document.execCommand('copy');
	    });
	};
    });
});
document.addEventListener('copy', function(e) {
    e.clipboardData.setData('text/plain', code);
    e.preventDefault();
});
