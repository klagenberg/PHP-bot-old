<?php
include('../include.php');

$query = "SELECT * FROM talk";
$result = mysql_query($query);
while($row = mysql_fetch_array($result)){
	echo '<a href="insert.php?id='.$row[id].'">'.$row['talk']."</a><br />";
}
?>