window.onload = function(){
	document.getElementById("circle1").onclick = function(){
		document.getElementById("circle1").style.display = "none";
	}
	document.getElementById("circle2").onclick = function(){
		document.getElementById("circle2").style.display = "none";
	}
	document.getElementById("circle3").onclick = function(){
		document.getElementById("circle3").style.display = "none";
	}
	document.getElementById("button1").onclick = function(){
		var getText = "";
		getText = document.getElementById("textInput").value;
		document.getElementById("textHere").innerHTML = getText;
	}
}
	var myArray = new Array();
	myArray[0] = "pizza";
	myArray[1] = "chocolate";

	var tweets = ["morning everybody", "I love coffee"];
	tweets.push("Back to work!");
	tweets.splice(2, 1, "this is great");

	console.log(tweets);

	var x = 2;
		if(x == 1){
			alert("this is 1");
		}else alert("not equal 1");

