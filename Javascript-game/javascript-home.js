window.onload = function(){
	var start = new Date().getTime();

	function getRandomColor() {
	  var letters = '0123456789ABCDEF'.split('');
	  var color = '#';
	  for (var i = 0; i < 6; i++) {
	    color += letters[Math.floor(Math.random() * 16)];
	  }
	  return color;
	}

	function shapeAppear(){
		var randomTop = Math.random() * 400;
		var randomWidth = (Math.random() * 200) + 100;
		document.getElementById("shape").style.background = getRandomColor();
		document.getElementById("shape").style.width = randomWidth + "px";
		document.getElementById("shape").style.top = randomTop + "px";
		document.getElementById("shape").style.left = randomTop + "px";
		document.getElementById("shape").style.display = "block";
		start = new Date().getTime();
	}

	function appearDelay(){
		setTimeout(shapeAppear, Math.random() * 2000);
	}
	appearDelay();

	document.getElementById("shape").onclick = function(){
		document.getElementById("shape").style.display = "none";
		var end = new Date().getTime();
		var timeTaken = (end - start) / 1000;
		document.getElementById("timeTaken").innerHTML = timeTaken + "s";
		appearDelay();
	}

}