<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 7</title>
	</head>
	<body>
		<h1>Subscription:</h1>
		<form method="post" action="subscribe.php">
			Name: <input type="text" name="name" size="25" required>
			Email: <input type="text" class="email" name="email" size="25" required>
			<input type="submit" value="submit" name="submit">
		</form>
<?php
require("footer.php");
?>

<br><a href="index.php">Home</a>