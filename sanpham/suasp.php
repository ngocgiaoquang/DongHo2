<link rel="stylesheet" type="text/css" href="themsuasp.css">
<?php
    include '../sanpham/ketnoi.php';
    $sql_up = "SELECT * FROM dongho where masp='{$_GET['id']}'";
    $query_up = mysqli_query($db,$sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if(isset($_POST["edited"])) {
        $sql = "UPDATE dongho SET tensp='{$_POST['tensp']}',hang='{$_POST['hang']}',soluong={$_POST['soluong']},gia={$_POST['gia']} WHERE masp='{$_GET['id']}'";
        if ($db->query($sql) === TRUE) {
            $alert = "Sửa sản phẩm thành công";
            $alert_type = "success";
            header("Location: ./dssp.php");
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Sản Phẩm</h2>
        </div>
        <br>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <img src="../img/<?=$row_up['image']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="masp" class="form-control" style="margin-left:1%;" required value="<?php echo $row_up['masp'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensp" class="form-control" style="margin-left:0.5%;" required value="<?php echo $row_up['tensp'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Hãng</label>
                    <input type="text" name="hang" class="form-control" style="margin-left:5.5%;" required value="<?php echo $row_up['hang'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="soluong" class="form-control" style="margin-left:3.4%;" required value="<?php echo $row_up['soluong'] ?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="gia" class="form-control" style="margin-left:6.7%;" required value="<?php echo $row_up['gia'] ?>">
                </div>
                <br>
                <button name="edited" class="btn btn-success" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
</div>