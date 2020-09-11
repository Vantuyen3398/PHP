<?php
try
{
    $pdo = new PDO('mysql:dbname=QLNhanVien;host=localhost;charset=utf8', 'root', '');
}
catch(PDOException $e)
{
    die('ERROR: không thể kết nối: ' . $e->getMessage());
}
?>
