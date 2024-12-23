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
            Thêm liên hệ
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" name="fullname" class="form-control" value="<?php echo set_value('fullname')?>" id="product-name">
                            <?php echo form_error('fullname')?>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo set_value('email')?>" id="email">
                            <?php echo form_error('email')?>
                        </div>
                        <div class="form-group">
                            <label for="name">Số điện thoại</label>
                            <input type="text" name="phone_number" class="form-control" value="<?php echo set_value('phone_number')?>" id="phone_number">
                            <?php echo form_error('phone_number')?>
                        </div>
                        <div class="form-group">
                            <label for="job">Nghề nghiệp</label>
                            <input type="text" name="job" class="form-control" value="<?php echo set_value('job')?>" id="job">
                            <?php echo form_error('job')?>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="intro">Nội dung</label> 
                    <textarea name="content" id="desc" class="textarea" id="intro" cols="30" rows="5" value="<?php echo set_value('content')?>" class="ckeditor"><?php echo set_value('content')?></textarea>
                </div>

                <div class="form-group">
                    <label>Hình ảnh người đăng</label>
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