<?php
	include "adminmenu.html";
	if(empty($_SESSION)) // if the session not yet started 
   		session_start();
	if(!isset($_SESSION['aid'])) { //if not yet logged in
   header("Location:admin.html");// send to login page
   exit;
} 

?>
<?php
	echo "<center><h3> Welcome Admin!";
?>