<?php
require_once("header.php");
require_once("common.php");
?>

<body background="nba2.jpg">
<form action="results.php" method="post">
	<h3>1. When was the NBA created?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question1" id="question1A" value="A">
	<label for="question1A">A. 1996</label><br><br>

	<input type="radio" name="question1" id="question1B" value="B">
	<label for="question1B">B. 1926</label><br><br>

	<input type="radio" name="question1" id="question1C" value="C">
	<label for="question1C">C. 1946</label>

	<h3>2. Which player is retiring this year after 20 seasons?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question2" id="question2A" value="A">
	<label for="question2A">A. Kevin Garnett</label><br><br>

	<input type="radio" name="question2" id="question2B" value="B">
	<label for="question2B">B. Kobe Bryant</label><br><br>

	<input type="radio" name="question2" id="question2C" value="C">
	<label for="question2C">C. LeBron James</label>

	<h3>3. Who is the only undefeated team in the NBA?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question3" id="question3A" value="A">
	<label for="question3A">A. Golden State Warriors</label><br><br>

	<input type="radio" name="question3" id="question3B" value="B">
	<label for="question3B">B. Toronto Raptors</label><br><br>

	<input type="radio" name="question2" id="question3C" value="C">
	<label for="question3C">C. Cleveland Cavaliers</label>

	<h3>4. Who has won the MVP award 4 times?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question4" id="question4A" value="A">
	<label for="question4A">A. Steph Curry</label><br><br>

	<input type="radio" name="question4" id="question4B" value="B">
	<label for="question4B">B. LeBron James</label><br><br>

	<input type="radio" name="question4" id="question4C" value="C">
	<label for="question4C">C. Kobe Bryant</label>

	<h3>5. Who is the greatest player of all time?</h3>
	<form action="results.php" method="post" id="trivia">
	
	<input type="radio" name="question5" id="question5A" value="A">
	<label for="question5A">A. LeBron James</label><br><br>

	<input type="radio" name="question5" id="question5B" value="B">
	<label for="question5B">B. Kobe Bryant</label><br><br>

	<input type="radio" name="question5" id="question5C" value="C">
	<label for="question5C">C. Michael Jordan</label><br><br>

	<input type="submit" value="SUBMIT ANSWERS"><br><br>
	<a href="index.php">Home</a>
</form>
<?php
require_once("footer.php");
?>