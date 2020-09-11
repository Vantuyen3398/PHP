<?php
	if (isset($_GET['option'])) {
		switch ($_GET['option']) {
			case "Bai1":
				include '../VanTuyen/thuchanh/Bai1.php';
				break;
			case "Bai2":
				include '../VanTuyen/thuchanh/Bai2.php';
				break;
				case "Bai3":
				include '../VanTuyen/thuchanh/Bai3.php';
				break;
				case "Bai4":
				include '../VanTuyen/thuchanh/Bai4.php';
				break;
				case "Bai8":
				include 'Bai8/index.php';
				break;
				case "xuat_mot_tin":
				include 'chuc_nang/xuat_mot_tin.php';
				break;
			default:
				# code...
				break;
		}
	}
?>