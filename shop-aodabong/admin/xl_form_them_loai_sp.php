<?php

    session_start();
    include '../connect.php';

    if($_POST['ten_loai_san_pham'] == ''){
        $_SESSION['error'] = 'Nhập đầy đủ thông tin.';
        header('location:index.php?trang=them_loai_sp');
        exit();
    }

    $ten_loai_san_pham = $_POST['ten_loai_san_pham'];
    $sql = "INSERT INTO `loai_sp`(`ten`) VALUES ('$ten_loai_san_pham')";
    mysqli_query($connect, $sql);
    $_SESSION['them_thanh_cong']='Đã thêm thành công.';


    header('location:index.php?trang=them_loai_sp');
?>