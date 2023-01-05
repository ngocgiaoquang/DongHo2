<link rel="stylesheet" type="text/css" href="themsuahd.css">
<?php
    include '../hoadon/ketnoi.php';
    $sql_up = "SELECT * FROM hoadon where mahd='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST["edited"])) {
        $sql = "UPDATE hoadon SET masp='{$_POST['masp']}',soluong={$_POST['soluong']},tenkh='{$_POST['tenkh']}',sdt={$_POST['sdt']} WHERE mahd='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa hóa đơn thành công";
            $alert_type = "success";
            header("Location: ./dshd.php");
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Hóa Đơn</h2>
        </div>
        <br>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã Hóa Đơn</label>
                    <input type="text" name="mahd" class="form-control" style="margin-left:1.7%;" required value="<?php echo $row_up['mahd'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" style="margin-left:1%;" required value="<?php echo $row_up['masp'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" style="margin-left:3.4%;" required value="<?php echo $row_up['soluong'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text" name="tenkh" class="form-control" style="margin-left:-0.3%;" required value="<?php echo $row_up['tenkh'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" style="margin-left:1.5%;" required value="<?php echo $row_up['sdt'] ?>">
                </div>
                <br>
                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>