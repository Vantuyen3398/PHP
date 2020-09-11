<?php  
	$fil = fopen("demo.txt", "r") or exit ("error");
	while (!feof($fil))
	{
		echo fgets($fil). "<br>";
	}
	fclose($fil);
?>