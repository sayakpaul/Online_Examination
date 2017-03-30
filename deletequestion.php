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
<form action = deletequestions.php method = post>
<center>
	Select Subject: <select name = n1><br>
	<option>Select</option>
</center>
<?php
	$q = "select distinct subject from question";
	$s = mysql_query($q);
	while($r = mysql_fetch_array($s))
	{
		$sub = $r[0];

	?>
	<option value = <?=$sub?>><?=$sub?></option>
	<?php
		}
		mysql_close();
	?>
	<input type = submit value = Go>
</form>