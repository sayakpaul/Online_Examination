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
	$qid = 0;
	$q = "select max(qid) from question";
	$s = mysql_query($q);
	if($r = mysql_fetch_array($s))
		$qid = $r[0];
	$qid++;
mysql_close();
?>
<form action = "insertquestions.php" method = post>

<table>
	<tr>
		<td>Qid: </td>
		<td><?=$qid?><input type = hidden name = qid value = <?=$qid?>></td>
	</tr>
	<tr>
		<td>Question: </td>
		<td><input type = text name = ques ></td>
	</tr>
	<tr>
		<td>Subject: </td>
		<td><input type = text name = sub ></td>
	</tr>
	<tr>
		<td>OptA: </td>
		<td><input type = text name = opta ></td>
	</tr>
	<tr>
		<td>OptB: </td>
		<td><input type = text name = optb ></td>
	</tr>
	<tr>
		<td>OptC: </td>
		<td><input type = text name = optc ></td>
	</tr>
	<tr>
		<td>OptD: </td>
		<td><input type = text name = optd ></td>
	</tr>
	<tr>
		<td>CAns: </td>
		<td><input type = text name = cans ></td>
	</tr>
	<tr>
		<td colspan="2" align = center><input type="submit" value = Insert></td>
	</tr>
</table>

