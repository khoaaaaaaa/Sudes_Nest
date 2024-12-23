<?php
get_header();
?>

<div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
  <div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách liên hệ</h5>
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
                    <a href="?mod=contact&action=add_contact"><button type="submit" class="btn btn-success"><i style="color:#fff" class="plus-icon fas fa-plus-circle"></i> Thêm mới</button></a>
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
                        <th scope="col">Kiểu</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stt=1;
                  
                    if(!empty($list_contact)){  
                        foreach(array_reverse($list_contact) as $item){
                    ?>
                    <tr class="Search">
                        <td scope="row"><?php echo $stt;$stt++?></td>
                        <td><?php echo $item['kieu']; ?></td>
                        <td><?php echo $item['fullname']; ?></td>
                        <td>
                            <a href="?mod=images&action=add_img&lienhe_id=<?php echo $item['lienhe_id']?>" title=""><img width="120px;" height="120px;" src="public/images/<?php echo $item['img']?>" alt=""></a>
                        </td>
                        <td><?php echo $item['created_at']; ?></td>
                        <td>                           
                            <?php $action=$_GET['action'] ; 
                                if($action=='list_contact'){
                            ?>
                            <a href="?mod=contact&action=edit_contact&lienhe_id=<?php echo $item['lienhe_id']?>"><button class="btn btn-success btn-sm rounded-0 m-2" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                            <a href="?mod=contact&action=delete_contact&lienhe_id=<?php echo $item['lienhe_id']?>"><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
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
                <?php  if(!empty($pagging)){  get_pagging1($num_page,$page,"?mod=product&action=list_lienhe");}?>
            </nav>
        </div>
    </div>
</div>
<?php
get_footer();
?>

