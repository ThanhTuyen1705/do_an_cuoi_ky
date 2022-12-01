<?php

include "../connect.php";
$id = $_GET['id'];
$anh = $_GET['anh'];
$sql = "DELETE FROM `san_pham` WHERE `id` = '$id'";
mysqli_query($connect, $sql);
$path_file="../anh/$anh";
unlink($path_file);
header("refresh:0, url=index.php");
?>