<?php 
    include('../connect.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM `san_pham` where `id` = '$id'";
    $kq = mysqli_query($connect, $sql);
    $san_pham = mysqli_fetch_array($kq);
?>
<div id="wrapper">
    <div id="page-wrapper" >
        <div class="header"> 
            <h1 class="page-header">
                Sửa sản phẩm <small>Best form elements.</small>
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
                            <form method="post" action="xl_form_sua_sp.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" id="" value="<?php echo $id?>">
                                    <label for="exampleInputEmail1">Tên</label>
                                    <input type="text" name='ten' class="form-control" value="<?php echo $san_pham['ten']; ?>" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <input type="text" name='gia' class="form-control" value="<?php echo $san_pham['gia']; ?>" id="" placeholder="">
                                </div>
                                <div class="sub-title">Thông tin sản phẩm</div>
                                <div>
                                    <textarea name='thong_tin' class="form-control" rows="3"><?php echo $san_pham['thong_tin']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File ảnh củ</label>
                                </div>
                                <div class="form-group">
                                    <img height=100px src="../anh/<?php echo $san_pham['anh'];?>" alt="">
                                    <input type="hidden" name="anh_cu" id="" value="<?php echo $san_pham['anh']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File ảnh mới</label>
                                    <input type="file" name='anh_moi' id="exampleInputFile">
                                </div>
                                <div>
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
