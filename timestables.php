<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>

<!DOCTYPE html>
<html> 
    <head>
		 <title>Lab 4</title>
	</head>
    <body>
    	<h2>Times Tables</h2>
        <form method="POST" action="timestables.php">
        	<label> Start: <input type="text" name="start"/></label>
            <label> End: <input type="text" name="end"/> </label><br><br>
            <label><input type="submit" name="submit" value="Submit" /></label>
        </form>
    </body>
</html>

<?php
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>
<!DOCTYPE html>
<html> 
	<head>
		 <title>Lab 4</title>
	</head>
    <body> 
	<?php 
			
		$start = $_POST["start"];
		$end = $_POST["end"];
		
		if(is_numeric($start) && is_numeric($end))
		{
			echo "<h3>Times Tables for $start to $end</h3>";
			echo "<table><tr><td>";

			for($col = $start; $col <= $end; $col++)
 	  		{
			    echo "<th>" .  $col . "</th>";
		    }
		
			echo "</tr></td>";
			echo "<tr>";
	    
			for($row = $start; $row <= $end; $row++)
			{
				echo "<th>" . $row . "</th>";
				
				for($col = $start; $col <= $end; $col++)
    			{
					echo "<td>" . ($row * $col) . "</td>";
	   			}
				echo "</tr>";
			}
			echo "</table>";
			echo "</body></html>";
		}
		
		else
		{
			echo "Please go back and enter correct data!";	
		}
	?>
<?php
}