<?php
    if(isset($_SESSION['doi_mk'])){
?>
    <div class="panel panel-success">
        <div class="panel-heading">
            <?php 
                echo $_SESSION['doi_mk']; 
                unset($_SESSION['doi_mk']);
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
                    <form class="form-horizontal" method="post" action="xl_sua_mat_khau.php">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu hiên tại</label>
                            <div class="col-sm-10">
                                <input type="password" name="mat_khau_hien_tai" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Mật khẩu mới</label>
                            <div class="col-sm-10">
                                <input type="password" name="mat_khau_moi_1" class="form-control" id="inputPassword3" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Xác nhận mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" name="mat_khau_moi_2" class="form-control" id="inputPassword3" placeholder="">
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