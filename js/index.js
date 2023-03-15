window.addEventListener("load", function() {
	var canvas = document.getElementById("theCanvas");
	var ctx = canvas.getContext("2d");
	var img = document.getElementById("source");
	
	ctx.drawImage(img, 75, 0);
});