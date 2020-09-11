<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Upload File</h1>
	<?php
		$path= "fileupload/";
		if(isset($_FILES['uploadfile'])){
			$filename= $_FILES['uploadfile']['name'];
			$filetype= $_FILES['uploadfile']['type'];
			$filesize= $_FILES['uploadfile']['size'];
			$error= $_FILES['uploadfile']['error'];
			$tmpname= $_FILES['uploadfile']['tmp_name'];
			$path= $path.basename($filename);
			//Xử lý trùng file
			if($error== 4){
				echo "Không có file nào được chọn";
			}
			else{
			if(file_exists($path)){
				echo "File "."<span style='color: blue;'>".basename($filename)."</span>"." đã tồn tại. Vui lòng xem lại file hoặc upload file khác.";
			}
			else
			{
				if(move_uploaded_file($tmpname, $path)){
					echo "Upload file thành công."."<br>";
					echo "Đường dẫn của file: ".$path."<br>";
					echo "Tên file: ".$filename."<br>";
					echo "Kiểu file: ".$filetype."<br>";
					echo "Dung lượng: ".$filesize." byte"."<br>";
				}
				else{
					echo "Đã xãy ra lỗi trong quá trình upload file."."<br>";
					switch($error){
					case 0: echo "Upload file thành công."."<br>"; break;
					case 1: echo "Dung lượng file bạn tải lên vượt quá giới hạn được chỉ định của server."."<br>"; break;
					case 2: echo "Dung lượng file bạn upload vượt quá dung lượng cho phép max(5000000 byte)."."<br>"; break;
					case 3: echo "Đã xãy ra lỗi trong quá trình upload file (Có thế do lỗi đường truyền)"."<br>"; break;
					case 4: echo "Không có file được chọn"."<br>"; break;
						}
				}
			}
			}
		}
	?>
	<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
		<label for="uploadfile">Upload</label>
		<input type="file" name="uploadfile" id="uploadfile">
		<p><input type="submit" value="Upload" name="upload" id="upload"></p>	
	</form>
</body>
</html>