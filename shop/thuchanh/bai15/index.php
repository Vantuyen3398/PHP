<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bình chọn</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Bình chọn:</h1>
	<p>Bài tập của em có ô kê ko ạ?</p>
	<?php 
		include('connect.php');
		$sl= "select * from answer where id_question=1";
		$exc= mysqli_query($connect, $sl);
		while($row= mysqli_fetch_array($exc)){
	?>
	<form action="thuchanh/bai15/result.php" method="post">
		<p><input type="radio" name="votee" value="<?php echo $row['id']; ?>"><?php echo $row['content'];} ?></p>
		<p><input type="submit" name="submit" value="Send"></p>
	</form>
</body>
</html>