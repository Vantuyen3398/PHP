<?php
   // mysql_connect("localhost","root","");
   // mysql_select_db("ban_hang");
  //  mysql_query('SET NAMES "UTF8"');
	$connect= mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "ban_hang");
	mysqli_query($connect, "SET names 'utf8'");
	if(!$connect){
		echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
	}
	
?> 