<?php
get_header();
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa sản phẩm
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $edit_product['title']?>" id="product-name">
                            <?php echo form_error('title')?>
                        </div>
                        <div class="form-group">
                            <label for="name">Giá</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $edit_product['price']?>" id="price">
                            <?php echo form_error('price')?>
                        </div>
                        <div class="form-group">
                            <label for="discount">Phần trăm giảm giá</label>
                            <input type="text" name="discount" class="form-control" value="<?php echo $edit_product['discount']?>" id="discount">
                            <?php echo form_error('discount')?>
                        </div>
                            <div class="form-group">
                            <label for="price_discount">Giá trước giảm</label>
                            <input type="text" name="price_discount" class="form-control" value="<?php echo $edit_product['price_discount']?>" id="price_discount">
                            <?php echo form_error('price_discount')?>
                        </div>
                        <div class="form-group" >
                            <label for="">Danh mục</label>
                            <select id="danhmuc_select" name="danhmuc_id_cha" class="form-control" onchange="updateCategoryFields()">
                                <option value="0" data-cap="0" data-parent="0">--Chọn--</option>
                                <?php 
                                    $list_dm_sp_cap1 = get_danhmuc_sp_cap1();
                                    foreach($list_dm_sp_cap1 as $dm_cap1){
                                        $selected_cap1 = ($dm_cap1['danhmuc_id'] == $edit_product['cap1']) ? 'selected' : '';
                                ?>
                                    <option style="color: #18cc09; font-weight: 500;" value="<?php echo $dm_cap1['danhmuc_id']; ?>" data-cap="cap1" data-parent="0" <?php echo $selected_cap1; ?>><?php echo $dm_cap1['ten_danhmuc']; ?></option>
                                    <?php
                                        $list_dm_sp_cap2 = get_cap_by_parent_id($dm_cap1['danhmuc_id']);
                                        foreach($list_dm_sp_cap2 as $dm_cap2){
                                            $selected_cap2 = ($dm_cap2['danhmuc_id'] == $edit_product['cap2']) ? 'selected' : '';
                                    ?>
                                        <option style="color: #ea6edd; font-weight: 500;" value="<?php echo $dm_cap2['danhmuc_id']; ?>" data-cap="cap2" data-parent="<?php echo $dm_cap1['danhmuc_id']; ?>" <?php echo $selected_cap2; ?>>---/ <?php echo $dm_cap2['ten_danhmuc']; ?></option>
                                        <?php
                                            $list_dm_sp_cap3 = get_cap_by_parent_id($dm_cap2['danhmuc_id']);
                                            foreach($list_dm_sp_cap3 as $dm_cap3){
                                                $selected_cap3 = ($dm_cap3['danhmuc_id'] == $edit_product['cap3']) ? 'selected' : '';
                                        ?>
                                            <option style="color: #4eacbb; font-weight: 500;" value="<?php echo $dm_cap3['danhmuc_id']; ?>" data-cap="cap3" data-parent="<?php echo $dm_cap2['danhmuc_id']; ?>" <?php echo $selected_cap3; ?>>---/---/<?php echo $dm_cap3['ten_danhmuc']; ?></option>
                                            <?php
                                                $list_dm_sp_cap4 = get_cap_by_parent_id($dm_cap3['danhmuc_id']);
                                                foreach($list_dm_sp_cap4 as $dm_cap4){
                                                    $selected_cap4 = ($dm_cap4['danhmuc_id'] == $edit_product['cap4']) ? 'selected' : '';
                                            ?>
                                                <option style="color: #676caa; font-weight: 500;" value="<?php echo $dm_cap4['danhmuc_id']; ?>" data-cap="cap4" data-parent="<?php echo $dm_cap3['danhmuc_id']; ?>" <?php echo $selected_cap4; ?>>---/---/---/<?php echo $dm_cap4['ten_danhmuc']; ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php }?>
                            </select>

                            <!-- Trường ẩn để lưu từng cấp danh mục -->
                            <input type="hidden" id="cap1_field" name="cap1" value="<?php echo $edit_product['cap1']; ?>">
                            <input type="hidden" id="cap2_field" name="cap2" value="<?php echo $edit_product['cap2']; ?>">
                            <input type="hidden" id="cap3_field" name="cap3" value="<?php echo $edit_product['cap3']; ?>">
                            <input type="hidden" id="cap4_field" name="cap4" value="<?php echo $edit_product['cap4']; ?>">
                        </div>
                    </div>
                </div>
                
                <script> 
                    function updateCategoryFields() {
                        const select = document.getElementById("danhmuc_select");
                        const selectedOption = select.options[select.selectedIndex];

                        // Lấy giá trị của danh mục được chọn
                        const selectedValue = select.value;
                        const selectedCap = selectedOption.getAttribute("data-cap");
                        const parentId = selectedOption.getAttribute("data-parent");

                        // Reset tất cả các trường ẩn
                        document.getElementById("cap1_field").value = "";
                        document.getElementById("cap2_field").value = "";
                        document.getElementById("cap3_field").value = "";
                        document.getElementById("cap4_field").value = "";

                        // Cập nhật giá trị từ cấp thấp nhất lên cấp cao nhất
                        if (selectedCap === "cap4") {
                            const parentCap3 = select.querySelector(`option[value="${parentId}"]`).getAttribute("data-parent");
                            const parentCap2 = select.querySelector(`option[value="${parentCap3}"]`).getAttribute("data-parent");
                            document.getElementById("cap1_field").value = parentCap2; // Lấy ID cấp 1
                            document.getElementById("cap2_field").value = parentCap3; // Lấy ID cấp 2
                            document.getElementById("cap3_field").value = parentId;  // Lấy ID cấp 3
                            document.getElementById("cap4_field").value = selectedValue; // Lấy ID cấp 4
                        } else if (selectedCap === "cap3") {
                            const parentCap2 = select.querySelector(`option[value="${parentId}"]`).getAttribute("data-parent");
                            document.getElementById("cap1_field").value = parentCap2; // Lấy ID cấp 1
                            document.getElementById("cap2_field").value = parentId;  // Lấy ID cấp 2
                            document.getElementById("cap3_field").value = selectedValue; // Lấy ID cấp 3
                        } else if (selectedCap === "cap2") {
                            document.getElementById("cap1_field").value = parentId;  // Lấy ID cấp 1
                            document.getElementById("cap2_field").value = selectedValue; // Lấy ID cấp 2
                        } else if (selectedCap === "cap1") {
                            document.getElementById("cap1_field").value = selectedValue; // Lấy ID cấp 1
                        }
                    }
                </script>

                <script>
                    $(document).ready(function() {
                        $('#cap1').on('change', function() {
                            const id =  $(this).val()
                            
                            $.ajax({
                                url: '?mod=product&action=ajax_get_danhmuc',
                                method: 'POST',
                                data: {id, cap:2},
                                success: function(data) {
                                    $('#cap2').html(data)
                                },
                                error: function(xhr, textStatus, errorThrown) {
                                    console.log('Error: ' + errorThrown);
                                }
                            });
                        });
                        $('#cap2').on('change', function() {
                            const id =  $(this).val()
                            
                            $.ajax({
                                url: '?mod=product&action=ajax_get_danhmuc',
                                method: 'POST',
                                data: {id, cap:3},
                                success: function(data) {
                                    $('#cap3').html(data)
                                },
                                error: function(xhr, textStatus, errorThrown) {
                                    console.log('Error: ' + errorThrown);
                                }
                            });
                        });
                        $('#cap3').on('change', function() {
                            const id =  $(this).val()
                            
                            $.ajax({
                                url: '?mod=product&action=ajax_get_danhmuc',
                                method: 'POST',
                                data: {id, cap:4},
                                success: function(data) {
                                    $('#cap4').html(data)
                                },
                                error: function(xhr, textStatus, errorThrown) {
                                    console.log('Error: ' + errorThrown);
                                }
                            });
                        });
                    })
                </script>

                <div class="form-group">
                    <label for="intro">Mô tả sản phẩm</label>
                    <textarea name="description" id="desc" class="textarea" id="intro" cols="30" rows="5" value="<?php echo set_value('description')?>" class="ckeditor"><?php echo $edit_product['description']?></textarea>
                </div>

                <div class="form-group">
                    <label for="decs">Chi tiết sản phẩm</label> 
                    <textarea name="detail" id="desc" class="textarea" id="intro" cols="30" rows="5" value="<?php echo set_value('detail')?>" class="ckeditor"><?php echo $edit_product['detail']?></textarea>
                </div>

                <div class="form-group">
                    <label>Hình ảnh sản phẩm</label>
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="customFile" onchange="chooseFile(this)">
                        <label class="custom-file-label" for="customFile">Choose file</label>                        
                    </div>
                    <div class="mt-3"> <img id="image" width="300px" height="300px" src="public/images/<?php echo $edit_product['img']; ?>"></div>
                </div>
               
                <div class="form-group">
                    <label for="intro">Số lượng sản phẩm</label> 
                    <input type="text" name="soluong" class="form-control" value="<?php echo $edit_product['soluong']?>" id="soluong">
                        <?php echo form_error('soluong')?>
                </div>
                

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="trangthai" id="exampleRadios1" value="Chờ duyệt" <?php if($edit_product['trangthai']=='Công khai'){echo 'checked';}?> >
                        <label class="form-check-label" for="exampleRadios1">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="trangthai" id="exampleRadios2" value="Công khai"  <?php if($edit_product['trangthai']=='Công khai'){echo 'checked';}?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Công khai
                        </label>
                    </div>
                </div>
               
                <div class="form-group">
                    <div style="display: flex;">
                        <input style="margin-bottom: 9px;" type="checkbox" name='noibat' value="1" id="rules" <?php if($edit_product['noibat']=='1'){echo 'checked';}?>>
                        <label style="margin-left: 10px;"> Sản Phẩm nổi bật</label><br>
                    </div>
                </div>


                <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>