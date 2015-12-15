<!DOCTYPE html>
<html>
<head>
	<title>Lottery</title>
</head>
<body>
</body>

<h1>Not So Lucky Lotto</h1>

<h2>Chosen Numbers</h2>
<ul>
	
</ul>

<h2>Number Selection</h2>
<table>
<tr>
<?php
$totalLottoNumbers = 6;
$numbersPerRow = 3;

	for($ct = 1; $ct <= $totalLottoNumbers; $ct++)
	{
		echo "<td>";

		echo $ct;

		echo "</td>";

		if($ct%$numbersPerRow==0 && $ct != $totalLottoNumbers )
		{
			echo "</tr><tr>";
		}
	}
?>
</tr>
</table>
</html>