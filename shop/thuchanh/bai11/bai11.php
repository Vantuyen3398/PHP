<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phân trang</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Phân Trang</h1>
	<?php
		include('connect_pt.php');
		if(isset($_GET['page'])){
			$page= $_GET['page'];
		}
		else
		{
			$page= 1;
		}
		$toida=5;
		$batdau=($page-1)*$toida;
		$sl= "select * from tintuc";
		$tgsobai= mysqli_num_rows(mysqli_query($connect,$sl));
		$sotrang= $tgsobai/$toida;
		$sql= "select * from tintuc limit ".$batdau.",".$toida;
		$kq= mysqli_query($connect, $sql);
		while($row= mysqli_fetch_array($kq)){
			echo "<div class='content'><table><tr><td width='32px' align='right'>".$row['id'].".</td><td>"."<a href='#'>".$row['title']."</a></td></tr></table></div>";
		}

	?>
	<div class='navigation'>
		<?php
			for($i=1; $i<=$sotrang; $i++){
				echo "<a href='thuchanh/bai11/bai11.php?page=".$i."'>".$i."</a> | ";
			}
		?>
	</div>
</body>
</html>