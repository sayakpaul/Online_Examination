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
	$q = "select * from question where qid = $qid" or die(mysql_error());
	$s = mysql_query($q);
	if($r = mysql_fetch_array($s))
	{
		$qid = $r[0];
		$question = $r[2];
		$opta = $r[3];
		$optb = $r[4];
		$optc = $r[5];
		$optd = $r[6];
		$cans = $r[7];
		
	?>
	<form action = updatemaster2.php method = post>
	<pre>
	Qid:              <input type = text name = n1 value = <?=$qid?> readonly >
	Question:              <input type = text name = n2 value = "<?=$question?>">
	OptionA:              <input type = text name = n3 value = <?=$opta?>>
	OptionB:              <input type = text name = n4 value = <?=$optb?>>
	OptionC:              <input type = text name = n5 value = <?=$optc?>>
	OptionD:              <input type = text name = n6 value = <?=$optd?>>
	Correct Answer:		  <input type = text name = n7 value = <?=$cans?>>
	<input type = submit value = Update>
	<?php
	//echo $cans;
	}
	else
	{
		echo "<h3>Invalid ID";
	}
	mysql_close();

?>