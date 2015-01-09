<?php session_start();
if(!isset($_SESSION['talk_page'])){
	$_SESSION['talk_page'] = 1;
}
include('include.php');

include('header.php'); //site design
if(isset($_POST['submit'])){
	$query = "SELECT * FROM talk WHERE talk='".$_POST['talk']."'";
	$query = mysql_query($query);
	while($row = mysql_fetch_array($query)){
		$id = $row['id'];
		}if(!isset($id)){
			echo "She just looks at you, her face looking like a questionmark, it is af she has no idea what you just said.";
		}else{
			echo $id;
			$query = "SELECT * FROM reply WHERE talk_id=".$id;
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result)){
				$talk = $row['reply'];
				$talk = replace_out($talk);
				echo $talk;
			}
		}
	}
else{
	if(isset($_SESSION['unbirth'])){
		echo 'So what'."'".'s it gonna be '.$_SESSION['name'].', foreplay first, or are you going to let me unbirth you?';
		$talk = 'So what'."'".'s it gonna be '.$_SESSION['name'].', foreplay first, or are you going to let me unbirth you?';
	}elseif(isset($_SESSION['oralvore'])){
		echo 'ohhh, I can'."'".'t wait to eat you'.$_SESSION['species'].'. Are you going to let me have you right here and now, or do I have to chase dowm my dinner, '.$_SESSION['name'].'?';
		$talk ='ohhh, I can'."'".'t wait to eat you'.$_SESSION['species'].'. Are you going to let me have you right here and now, or do I have to chase dowm my dinner, '.$_SESSION['name'].'?';
	}else{
		echo'You see a brownfurred female sitting on a bed, smiling at you. Her long silvercolored hair flowing out behind her. "You must be '.$_SESSION['name'].', what do you feel like doing?"';
		$talk = 'You see a brownfurred female sitting on a bed, smiling at you. Her long silvercolored hair flowing out behind her. "You must be '.$_SESSION['name'].', what do you feel like doing?"';
	}
}
?>

<form id="form1" name="form1" method="post" action="talk.php">
<input type="text" name="talk" id="textfield" />
<input type="submit" name="submit" value="submit" />
</form>
<?php dumpinfo_talk($talk);
include('footer.php');
?>