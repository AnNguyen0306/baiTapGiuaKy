<?php
// nhan du lieu tu form
    $ht = $_POST['fullname'];
    $ns = $_POST['dob'];
    $gt = $_POST['gender'];
    $que = $_POST['hometown'];
    $lv = $_POST['level'];
    $gr = $_POST['group_id'];
    $id = $_POST['sid'];

// ket noi csdl
require_once 'ketnoi.php';

// viet lenh sql de them du lieu
$capnhat_sql = "UPDATE table_students SET fullname = '$ht', dob = '$ns', gender ='$gt', hometown = '$que', level = '$lv', group_id = '$gr' WHERE id = $id";
mysqli_query($conn, $capnhat_sql);
header("location: hienthi.php");
?>



