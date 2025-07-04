<?php
get_header();
?>
<script type="text/javascript" src="public/scripts/html5/drop.js"></script>
<script type="text/javascript" src="public/scripts/html5/set.js"></script>	
 <div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm mã giảm giá
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ten_voucher">Tên Voucher</label>
                            <input type="text" name="ten_voucher" class="form-control" value="<?php echo set_value('ten_voucher')?>" id="ten_voucher">
                            <?php echo form_error('ten_voucher')?>
                        </div>
                        <div class="form-group">
                            <label for="gia">Giá giảm</label>
                            <input type="text" name="gia" class="form-control" value="<?php echo set_value('gia')?>" id="gia">
                            <?php echo form_error('gia')?>
                        </div>
                        <div class="form-group">
                            <label for="phantram">Phần trăm giảm</label>
                            <input type="text" name="phantram" class="form-control" value="<?php echo set_value('phantram')?>" id="phantram">
                            <?php echo form_error('phantram')?>
                        </div>
                        <div div class="form-group">
                            <label for="anhien">Ẩn/Hiện Voucher</label>
                            <select name="anhien" class="form-control" id="anhien">
                                <option value="0">Chọn Ẩn/Hiện</option>
                                <option value="1" <?php echo set_value('anhien') == 1 ? 'selected' : ''; ?>>Ẩn</option>
                                <option value="2" <?php echo set_value('anhien') == 2 ? 'selected' : ''; ?>>Hiện</option>
                            </select>
                            <?php echo form_error('anhien'); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="ngay">Chọn ngày bắt đầu:</label>
                            <input type="date" class="form-control" id="ngay" name="ngay">
                            <?php echo form_error('ngay')?>
                        </div>
                        <div class="form-group">
                            <label for="ngaykt">Chọn ngày kết thúc:</label>
                            <input type="date" class="form-control" id="ngaykt" name="ngaykt">
                            <?php echo form_error('ngaykt')?>
                        </div>  
                        <div div class="form-group">
                            <label for="kieu">Kiểu</label>
                            <select name="kieu" class="form-control" id="kieu">
                                <option value="0">Chọn kiểu</option>
                                <option value="1" <?php echo set_value('kieu') == 1 ? 'selected' : ''; ?>>Dùng 1 lần</option>
                                <option value="2" <?php echo set_value('kieu') == 2 ? 'selected' : ''; ?>>Dùng nhiều lần</option>
                            </select>
                            <?php echo form_error('kieu'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <textarea name="mota" id="desc" class="form-control" id="mota" cols="30" rows="5"></textarea>
                    <?php echo form_error('mota')?>
                </div>

                <div class="form-group">
                    <label for="dieukien">Điều kiện voucher</label> 
                    <textarea name="dieukien" id="desc" class="textarea" id="intro" cols="30" rows="5" value="<?php echo set_value('dieukien')?>" class="ckeditor"><?php echo set_value('dieukien')?></textarea>
                </div>

                <div class="form-group">
                    <label>Hình ảnh voucher</label>
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="customFile" onchange="chooseFile(this)">
                        <label class="custom-file-label" for="customFile">Choose file</label>                        
                    </div>
                    <div class="mt-3"> <img id="image" width="300px" height="300px" src="public/images/img-thumb.png"></div>
                </div>
                
                <button type="submit" name="btn-upload" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>