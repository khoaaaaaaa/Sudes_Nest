<?php
get_header();
?>
 <div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm bài viết
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tiêu đề bài viết</label>
                    <input type="text" name="post_title" class="form-control" id="title">
                    <?php echo form_error('post_title')?>
                </div>
                <div class="form-group">
                    <label for="content">Mô tả bài viết</label>
                    <textarea name="mota" id="desc" class="form-control" id="content" cols="30" rows="5"></textarea>
                    <?php echo form_error('mota')?>
                </div>
                <div class="form-group">
                    <label for="content">Nội dung bài viết</label>
                    <textarea name="post_description" id="desc" class="textarea"></textarea>
                    <?php echo form_error('post_description')?>
                </div>
                <div class="form-group">
                    <label for="desc">Nội dung Chi tiết</label>
                    <textarea name="post_detail" id="desc" class="textarea"></textarea>
                    <?php echo form_error('post_detail')?>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="customFile" onchange="chooseFile(this)">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                         
                    </div>
                    
                    <div class="mt-3"> <img id="image" width="300px" height="300px" src="public/images/img-thumb.png"></div>
                </div>    
                
                <div class="form-group" >
                    <label for="">Danh mục cha</label>
                    <select id="danhmuc_select" name="danhmuc_id_cha" class="form-control" onchange="updateCategoryFields()">
                        <option value="0" data-cap="0" data-parent="0">--Chọn--</option>
                        <?php 
                            $list_dm_sp_cap1 = get_danhmuc_cap1();
                            foreach($list_dm_sp_cap1 as $dm_cap1){
                        ?>
                            <option style="color: #18cc09; font-weight: 500;" value="<?php echo $dm_cap1["danhmuc_id"]; ?>" data-cap="cap1" data-parent="0"> <?php echo $dm_cap1["ten_danhmuc"]; ?></option>
                            <?php
                                $list_dm_sp_cap2 = get_cap_by_parent_id($dm_cap1['danhmuc_id']);
                                foreach($list_dm_sp_cap2 as $dm_cap2){
                            ?>
                                <option style="color: #ea6edd; font-weight: 500;" value="<?php echo $dm_cap2["danhmuc_id"]; ?>" data-cap="cap2" data-parent="<?php echo $dm_cap1["danhmuc_id"]; ?>">---/ <?php echo $dm_cap2["ten_danhmuc"]; ?></option>
                                <?php
                                    $list_dm_sp_cap3 = get_cap_by_parent_id($dm_cap2['danhmuc_id']);
                                    foreach($list_dm_sp_cap3 as $dm_cap3){
                                ?>
                                    <option style="color: #4eacbb; font-weight: 500;" value="<?php echo $dm_cap3["danhmuc_id"]; ?>" data-cap="cap3" data-parent="<?php echo $dm_cap2["danhmuc_id"]; ?>">---/---/<?php echo $dm_cap3["ten_danhmuc"]; ?></option>
                                    <?php
                                        $list_dm_sp_cap4 = get_cap_by_parent_id($dm_cap3['danhmuc_id']);
                                        foreach($list_dm_sp_cap4 as $dm_cap4){
                                    ?>
                                        <option style="color: #676caa; font-weight: 500;" value="<?php echo $dm_cap4["danhmuc_id"]; ?>" data-cap="cap4" data-parent="<?php echo $dm_cap3["danhmuc_id"]; ?>">---/---/---/<?php echo $dm_cap4["ten_danhmuc"]; ?></option>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php }?>
                    </select>

                    <!-- Trường ẩn để lưu từng cấp danh mục -->
                    <input type="hidden" id="cap1_field" name="cap1" value="">
                    <input type="hidden" id="cap2_field" name="cap2" value="">
                    <input type="hidden" id="cap3_field" name="cap3" value="">
                    <input type="hidden" id="cap4_field" name="cap4" value="">
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

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="trangthai" id="exampleRadios1" value="Chờ duyệt" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="trangthai" id="exampleRadios2" value="Công khai">
                        <label class="form-check-label" for="exampleRadios2">
                            Công khai
                        </label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Bài viết nổi bật</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="noibat" id="featuredPost" value="1">
                        <label class="form-check-label" for="featuredPost">
                            Nổi bật
                        </label>
                    </div>
                </div>
                <button type="submit" name="btn-add" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

<?php
get_footer();
?>