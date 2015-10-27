<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>
<!DOCTYPE html>
<html>
	<head>
		Shopping
	</head>
	<title>
		Lab 3
	</title>
	<body>
		<form method="POST" action="lab3.php">
			Invoice Item 1: <input type="text" name="invoiceItem1"></input>
			Price: <input type="text" name="invoiceItem1Price"></input><br>
			Invoice Item 2: <input type="text" name="invoiceItem2"></input>
			Price: <input type="text" name="invoiceItem2Price"></input><br>
			Invoice Item 3: <input type="text" name="invoiceItem3"></input>
			Price: <input type="text" name="invoiceItem3Price"></input><br>
			Invoice Item 4: <input type="text" name="invoiceItem4"></input>
			Price: <input type="text" name="invoiceItem4Price"></input><br>
			Include Tax? <input type="checkbox" value="tax" name="tax"><br>
			<input type="submit" value="submit" name="submit">
		</form>
	</body>	
</html>

<?php
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$invoiceItem1 = $_POST["invoiceItem1"];
	$invoiceItem2 = $_POST["invoiceItem2"];
	$invoiceItem3 = $_POST["invoiceItem3"];
	$invoiceItem4 = $_POST["invoiceItem4"];
	
	$invoiceItem1Price = $_POST["invoiceItem1Price"];
	$invoiceItem2Price = $_POST["invoiceItem2Price"];
	$invoiceItem3Price = $_POST["invoiceItem3Price"];
	$invoiceItem4Price = $_POST["invoiceItem4Price"];
	
	$subtotal = $invoiceItem1Price + $invoiceItem2Price + $invoiceItem3Price + $invoiceItem4Price;
	//echo $subtotal
	
	
	if(isset($_POST["tax"]))
	{
		$taxTotal = $subtotal * 0.7;
		
	
	}
	else 
	{
		$taxTotal = 0;
	}
		$priceTotal = $subtotal + $taxTotal;
	
	}else
	{
		//unsupported
	}
	
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>

<!DOCTYPE html>
<html>
	<head>
		Prices
	</head>
	<title>
		Lab 3
	</title>
	<body>
		<table>
			<tr>
				<td><?php echo "Invoice Item 1:". $invoiceItem1; ?></td>
				<td><?php echo "Price: ". $invoiceItem1Price; ?></td>
			</tr>
			<tr>
				<td><?php echo "Invoice Item 2:". $invoiceItem2; ?></td>
				<td><?php echo "Price: ". $invoiceItem2Price; ?></td>
			</tr>
			<tr>
				<td><?php echo "Invoice Item 3:". $invoiceItem3; ?></td>
				<td><?php echo "Price: ". $invoiceItem3Price; ?></td>
			</tr>
			<tr>
				<td><?php echo "Invoice Item 4:". $invoiceItem4; ?></td>
				<td><?php echo "Price: ". $invoiceItem4Price; ?></td>
			</tr>
			<tr>
				<td><br><?php echo "Subtotal: ". $subtotal; ?></td>
			</tr>
			<tr>
				<td><?php echo "Tax: ". $taxTotal; ?></td>
			</tr>
			<tr>
				<td><?php echo "Total: ". $priceTotal; ?></td>
			</tr>
		</table>
	</body>
</html>

<?php
}