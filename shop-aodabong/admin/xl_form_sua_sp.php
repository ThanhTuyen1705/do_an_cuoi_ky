<?php

session_start();
if( $_POST['ten'] == '' || $_POST['gia'] == ''|| $_POST['thong_tin'] == ''){
    $_SESSION['error'] = 'Nhập đầy đủ thông tin.';
    header('location:index.php');
    exit;
}

include "../connect.php";
$id = $_POST['id'];
$ten = $_POST['ten'];
$gia = $_POST['gia'];
$thong_tin = $_POST['thong_tin'];

if($_FILES['anh_moi']['size']>0){
    $file_name = time().'.'.explode('.', $_FILES['anh_moi']['name'])[1];
    $path_file = "../anh/".$file_name;
    move_uploaded_file($_FILES['anh_moi']['tmp_name'], $path_file);
    unlink("../anh/".$_POST['anh_cu']);
}else{
    $file_name = $_POST['anh_cu'];
}

$sql = "UPDATE `san_pham` SET `ten`='$ten',`gia`='$gia',`thong_tin`='$thong_tin',`anh`='$file_name' WHERE `id` = '$id'";
mysqli_query($connect, $sql);
header('location:index.php')
?>