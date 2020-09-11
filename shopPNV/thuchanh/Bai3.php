<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuất số thành chữ</title>
</head>

<body>
	<?php
	//$chu="";
		if(isset($_POST["so"]))
		{
			if(is_numeric($_POST["so"]))
			{
				switch($_POST["so"])
				{
					case 0: $chu = "Không";
					break;
					case 1: $chu = "Một";
					break;
					case 2: $chu = "Hai";
					break;
					case 3: $chu = "Ba";
					break;
					case 4: $chu = "Bốn";
					break;
					case 5: $chu = "Năm";
					break;
					case 6: $chu = "Sáu";
					break;
					case 7: $chu = "Bảy";
					break;
					case 8: $chu = "Tám";
					break;
					case 9: $chu = "Chín";
					break;
					default;
					$chu = "Không hợp lệ";
					break;
				}
			}
		}
	?>
	<form action="?option=Bai3" method="post">
	<table width="519" border="1">
		<tr>
			<td colspan="3" align="center" bgcolor="#0066FF">Đọc số</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#00CCFF">Nhập số (0-9)</td>
			<td width="69" rowspan="2" align="center"><input type="submit" name="botton" id="botton" value="submit"/></td>
			<td align="center" bgcolor="#00CCFF">Bằng chữ</td>
		</tr>
		<tr>
			<td width="220" align="center">
				<p>
					<label for="textfield"></label>
					<input type="text" name="so" id="textfield"/>
				</p>
			</td>
			<td width="220" align="center">
				<label for="textfield2"></label>
				<input type="text" name="chu" id="textfield2" value="<?php if(isset($chu)) echo $chu; ?>"/>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
