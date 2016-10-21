<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1.0">
		<title>last.fm shared artists</title>
		<link href="main.css" rel="stylesheet">
	</head>
	<body>
	<form action="./share.php" method="get">
			Username 1: <input type="text" name="user1">
			Username 2: <input type="text" name="user2">
			<input type="submit" value="Submit">
		</form> 
		user 1: <?php echo $_GET["user1"]; ?><br>
		user 2: <?php echo $_GET["user2"]; ?>

	</body>
</html> 