<!DOCTYPE html>
<?php
include("template/header.php");
session_start();
?>


<body>
    <?php
        if(isset($_SESSION['login'])){
    ?>
    <div id="wrapper">
        <?php
        include ("template/nav.php");
        include ("template/side.php");
        if(isset($_GET['trang'])){
            if($_GET['trang']=='them_sp'){
                include ("template/form_them_sp.php");  
            }elseif($_GET['trang']=='sua_sp'){
                include("template/form_sua_sp.php");
            }elseif($_GET['trang']=='profile'){
                include("template/profile.php");  
            }elseif($_GET['trang']=='them_loai_sp'){
                include ("template/form_them_loai_sp.php");
            }elseif($_GET['trang']=='danh_sach_loai_sp'){
                include ("template/danh_sach_loai_sp.php");
            }elseif($_GET['trang']=='sua_loai_sp'){
                include ("template/form_sua_loai_sp.php");
            }        
        }else{
            include ("template/san_pham.php");
        }
        ?>
    </div>
    <?php
        include("template/scrips.php")
    ?>

    <?php
    }
    else{
        header("Refresh: 0; url=login.php");
    }
    ?>
</body>

</html>