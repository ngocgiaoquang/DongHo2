<?php
    require_once(realpath(dirname(__FILE__) . '/../hoadon/ketnoi.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="dshd.css">

    <title>Danh Sách Hóa Đơn </title>

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
<h2 class="tieude">Danh Sách Hóa Đơn</h2>
<br>
<div class="container-fluid">
<div class="container text-center">
  <div class="row">
  <div class="col">
      Mã Hóa Đơn
    </div>
    <div class="col">
      Mã Sản Phẩm
    </div>  
    <div class="col">
      Số lượng
    </div>
    <div class="col">
      Tên khách hàng
    </div>
    <div class="col">
      Số điện thoại
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
    $qldh = "SELECT * FROM hoadon";
    $sql = mysqli_query($db, $qldh);
    if(mysqli_num_rows($sql) > 0):
    while($row = mysqli_fetch_array($sql)):
  ?>
    <div class="row item">
      <div class="col"><?=$row["mahd"]?></div>
      <div class="col"><?=$row["masp"]?></div>
      <div class="col"><?=$row["soluong"]?></div>
      <div class="col"><?=$row["tenkh"]?></div>
      <div class="col"><label>0</label><?=$row["sdt"]?></div>
      <div class="col">
        <a href="./xoahd.php?page_layout=dshd&id=<?php echo $row['mahd']?>">Xoá</a>
      </div>
      <div class="col">
        <a href="./suahd.php?page_layout=dshd&id=<?php echo $row['mahd']?>">Sửa</a>
      </div>
    </div>
    <?php endwhile; endif; ?>
    </div>
    <br>
    <a class="btn btn-primary" href="./themhd.php">Thêm Mới</a>
    </div>
</body>
</html>