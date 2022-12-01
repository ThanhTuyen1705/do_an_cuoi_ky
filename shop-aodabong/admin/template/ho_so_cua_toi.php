<?php
    if(isset($_SESSION['that_bai'])){
?>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <?php 
                echo $_SESSION['that_bai']; 
                unset($_SESSION['that_bai']);
                if(isset($_SESSION['that_bai_user_name'])){
                    unset($_SESSION['that_bai_user_name']);
                }
            ?>
        </div>
    </div>
<?php
    }
?>

<?php
    if(isset($_SESSION['error'])){
?>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <?php 
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
            ?>
        </div>
    </div>
<?php
    }
?>

<?php
    if(isset($_SESSION['thanh_cong'])){
?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <?php 
                echo $_SESSION['thanh_cong']; 
                unset($_SESSION['thanh_cong']);
            ?>
        </div>
    </div>
<?php
    }
?>
<div id="page-inner"> 
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Horizontal form</div>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="xl_sua_ho_so.php">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                            <div class="col-sm-10">
                                <input type="text" name="user_name" value="<?php echo $_SESSION['user_name'] ?>" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" name="mat_khau" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-default">Sửa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
</div>