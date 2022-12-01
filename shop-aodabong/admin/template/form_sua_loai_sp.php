<?php 
    include('../connect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM `loai_sp` where `id` = '$id'";
    $kq = mysqli_query($connect, $sql);
    $loai_san_pham = mysqli_fetch_array($kq);
?>
<div id="wrapper">
    <div id="page-wrapper" >
        <div class="header"> 
            <h1 class="page-header">
                Sửa loại sản phẩm <small>Best form elements.</small>
            </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Data</li>
                </ol>            
        </div>
    
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
                            <form method="post" action="xl_form_sua_loai_sp.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" id="" value="<?php echo $id?>">
                                    <label for="exampleInputEmail1">Tên</label>
                                    <input type="text" name='ten' class="form-control" value="<?php echo $loai_san_pham['ten']; ?>" id="" placeholder="">
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
