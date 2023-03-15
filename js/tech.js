function showElement(name) {
	var div = document.getElementById(name);
	var btn = document.getElementById("btn"+name);
	if(div.style.display == "none") {
		div.style.display = "block";
		btn.innerHTML = "-";
	}
	else {
		div.style.display = "none";
		btn.innerHTML = "+";
	}
}

window.addEventListener("load", function() {
	const canArr = ["xhtmlCan", "html5Can", "canCan", "videoCan1", "videoCan2", "cssCan",  "jsCan", "dynCan", "phpCan", "dbCan", "svgCan", "webCan", "validCanHome", "validCanForm", "validCanGen", "validCanForm2", "validCanTech"];
	const srcArr = ["xhtmlSrc", "html5Src", "canSrc", "videoSrc1", "videoSrc2", "cssSrc", "jsSrc", "dynJsSrc", "phpSrc", "dbSrc", "svgSrc", "webSrc", "homeValid", "formValid", "genValid", "form2Valid", "techValid"];
	
	for(var i=0; i<canArr.length; i++) {
		var canvas = document.getElementById(canArr[i]);
		var ctx = canvas.getContext("2d");
		//ctx.font = "15px Arial";
		//ctx.fillText(canArr[i], 10, 50);
		var img = document.getElementById(srcArr[i]);
		if(i<canArr.length-5) {
			ctx.drawImage(img, 0, 0, img.width*0.8, img.height*0.8);
		}
		else {
			ctx.drawImage(img, 0, 0, img.width*0.6, img.height*0.6);
		}
	}
});