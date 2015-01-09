<?php session_start();
include('include.php');
include('header.php'); //site design
if(isset($_POST['terminate'])){
	destroy_session();
}
if(isset($_GET['type'])){	
	echo '<form method="post" action="front.php?type=new">';
	if(!isset($_SESSION['name'])){
		echo 'the monitor blinks "please enter your name"
		<input name="name" type="text" />
		<input name="submit" type="submit" value="submit" />
		</form><br />';
	}elseif(!isset($_SESSION['species'])){
		echo 'the monitor prints "'.$_SESSION['name'].'<br /><br /> please type in your species"
		<input name="species" type="text" />';
		echo '<input name="submit" type="submit" value="submit" />
		</form><br />';
	}elseif(!isset($_SESSION['gender'])){
		echo 'the monotor prints "please enter your gender"
		<input name="gender" type="text" />';
		echo '<input name="submit" type="submit" value="submit" />
		</form><br />';
	}else{
		echo 'the monitor prints out '.$_SESSION['name'].'<br />'.$_SESSION['species'].'<br />'.$_SESSION['gender'].'<br />
		is this correct?
		<br /> <a href="selectgirl.php">yes, hit the ACCEPT button</a>
		<br /> <a href="front.php">no</a>';
		dumpinfo('log_creation.html');
	}
}else{
	echo "welcome back, returning customer: ".$_SESSION['user'];
	echo '<br /><br />please click <a href="selectgirl.php">here</a> to continue';
}
include('footer.php');
?>