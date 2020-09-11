<?php
	try
	{
		//$pdo là tên tự đặt
	    $pdo = new PDO('mysql:dbname=qlnhanvien;host=localhost;charset=utf8', 'root', '');
	}
	catch(PDOException $e)
	{
	    die('ERROR: không thể kết nối: ' . $e->getMessage());
	}
?>
