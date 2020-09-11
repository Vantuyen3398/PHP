<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
		<h1><a href="index.php">LAPTOP SHOP</a></h1>
	</div>
	<div class="container">
		<div class="content">
			<?php
				include('function.php');
				if(isset($_GET['id'])){
					$id= $_GET['id'];
					if(isset($_POST['submit'])){
						if(isset($_POST['rate'])){
						$rate= $_POST['rate'];
						setrating($id,$rate);
						}
					}
					getproduct($id);										
				}
				else
					showlist();
			?>
		</div>
	</div>
</body>
</html>