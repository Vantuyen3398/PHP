<?php
	include 'ketnoi.php';
	$sql = "UPDATE nguoidung SET name='Văn Tuyến' WHERE id = 1";
	$result = $pdo->prepare($sql);
	$result->execute();
?>