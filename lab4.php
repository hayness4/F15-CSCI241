<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	
?>

<!DOCTYPE html>
<html> 
    <head>
        Times Tables
    </head>
    <title>
    	Lab 4
    </title>
    <body> 
        <form method="POST" action="lab4.php">
        	<label> Start: <input type="text" name="start"/></label>
            <label> End: <input type="text" name="end"/> </label><br><br>
            <label><input type="submit" name="submit" value="Submit" /></label>
        </form>
    </body>
</html>

<?php
}else if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$start = $_POST["start"];
	$end = $_POST["end"];
?>

<?php
}if($_SERVER["REQUEST_METHOD"] == "POST")
{
?>

<!DOCTYPE html>
<html> 
    <head>
        Times Tables
    </head>
    <title>
    	Lab 4
    </title>
    <body> 
		<table>
			<tr>
				<td>
					<?php 
					echo "<pre>";
					echo "\t" ;

					for($col = $start; $col <= $end; $col++)
 				   	{
					    echo  $col . "\t";
				    }
		
					echo "\r\n";
	    
				    for($row = $start; $row <= $end; $row++)
					{
						echo "\r\n";
						echo $row . "\t";
			
						for($col = $start; $col <= $end; $col++)
    					{
					    	echo ($row*$col) . "\t";
	   					}
						
						echo "\r\n";
					}
					echo "</pre>";
			 		?>
			 	</td>
			</tr>
		</table>
    </body>
</html>

<?php
}