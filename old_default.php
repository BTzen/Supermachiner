<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/reset.css" />
	<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
	<script src="https://code.jquery.com/jquery-1.12.2.js" integrity="sha256-VUCyr0ZXB5VhBibo2DkTVhdspjmxUgxDGaLQx7qb7xY=" crossorigin="anonymous"></script>
	<script src="jquery.jcarousel.min.js"></script>
	<script src="main.js"></script>
	<title>One Paw Media</title>
<style>
	.jcarousel div.content-box {
		/* display: inline-block; */
		float: left;	/* required for block elements like <li> */
		margin-right: 12px;
		/* height: auto; */
		/* overflow: visible; */
		width: 200px;
	}

	.jcarousel div.content-box img{
		float: left;			/* allows automatic image size scaling to fit div */
		max-width: 100%;		/* 1.7048*height */
		max-height: 100%; 
	}
	
	.content-box span {
		float: right;
	}
	.content-scroll {
		text-align: left;
	}
	
	#following-list {
		position: relative;
	}
</style>
</head>
<body>
	<div id="wrapper">
		<header id="banner">
			<div id="logo-link">
				<a href="default.php"><img class="logo" src="images/icon.png" alt="logo"></a>
			</div>
			<div id="search">
				<form>
					<input type="search" >
					<button type="button">Search</button>
				</form>
			</div>
			<nav>
				<ul>
					<li><a href="#">Account</a></li>
					<li><a href="#">Upload</a></li>
					<li><a href="#">Playlists</a></li>
				</ul>
			</nav>
		</header>
		
		<div id="main">
			<section class="content-group">	<!-- for the "Following" and "Recommended" type banners -->
				<h1>Recommended</h1>
			</section>
			<div class="content-list">
				<button class="jcarousel-prev" type="button"><img src="images/left-arrow.png"></button>
				<div class="jcarousel"> <!--content-scroll-->
					<div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<div class="content-data">
								<p>Fiesta! - Will Smith<span>15:08</span></p>
							</div>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
					</div>
				</div>
				<button class="jcarousel-next" type="button"><img src="images/right-arrow.png"></button>
			</div>

			<!--
			<?php
				require_once("config.php");
				//set up connection to db
				try {
					$pdo = new PDO(DSN, DBUSER, DBPASS);
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$sql = "select * from files";
					$result = $pdo->query($sql);
					
					while ($row = $result->fetch()) {
						echo $row['id'] . $row['title'] . "<br />";
					}
					
					$pdo = null;							//close connection
				}
				catch (PDOException $e) {
					die( $e->getMessage() );
				}
			?>
			-->
			
			<section class="content-group">
				<h1>Following</h1>
			</section>
			<div class="content-list">
				<button class="jcarousel-prev" type="button"><img src="images/left-arrow.png"></button>
				<div class="jcarousel"> <!--content-scroll-->
					<div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<div class="content-data">
								<p>Fiesta! - Will Smith<span>15:08</span></p>
							</div>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
					</div>
				</div>
				<button class="jcarousel-next" type="button"><img src="images/right-arrow.png"></button>
			</div>
			<section class="content-group">
				<h1>Popular Playlists</h1>
			</section>
							<div class="content-list">
				<button class="jcarousel-prev" type="button"><img src="images/left-arrow.png"></button>
				<div class="jcarousel"> <!--content-scroll-->
					<div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
						<div class="content-box">
							<a href="playing.html"><img src="images/fiesta.png"></a>
							<p>Fiesta! - Will Smith<span>15:08</span></p>
						</div>
					</div>
				</div>
				<button class="jcarousel-next" type="button"><img src="images/right-arrow.png"></button>
			</div>
		</div>
	</div>
</body>
</html>
