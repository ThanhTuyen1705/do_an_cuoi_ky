<?php
    session_start();
    include '../connect.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM `loai_sp` WHERE `id` = '$id'";
    mysqli_query($connect, $sql);
    $_SESSION['xoa_loai_sp'] = 'Đã xoá thành công.';

    header('location:index.php?trang=danh_sach_loai_sp');
?>