<?php 
	include('ket_noi.php');
	$tv="select * from menu_doc order by id";
	$tv_1=mysqli_query($connect,$tv);
	echo "<div class='menu_doc' >";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		echo "<ul class='nav-item'>";
		if($tv_2['loai_menu']=="1"){$link_menu="../VanTuyen/thuchanh/Bai1.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="2"){$link_menu="../VanTuyen/thuchanh/Bai2.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="3"){$link_menu="../VanTuyen/thuchanh/Bai3.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="4"){$link_menu="../VanTuyen/thuchanh/Bai4.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="5"){$link_menu="../VanTuyen/thuchanh/Bai5.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="6"){$link_menu="../VanTuyen/thuchanh/Bai6.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="7"){$link_menu="../VanTuyen/thuchanh/bai7/theloai.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="8"){$link_menu="../VanTuyen/thuchanh/bai8/bai8.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="9"){$link_menu="../VanTuyen/thuchanh/Bai9.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="10"){$link_menu="../VanTuyen/thuchanh/Bai10.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="11"){$link_menu="../VanTuyen/thuchanh/Bai11.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="12"){$link_menu="../VanTuyen/thuchanh/Bai12.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="13"){$link_menu="../VanTuyen/thuchanh/Bai13.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="14"){$link_menu="../VanTuyen/thuchanh/Bai14.php?option=id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="15"){$link_menu="../VanTuyen/thuchanh/Bai15.php?option=id=".$tv_2['id'];}
		echo "<a class='nav-link' href='$link_menu'>";
			echo $tv_2['ten'];
		echo "</a>";
		echo "</ul>";
	}
	echo "</div>";
?>