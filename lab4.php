<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	

?>

<html>
	<head>
		Times Tables
	</head>
	<body>
		<form method="POST" action="lab4.php">
			<table>
				<tr>
					<td>Start: <input type="text" name="startNumber"></input></td>
					<td>End: <input type="text" name="endNumber"></input></td>
				</tr>
			</table>
			<input type="submit" value="submit" name="submit">
		</form>
	</body>
</html>

<?php
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
}
