<?php
	
	include "adminmenu.html";
	include "connect.php";
	if(empty($_SESSION)) // if the session not yet started 
   		session_start();
	if(!isset($_SESSION['aid'])) { //if not yet logged in
   header("Location:admin.html");// send to login page
   exit;
  }
?>
<?php
	$subject = $_REQUEST['n1'];
?>
<form action = delete.php method = post>
<center>
<?php
	echo "Showing Question IDs from $subject:<br>";
	$q = "select distinct qid from question where subject = '$subject'";
	$s = mysql_query($q);
	while($r = mysql_fetch_array($s))
	{
		$qid = $r[0];
		echo $qid ."<br>";
	}
	echo "Select the question you want to delete:";
?>
	<input type = text name = qid><br>
	<input type = submit value = Delete>
</center></form>
<?php
	mysql_close();
?>
