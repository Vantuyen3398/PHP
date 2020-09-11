<?php
	session_start();
	session_destroy();
	echo "<script>alert('Xóa session thành công.'); location.href='test_session.php';</script>";

?>