<?php
	include "connect.php";
?>

<?php
	$totq = $_REQUEST['totq'];
	//echo $totq;
	$m = 0;
	for($i = 1; $i < $totq; $i++)
	{
		$qid = $_REQUEST['q'.$i];
		$ans = $_REQUEST['r'.$i];
		$q = "select cans from question where qid = $qid";
		$s = mysql_query($q);
		if($r = mysql_fetch_array($s))
		{
			$cans = $r[0];
			if($cans == $ans)
				$m++;
		}
	}
	echo "<h1> Your Score is ".$m." out of ".($totq - 1);
	mysql_close();
	?>
