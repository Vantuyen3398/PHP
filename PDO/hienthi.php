<!-- <?php
	include 'ketnoi.php';
	$sql = "SELECT * FROM nguoidung";
	if($result = $pdo->query($sql))
	{
		while($row=$result->fetch())
		    {	   
		    	var_dump($row[0]);
		        echo '<br />';
		    }
	}  
	else
		{    print_r($pdo->errorInfo()); }
	unset($pdo);
?> -->
<!-- Hiển thị theo FETCH_NUM trả về record dưới dạng mảng tạo index số
-->
<!-- <?php
	include 'ketnoi.php';
	if($result = $pdo->query($sql))
	{
		while($row=$result->fetch(PDO::FETCH_NUM))
		    {	   
		    	echo $row[0].'-'.$row[1].'-'.$row[2];
		        echo '<br />';
		    }
	}  
?> -->
<!-- Hiển thị theo FETCH_ASSOC trả về record dưới dạng mảng kết hợp với index là tên trường truy vấn
 -->
<!-- <?php
	include 'ketnoi.php';
	if($result = $pdo->query($sql))
	{
		while($row=$result->fetch(PDO::FETCH_ASSOC))
		    {	   
		    	echo $row['name'].'-'.$row['age'];
		        echo '<br />';
		    }
	}  
?> -->
<!-- Hiển thị theo FETCH_BOTH trả về record dưới dạng mảng index là số và mảng kết hợp
 -->
<!-- <?php
	include 'ketnoi.php';
	if($result = $pdo->query($sql))
	{
		while($row=$result->fetch(PDO::FETCH_BOTH))
		    {	   
		    	echo $row['0'].'-'.$row['name'];
		        echo '<br />';
		    }
	}  
?> -->
<!-- Hiển thị theo FETCH_OBJ trả về record dưới dạng một đối tượng có các thuộc tính tương ứng với tên trường truy vấn
-->
<!-- <?php
	include 'ketnoi.php';
	if($result = $pdo->query($sql))
	{
		while($row=$result->fetch(PDO::FETCH_OBJ))
		    {	   
		    	echo $row->name.'-'.$row->age;
		        echo '<br />';
		    }
	}  
?> -->
<!-- Hiển thị theo FETCH_LAZY trả về record dưới tất cả các dạng đã được đề cập ở trên
-->
<?php
	include 'ketnoi.php';
	if($result = $pdo->query($sql))
	{
		while($row=$result->fetch(PDO::FETCH_LAZY))
		    {	   
		    	echo $row['name'].'-'.$row['age'];
		        echo '<br />';
		    }
	}   
	echo 'so ban ghi la :'.$result->rowCount();

?>
