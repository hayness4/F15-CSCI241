<!DOCTYPE>
<html>
        <head>
                <title>Sessions Rock</title>
        </head>
        <body>

<?php

session_start();

if(isset($_SESSION["count"]))
{
	$_SESSION["count"]++;
}
else
{
	session_destroy();
	$_SESSION = array();
	session_write_close();
	exit();
}

echo "I have seen you " . $_SESSION["count"] . " times!";
?>

        </body>
</html>