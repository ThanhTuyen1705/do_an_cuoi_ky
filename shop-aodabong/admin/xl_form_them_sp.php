<?php
include('../connect.php');
session_start();

if( $_POST['ten'] == ''|| $_POST['gia'] == ''|| $_POST['thong_tin'] == ''|| $_FILES['anh'] == ''){
    $_SESSION['error'] = 'Nhập đầy đủ thông tin.';
    header('location:index.php');
    exit;
}

$ten = $_POST['ten'];
$gia = $_POST['gia'];
$thong_tin = $_POST['thong_tin'];
$anh = $_FILES['anh'];

$file_name = time().'.'.explode('.', $anh['name'])[1];
$path_file = '../anh/'.$file_name;
move_uploaded_file($anh['tmp_name'], $path_file);

$sql = "INSERT INTO `san_pham`(`ten`, `gia`, `thong_tin`, `anh`) VALUES ('$ten', '$gia', '$thong_tin', '$file_name')";
mysqli_query($connect, $sql);
header("refresh:0, url=index.php");
?>