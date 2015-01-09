<?php session_start();

$con = mysql_connect('localhost','root','wynny3ll3');
mysql_select_db("fairlyn_mybot", $con);

function destroy_session(){
	session_unset();
	session_destroy();
}

//introductions

if(isset($_POST['name']))
	$_SESSION['name'] = $_POST['name'];
if(isset($_POST['species']))
	$_SESSION['species'] = $_POST['species'];
if(isset($_POST['gender'])){
	$_SESSION['gender'] = $_POST['gender'];
	savecharacter();
}if(isset($_GET['old'])){
	loadcharacter();
}

/*string functions had to do it this way since mysql didn't like "" and '' among others
*/
function replace_out($string){				//out of mysql
	$string = str_replace("aaa", '"',$string);
	$string = str_replace("bbb", "'",$string);
	$string = str_replace("ccc", ",",$string);
	$string = str_replace(£species,$_SESSION['species'],$string);
	$string = str_replace(£name,$_SESSION['name'],$string);
	$string = str_replace(£gender,$_SESSION['gender'],$string);	
	return $string;
}

function replace_in($string){				//into mysql
	$string = str_replace('"', 'aaa',$string);
	$string = str_replace("'", "bbb",$string);
	$string = str_replace(",", "ccc",$string);
	return $string;
}

//logging
function dumpinfo(){
	//fopen("log.php","a");
	$dumpfile = file_get_contents("log.php");
	$dumpfile = $dumpfile."Name: ".$_SESSION['name']."<br />Species: ".$_SESSION['species']."<br />Gender: ".$_SESSION['gender']."<br /><br />";
	file_put_contents("log.php",$dumpfile);
}
function dumpinfo_talk($name){
	//fopen("log.php","a");
	$dumpfile = file_get_contents("log.php");
	$dumpfile = $dumpfile."Name: ".$_SESSION['name']."<br />Species: ".$_SESSION['species']."<br />Gender: ".$_SESSION['gender']."<br /><br />";
	file_put_contents("log.php",$dumpfile);
}

//save / load
function savecharacter(){
	//$character = array("name" => $_SESSION['name'],"gender" => $_SESSION['gender'],"species" => $_SESSION['species']); //can't dump an array into a cookie
	//echo $character['name'].$character['gender'].$character['species'];
	setcookie("name",$_SESSION['name']);
	setcookie("gender",$_SESSION['gender']);
	setcookie("species",$_SESSION['species']);
}
function loadcharacter(){
	$_SESSION['name'] = $_COOKIE['name'];
	echo "user:".$_SESSION['name']." ";
	$_SESSION['gender'] = $_COOKIE['gender'];
	$_SESSION['species'] = $_COOKIE['species'];
}
?>