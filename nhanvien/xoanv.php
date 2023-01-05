<?php
    include '../nhanvien/ketnoi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM nhanvien where manv='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoi/{$_POST['delete']}.jpg");
        $alert = "Xoá nhân viên thành công";
        $alert_type = "success";
        header('location: dsnv.php?page_layout=dsnv');
    }
?>