<?php 
echo "<br>";
	$tv="select id,ten,gia,hinh_anh,thuoc_menu 
	from san_pham where trang_chu='co' limit 0,9";
	$tv_1=mysqli_query($connect,$tv);
	echo "<div class='box-index'>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		echo "<div class='row'>";
			for($i=1;$i<=3;$i++)
			{
				echo "<div class='item col-md-4 col-sm-4 col-xs-6'>";
					if($tv_2!=false)
					{
						$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
						$link_chi_tiet="?option=chi_tiet_san_pham&id=".$tv_2['id'];
						$gia=$tv_2['gia'];
						$gia=number_format($gia,0,",",".");
						echo "<span>";
						echo "<a href='$link_chi_tiet' class='thumbnail'>";
						echo "<img src='$link_anh'>";
						echo "</a>";
						echo "</span>";	
						echo "<br>";
						echo "<span>";
						echo "<h3 style='text-align: center'>";
						echo "<a href='$link_chi_tiet'>";
						echo $tv_2['ten'];
						echo "</a>";
						echo "<div>";						
						echo $gia;
						echo "</div>";
						echo "</h3>";

						echo "<br>";
						
					}
					else 
					{
						echo "&nbsp;";
					}
				echo "</div>"; //dong phan cell
				if($i!=3)
				{
					$tv_2=mysqli_fetch_array($tv_1);
				}
			}
		echo "</div>";// dong phan dong
	}
	echo "</div>";  // dong phan khung
?>