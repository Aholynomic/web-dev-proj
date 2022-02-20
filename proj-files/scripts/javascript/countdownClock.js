window.onload = (function(){
	var countDownDate = new Date("March 30, 2020 23:59:00").getTime();
	var x = setInterval(function(){
		var currentTime = new Date().getTime();
		var distance = countDownDate - currentTime;
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		document.getElementById("time").innerHTML = days + "d " + " | " + hours + "h "
		+ " | " + minutes + "m " + " | " + seconds + "s ";
		listen(distance);
	}, 1000);
});

function listen(x) {
	var listener = document.getElementById("press");
	listener.onclick = (function(){
		if (x < 0)
		{
			clearInterval(x);
			var newButton = document.getElementById("press")[0].setAttribute("href", "#");
			newButton.innerHTML = "Buy Tickets: Now Available";
		}
		else
		{
			alert("Tickets are not available yet");
		}
	
	
	});
}