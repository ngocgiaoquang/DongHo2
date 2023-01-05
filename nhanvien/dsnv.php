<?php
    require_once(realpath(dirname(__FILE__) . '/../nhanvien/ketnoi.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.2.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="dsnv.css">

    <title>Danh Sách Nhân Viên </title>

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
<h2 class="tieude">Danh Sách Nhân Viên</h2>
<br>
<div class="container-fluid">
<div class="container text-center">
  <div class="row">
  <div class="col">
      Mã nhân viên
    </div>
    <div class="col">
      Tên nhân viên
    </div>  
    <div class="col">
      Ngày sinh
    </div>
    <div class="col">
      Chức vụ
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
    $qldh = "SELECT * FROM nhanvien";
    $sql = mysqli_query($db, $qldh);
    if(mysqli_num_rows($sql) > 0):
    while($row = mysqli_fetch_array($sql)):
  ?>
    <div class="row item">
      <div class="col"><?=$row["manv"]?></div>
      <div class="col"><?=$row["tennv"]?></div>
      <div class="col"><?=$row["ngaysinh"]?></div>
      <div class="col"><?=$row["chucvu"]?></div>
      <div class="col"><label>0</label><?=$row["sdt"]?></div>
      <div class="col">
        <a href="./xoanv.php?page_layout=dsnv&id=<?php echo $row['manv']?>">Xoá</a>
      </div>
      <div class="col">
        <a href="./suanv.php?page_layout=dsnv&id=<?php echo $row['manv']?>">Sửa</a>
      </div>
    </div>
    <?php endwhile; endif; ?>
    </div>
    <br>
    <a class="btn btn-primary" href="./themnv.php">Thêm Mới</a>
    </div>
</body>
</html>