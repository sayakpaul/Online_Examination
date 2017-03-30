<?php
include "connect.php";
if(empty($_SESSION)) // if the session not yet started 
   session_start();
?>
<?php
	$id = $_REQUEST['id'];
	$password = $_REQUEST['pass'];
	$q = "select * from admin where id = '$id' and password = '$password'";
	$s = mysql_query($q);
	if($r = mysql_fetch_array($s)){
		header("location:adminhome.php");
		$_SESSION['aid'] = $id;
	}
	else
	{
		?>
		<font color = red>Invalid Credentials</font>
		<?php 
			include "index.html";
		?>
		<?php
	}
	mysql_close();
?>