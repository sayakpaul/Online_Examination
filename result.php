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
		$q = "select * from question where qid = $qid";
		$s = mysql_query($q);
		if($r = mysql_fetch_array($s))
		{
			$question = $r[2];
			$cans = $r[7];
			echo "<h4>".$i.". ".$question." - ".$cans;
			echo "<br>";
			if($cans == $ans)
				$m++;
		}
		
	}
	echo "<h1><center> Your Score is ".$m." out of ".($totq - 1);
	mysql_close();
	?>
