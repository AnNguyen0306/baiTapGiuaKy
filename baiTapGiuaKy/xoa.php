<?php
// lay du lieu id can xoa(chua hieu)
$id = $_GET['sid'];
echo $id;
// ket noi 
require_once 'ketnoi.php';
// cau lenh sql
$xoa_sql = "DELETE FROM table_students WHERE id = $id";
mysqli_query($conn, $xoa_sql);
header("location: hienthi.php");
?>