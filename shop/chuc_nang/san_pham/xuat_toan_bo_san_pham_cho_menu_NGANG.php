<?php 
echo "<br>";
	$so_du_lieu=12;
	$tv="select count(*) from san_pham";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_du_lieu);
	
	if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
	
	$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham order by id desc limit $vtbd,$so_du_lieu";
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
	// phan trang o day
	echo "<div class='btn-group text-center' style='margin-left:auto; margin-right:auto; display:block;'>";
			// tao nut trang truoc
					
			echo "<div class='btn btn-primary'style='margin-left:2px; margin-right:2px;'>";
					$link="?option=xuat_san_pham_2&trang=1";
			if(isset($_GET['trang']))
				{
					$page = $_GET['trang'];
					$link="?option=xuat_san_pham_2&trang=".$page;
					if($page<$so_trang)
					{	
						$page=$page+1;
							$link="?option=xuat_san_pham_2&trang=".$page;
					}
				}
				echo "<a href='$link'>";
							echo "NEXT"; 
							echo "</a>";
						echo "</div>";
				// tao cac nut trang
			for($i=1;$i<=$so_trang;$i++)
				{
					
					echo "<div class='btn btn-dark' style='margin-left:2px; margin-right:2px;'>";
					$link="?option=xuat_san_pham_2&trang=".$i;
					echo "<a href='$link'>";
					echo "<span style='color:#fff'>";
							echo $i;
					echo "</span>";
												
					echo "</a>";
					echo "</div>";
				}
			// tao nut trang sau
				
					echo "<div class='btn btn-primary'style='margin-left:2px; margin-right:2px;'>";
			if(isset($_GET['trang']))
				{
					$page = $_GET['trang'];
					$link="?option=xuat_san_pham_2&trang=".$page;
					if($page>1)
					{	
						$page=$page-1;
							$link="?option=xuat_san_pham_2&trang=".$page;
					}
				}
				echo "<a href='$link' >";
							echo "Previous"; echo ' ';
							echo "</a>";
						echo "</div>";
	
		
	echo "</div>"; // ket thuc phan trang
	echo "</div>";  // dong phan khung
?>