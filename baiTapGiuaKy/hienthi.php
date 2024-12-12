<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi sinh vien</title>
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
        <h1>Danh sách sinh viên của nhóm 7</h1>
        <button class = "btn btn-success mb-3">
            <a href="them.html" style = "color:white; text-decoration: none;">Thêm sinh viên</a>
        </button>
        <!-- Thanh tìm kiếm -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm theo họ tên hoặc quê quán..." onkeyup="searchTable()">
        </div>
        
        <table class="table" id="studentTable">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Quê quán</th>
                    <th>Trình độ học vấn</th>
                    <th>Nhóm</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'ketnoi.php';
                $sql_lietke = "SELECT * FROM table_students ORDER BY id DESC";
                $result = mysqli_query($conn, $sql_lietke);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['gender'] == 0 ? "Nữ" : "Nam"; ?></td>
                        <td><?php echo $row['hometown']; ?></td>
                        <td><?php
                            switch ($row['level']) {
                                case 0: echo "Tiến sĩ"; break;
                                case 1: echo "Thạc sĩ"; break;
                                case 2: echo "Kỹ sư"; break;
                                default: echo "Khác"; break;
                            }
                        ?></td>
                        <td><?php echo "Nhóm " . $row['group_id']; ?></td>
                        <td>
                            <a href="sua.php?sid=<?php echo $row['id']; ?>" class="btn btn-info">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" href="xoa.php?sid=<?php echo $row['id'];?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <script>
        // hham tim kiem
        function searchTable() {
            // Lấy giá trị nhập vào
            let input = document.getElementById('searchInput').value.toLowerCase();
            let table = document.getElementById('studentTable');
            let tr = table.getElementsByTagName('tr');

            // hap qua cac hang (tru hang dau la tieu de)
            for (let i = 1; i < tr.length; i++) {
                let fullname = tr[i].getElementsByTagName('td')[1].textContent.toLowerCase();
                let hometown = tr[i].getElementsByTagName('td')[4].textContent.toLowerCase();

                // kiem tra neu ho ten hoac que quan trung voi tu khoa
                if (fullname.includes(input) || hometown.includes(input)) {
                    tr[i].style.display = ""; // hienthi hang
                } else {
                    tr[i].style.display = "none"; // an hanghang
                }
            }
        }
    </script>
</body>

</html>
