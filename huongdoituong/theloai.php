<?php
	include 'config.php';
	include 'class/class.db.theloai.php';

	$db_theloai = new DB_TheLoai();
	$theloai_arr = $db_theloai->get_theloai();
	$theloai_html ="";
	if (count($theloai_arr) == 0) 
	{
		$theloai_html = 'Không có thể loại <a href="theloai_them.php">Thêm Thể Loại</a> ';
	}else
	{
		$theloai_html ='<h1>Quản trị thể loại</h1>
						<table width="100%" id="bang_quantri" cellpadding="10" cellspacing="0" >
							<tr>
								<th>Tên thể loại</th>
								<th>Thứ Tự</th>
								<th>Ẩn Hiện</th>
								<th colspan="2"><a href="theloai_them.php">Thêm Thể Loại</a></th>
							</tr>'; 
		foreach ($theloai_arr as $item) 
		{
			$theloai_html .= '<tr>';
			$theloai_html .= '<td>'.$item['TenTL'].'</td>';
			$theloai_html .= '<td>'.$item['ThuTu'].'</td>';
			$theloai_html .= '<td>'.$item['AnHien'].'</td>';
			$theloai_html .= '<td><a href="theloai_sua.php?id='.$item['idTL'].' ">Sửa</a></td>';
			$theloai_html .= '<td><a href="delete.php?id='.$item['idTL'].' " onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Xóa</a></td>';
			$theloai_html .='</tr>';
		}
		$theloai_html .= '</table>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>THỂ LOẠI | QUẢN TRỊ</title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php
			echo $theloai_html;
		?>
	</div>
</body>
</html>