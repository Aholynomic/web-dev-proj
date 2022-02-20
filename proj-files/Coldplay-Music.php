<!DOCTYPE html>
<html lang="en">
<head>
	<title>Music</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="styles/Coldplaymusic.css">
	<!-- icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrap"> 
		<nav class="navbar">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/index.php">Home</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-About.php">About</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Tours.php">Tours</a></li>
					<li><a class="active" href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Music.php">Music</a></li>
					<li><a target="_blank" href="https://shop.coldplay.com/uk?ref=https%3A%2F%2Fwww.coldplay.com%2Fhomepage%2F">Store</a></li>
					<li><a target="_blank" href="https://www.coldplay.com/news/">News</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Gallery.php">Gallery</a></li>
					<li><a href="https://mayar.abertay.ac.uk/~1801853/coursework/Coldplay-Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<br>
	<div class="container-fluid">
		<div class="page-header">
			<h1 id="title">Music</h1>
		</div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner" >
				<div class="item active">
					<a href="#everydayLife">
						<img src="imgs/music/everydayLife.jpg" alt="'Everyday Life' single" style="width:100%;height:700px;"> <!-- url: https://i.ytimg.com/vi/UMkCkPzbLYI/maxresdefault.jpg -->
						<div class="carousel-caption">
							<h2>Everyday Life - 2019</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#arabesque">
						<img src="imgs/music/arabesque.jpg" alt="'Arabesque' single" style="width:100%;height:700px;"> <!-- url: https://i.ytimg.com/vi/ZJNG3WmsOs4/maxresdefault.jpg -->
						<div class="carousel-caption">
							<h2>Arabesque - 2019</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#orphans">
						<img src="imgs/music/orphans.jpg" alt="'Orphans' single" style="width:100%;height:700px;"> <!-- url: https://i.ytimg.com/vi/goyq7GDYEkE/maxresdefault.jpg -->
						<div class="carousel-caption">
							<h2>Orphans - 2019</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#ghostStories">
						<img src="imgs/music/ghostStories.jpg" alt="'Ghost Stories' album" style="width:100%;height:700px;"> <!-- url: https://images-na.ssl-images-amazon.com/images/I/81CFQ5cyltL._SL1500_.jpg -->
						<div class="carousel-caption">
							<h2>Ghost Stories - 2014</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#headFullOfDreams">
						<img src="imgs/music/headfullofdreams.jpg" alt="'A Head Full Of Dreams' album" style="width:100%;height:700px;"> <!-- url: https://i.pinimg.com/originals/e8/3e/8e/e83e8ec6cc6891914213c784ba442801.jpg -->
						<div class="carousel-caption">
							<h2>A Head Full Of Dreams - 2015</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#kaleidoscope">
						<img src="imgs/music/kaleidoscope.jpg" alt="'Kaleidoscope EP' album" style="width:100%;height:700px;"> <!-- url: https://pbs.twimg.com/media/DE_TekaXgAANj2w.jpg -->
						<div class="carousel-caption">
							<h2>Kaleidoscope EP - 2015</h2>
						</div>
					</a>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="main">
			<div id="everydayLife">
				<div class="page-header" id="header">
					<h1>Everyday Life</h1>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<img src="imgs/music/everydayLife.jpg" class="img-thumbnail" alt="'Everyday Life'">
					</div>
				</div>
				<div class="row">
					<div class="col-12" id="song-listings">
						<ol id="track-listing">
							<div class="page-header" id="songs">
								<li id="color">Everyday Life <button id="song" type="button" class="btn btn-link"><span class="glyphicon glyphicon-play-circle"></span></button></li>
							</div>
							<div id="extraInfo">
								<button id="clickinfo">Click for more information...</button>
								<br>
								<div id="info"></div>
							</div>
						</ol>
					</div>
				</div>
			</div>
			<div id="arabesque">
				<div class="page-header" id="header">
					<h1>Arabesque</h1>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<img src="imgs/music/arabesque.jpg" class="img-thumbnail" alt="'Arabesque'">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6" id="song-listings">
						<ol id="track-listing">
							<div class="page-header" id="songs">
								<li>Arabesque</li>
							</div>
						</ol>
					</div>
				</div>
			</div>
			<div id="orphans">
				<div class="page-header" id="header">
					<h1>Orphans</h1>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<img src="imgs/music/orphans.jpg" class="img-thumbnail" alt="'Orphans'">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6" id="song-listings">
						<ol id="track-listing">
							<div class="page-header" id="songs">
								<li>Orphans</li>
							</div>
						</ol>
					</div>
				</div>
			</div>
			<div id="ghostStories">
				<div class="page-header" id="header">
					<h1>Ghost Stories</h1>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<img src="imgs/music/ghostStories.jpg" class="img-thumbnail" alt="'Ghost Stories'">
					</div>
				</div>
				<div class="row">
					<ol id="track-listing">
						<div class="col-md-6" id="song-listings">
							<ol id="track-listing">
								<div class="page-header" id="songs">
									<li>Always in My Head</li>
								</div>
								<div class="page-header" id="songs">
									<li>Magic</li>
								</div>
								<div class="page-header" id="songs">
									<li>Ink</li>
								</div>
								<div class="page-header" id="songs">
									<li>True Love</li>
								</div>
								<div class="page-header" id="songs">
									<li>Midnight</li>
								</div>
								<div class="page-header" id="songs">
									<li>Another's Arms</li>
								</div>
								<div class="page-header" id="songs">
									<li>Oceans</li>
								</div>
								<div class="page-header" id="songs">
									<li>A Sky Full of Stars</li>
								</div>
								<div class="page-header" id="songs">
									<li>O</li>
								</div>
							</ol>
						</div>
						
						
					</ol>
				</div>
			</div>
			<div id="headFullOfDreams">
				<div class="page-header" id="header">
					<h1>A Head Full Of Dreams</h1>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<img src="imgs/music/headfullofdreams.jpg" class="img-thumbnail" alt="'A Head Full Of Dreams'">
					</div>
				</div>
				<div class="row">
					<ol id="track-listing">
						<div class="col-md-6" id="song-listings">
							<ol id="track-listing">
								<div class="page-header" id="songs">
									<li>A Head Full Of Dreams</li>
								</div>
								<div class="page-header" id="songs">
									<li>Birds</li>
								</div>
								<div class="page-header" id="songs">
									<li>Hymn for the Weekend</li>
								</div>
								<div class="page-header" id="songs">
									<li>Everglow</li>
								</div>
								<div class="page-header" id="songs">
									<li>Adventure of a Lifetime</li>
								</div>
								<div class="page-header" id="songs">
									<li>Fun (featuring Tove Lo)</li>
								</div>
								<div class="page-header" id="songs">
									<li>Kaleidoscope</li>
								</div>
								<div class="page-header" id="songs">
									<li>Army of One / X Marks the Spot</li>
								</div>
								<div class="page-header" id="songs">
									<li>Amazing Day</li>
								</div>
								<div class="page-header" id="songs">
									<li>Colour Spectrum</li>
								</div>
								<div class="page-header" id="songs">
									<li>Up & Up</li>
								</div>
							</ol>
						</div>
					</ol>
					
				</div>
			</div>
			<div id="kaleidoscope">
				<div class="page-header" id="header">
					<h1>Kaleidoscope</h1>
				</div>
				<div class="row">
					<div class="col-12 text-center">
						<img src="imgs/music/kaleidoscope.jpg" class="img-thumbnail" alt="'Kaleidoscope'">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6" id="song-listings">
						<ol id="track-listing">
							<div class="page-header" id="songs">
								<li>All I Can Think About Is You</li>
							</div>
							<div class="page-header" id="songs">
								<li>Miracles (Someone Special) (with Big Sean)</li>
							</div>
							<div class="page-header" id="songs">
								<li>Aliens</li>
							</div>
							<div class="page-header" id="songs">
								<li>Something Just Like This</li>
							</div>
							<div class="page-header" id="songs">
								<li>Hypnotised</li>
							</div>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	
	<!-- scripts -->
	
	<script type="text/javascript" src="scripts/ajaxx/fetchInfo.js"></script>
	<script src="scripts/javascript/activeSong.js"></script>
</body>
<footer>
	<!-- footer social media links -->
	<?php
		include "footer.php";
	?>
</footer>
</html> 