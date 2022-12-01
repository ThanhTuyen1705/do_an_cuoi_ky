<?php 
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['user_name']);
    echo '<script>alert("Đăng xuất thành công.");</script>';
    header("Refresh: 0; url=login.php");
