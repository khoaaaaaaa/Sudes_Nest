<?php
get_header();
?>

<style> 
    #showidcha{
        display: none;
    }
</style>
<div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa danh mục
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="row">
                    <div class="col-6">
                        <div div class="form-group">
                            <label for="kieu">Kiểu</label>
                            <select name="kieu" class="form-control" id="kieu">
                                <option value="0">Chọn kiểu</option>
                                <option value="1" <?php echo $edit_category['kieu'] == 1 ? 'selected' : ''; ?>>Thông tin</option>
                                <option value="2" <?php echo $edit_category['kieu'] == 2 ? 'selected' : ''; ?>>Sản phẩm</option>
                                <option value="3" <?php echo $edit_category['kieu'] == 3 ? 'selected' : ''; ?>>Tin tức</option>
                            </select>
                            <?php echo form_error('kieu'); ?>
                        </div>

                        <div class="form-group">
                            <label for="cap">Cấp</label>
                            <select name="cap" class="form-control" id="cap">
                                <option value="">Chọn cấp</option>
                            </select>
                            <?php echo form_error('cap'); ?>
                        </div>

                        <div class="form-group" id = "showidcha">
                            <label for="">Danh mục cha</label>
                            <select name='danhmuc_id_cha' id="idcha" class='form-control'>
                            <option value="0">--Chọn--</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" name="ten_danhmuc" class="form-control" value="<?php echo $edit_category['ten_danhmuc']?>" id="product-name">
                            <?php echo form_error('ten_danhmuc')?>
                        </div>

                        <div class="form-group">
                            <label for="name">Tên miền</label>
                            <input type="text" name="tenmien" class="form-control" value="<?php echo $edit_category['tenmien']?>" id="product-name">
                            <?php echo form_error('tenmien')?>
                        </div>

                        <div class="form-group">
                            <label for="">Nổi bật</label>
                            <select name='noibat' class='form-control'>
                                <option value="0">--Chọn--</option>
                                <option value="1" <?php echo $edit_category['noibat'] == 1 ? 'selected' : ''; ?>>Không</option>
                                <option value="2" <?php echo $edit_category['noibat'] == 2 ? 'selected' : ''; ?>>Có</option>
                            </select>
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <label for="intro">Chi tiết danh mục</label> 
                    <textarea name="detail_danhmuc" id="desc" class="textarea" id="intro" cols="30" rows="5" value="<?php echo set_value('detail_danhmuc')?>" class="ckeditor"><?php echo $edit_category['detail_danhmuc']?></textarea>
                </div>

                <div class="form-group">
                    <label for="trangthai">Trạng thái</label><br>
                    <input type="radio" name="trangthai" id="trangthai_khong" value="Chờ duyệt" <?php echo ($edit_category['trangthai'] === 'Chờ duyệt') ? 'checked' : '' ?>>
                    <label for="trangthai_khong">Chờ duyệt</label>
                    <br>
                    <input type="radio" name="trangthai" id="trangthai_co" value="Công khai" <?php echo ($edit_category['trangthai'] === 'Công khai') ? 'checked' : '' ?>>
                    <label for="trangthai_co">Công khai</label>
                    <?php echo form_error('trangthai')?>
                </div>

                <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    
        $('#kieu').on('change', function () {
            const kieu = $('#kieu').val();
            
            $.ajax({
                url: '?mod=categories&action=ajax_get_cap',
                method: 'POST',
                data: {kieu},
                success: function(data) {
                    $('#cap').html(data)
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error: ' + errorThrown);
                }
            });
        });
        $('#cap').on('change', function () {
            const kieu = $('#kieu').val();
            const cap = $('#cap').val();
            if(cap>1 ){$("#showidcha").attr("style","display:block;");}
		    else{$("#showidcha").attr("style","display:none;");}
            $.ajax({
                url: '?mod=categories&action=ajax_get_danhmuc_cha',
                method: 'POST',
                data: {kieu, cap},
                success: function(data) {
                    $('#idcha').html(data)
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error: ' + errorThrown);
                }
            });
        });
        <?php 
            if($edit_category['kieu']) {
        ?>
            var kieu = <?php echo $edit_category['kieu'] ?>;
            var cap = <?php echo $edit_category['cap'] ?>;
            $.ajax({
                url: '?mod=categories&action=ajax_get_editcap',
                method: 'POST',
                data: {kieu, cap},
                success: function(data) {
                    $('#cap').html(data)
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error: ' + errorThrown);
                }
            });
        <?php } ?>

        <?php 
            if($edit_category['kieu']) {
        ?>
            var kieu = <?php echo $edit_category['kieu'] ?>;
            var cap = <?php echo $edit_category['cap'] ?>;
            var idcha = <?php echo $edit_category['danhmuc_id_cha']?>;
            if(cap>1 ){$("#showidcha").attr("style","display:block;");}
		    else{$("#showidcha").attr("style","display:none;");}
            $.ajax({
                url: '?mod=categories&action=ajax_get_edit_danhmuc_cha',
                method: 'POST',
                data: {kieu, cap, idcha},
                success: function(data) {
                    $('#idcha').html(data)
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error: ' + errorThrown);
                }
            });
        <?php } ?>
    });
</script>
<?php
get_footer();
?>