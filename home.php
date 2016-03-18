<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="reset.css" /> -->
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<title>One Paw Media</title>
</head>
<body>
	<div id="wrapper">
		<header id="banner">
			<nav>
				<ul>
					<li><a href="#">Account</a></li>
					<li><a href="#">Upload</a></li>
					<li><a href="#">Playlists</a></li>
				</ul>
			</nav>
		</header>
		
		<div id="main">
			<section class="contentGroup">	<!-- for the "Following" and "Recommended" type banners -->
				<h1>Recommended</h1>
			</section>
			<p>lorem ipsum</p>
			
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
			
			<section class="contentGroup">
				<h1>Following</h1>
			</section>
			
			<section class="contentGroup">
				<h1>Popular Playlists</h1>
			</section>
		</div>
	</div>
</body>
</html>
