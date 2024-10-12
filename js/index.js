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
    let sectionCommands = document.createElement("section");
    sectionCommands.setAttribute("id", "my-commands");
    sectionCommands.setAttribute("class", "content");
    let h2_mycommands = document.createElement("h2");
    h2_mycommands.setAttribute('class', 'content-title');
    h2_mycommands.setAttribute('style', 'font-size:40pt;font-family:Roboto;');
    h2_mycommands.append("PHP Commands");
    sectionCommands.append(h2_mycommands);
    let h2_preg_match = document.createElement("h2");
    h2_preg_match.setAttribute("class", "content");
    h2_preg_match.setAttribute('id', 'preg-match');
    h2_preg_match.append("preg_match()");
    sectionCommands.append(h2_preg_match);
    let h2_preg_replace = document.createElement("h2");
    h2_preg_replace.setAttribute("class", "content");
    h2_preg_replace.setAttribute('id', 'preg-replace');
    h2_preg_replace.append("preg_replace()");
    sectionCommands.append(h2_preg_replace);
    main.append(sectionCommands);
    let sectionContent = document.querySelectorAll('section.content');

    // elements html
    let h2TitleContent = document.querySelectorAll('h2.content-title');
    let h2Content = document.querySelectorAll('h2.content');
    let pContent = document.querySelectorAll('p.content');
    
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
	//body
	document.body.setAttribute('style', 'font-size:12pt;');
	
	// header
	header.setAttribute('style', 'width:95%;background-size:100% 100%;background-image:url("/img/cellphone-gnu.png");height:280px;box-shadow: 1px 1px 10px white;');
	h1Header.setAttribute('style','font-size:25pt;text-align:center;color:white;');
	h2Header.setAttribute('style', 'font-size:15pt;text-align:center;color:white;margin-top:20px;');
	sectionTitle.setAttribute("style", 'padding: 50px;background-color:rgba(1,1,1,.7);border-radius:20px;height:100%;box-sizing:border-box;');

	//main
	h2_mycommands.setAttribute('style', 'font-size:25pt;font-family:Roboto;');
	h2TitleContent.forEach(function(element, index) {
	    element.setAttribute('style', 'font-size:20pt;');
	});
	h2Content.forEach(function(element, index) {
	    element.setAttribute('style', 'font-size:15pt;');
	});
	sectionContent.forEach(function(element, index) {
	    element.setAttribute('style', 'width: 95%;box-shadow:1px 1px 10px black;');
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

    // aside#summary
    let asideSummary = document.createElement('aside');
    asideSummary.setAttribute('id', 'summary');
    asideSummary.setAttribute('style', 'position:fixed;max-height:500px;max-width:40%;top:30px;padding:10px;');
    let sectionSummary = document.createElement('section');
    sectionSummary.setAttribute('id', 'summary');
    sectionSummary.setAttribute('style', 'box-sizing:border-box;margin-top:15px;padding:15px;display:none;box-shadow:1px 1px 10px white;border-radius:30px;background-color:rgba(1,1,1,.9);color:rgba(255,255,255,.8);');
    let figureMenu = document.createElement('figure');
    figureMenu.setAttribute('id', 'menu-icon');
    figureMenu.setAttribute('style', 'width:50px;position:absolute;transform:translate(-50%,-50%);left:50%;height:100%;border-radius:50%;');
    let imgMenu = document.createElement('img');
    imgMenu.setAttribute('src', '/img/menu.png');
    imgMenu.setAttribute('alt', 'menu-icon');
    imgMenu.setAttribute('width', '100%');
    figureMenu.append(imgMenu);
    let buttonSummary = document.createElement('button');
    buttonSummary.setAttribute('id', 'summary');
    buttonSummary.setAttribute('style', `width:50px;height:50px;cursor:pointer;
font-size:15pt;font-family:Arial;background:none;outline:none;border:none;
background-color:rgba(1,1,1,.5);position:relative;border-radius:50%;`);
    buttonSummary.append(figureMenu);
    asideSummary.append(buttonSummary);
    let h2Summary = document.createElement('h2');
    h2Summary.setAttribute('style', 'font-family:Roboto;margin-bottom:10px;');
    h2Summary.append('Summary');
    sectionSummary.append(h2Summary);
    h2Content.forEach(function(element, index) {
	let a = document.createElement('a');
	let href = '#' + element.getAttribute('id');
	a.setAttribute('class', 'summary');
	a.setAttribute('href', href);
	a.setAttribute('style', 'display:block;color:rgba(255,255,255,.8);padding:2px;text-decoration:none;');
	a.append(element.innerHTML);
	sectionSummary.append(a);
    });
    asideSummary.append(sectionSummary);
    document.body.insertBefore(asideSummary, document.body.firstElementChild);
    
    buttonSummary.addEventListener('click', function(e) {
	let display = sectionSummary.style.display;
	if (display == 'none') {
	    sectionSummary.style.display = 'block';
	} else {
	    sectionSummary.style.display = 'none';
	};
    });
    buttonSummary.addEventListener('mouseover', function(e) {
	buttonSummary.style.transform = 'scale(1.1)';
    });
    buttonSummary.addEventListener('mouseout', function(e) {
	buttonSummary.style.transform = 'scale(1)';
    });

    let aSummary = document.querySelectorAll('a.summary');
    aSummary.forEach(function(element, index) {
	element.addEventListener('mouseover', function(e) {
	    console.log("Mouseover");
	    e.target.style.backgroundColor = 'rgba(255,255,255,.3)';
	});
	element.addEventListener('mouseout', function(e) {
	    e.target.style.backgroundColor = 'rgba(0,0,0,.0)';
	});
    });
});

document.addEventListener('copy', function(e) {
    e.clipboardData.setData('text/plain', code);
    e.preventDefault();
});
