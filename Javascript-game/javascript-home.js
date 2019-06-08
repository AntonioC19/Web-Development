window.onload = function(){
	document.getElementById("button").onclick = function() {
		var randomNumber = Math.random();
		randomNumber = randomNumber * 6;
		randomNumber = Math.floor(randomNumber);

		if(document.getElementById("guess").value == randomNumber){
			alert("you got it!");
		}else alert("nope! the number was " + randomNumber);	
	}
}