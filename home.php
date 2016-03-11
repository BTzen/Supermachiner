<!DOCTYPE html>
<html>
<head>
	<title>One Paw Media</title>
</head>
<body>
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
</body>
</html>
