<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="reset.css" /> -->
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<title>One Paw Media</title>
</head>
<body>
	<div id="wrapper">
		<nav>
			<ul>
				<li><a href="#">Playlists</a></li>
				<li><a href="#">Upload</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</nav>
		
		<div id="main">
			<h1>This is a test</h1>
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
		</div>
	</div>
</body>
</html>
