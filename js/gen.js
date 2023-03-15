function startOver() {
	window.location.replace("Form.php");
}

function changeFontSize() {
	var size = document.getElementById("fontSlider").value;
	var str = size + "px";
	document.getElementById("gen").style.fontSize = str;
	document.getElementById("fontDisplay").innerHTML = document.getElementById("fontSlider").value;
}

function changeFontStyle() {
	var drop = document.getElementById("fontDrop");
	document.getElementById("gen").style.fontFamily = drop.options[drop.selectedIndex].text;
}