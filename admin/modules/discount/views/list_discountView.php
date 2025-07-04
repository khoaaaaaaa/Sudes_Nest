<?php
get_header();
?>

<div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách Mã Giảm Giá</h5>
            <div class="form-search form-inline">
                <form action="#">
                <input type="text" id="Search" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
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
                    <a href="?mod=discount&action=add_discount"><button type="submit" class="btn btn-success"><i style="color:#fff" class="plus-icon fas fa-plus-circle"></i> Thêm mới</button></a>
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
                        <th scope="col">
                            <input name="checkall" type="checkbox">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên voucher</th>
                        <th scope="col">Giá giảm</th>
                        <th scope="col">Phần trăm giảm</th>
                        <th scope="col">Điều kiện</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt=1;
                    
                    if(!empty($list_discount)){  
                        foreach(array_reverse($list_discount) as $item){
                    ?>
                    <tr class="Search">
                        <td>
                            <input type="checkbox">
                        </td>
                        <td scope="row"><?php echo $stt;$stt++?></td>
                        <td><?php echo $item['id_voucher'] ?></td>
                        <td>
                            <a href="?mod=images&action=add_img&id_voucher=<?php echo $item['id_voucher']?>" title=""><img width="120px;" height="120px;" src="public/images/<?php echo $item['img']?>" alt=""></a>
                        </td>
                        <td><?php echo $item['ten_voucher'] ?></td>
                        <td><?php echo $item['gia'] ?></td>
                        <td><?php echo $item['phantram'] ?></td>    
                        <td><?php echo $item['dieukien'] ?></td>
                        <td>                           
                            <?php $action=$_GET['action'] ; 
                                if($action=='list_discount'){
                            ?>
                            <a href="?mod=discount&action=edit_discount&id_voucher=<?php echo $item['id_voucher']?>"><button class="btn btn-success btn-sm rounded-0 m-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                            <a href="?mod=discount&action=delete_discount&id_voucher=<?php echo $item['id_voucher']?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
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
                <?php  if(!empty($pagging)){  get_pagging1($num_page,$page,"?mod=product&action=list_product");}?>
            </nav>
        </div>
    </div>
</div>
<?php
get_footer();
?>

