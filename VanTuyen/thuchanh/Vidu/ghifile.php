<?php 
	$fi = fopen("demo.txt", "a");
	fwrite($fi, "Hôm nay trời đẹp quá\n");
	fclose($fi);
?>