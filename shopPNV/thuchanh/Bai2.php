<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giải phương trình bậc 1</title>
</head>

<body>
	<?php
		if(isset($_POST["a"]) && isset($_POST["b"]))
		{
			$a = $_POST["a"];
			$b = $_POST["b"];
			if($a==0)
			{
				if($b==0)
					$nghiem = "Phương trình có vô số nghiệm";
				if($b<>0)
					$nghiem = "Phương trình vô nghiệm";
			}
			else
			{
				$x = -($b/$a);
				$x = round($x,2);
				$nghiem = "x = $x";
			}
		}
	?>
	<form action="?option=Bai2" method="post">
	<table width="744" border="1">
		<tr>
			<td colspan="3" bgcolor="#0000FF" align="center"><strong>Giải phương trình bậc nhất</strong></td>
		</tr>
		<tr>
			<td width="120">Phương trình</td>
			<td width="250"><input name="a" type="text"/>&nbsp;&nbsp;&nbsp;X &nbsp;&nbsp;+</td>
			<td width="352">
				<label for="textfield"></label>
				<input name="b" type="text" id="textfield"/>&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;0
			</td>
		</tr>
		<tr>
			<td colspan="3">Nghiệm &nbsp;&nbsp;&nbsp;
				<label for="textfield2"></label>
				<input name="kq" type="text" id="textfield2" value="<?php if(isset($nghiem))echo $nghiem; ?>"/>
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất"/></td>
		</tr>
	</table>
</body>
</html>
