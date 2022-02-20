<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- Marquee Plugin -->
	<script type='text/javascript' src='https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script>
	<!-- on hover for marquee -->
	<script src="https://rawgithub.com/tobia/Pause/master/jquery.pause.js"></script>
	<!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="styles/Coldplayhome.css">
	<!-- icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
	<!-- body -->
	<div class="wrap">
		<!-- navbar at top of page -->
		<nav class="navbar">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a class="active" href="https://mayar.abertay.ac.uk/~1801853/coursework/index.php">Home</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-About.php">About</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Tours.php">Tours</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Music.php">Music</a></li>
					<li><a target="_blank" href="https://shop.coldplay.com/uk?ref=https%3A%2F%2Fwww.coldplay.com%2Fhomepage%2F">Store</a></li>
					<li><a target="_blank" href="https://www.coldplay.com/news/">News</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Gallery.php">Gallery</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
			<!-- marquee with scrolling links -->
			<div class="marquee">
				<p>
				<a href="https://www.yahoo.com/entertainment/jacob-collier-couldnt-believe-coldplays-180717592.html"> Jacob Collier Couldn't Believe Coldplay's Chris Martin Reached Out To Work With Him </a>
				| <a href="https://www.yahoo.com/entertainment/lost-kings-hope-inspire-people-191829407.html"> Lost Kings Hope They Inspire People As Much As Kanye West And Coldplay Inspire Them </a>
				| WELCOME TO THE UNOFFICIAL COLDPLAY WEBSITE
				| <a href="https://uk.news.yahoo.com/trump-brags-building-beautiful-wall-074553786.html"> Trump brags about building 'beautiful' wall with Mexico... in Colorado </a>
				|<a href="https://www.yahoo.com/entertainment/coldplay-entering-protest-music-realm-232613169.html"> Is Coldplay Entering the Protest Music Realm With New 'Guns' Song? </a>
				| <a href="https://www.billboard.com/articles/news/8542333/coldplay-chris-martin-performs-new-songs-everyday-life-orphans-snl-saturday-night-live"> Coldplay Performs New Songs 'Everyday Life' & 'Orphans' on 'SNL': Watch </a> |
				<a href="https://www.thenational.ae/arts-culture/music/why-coldplay-s-new-album-can-change-the-way-celebrities-see-the-arab-world-1.935099"> Why Coldplay’s new album can change the way celebrities see the Arab world </a>
				| <a href="https://www.nme.com/news/music/listen-to-a-snippet-of-a-new-coldplay-song-guns-2565348"> Listen to a snippet of a new Coldplay song, ‘Guns’ </a>
				| <a href="https://www.eonline.com/uk/news/1089072/dakota-johnson-and-chris-martin-enjoy-night-out-at-the-snl-after-party"> Dakota Johnson and Chris Martin Enjoy Night Out at the SNL After-Party </a>
				| <a href="https://hollywoodlife.com/2019/11/03/coldplay-snl-peformance-orphans-everyday-life-watch/"> Coldplay Debuts New Song ‘Everyday Life’ On ‘SNL’ & Throws Stage Party With ‘Orphans’ </a>				
				| <a href="https://www.dailymail.co.uk/tvshowbiz/article-7644263/Dakota-Johnson-30-boyfriend-Chris-Martin-42-enjoy-rare-outing-SNLs-party-NYC.html?ns_mchannel=rss&ns_campaign=1490&ito=1490"> Dakota Johnson, 30, wraps up in a brown teddy bear coat as she and boyfriend Chris Martin, 42, enjoy rare outing at SNL's after-party in NYC </a>
				| <a href="https://uk.news.yahoo.com/cassette-tape-revival-seductive-format-080108203.html"> Cassette tape revival: a seductive format, or object fetishism? </a>
				</p>
			</div>
		</nav>
	</div>
	
	<!-- scripts -->
	
	<script src="scripts/jquery/scrollbar.js"></script>
</body>
<footer>
	<!-- footer social media links -->
	<?php
		include "php/footer.php";
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	?>
</footer>
</html>