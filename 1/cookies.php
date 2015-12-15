<?php

$cookieContent[] = "Is not that bad!";
$cookieContent[] = "Is in the way of my break!";

$finalExamCookie = implode("|", $cookieContent);

setcookie("|", "$finalExamCookie");

?>