<div id="wrapper">
    <div id="page-wrapper" >
        <div class="header"> 
            <h1 class="page-header">
                Thêm sản phẩm <small>Best form elements.</small>
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
                            <form method="post" action="xl_form_them_sp.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên</label>
                                    <input type="text" name='ten' class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <input type="text" name='gia' class="form-control" id="" placeholder="">
                                </div>
                                <div class="sub-title">Phân loại</div>
                                <div>
                                    <select class="selectbox">
                                            <option value="AK">Alaskaaaaaaaaaaa</option>
                                            <option value="HI">Hawaiiaaaaaaaaaaaaaaaaaaaa</option>
                                    </select>
                                </div>
                                <div class="sub-title">Thông tin sản phẩm</div>
                                <div>
                                    <textarea name='thong_tin' class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File ảnh</label>
                                    <input type="file" name='anh' id="exampleInputFile">
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
