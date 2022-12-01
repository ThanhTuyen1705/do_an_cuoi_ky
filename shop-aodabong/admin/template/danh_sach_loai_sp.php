<?php
include "../connect.php";
$search ="";
if(isset($_GET['search'])){
    $search = $_GET['search'];
}
$page =1;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}
$limit =3;

$start= ($page-1)*$limit;

$sql = "SELECT * FROM `loai_sp` WHERE `ten` LIKE '%$search%' LIMIT $start, $limit";
$ket_qua = mysqli_query($connect, $sql);

$row = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `loai_sp` WHERE `ten` LIKE '%$search%'"));
$total_page = ceil($row / $limit);

?>
<div id="page-wrapper" >
    <div class="header"> 
        <h1 class="page-header">
            Danh sách loại sản phẩm <small>Responsive tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">aaaa</a></li>
            <li class="active">Data</li>
        </ol> 
    </div>

    <?php
        if(isset($_SESSION['xoa_loai_sp'])){
    ?>
        <div class="panel panel-success">
            <div class="panel-heading">
                <?php 
                    echo $_SESSION['xoa_loai_sp']; 
                    unset($_SESSION['xoa_loai_sp']);
                ?>
            </div>
        </div>
    <?php
        }
    ?>

    <?php
        if(isset($_SESSION['sua_thanh_cong'])){
    ?>
        <div class="panel panel-success">
            <div class="panel-heading">
                <?php 
                    echo $_SESSION['sua_thanh_cong']; 
                    unset($_SESSION['sua_thanh_cong']);
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

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="col-sm-6" style="width:unset">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <form>
                                        <label>
                                            Search:
                                            <input style="display:inline-block;" type="search" name='search' value="<?php echo $search?>" class="form-control input-sm" aria-controls="dataTables-example">
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th width=50px>Xoá</th>
                                        <th width=50px>Sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($ket_qua as $san_pham){
                                    ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $san_pham['ten']?></td>
                                                <td>
                                                    <a href="xl_xoa_loai_sp.php?id=<?php echo$san_pham['id']?>">
                                                        <img height=50 src="../anh/trash-solid.svg" style=" display:block; margin:auto;">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="index.php?trang=sua_loai_sp&id=<?php echo$san_pham['id']?>">
                                                        <img height=50 src="../anh/square-pen-solid.svg" style=" display:block; margin:auto;">
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <div class="row">
                            <div class="col-sm-6">
                                    <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous <?php if($page == 1){echo 'disabled';}?>" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                                <a href="index.php?search=<?php echo $search?>&page=<?php if($page > 1){echo $page-1;}else{;echo $page;}?>">Previous</a>
                                            </li>
                                            <?php 
                                                for($i=1; $i<=$total_page; $i++){
                                            ?>
                                            <li class="<?php
                                                            if($i == $page){
                                                                echo 'paginate_button active';
                                                        ?>"
                                                        <?php
                                                            }else{
                                                                echo 'paginate_button ';
                                                        ?> 
                                                        <?php
                                                            }
                                                        ?>
                                            aria-controls="dataTables-example" tabindex="0">
                                                <a href="index.php?search=<?php echo $search?>&page=<?php echo $i?>"><?php echo $i?></a>
                                            </li>
                                            <?php 
                                                }
                                            ?>
                                            
                                            <li class="paginate_button next <?php if($page >= $total_page){echo 'disabled';}?>" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                                                <a href="index.php?search=<?php echo $search?>&page=<?php if($page < $total_page){echo ++$page;}else{echo $page;}?>">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
</div>
