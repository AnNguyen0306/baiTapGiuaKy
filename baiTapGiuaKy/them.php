
    <?php
// nhan du lieu tu form
    $ht = $_POST['fullname']?? null;
    $ns = $_POST['dob']?? null;
    $gt = $_POST['gender']?? null;
    $que = $_POST['hometown']?? null;
    $lv = $_POST['level']?? null;
    $gr = $_POST['group_id']?? null;
    // if($gr)

// ket noi csdl
require_once 'ketnoi.php';

// viet lenh sql de them du lieu
$themsql = "INSERT INTO table_students (fullname, dob, gender, hometown, level, group_id) VALUES('$ht', '$ns', '$gt', '$que', '$lv', '$gr')";
// echo $themsql; exit;

// thuc thi cau lenh
mysqli_query($conn, $themsql);
// in thong bao thanh cong
// echo"them thanh cong";
echo '<script> window.location.href = "hienthi.php";</script>';

?>




