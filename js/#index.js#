let code;

// favicon
let link = document.createElement('link');
link.setAttribute('rel', 'icon');
link.setAttribute('type', 'image/x-icon');
link.setAttribute('href', '/img/gnu-icon.png');
document.head.append(link);

document.addEventListener("DOMContentLoaded", function() {
    let bodyTitle = document.body.getAttribute("name").split("|");
    let header = document.createElement("header");
    header.setAttribute("id", "header");
    document.head.children[2].innerText = bodyTitle[0];
    header.setAttribute('style', 'box-shadow:1px 1px 10px white;');
    let sectionTitle = document.createElement("section");
    sectionTitle.setAttribute("id", "title");
    sectionTitle.setAttribute("style",'max-width:1000px;padding:100px;height:100%;box-sizing:border-box;background-color:rgba(1,1,1,.5);border-radius:20px;');
    let h1Header = document.createElement("h1");
    h1Header.setAttribute("style", "font-size:50pt;font-family:Arial;text-align:center;color:white;");
    h1Header.append(bodyTitle[1]);
    let h2Header = document.createElement("h2");
    h2Header.setAttribute("style", "color: white;text-align:center;margin-top: 30px;font-size:25pt;font-family:Roboto;");
    h2Header.append(bodyTitle[2]);
    sectionTitle.append(h1Header);
    sectionTitle.append(h2Header);
    header.append(sectionTitle);
    document.body.insertBefore(header, document.body.firstElementChild);
    document.body.removeAttribute("name");

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
    let h2PhpCommands = ['scandir()', 'count()', 'preg_match()', 'preg_replace()'];
    for (let i in h2PhpCommands) {
	let h2Id = h2PhpCommands[i].replace('()', '').replace('_', '-');
	let phpCommands = document.createElement('h2');
	phpCommands.setAttribute('class', 'content');
	phpCommands.setAttribute('id', h2Id);
	phpCommands.append(h2PhpCommands[i]);
	sectionCommands.append(phpCommands);
    };
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

    // table-dnm
    let tableDnm = document.querySelectorAll('table.table-dnm');
    tableDnm.forEach(function(element, index) {
	if (element) {
	    if (element.hasAttribute('title')) {
		let caption = document.createElement('caption');
		caption.setAttribute('style', 'font-size:20pt;font-family:"Black Han Sans", sans-serif;box-shadow:1px 1px 10px black;;');
		caption.append(element.getAttribute('title'));
		element.append(caption);
	    }
	    let tHead = document.createElement('thead');
	    let tBody = document.createElement('tbody');
	    let tableName = element.getAttribute('name');
	    function tableContent (e, c, pE) {
		for (let b = 0; b < c.split('#').length; b++) {
		    let tableElement = document.createElement(e);
		    tableElement.setAttribute('style', 'border-right: 1px solid rgba(1,1,1,.3);padding:10px;');
		    tableElement.append(c.split('#')[b]);
		    pE.append(tableElement);
		}
	    };
	    for (let a = 0; a < tableName.split('|').length; a++) {
		let tr = document.createElement('tr');
		if (a == 0) {
		    tr.setAttribute('style', 'background-color: rgba(125,255,50,.3);');
		    tableContent('th', tableName.split('|')[a], tr);
		    tHead.append(tr);
		} else {
		    if (a%2 == 0) {
			tr.setAttribute('style', 'background-color: rgba(125,25,255,.4);');
		    } else {
			tr.setAttribute('style', 'background-color: rgba(125,125,50,.5);');
		    };
		    tableContent('td', tableName.split('|')[a], tr);
		    tBody.append(tr);
		};
	    };
	    element.setAttribute('style', 'border-collapse:collapse;border:1px solid black;margin:20px auto;box-shadow: 1px 1px 10px black;font-family: "Roboto", sans-serif;');
	    element.append(tHead);
	    element.append(tBody);
	    element.removeAttribute('name');
	    element.removeAttribute('title');
	};
    });

    // div.important
    let divImportant = document.querySelectorAll('div.important');
    divImportant.forEach(function(element, index) {
	if (element) {
	    let b = document.createElement('b');
	    b.setAttribute('style', 'display:block;font-size: 20pt;font-family:"Black Han Sans", sans-serif;margin-bottom:10px;');
	    b.append('Important');
	    element.insertBefore(b, element.firstChild);
	};
    });

    // div.danger
    let divDanger = document.querySelectorAll('div.danger');
    divDanger.forEach(function(element, index) {
	if (element) {
	    let b = document.createElement('b');
	    b.setAttribute('style', 'display:block;font-size: 20pt;font-family:"Black Han Sans", sans-serif;margin-bottom:10px;');
	    b.append('Careful');
	    element.insertBefore(b, element.firstChild);
	};
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

    // aside#summary
    let asideSummary = document.createElement('aside');
    asideSummary.setAttribute('id', 'summary');
    asideSummary.setAttribute('style', 'position:fixed;max-height:500px;max-width:20%;top:30px;padding:10px;width:50%;');
    let sectionSummary = document.createElement('section');
    sectionSummary.setAttribute('id', 'summary');
    sectionSummary.setAttribute('style', 'box-sizing:border-box;margin-top:15px;padding:15px;display:none;box-shadow:1px 1px 10px white;border-radius:30px;background-color:rgba(1,1,1,.8);color:rgba(255,255,255,.8);overflow:auto;height:450px;position: absolute;width:100%;');
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
	a.setAttribute('style', 'display:block;color:rgba(255,255,255,.8);padding:2px;text-decoration:none;font-family:"Courier New", monospace;font-size:12pt;');
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

    // footer
    let footer = document.createElement('footer');
    document.body.append(footer);

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

    let liMenu = document.querySelectorAll("header#menu section#menu nav ul li.level-one");
    let subLiMenu = document.querySelectorAll("header#menu section#menu nav ul li nav ul li");
    liMenu.forEach(function(element, index) {
	element.addEventListener("click", function(e) {
	    if (e.target.firstElementChild.style.display == "none") {
		e.target.firstElementChild.style.display = "block";
	    } else {
		e.target.firstElementChild.style.display = "none";
	    };
	});
    });
    
    subLiMenu.forEach(function(element, index) {
	element.setAttribute('style', 'float:none;font-size:12pt;background-color:rgba(1,1,1,.9);width:20%;');
	let twoLevel = new RegExp(/^(\d+)\_([a-zA-Z0-9]{1,})$/);
	if (twoLevel.test(element.firstElementChild.innerText)) {
	    let title = element.firstElementChild.innerText.replace(new RegExp(/(\d+)_(\w+)/), "$2");
	    element.firstElementChild.innerText = title[0].toUpperCase() + title.slice(1);
	} else {
	    let title = element.firstElementChild.innerText.replace(new RegExp(/(\d+)_(\w+)_(\w+)/g), "$2 $3");
	    element.firstElementChild.innerText = title[0].toUpperCase() + title.slice(1);
	}

	element.addEventListener("mouseover", function(e) {
	    e.target.style.backgroundColor = "rgba(1,1,1,.8)";
	});
	element.addEventListener("mouseout", function(e) {
	    e.target.style.backgroundColor = "rgba(1,1,1,.0)";
	});
    });

    let buttonShow = document.querySelectorAll('button.show');
    buttonShow.forEach(function(element, index){
	element.addEventListener('click', function(e) {
	    let divShowClass = e.target.nextElementSibling.getAttribute('class');
	    let divShow = e.target.nextElementSibling;
	    if (divShowClass == 'hide') {
		divShow.removeAttribute('class');
		divShow.setAttribute('class', 'show');
		console.log(divShowClass);
	    } else if (divShowClass == 'show') {
		divShow.removeAttribute('class');
		divShow.setAttribute('class', 'hide');
		console.log(divShowClass);
	    };
	});
    });
});

// copy code
document.addEventListener('copy', function(e) {
    e.clipboardData.setData('text/plain', code);
    e.preventDefault();
});

