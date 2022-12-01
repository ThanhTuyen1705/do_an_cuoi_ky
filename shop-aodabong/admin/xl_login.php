<?php 
session_start();
include ("../connect.php");

$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = md5($_POST['password']);

$sql = "SELECT * from `user` WHERE `email` = '$email' AND `password` = '$password' AND `admin_level` > '0'";
$kq = mysqli_query($connect, $sql);

if(mysqli_num_rows($kq) >0){
    $user = mysqli_fetch_array($kq); 
    $_SESSION['login'] = 'true';
    $_SESSION['email'] = $user['email'];
    $_SESSION['id'] = $user['id'];
    $_SESSION['user_name'] = $user['user_name'];
    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}else{
    echo '<meta http-equiv="refresh" content="0;URL=login.php">';
    echo '<script>alert("Email hoặc mật khẩu không đúng.");</script>';
}
