window.onload = listen();

function listen()
{
	var listener = document.getElementById("song");
	listener.onclick=function(){
		document.getElementById("color").style.color = "gold";
		alert("You are currently playing: Everyday Life");
	}
}