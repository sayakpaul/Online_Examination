<?php
	$uid=$_REQUEST['u'];
	$name=$_REQUEST['n'];
	$address=$_REQUEST['add'];
	$phone=$_REQUEST['pno'];
$dc=mysql_connect("localhost","root","");
	if ($dc >0)
	mysql_select_db("Trackers");
$q="insert into reginfo values($uid,'$name','$address','$phone')";
$s=mysql_query($q);
if($s>0)
	echo"<a href = register.html>Registration Successful <br><br>";
mysql_close();
?>