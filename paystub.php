<?php if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>
<!DOCTYPE html>
<html>
	<head>
		<h2>Employee Paystub Calculator</h2>
	</head>
	<title>
		Lab 5
	</title>
	<body>
		<form method="POST" action="paystub.php">
			Employee ID: <input type="text" name="idNumber"></input><br><br>
			Emplyee Name: <input type="text" name="name"></input><br><br>
			Hourly Wage: <input type="text" name="wage"></input><br><br>
			Hours Worked: <input type="text" name="hours"></input><br><br>
			<input type="submit" value="submit" name="submit">
		</form>
	</body>	
</html>

<?php
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$idNumber = $_POST["idNumber"];
	$name = $_POST["name"];
	$wage = $_POST["wage"];
	$hours = $_POST["hours"];
	
	$regWage = $wage * 40;
	$overtime = $hours - 40;
	$otWage = $wage * $overtime;
	$totalPay = $regWage + $otWage;
}
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>
<!DOCTYPE html>
<html>
	<head>
		<h2><?php echo "Paystub for ". $name; ?></h2>
	</head>
	<title>
		Lab 5
	</title>
	<body>
		<?php echo "Name: ". $name; ?><br>
		<?php echo "ID: ". $idNumber; ?><br><br>
		<table style="border:1px solid black; border-collapse:collapse; width:35%">
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;"></td>
				<td style="border:1px solid black;">Hours</td>
				<td style="border:1px solid black;">Gross Pay</td>
			</tr>
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;">Regular:</td>
				<td style="border:1px solid black;">40</td>
				<td style="border:1px solid black;"><?php echo "$". $regWage; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;">Overtime:</td>
				<td style="border:1px solid black;"><?php echo "". $overtime; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $otWage; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;"><br>	</td>
				<td style="border:1px solid black;">	</td>
				<td style="border:1px solid black;">	</td>
			</tr>
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;">Total:</td>
				<td style="border:1px solid black;"><?php echo "". $hours; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $totalPay; ?></td>
			</tr>
		</table>
	</body>	
</html>
<?php
}