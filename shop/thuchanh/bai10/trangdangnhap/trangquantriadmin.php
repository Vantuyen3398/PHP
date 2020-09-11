<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang quản trị admin</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
			echo "Xin chào: ".$_COOKIE['username'];
			echo "<br><a href='logout.php'>Logout</a>";
		}
		else{
			if(isset($_SESSION['username']) and isset($_SESSION['password'])){
				echo "Xin chào: ".$_SESSION['username'];
				echo "<br><a href='logout.php'>Logout</a>";
			}
			else
			echo "<script>alert('Bạn chưa đăng nhập'); location.href='index.php';</script>";
		}	
	?>
</body>
</html>