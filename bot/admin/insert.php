<?php
include('../include.php');
if(isset($_POST['submit'])){
	$reply = replace_in($_POST['reply']);
	$query = 'INSERT INTO reply(talk_id, reply,during_id, mood_id)
	 VALUES ('.$_POST['talk_id'].',"'.$reply.'",'.$_POST['mood'].','.$_POST['during'].')';
	$result = mysql_query($query);
	header("location:commands.php");
}else{
	$query = "SELECT * FROM talk WHERE id = ".$_GET['id']."";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$talk = replace_out($row['talk']);
		echo $talk;
		$id = $row['id'];
	}
}
?>
<form id="form1" name="form1" method="post" action="insert.php">
	The bot responds: <textarea name="reply" cols="25" rows="5"></textarea><br />
    what mood is she in?:
    <select name="mood">
    <?php
		$query = 'SELECT * FROM mood';
		$query = mysql_query($query);
		while($row = mysql_fetch_array($query)){
			echo '<option value="'.$row['id'].'">'.$row['mood'].'</option>';
		}
	?>
    where is her partner currently.
    <select name="during">
    <?php
		$query = 'SELECT * FROM during';
		$query = mysql_query($query);
		while($row = mysql_fetch_array($query)){
			echo '<option value="'.$row['id'].'">'.$row['during'].'</option>';
		}
	?>
	<input name="talk_id" type="hidden" value="<?php echo $id; ?>">
	<input type="submit" name="submit" value="submit" />
</form>