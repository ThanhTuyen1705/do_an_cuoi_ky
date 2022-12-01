<div id="wrapper">
    <div id="page-wrapper" >
        <div class="header"> 
            <h1 class="page-header">
                Thêm loại sản phẩm <small>Best form elements.</small>
            </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Data</li>
                </ol>            
        </div>
    
        <?php
            if(isset($_SESSION['them_thanh_cong'])){
        ?>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?php 
                        echo $_SESSION['them_thanh_cong']; 
                        unset($_SESSION['them_thanh_cong']);
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
                                <div class="title"></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="xl_form_them_loai_sp.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên loại sản phẩm cần thêm</label>
                                    <input type="text" name='ten_loai_san_pham' class="form-control" id="" placeholder="">
                                </div>                        
                                <button class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
        </div>
    </div>
</div>
