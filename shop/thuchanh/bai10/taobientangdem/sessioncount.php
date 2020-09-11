<?php
	session_start();
	if(!isset($_SESSION['count'])){
		$_SESSION['count']=1;
	}
	else{
		$_SESSION['count']++;
	}
	echo $_SESSION['count'];
	echo "<br><a href='sessioncount.php'>Tăng</a>";
?>