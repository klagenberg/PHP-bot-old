<?php include("../include.php");
if(isset($_POST['Submit'])){
	$count = 0;
	$query = 'SELECT * FROM talk WHERE talk = "'.$_POST['talk'].'"';
	$query = mysql_query($query);
	while($row = mysql_fetch_array($query)){
			$count = 1;
	}
	if($count == 0){
		$query = 'INSERT INTO talk(talk, during) VALUES ("'.$_POST['talk'].'","'.$_POST['during'].'")';
		$query = mysql_query($query);
	}
}
?>
<form name="form1" method="post" action="input.php">
	what will the user type in:
	<input name="talk" type="text">
    and where is he right now? (what part of the pred is he currently exploring?:
    <select name="during">
    <?php
		$query = 'SELECT * FROM during';
		$query = mysql_query($query);
		while($row = mysql_fetch_array($query)){
			echo '<option value="'.$row['id'].'">'.$row['during'].'</option>';
		}
	?>
  <input type="submit" name="Submit" id="button" value="Submit">
</form>