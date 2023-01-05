<?php
    include '../sanpham/ketnoi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM dongho where masp='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoi/{$_POST['delete']}.jpg");
        $alert = "Xoá sản phẩm thành công";
        $alert_type = "success";
        header('location: dssp.php?page_layout=dssp');
    }
?>