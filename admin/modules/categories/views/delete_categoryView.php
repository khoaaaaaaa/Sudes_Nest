<?php
get_header();

?>
 <div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Xóa sản phẩm
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" name="ten_danhmuc" class="form-control" value="<?php echo $delete_category['ten_danhmuc']?>" id="product-name">
                            <?php echo form_error('ten_danhmuc')?>
                        </div>
                        <div class="form-group">
                            <label for="">Cấp</label>
                            <select name='cap' class='form-control'>
                                <option value="0">--Chọn--</option>
                                <?php
                                // Chỉ tạo ra 4 option tương ứng với các giá trị 1, 2, 3, 4
                                for ($i = 1; $i <= 4; $i++) {
                                    // Kiểm tra nếu cấp (cap) đã được chọn, thì thêm thuộc tính selected
                                    $selected = ($delete_category['cap'] == $i) ? 'selected' : '';
                                    echo "<option value='$i' $selected>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        
                        
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                            <label for="">Kiểu</label>
                            <select name='kieu' class='form-control'>
                                <option value="0">--Chọn--</option>
                                <option value="1" <?php echo ($delete_category['kieu'] == 1) ? 'selected' : ''; ?>>Giới thiệu</option>
                                <option value="2" <?php echo ($delete_category['kieu'] == 2) ? 'selected' : ''; ?>>Sản phẩm</option>
                                <option value="3" <?php echo ($delete_category['kieu'] == 3) ? 'selected' : ''; ?>>Tin tức</option>
                                <option value="4" <?php echo ($delete_category['kieu'] == 4) ? 'selected' : ''; ?>>Chính sách</option>
                            </select>
                        </div>
                        <div class="form-group" >
                            <label for="">Danh mục cha</label>
                            <select name='danhmuc_id_cha' class='form-control'>
                                <option value="0">--Chọn--</option>
                                <?php
                                $data = db_fetch_array("SELECT * FROM `tbl_danhmuc`");

                                function has_child($data, $id) {
                                    foreach ($data as $v) {
                                        if ($v['danhmuc_id_cha'] == $id) {
                                            return true;
                                        }
                                    }
                                    return false;
                                }

                                function render_menu($data, $parent_id = 0, $level = 0, $selected_id = 0) {
                                    $result = "";
                                    foreach ($data as $v) {
                                        if ($v['danhmuc_id_cha'] == $parent_id) {
                                            // Kiểm tra nếu danh mục hiện tại là danh mục đã chọn
                                            $selected = ($v['danhmuc_id'] == $selected_id) ? 'selected' : '';
                                            $result .= '<option value="' . $v['danhmuc_id'] . '" ' . $selected . '>' 
                                                    . str_repeat('---/ ', $level) . ucfirst($v['ten_danhmuc']) . '</option>';
                                            if (has_child($data, $v['danhmuc_id'])) {
                                                $result .= render_menu($data, $v['danhmuc_id'], $level + 1, $selected_id);
                                            }
                                        }
                                    }
                                    return $result;
                                }

                                // Gọi hàm render_menu với $delete_category['danhmuc_id_cha'] làm $selected_id
                                echo render_menu($data, 0, 0, $delete_category['danhmuc_id_cha']);
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Nổi bật</label>
                    <select name='noibat' class='form-control'>
                        <option value="0">--Chọn--</option>
                        <option value="1" <?php echo ($delete_category['noibat'] == 1) ? 'selected' : ''; ?>>Không</option>
                        <option value="2" <?php echo ($delete_category['noibat'] == 2) ? 'selected' : ''; ?>>Có</option>
                    </select>
                </div>

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


                <button type="submit" name="btn-delete" class="btn btn-danger">Xác nhận xóa</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>