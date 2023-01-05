<link rel="stylesheet" type="text/css" href="themsuasp.css">
<?php
    include '../sanpham/ketnoi.php';
    $qldh = "SELECT * FROM dongho";
    $sql = mysqli_query($db, $qldh);

    if(isset($_POST['submit'])){
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $hang = $_POST['hang'];
        $soluong = $_POST['soluong'];
        $gia = $_POST['gia'];

        $sql = "INSERT INTO dongho (image,masp,tensp,hang,soluong,gia) VALUES ('{$image}','{$_POST['masp']}','{$_POST['tensp']}','{$_POST['hang']}','{$_POST['soluong']}','{$_POST['gia']}')";
        $query = mysqli_query($db, $qldh);
        move_uploaded_file($image_tmp,"../img_sp/{$image}");
            if ($db->query($sql) === TRUE) {
                $alert = "Thêm sản phẩm thành công";
                $alert_type = "success";
                header('location: dssp.php?page_layout=dssp');
            }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <br>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" style="margin-left:1%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensp" class="form-control" style="margin-left:0.5%;"required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Hãng</label>
                    <input type="text" name="hang" class="form-control" style="margin-left:5.5%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" style="margin-left:3.3%;" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="gia" class="form-control" style="margin-left:6.5%;" required>
                </div>
                <br>
                <button name="submit" class="btn btn-success" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>
</div>