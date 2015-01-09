<?php session_start();

echo $_SESSION['name']." is here";
include("include.php");
include("header.php");

echo 'you stare down a hallway, a few doors visible in the dim light from a single lonely lightbulb, one of the doors is slightly ajar and you can hear a female hum on the other side as you move nearer to the door. <br /><br />what will you do?<br><a href="talk.php">enter the room?</a><br /><a href="talk.php?knocking">knock on the door??</a>';

include("footer.php");
?>