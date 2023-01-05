<?php
    include '../hoadon/ketnoi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM hoadon where mahd='{$id}'";
    $query = mysqli_query($db, $sql);
    if ($db->query($sql) === TRUE) {
        unlink("../ketnoi/{$_POST['delete']}.jpg");
        $alert = "Xoá hóa đơn thành công";
        $alert_type = "success";
        header('location: dshd.php?page_layout=dshd');
    }
?>