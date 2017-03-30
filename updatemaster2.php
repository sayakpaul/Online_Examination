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
	$qid = $_REQUEST['n1'];
	$question = $_REQUEST['n2'];
	$opta = $_REQUEST['n3'];
	$optb = $_REQUEST['n4'];
	$optc = $_REQUEST['n5'];
	$optd = $_REQUEST['n6'];
	$cans = $_REQUEST['n7'];
	$q = "update question set question = '$question', opta = '$opta', optb = '$optb', optc = '$optc', optd = '$optd', cans = '$cans' where qid = 'qid'";
	$s = mysql_query($q);
	if($s > 0)
		echo "<h3> Updated";
	mysql_close();
?>