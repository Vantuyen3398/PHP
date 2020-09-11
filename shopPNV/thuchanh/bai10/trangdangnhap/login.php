<?php
	session_start();
	if(isset($_POST['login'])){
	include('../connect.php');
	$name= $_POST['username'];
	$pass= $_POST['password'];
	$sl= "select * from users where name='".$name."' and pass='".$pass."'";
	$result= mysqli_query($connect, $sl);
	$row= mysqli_fetch_assoc($result);
	$kt= mysqli_num_rows($result);
	if($kt>0){
		setcookie("username", $name, time() + 30);
		setcookie("password", $pass, time() + 30);
		echo "<script>alert('Login Successfull.'); location.href='trangquantriadmin.php';</script>";
			
		if(isset($_POST['remember']) and ($_POST['remember']=="on")){
			$_SESSION['username']= $_COOKIE['username'];
			$_SESSION['password']= $_COOKIE['password'];
		}
		echo "Chào bạn: ".$row['name']."<br>Pass của bạn là: ".$row['pass'];
	}
	else{
		echo "<script>alert('Login Failed.'); location.href='index.php';</script>";
	}
	}
	if(isset($_POST['cancel'])){
		echo "<script>location.href='index.php';</script>";
	}
?>