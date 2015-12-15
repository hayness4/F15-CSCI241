<?php

$grades = array(
	"Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97),
	"Bob" => array("test1" => 79, "hw1" => 84, "hw2" => 91, "midterm" => 85),
	"Alice" => array("test1" => 70, "hw1" => 60, "hw2" => 80, "midterm" => 95)
);

function averageScore($grades, $item)
{
	$midterm = array(97, 85, 95);
	array_sum($midterm)/3;
	
	$homework = array(92, 84, 60);
	array_sum($homework)/3;
	
	echo "<ul>";
	foreach($grades as $studentName => $studentInfo)
	{
		echo "$studentName<br>";
	}
	echo "</ul>";
}

echo averageScore($grades, $item);

echo "The average for the midterm is " . averageScore($grades, "midterm") . "%";
echo "The average for homework 1 is " . averageScore($grades, "homework") . "%";