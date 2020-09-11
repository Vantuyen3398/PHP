<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xin chào</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	if (isset($_session['name']) && isset($_sesion['age']))
		echo "Chào bạn ".$_SESSION['name'].".</br>"."Tuổi của bạn là ".$_SESSION['age']."</br>";
	?>
	<a href="huy_session.php">Hủy Session</a>
</body>
</html>