<?php
	session_start();
	include "adminmenu.html";
	include "connect.php";
?>
<?php
	$qid = $_REQUEST['qid'];
	$q = "delete from question where qid = $qid";
	$s = mysql_query($q);
	if($s > 0)
	{
		echo "<h3>Deleted Succesfully";
	}
	mysql_close();
?>
