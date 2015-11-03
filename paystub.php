<?php if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>
<!DOCTYPE html>
<html>
	<head>
		<font size="5">Employee Paystub Calculator</font><br><br>
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
	
	if($hours <= 40)
	{
		$hours = $_POST["hours"];
		$overtime = 0;
	}
	else if($hours > 40)
	{
		$overtime = $hours - 40;
		$hours = 40;
	}	
	
	$regWage = $wage * 40;
	$otWage = ($wage * 1.5) * $overtime;
	$totalHours = $hours + $overtime;
	$totalPay = $regWage + $otWage;
	
	$dollars = (int)$totalPay;
	$cents = $totalPay - $dollars;
		
	$hundreds = (int)($dollars/100);
	$dollars = $dollars - ($hundreds*100);
		
	$fifties = (int)($dollars/50);
	$dollars = $dollars - ($fifties*50);
		
	$twenties = (int)($dollars/20);
	$dollars = $dollars - ($twenties*20);
		
	$tens = (int)($dollars/10);
	$dollars = $dollars - ($tens*10);
		
	$fives = (int)($dollars/5);
	$dollars = $dollars - ($fives*5);
		
	$ones = (int)($dollars/1);
	$dollars = $dollars - ($ones*1);
		
	$quarters = (int)($cents/.25);
	$cents = $cents - ($quarters*.25);
		
	$dimes = (int)($cents/.10);
	$cents = $cents - ($dimes*.10);
		
	$nickels = (int)($cents/.05);
	$cents = $cents - ($nickels*.05);
		
	$pennies = (int)($cents/.01);
	$cents = $cents - ($pennies*.01);
}
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>
<!DOCTYPE html>
<html>
	<head>
		<font size="6"><?php echo "Paystub for ". $name; ?></font><br>
	</head>
	<title>
		Lab 5
	</title>
	<body>
		<font size="4"><?php echo "Name: ". $name; ?></font><br>
		<font size="4"><?php echo "ID: ". $idNumber; ?></font><br><br>
		<table style="border:1px solid black; border-collapse:collapse; width:35%">
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;"></td>
				<th style="border:1px solid black;">Hours</th>
				<th style="border:1px solid black;">Gross Pay</th>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">Regular:</th>
				<td style="border:1px solid black;"><?php echo "". $hours?></td>
				<td style="border:1px solid black;"><?php echo "$". $regWage; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">Overtime:</th>
				<td style="border:1px solid black;"><?php echo "". $overtime; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $otWage; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<td style="border:1px solid black;"><br></td>
				<td style="border:1px solid black;"></td>
				<td style="border:1px solid black;"></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">Total:</th>
				<td style="border:1px solid black;"><?php echo "". $totalHours; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $totalPay; ?></td>
			</tr>
		</table><br><br><br>
		<table style="border:1px solid black; border-collapse:collapse;width:40%;">
			<font size="5">Disbursement</font><br><br>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">Denomination</th>
				<th style="border:1px solid black;">Qty</th>
				<th style="border:1px solid black;">Disbursed</th>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">$100</th>
				<td style="border:1px solid black;"><?php echo "$hundreds"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $hundreds*100; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">$50</th>
				<td style="border:1px solid black;"><?php echo "$fifties"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $fifties*50; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">$20</th>
				<td style="border:1px solid black;"><?php echo "$twenties"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $twenties*20; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">$10</th>
				<td style="border:1px solid black;"><?php echo "$tens"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $tens*10; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">$5</th>
				<td style="border:1px solid black;"><?php echo "$fives"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $fives*5; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">$1</th>
				<td style="border:1px solid black;"><?php echo "$ones"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $ones*1; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">25&cent</th>
				<td style="border:1px solid black;"><?php echo "$quarters"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $quarters*.25; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">10&cent</th>
				<td style="border:1px solid black;"><?php echo "$dimes"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $dimes*.10; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">5&cent</th>
				<td style="border:1px solid black;"><?php echo "$nickels"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $nickels*.05; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">1&cent</th>
				<td style="border:1px solid black;"><?php echo "$pennies"; ?></td>
				<td style="border:1px solid black;"><?php echo "$". $pennies*.01; ?></td>
			</tr>
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;">Total:</th>
				<td style="border:1px solid black;"></td>
				<td style="border:1px solid black;"><?php echo "$". $totalPay; ?></td>
			</tr>
		</table>
	</body>	
</html>
<?php
}