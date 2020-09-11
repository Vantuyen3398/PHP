<?php 
	$tv="select id,ten,loai_menu from menu_ngang order by id";
	$tv_1=mysqli_query($connect,$tv);
	
	echo "<ul class='navbar-nav mr-auto'>";
	echo "<li class='nav-item'>";
	echo "<a class='nav-link' href='index.php'>Trang chủ</a>";
	echo "</li>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		echo "<li class='nav-item'>";
		if($tv_2['loai_menu']==""){$link_menu="?option=xuat_mot_tin&id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="san_pham"){$link_menu="?option=xuat_san_pham_2";}
		echo "<a class='nav-link' href='$link_menu'>";
			echo $tv_2['ten'];
		echo "</a>";
		echo "</li>";
	}
	echo "</ul>";
	
?>