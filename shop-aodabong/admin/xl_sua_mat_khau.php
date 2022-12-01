<?php
session_start();
if( $_POST['mat_khau_moi_1'] == '' || $_POST['mat_khau_moi_2'] == '' || $_POST['mat_khau_hien_tai'] == ''){
    $_SESSION['error'] = 'Nhập đầy đủ thông tin.';
    header('location:index.php?trang=profile');
    exit;
}

include '../connect.php';
$id = $_SESSION['id'];
if(isset($_POST['mat_khau_hien_tai'])){
    $mat_khau_hien_tai = md5($_POST['mat_khau_hien_tai']);
    $sql = "SELECT * FROM `user` WHERE `id` = '$id'";
    $kq = mysqli_query($connect, $sql);
    $user = mysqli_fetch_array($kq);

    if($mat_khau_hien_tai == $user['password']){
        $mat_khau_1 = md5($_POST['mat_khau_moi_1']);
        $mat_khau_2 = md5($_POST['mat_khau_moi_2']);

        if($mat_khau_1 == $mat_khau_2 ){
            if($mat_khau_1 != $mat_khau_hien_tai){
                $sql = "UPDATE `user` SET `password`='$mat_khau_1' WHERE `id` = '$id'";
                mysqli_query($connect, $sql);
                $_SESSION['doi_mk']="Đổi mật khẩu thành công.";
                header('location:index.php?trang=profile&phan=doi_mat_khau');
                exit();
            }else{
                $_SESSION['doi_mk']="Mật khẩu mới và mật khẩu hiện tại giống nhau.";
                header('location:index.php?trang=profile&phan=doi_mat_khau');
                exit();
            }
        }else{
            $_SESSION['doi_mk']="Mật khẩu và Mật khẩu xác nhận không giống nhau.";
            header('location:index.php?trang=profile&phan=doi_mat_khau');
            exit();
        }
    }else{
        $_SESSION['doi_mk']="Mật khẩu hiện tại không đúng.";
        header('location:index.php?trang=profile&phan=doi_mat_khau');
    }
}
