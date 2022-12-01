<div id="wrapper">
    <div id="page-wrapper" >
        <div class="header"> 
            <h1 class="page-header">
                Hồ sơ của tôi <small>Quản lý thông tin hồ sơ để bảo mật tài khoản</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <?php 
                        if(isset($_GET['phan'])){
                            echo '<a href="index.php?trang=profile">Hồ sơ của tôi</a>';
                        }else{
                            echo 'Hồ sơ của tôi';
                        }
                    ?>
                </li>
                <li>
                    <?php 
                        if(!isset($_GET['phan'])){
                            echo '<a href="index.php?trang=profile&phan=doi_mat_khau">Đổi mật khẩu</a>';
                        }else{
                            echo 'Đổi mật khẩu';
                        }
                    ?>
                </li>
            </ol>            
        </div>
        
        <?php 
            if(!isset($_GET['phan'])){
                include 'template/ho_so_cua_toi.php';      
            }else{
                include 'template/sua_mat_khau.php';
            }
        ?>
    </div>
</div>
