<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CKeditor</title>
	<link rel="stylesheet" href="">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<form action="posteddata.php" method="post">
		<textarea name="ckeditor" cols="" rows=""></textarea>
		<script>
			CKEDITOR.replace('ckeditor');
		</script>
		<input type="submit" name="ok" value="Ok">
	</form>
</body>
</html>