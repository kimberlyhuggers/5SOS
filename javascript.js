function myStart(){

	var plusFont = document.getElementById("plusFont");
	plusFont.addEventListener("click", function(){
		// Maakt de body 1px groter
		var body = document.querySelector("body");
		var style = window.getComputedStyle(body, null).getPropertyValue('font-size');
		var fontSize = parseFloat(style); 
		body.style.fontSize = (fontSize + 1) + 'px';
	});
	
	var minFont = document.getElementById("minFont");
	minFont.addEventListener("click", function(){
		// Maakt de body 1px kleiner
		var body1 = document.querySelector("body");
		var style1 = window.getComputedStyle(body1, null).getPropertyValue('font-size');
		var fontSize1 = parseFloat(style1); 
		body1.style.fontSize = (fontSize1 - 1) + 'px';
	});
	
};