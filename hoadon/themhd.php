<link rel="stylesheet" type="text/css" href="themsuahd.css">
<?php
    include '../hoadon/ketnoi.php';
    $qldh = "SELECT * FROM hoadon";
    $sql = mysqli_query($db, $qldh);

    if(isset($_POST['submit'])){
        $madh = $_POST['mahd'];
        $masp = $_POST['masp'];
        $soluong = $_POST['soluong'];
        $tenkh = $_POST['tenkh'];
        $sdt = $_POST['sdt'];

        $sql = "INSERT INTO hoadon(mahd,masp,soluong,tenkh,sdt) VALUES ('{$_POST['mahd']}','{$_POST['masp']}','{$_POST['soluong']}','{$_POST['tenkh']}','{$_POST['sdt']}')";
        $query = mysqli_query($db, $qldh);
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm hóa đơn thành công";
                $alert_type = "success";
                header('location: dshd.php?page_layout=dshd');
            }
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Hóa Đơn</h2>
        </div>
        <br>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <div class="form-group">
                    <label for="">Mã Đơn Hàng</label>
                    <input type="text" name="mahd" class="form-control" style="margin-left:0.8%;" required>
                </div>
                <br>
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" style="margin-left:1%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" style="margin-left:3.4%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text" name="tenkh" class="form-control" style="margin-left:-0.3%;"required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" style="margin-left:1.5%;" required>
                </div>
                <br>
                <button name="submit" class="btn btn-success" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>
</div>