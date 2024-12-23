<?php
get_header();
?>

<div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách danh mục</h5>
            <div class="form-search form-inline">
                <form action="#">
                <input type="text" id="Search" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
        <div class="analytic">
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <div class="form-action form-inline py-3">
                        <select class="form-control mr-1" id="">
                            <option>Chọn</option>
                            <option>Tác vụ 1</option>
                            <option>Tác vụ 2</option>
                        </select>
                        <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                    </div>
                </div>
                <div style="text-align:end" class="col-sm-6 ">
                    <a href="?mod=categories&action=add_category"><button type="submit" class="btn btn-success"><i style="color:#fff" class="plus-icon fas fa-plus-circle"></i> Thêm mới</button></a>
                </div>
            </div>
            <?php if(!empty($_SESSION['successMsg'])): ?>
                <div id="msgAlert" class="alert alert-success" role="alert">
                    <?php echo $_SESSION['successMsg']; ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped table-checkall text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Cấp</th>
                        <th scope="col">Kiểu</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">ID cha</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Nổi bật</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt=1;
                  
                    if(!empty($list_category)){  
                        foreach(array_reverse($list_category) as $item){
                    ?>
                    <tr class="Search">
                        <td scope="row"><?php echo $stt;$stt++?></td>
                        <td><?php echo $item['danhmuc_id']; ?></td>
                        <td><?php echo $item['cap']; ?></td>    
                        <td>
                            <?php 
                                switch ($item['kieu']) {
                                    case 1:
                                        echo 'Thông tin';
                                        break;
                                    case 2:
                                        echo 'Sản phẩm';
                                        break;
                                    case 3:
                                        echo 'Tin tức';
                                        break;
                                    default:
                                        echo 'Không xác định';
                                        break;
                                }
                            ?>
                        </td>
                        <td><?php echo $item['ten_danhmuc']; ?></td>
                        <td><?php echo $item['danhmuc_id_cha']; ?></td>
                        <td><?php echo $item['trangthai']; ?></td>
                        <td><?php echo $item['noibat']; ?></td>
                        <td>                           
                            <?php $action=$_GET['action'] ; 
                                if($action=='list_category'){
                            ?>
                            <a href="?mod=categories&action=edit_category&danhmuc_id=<?php echo $item['danhmuc_id']?>"><button class="btn btn-success btn-sm rounded-0 m-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                            <a href="?mod=categories&action=delete_category&danhmuc_id=<?php echo $item['danhmuc_id']?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
                            <?php 
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                    }
                        
                    }
                    else{
                        echo "Danh sách rỗng";
                    }
                    ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <?php  if(!empty($pagging)){  get_pagging1($num_page,$page,"?mod=categories&action=list_category");}?>
            </nav>
        </div>
    </div>
</div>
<?php
get_footer();
?>

