<?php 
// lay id can sua
    $id = $_GET['sid'];

    // ket noi
    require_once 'ketnoi.php';
    // cau lenh lay du lieu ve sinh vien co id = $id
    $sua_sql = "SELECT * FROM table_students WHERE id = $id";

    $result = mysqli_query($conn, $sua_sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <!--  hien thi thong tin len form -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sinh viên</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Sửa sinh viên</h1>
        <form action="capnhat.php" method="post">
            <input type="hidden" name = "sid" value="<?php echo $row['id'];?>">
            <div class="form-group"><label for="fullname">Họ và tên</label><input type="text" class="form-control" id = "fullname" name="fullname" value = "<?php echo $row['fullname'];?>"></div>
            <div class="form-group"><label for="dob">Ngày sinh</label><input type="date" class="form-control" name="dob" id="dob" value = "<?php echo $row['dob'];?>"></div>
            <div class="form-group"><label for="gender">Giới tính:</label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                       
                        <input type="radio" id ="gender" class="form-check-input" name="gender" value="1"  <?php echo $row['gender'] == 1 ?'checked':'';?>>Nam
                        <!-- nho dat name trung voi  ten du lieu trong post-->
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" id ="gender" class="form-check-input" name="gender" value="0" <?php echo $row['gender'] == 0 ?'checked':'';?>>Nữ
                    </label>
                </div>
            </div>
            <div class="form-group"><label for="hometown">Quê quán</label><input type="text" class="form-control" id="hometown" name="hometown" value = "<?php echo $row['hometown'];?>"></div>
            <div class="form-group"><label for="level">Trình độ học vấn</label><select type="text" class="form-control" id="level" name="level" >
                <option value="0" <?php echo $row['level'] == 0 ?'selected':'';?>>Tiến sĩ</option>
                <option value="1" <?php echo $row['level'] == 1 ?'selected':'';?>>Thạc sĩ</option>
                <option value="2" <?php echo $row['level'] == 2 ?'selected':'';?>>Kỹ sư</option>
                <option value="3" <?php echo $row['level'] == 3 ?'selected':'';?>>Khác</option>
            </select></div>
            <div class="form-group"><label for="group_id">Nhóm</label><input type="text" class="form-control" id="group_id" name="group_id" value = "<?php echo $row['group_id'];?>"></div>
            <button class="btn btn-success" type="submit">Lưu</button>
        </form>
    </div>
</body>
</html>