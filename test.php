<?php
	include "connect.php";
?>
<form action = exam.php method = post>
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
		echo "   ";
		mysql_close();
	?>
	<input type="submit" value="Begin">
	</select>
	</center>
	</form>