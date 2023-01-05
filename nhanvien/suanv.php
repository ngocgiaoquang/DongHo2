<link rel="stylesheet" type="text/css" href="themsuanv.css">
<?php
    include '../nhanvien/ketnoi.php';
    $sql_up = "SELECT * FROM nhanvien where manv='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST["edited"])) {
        $sql = "UPDATE nhanvien SET tennv='{$_POST['tennv']}',ngaysinh='{$_POST['ngaysinh']}',chucvu='{$_POST['chucvu']}',sdt={$_POST['sdt']} WHERE manv='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa nhân viên thành công";
            $alert_type = "success";
            header("Location: ./dsnv.php");
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Nhân Viên</h2>
        </div>
        <br>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã nhân viên</label>
                    <input type="text" name="manv" class="form-control" style="margin-left:1.2%;" required value="<?php echo $row_up['manv'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tên nhân viên</label>
                    <input type="text" name="tennv" class="form-control" style="margin-left:0.7%;" required value="<?php echo $row_up['tennv'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Ngày sinh</label>
                    <input type="text" name="ngaysinh" class="form-control" style="margin-left:3%;" required value="<?php echo $row_up['ngaysinh'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Chức vụ</label>
                    <input type="text" name="chucvu" class="form-control" style="margin-left:3.7%;" required value="<?php echo $row_up['chucvu'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" style="margin-left:1.2%;" required value="<?php echo $row_up['sdt'] ?>">
                </div>
                <br>
                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>