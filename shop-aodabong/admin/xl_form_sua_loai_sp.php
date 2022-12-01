<?php

session_start();

if($_POST['ten'] == ''){
    $_SESSION['error'] = 'Nhập đầy đủ thông tin.';
    header('location:index.php?trang=danh_sach_loai_sp');
    exit();
}
    
include "../connect.php";
$id = $_POST['id'];
$ten = $_POST['ten'];

$sql = "UPDATE `loai_sp` SET `ten`='$ten' WHERE `id` = '$id'";
mysqli_query($connect, $sql);
$_SESSION['sua_thanh_cong']='Bạn đã sửa thành công.';

header('location:index.php?trang=danh_sach_loai_sp');

?>