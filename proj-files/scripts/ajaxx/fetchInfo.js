window.onload = preparePage();

function preparePage(){
	var clickButton = document.getElementById("clickinfo");
	clickButton.onclick=function(){
		fetchinfo();
	}
}

function fetchinfo() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "scripts/ajaxx/info.php", true);
  xhttp.send();
}