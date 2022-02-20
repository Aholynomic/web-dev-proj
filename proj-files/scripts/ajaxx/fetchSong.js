window.onload = listen();

function listen(){
	var listener = document.getElementById("song");
	listen.onclick=function(){
		fetchSong();
	}
}

function fetchSong() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("play-song").innerHTML = this.responseText;
		}
		xhttp.open("GET", "scripts/ajaxx/FLUTE1.mp3", true);
		xhttp.send();
	}
}