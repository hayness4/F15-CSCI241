<?php

$grades = array(
	"Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
	"Bob" => array("test1" => 79, "hw1" => 84, "hw2" => 91, "midterm" => 85),
	"Alice" => array("test1" => 70, "hw1" => 60, "hw2" => 80, "midterm" => 95)
);
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Grades</title>
	</head>
	<body>
	<?php
	echo "<h2>Grades</h2>";
	if(isset($_GET["id"]))
	{
		echo "<p>Showing grades for {$_GET['id']}:</p>";
		
		if(isset($grades[$_GET["id"]]))
		{
			echo "<ul>";	
			foreach($grades[$_GET["id"]] as $studentName => $studentInfo)
			{
				echo"<li>$studentName: $studentInfo</li>";
			}
			echo "</ul>";
		}
		echo "<a href='array.php'>Go Back</a>";
	}
	else
	{
		echo "<ul>";
		foreach($grades as $studentName => $studentInfo)
		{
			echo "<li><a href='array.php?id=$studentName'>$studentName</a></li>";
		}
		echo "</ul>";	
	}
	echo "</body></html>";
}
?>