<link rel="stylesheet" type="text/css" href="themsuanv.css">
<?php
    include '../nhanvien/ketnoi.php';
    $qldh = "SELECT * FROM nhanvien";
    $sql = mysqli_query($db, $qldh);

    if(isset($_POST['submit'])){
        $manv = $_POST['manv'];
        $tennv = $_POST['tennv'];
        $ngaysinh = $_POST['ngaysinh'];
        $chucvu = $_POST['chucvu'];
        $sdt = $_POST['sdt'];

        $sql = "INSERT INTO nhanvien(manv,tennv,ngaysinh,chucvu,sdt) VALUES ('{$_POST['manv']}','{$_POST['tennv']}','{$_POST['ngaysinh']}','{$_POST['chucvu']}','{$_POST['sdt']}')";
        $query = mysqli_query($db, $qldh);
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm hóa đơn thành công";
                $alert_type = "success";
                header('location: dsnv.php?page_layout=dsnv');
            }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Nhân Viên</h2>
        </div>
        <br>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã nhân viên</label>
                    <input type="text" name="manv" class="form-control" style="margin-left:0.9%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tên nhân viên</label>
                    <input type="text" name="tennv" class="form-control" style="margin-left:0.6%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="text" name="ngaysinh" class="form-control" style="margin-left:3%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <input type="text" name="chucvu" class="form-control" style="margin-left:3.7%;"required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" style="margin-left:1.3%;" required>
                </div>
                <br>
                <button name="submit" class="btn btn-success" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>
</div>