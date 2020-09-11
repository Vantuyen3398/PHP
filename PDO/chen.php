<?php
	include 'ketnoi.php';
	$sql = "INSERT INTO nguoidung(name, age) values('Bùi Như Hiển',28)";
	$pdo->exec($sql);
?>