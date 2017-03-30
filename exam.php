<?php
	include "connect.php";
?>
<script src = "jquery-1.10.2.js"></script>
<script type="text/javascript">
	 $(document).ready(function() {
      $("#sub").click(function(event){
          var names = {};
		$('input:radio').each(function() { // find unique names
      	names[$(this).attr('name')] = true;
		});
		var count = 0;
		$.each(names, function() { // then count them
      		count++;
		});
		if($('input:radio:checked').length == count) {
		    return true;  // all questions answered
		}
		else{
			alert ("All the questions are to be answered");
			return false;
			e.preventDefault();
		}
	});
   });

</script>
<form action = result.php method = post onsubmit = "return checked()">
<?php
	$i = 1;
	$sub = $_REQUEST['n1'];
	$q = "select *  from question where subject = '$sub' order by RAND() LIMIT 10";
	$s = mysql_query($q);
	while($r = mysql_fetch_array($s))
	{
		$qid = $r[0];
		$ques = $r[2];
		$opta = $r[3];
		$optb = $r[4];
		$optc = $r[5];
		$optd = $r[6];
	//	echo $qid;
	?>
	<?=$i?>)<?=$ques?><br>
<div id = question>
<input type = radio name = r<?=$i?> value = "<?=$opta?>"><?=$opta?><br>
<input type = radio name = r<?=$i?> value = "<?=$optb?>"><?=$optb?><br>
<input type = radio name = r<?=$i?> value = "<?=$optc?>"><?=$optc?><br>
<input type = radio name = r<?=$i?> value = "<?=$optd?>"><?=$optd?><br><br>
<input type="hidden" name=q<?=$i?> value = <?=$qid?>>
<?php
	$i++;
}
mysql_close();
?>
<input type = hidden value = <?=$i?> name = totq>
<input type = submit value = Finish id = sub><br>
</form>



