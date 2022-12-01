<?php
session_start();

if( $_POST['user_name'] == '' || $_POST['email'] == ''|| $_POST['mat_khau'] == ''){
    $_SESSION['error'] = 'Nhập đầy đủ thông tin.';
    header('location:index.php?trang=profile');
    exit;
}

include '../connect.php';
$id = $_SESSION['id'];

if(isset($_POST['mat_khau'])){
    $sql = "SELECT * FROM `user` WHERE `id` = $id";
    $kq = mysqli_query($connect, $sql);
    $user = mysqli_fetch_array($kq);

    if(md5($_POST['mat_khau'])==$user['password']){
        $user_name = mysqli_real_escape_string($connect, $_POST['user_name']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);

        if($user_name == $user['user_name'] && $email == $user['email']){
            echo '<meta http-equiv="refresh" content="0;URL=index.php?trang=profile">';
            $_SESSION['that_bai']="Chưa thay đổi hồ sơ";
            exit;
        }

        $sql = "SELECT * FROM `user` WHERE `user_name` = '$user_name' AND `id` != '$id'";
        if(mysqli_num_rows(mysqli_query($connect, $sql))>0){
            $_SESSION['that_bai_user_name']= "true";
            $_SESSION['that_bai']="Username đã tồn tại";
            echo '<meta http-equiv="refresh" content="0;URL=index.php?trang=profile">';
        }

        $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `id` != '$id'";
        if(mysqli_num_rows(mysqli_query($connect, $sql))>0){
            if(isset($_SESSION['that_bai_user_name'])){
                $_SESSION['that_bai']="Tên và email đã tồn tại";
            }else{
                $_SESSION['that_bai']="email đã tồn tại";
            }
            echo '<meta http-equiv="refresh" content="0;URL=index.php?trang=profile">';
            exit();
        }

        $sql = "UPDATE `user` 
                SET `user_name`='$user_name',`email`='$email'
                WHERE `id` = '$id'";
        mysqli_query($connect, $sql);

        $_SESSION['user_name'] = $user_name;
        $_SESSION['email'] = $email;

        $_SESSION['thanh_cong'] = "Đổi hồ sơ thành công.";
        echo '<meta http-equiv="refresh" content="0;URL=index.php?trang=profile">';
    }else{
        $_SESSION['that_bai']="Mật khẩu không chính xác";
        echo '<meta http-equiv="refresh" content="0;URL=index.php?trang=profile">';
    }
}else{
    $_SESSION['that_bai']="Mật khẩu không chính xác";
    echo '<meta http-equiv="refresh" content="0;URL=index.php?trang=profile">';
}

?>