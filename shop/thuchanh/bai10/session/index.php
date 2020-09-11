<?php

	if(!isset($_SESSION['name'])){
		$_SESSION['name']= "admin";
		$_SESSION['age']= "96";
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Session</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$name= $_SESSION['name'];
		$age= $_SESSION['age'];
		echo "Tên của bạn là: ".$name."<br>"."Tuổi của bạn là: ".$age."<br>";
	?>
	<a href="thuchanh/bai10/session/test_session.php">Click here!</a>
</body>
</html>