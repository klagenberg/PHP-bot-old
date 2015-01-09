<?php session_start();
include('include.php');
include('header.php'); //site design
if(isset($_POST['terminate'])){
	destroy_session();
}
if($_POST['submit'] == NULL){
	echo 'you see a monitor blinking, on closer examination it puts out "is this your first time here?".
	<br /> on a monitor adjacent to it you spot a message saying "returning customer?"
	<br /> there are a number of doors in the back wall one of them seems to be slightly ajar. on closer inspection a sign on the door says "Silvara".
	<br /> <a href="front.php?type=new">click the monitor saying "first time?"</a>
	<br /> <a href="front.php?old"> click the monitor saying "returning customer?"</a>
	<br /> <a href="silvara.php">enter Silvara'."s".' room</a>';
}
include('footer.php');
?>