
<?php
    require_once(realpath(dirname(__FILE__) . '/../sanpham/ketnoi.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="dssp.css">
    
    <title>Danh Sách Sản Phẩm </title>
    <style>
      .item-box {
        display: flex;
        flex-direction: column;
      }
      .col {
        display: flex;
        justify-content: center;
      }
    </style>
</head>
<body>
<h2 class="tieude">Danh Sách Sản Phẩm</h2>
<br>
<div class="container-fluid">
<div class="container text-center">
  <div class="row">
    <div class="col">
      Ảnh Sản Phẩm 
    </div>
    <div class="col">
      Mã sản phẩm
    </div>
    <div class="col">
      Tên sản phẩm
    </div>
    <div class="col">
      Hãng
    </div>
    <div class="col">
      Số lượng
    </div>
    <div class="col">
      Giá
    </div>
    <div class="col">
      Xoá
    </div>
    <div class="col">
      Sửa
    </div>
  </div>
</div>
<div class="container text-center">
<?php 
    include 'ketnoi.php';
    $qldh = "SELECT * FROM dongho";
    $sql = mysqli_query($db, $qldh);
    if(mysqli_num_rows($sql) > 0):
    while($row = mysqli_fetch_array($sql)):
  ?>
    <div class="row item">
      <div class="col">
        <img style="width:100px" class="col-img" src="../img_sp/<?=$row['image'];?>">
      </div>
      <div class="col"><?=$row["masp"]?></div>
      <div class="col"><?=$row["tensp"]?></div>
      <div class="col"><?=$row["hang"]?></div>
      <div class="col"><?=$row["soluong"]?></div>
      <div class="col"><?=$row["gia"]?><label>&nbsp;đ</label></div>
      <div class="col">
        <a href="./xoasp.php?page_layout=dssp&id=<?php echo $row['masp']?>">Xoá</a>
      </div>
      <div class="col">
        <a href="./suasp.php?page_layout=dssp&id=<?php echo $row['masp']?>">Sửa</a>
      </div>
    </div>
    <?php endwhile; endif; ?>
    </div>
    <br>
    <a class="btn btn-primary" href="./themsp.php">Thêm Mới</a>
    </div>
</body>
</html>