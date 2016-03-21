<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="reset.css" /> -->
	<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
	<script src="https://code.jquery.com/jquery-1.12.2.js" integrity="sha256-VUCyr0ZXB5VhBibo2DkTVhdspjmxUgxDGaLQx7qb7xY=" crossorigin="anonymous"></script>
	<script src="jquery.jcarousel.min.js"></script>
	<script src="main.js"></script>
	<title>One Paw Media</title>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('.jcarousel').jcarousel();
});

</script>
</head>
<body>
	<div id="wrapper">
		<header id="banner">
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
			<div class="jcarousel"> <!--content-scroll-->
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
				<img src="images/fiesta.png">
			</div>

			<!--<div class="media-list">
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
			</div> -->
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
			<div class="content-scroll">
				<div class="media">
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
					<a href="playing.html"><img src="images/fiesta.png"></a>
				</div>
			</div>
			<section class="content-group">
				<h1>Popular Playlists</h1>
			</section>
				<div class="content-scroll">
					<div class="media">
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
						<a href="playing.html"><img src="images/fiesta.png"></a>
					</div>
			</div>
		</div>
	</div>
</body>
</html>
