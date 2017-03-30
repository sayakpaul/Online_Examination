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
	$qid = $_REQUEST['qid'];
	$ques = $_REQUEST['ques'];
	$sub = $_REQUEST['sub'];
	$opta = $_REQUEST['opta'];
	$optb = $_REQUEST['optb'];
	$optc = $_REQUEST['optc'];
	$optd = $_REQUEST['optd'];
	$cans = $_REQUEST['cans'];
	$q = "insert into question values ($qid, '$sub', '$ques', '$opta', '$optb', '$optc', '$optd', 'cans')";
	$s = mysql_query($q);
	if($s > 0)
		echo "Inserted";
	mysql_close();
?>
