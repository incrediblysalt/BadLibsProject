function adFormBlur() {
	var form = document.getElementById('adForm');
	
	// Make the background yellow when in focus
	form.addEventListener('focus', (event) => {
		event.target.style.background = '#d1bfe3';
	}, true);
	
	// Make the background have no color when not in focus
	form.addEventListener('blur', (event) => {
		event.target.style.background = '';
	}, true);
}
function load() {
	adFormBlur();
}

window.onload = function(){load()};