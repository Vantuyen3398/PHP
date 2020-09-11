<?php
include("ketnoi.php");
$sql = "SELECT * FROM nguoidung";
if($result = $pdo->query($sql))
{
    while($row=$result->fetch(PDO::FETCH_NUM))
    {	
    echo $row[0].'    '. $row[1] . '    ' . $row[2];
	echo '<br />';
    }
}
// cách 2 hiển thị theo tên trường
if($result = $pdo->query($sql))
{
	while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
    echo $row['name'] . '-' . $row['age'];
	 	echo '<br />';
    }
}
	echo '<br />';
// cách 3 hiển thi theo tên trường hOẶC chỉ số
if($result = $pdo->query($sql))
{
	while($row = $result->fetch(PDO::FETCH_BOTH))
    {
    echo $row[1] . '-' . $row['age'];
	 	echo '<br />';
    }
}
 	echo '<br />';
// cách 4 HIỂN THỊ DƯỚI DẠNG 1 ĐỐI TƯỢNG CÓ THUỘC TÍNH LÀ TÊN TRƯỜNG
if($result = $pdo->query($sql))
{
	while($row = $result->fetch(PDO::FETCH_OBJ))
    {
    echo $row->name . '-' . $row->age;
	 	echo '<br />';
    }
}
// cách 5 hiển thị dưới tất cả các dạng
if($result = $pdo->query($sql))
{
	
	while($row = $result->fetch(PDO::FETCH_LAZY))
    {
	echo $row[0].'   '. $row['name'] . '-' . $row->age;
	echo '<br />';
	}
	//đếm số record lấy được
			echo 'so ban ghi la -'.$result->rowCount();

	
	
	
}



?>