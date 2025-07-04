<?php
    function construct() {
        load_model('index');
        load('lib','validation');
        load('lib','product');
        load('lib','pagging');
    }

    // Hiển thị danh sách danh mục
    function list_categoryAction() {
        $list_category = get_list_category();
        $data['list_category']=$list_category;    
        load_view('list_category',$data);
    }

    // Thêm mới danh mục
    function add_categoryAction() {
        global $error, $cap, $kieu, $ten_danhmuc, $trangthai, $danhmuc_id_cha, $noibat, $detail_danhmuc,$tenmien;

        if (isset($_POST['btn-upload'])) {
            $error = array();

            // Kiểm tra các trường đầu vào
            if (empty($_POST['cap'])) {
                $error['cap'] = "Cấp không được để trống";
            } else {
                $cap = $_POST['cap'];
            }

            if (empty($_POST['kieu'])) {
                $error['kieu'] = "Kiểu không được để trống";
            } else {
                $kieu = $_POST['kieu'];
            }

            if (empty($_POST['ten_danhmuc'])) {
                $error['ten_danhmuc'] = "Tên danh mục không được để trống";
            } else {
                $ten_danhmuc = $_POST['ten_danhmuc'];
            }

            if(empty($_POST['trangthai'])){
                $error['trangthai']= "cần chọn trạng thái sản phẩm";
            }
            else {
                $trangthai=$_POST['trangthai'];
            }

            if (!empty($_POST['danhmuc_id_cha'])) {
                $danhmuc_id_cha = $_POST['danhmuc_id_cha'];
            }
            else{
                $danhmuc_id_cha = 0;
            }

            if (empty($_POST['detail_danhmuc'])) {
                $detail_danhmuc = '';
            } else {
                $detail_danhmuc = $_POST['detail_danhmuc'];
            }

            if(empty($_POST['noibat'])){
                $noibat = 1;
            }
            else{
                $noibat=$_POST['noibat'];
            }
            
            // Nếu không có lỗi, lưu vào database
            if (empty($error)) {
                $data = [
                    'cap' => $cap,
                    'kieu' => $kieu,
                    'ten_danhmuc' => $ten_danhmuc,
                    'trangthai' => $trangthai,
                    'danhmuc_id_cha' => $danhmuc_id_cha,
                    'noibat' => $noibat,
                    'detail_danhmuc' => $detail_danhmuc
                ];
                $id_dm = db_insert('tbl_danhmuc', $data);
                $tenmien = create_slug($_POST['ten_danhmuc']);
                $is_tenmien = check_tenmien($tenmien, $id_dm);
                if($is_tenmien == true)
                {
                    $is_tenmien = $tenmien."-dm-".$id_dm.".htm";
                }
                else
                {
                    $is_tenmien = $tenmien;
                }
                echo $is_tenmien;
                $data = array(
                    'tenmien' => $is_tenmien,
                );
                db_update('tbl_danhmuc', $data, "`danhmuc_id`='{$id_dm}'");
                $_SESSION['result']="Thêm danh mục thành công !";
                redirect("?mod=categories&action=list_category");                           
            }
        }
        $list_category = get_list_category();
        $data['list_category']= $list_category;
        load_view('add_category',$data);
    }

    // Sửa danh mục
    function edit_categoryAction(){
        $danhmuc_id=(int)$_GET['danhmuc_id'];
        global $error, $cap, $kieu, $ten_danhmuc, $trangthai, $danhmuc_id_cha, $noibat, $detail_danhmuc, $tenmien;
        $edit_category = get_category_by_id($danhmuc_id);
        if(isset($_POST['btn-edit'])){
            $error=array();
            if (empty($_POST['cap'])) {
                $error['cap'] = "Cấp không được để trống";
            } else {
                $cap = $_POST['cap'];
            }

            if (empty($_POST['kieu'])) {
                $error['kieu'] = "Kiểu không được để trống";
            } else {
                $kieu = $_POST['kieu'];
            }

            if (empty($_POST['ten_danhmuc'])) {
                $error['ten_danhmuc'] = "Tên danh mục không được để trống";
            } else {
                $ten_danhmuc = $_POST['ten_danhmuc'];
            }

            if(empty($_POST['trangthai'])){
                $error['trangthai']= "cần chọn trạng thái sản phẩm";
            }
            else {
                $trangthai=$_POST['trangthai'];
            }

            if (!empty($_POST['danhmuc_id_cha'])) {
                $danhmuc_id_cha = $_POST['danhmuc_id_cha'];
            }
            else{
                $danhmuc_id_cha = 0;
            }

            if (empty($_POST['detail_danhmuc'])) {
                $detail_danhmuc = '';
            } else {
                $detail_danhmuc = $_POST['detail_danhmuc'];
            }

            if(empty($_POST['noibat'])){
                $noibat = 1;
            }
            else{
                $noibat=$_POST['noibat'];
            }

            $tenmien = create_slug($_POST['ten_danhmuc']);
            $is_tenmien = check_tenmien_edit($tenmien);
            if($is_tenmien == true)
            {
                $is_tenmien = $tenmien."-dm-".$danhmuc_id.".htm";
            }
            else
            {
                $is_tenmien = $tenmien;
            }
                   
            if(empty($error)){
                $data=array(               
                    'cap' => $cap,
                    'kieu' => $kieu,
                    'ten_danhmuc' => $ten_danhmuc,
                    'trangthai' => $trangthai,
                    'danhmuc_id_cha' => $danhmuc_id_cha,
                    'noibat' => $noibat,
                    'detail_danhmuc' => $detail_danhmuc,
                    'tenmien' => $is_tenmien,
                );
                db_update('tbl_danhmuc',$data,"`danhmuc_id`='{$danhmuc_id}'");
                redirect("?mod=categories&action=list_category");           
            }
            else{
                show_array($error);
            }
        } 
      
        $data['edit_category']=$edit_category;
        $list_category=get_list_category();
        $data['list_cat']=$list_category;
        load_view('edit_category',$data);
    }

    function delete_categoryAction(){
        $danhmuc_id=(int)$_GET['danhmuc_id'];
        // $category= get_category_by_id($danhmuc_id);
        if(isset($_POST['btn-delete'])){
    
            // $file_name=explode(".",$category['img']);
            // unlink("public/images/{$category['img']}");
            // unlink("public/images/{$file_name[0]}_thump.{$file_name[1]}");
    
            db_delete('tbl_danhmuc',"`danhmuc_id`={$danhmuc_id}");
            $_SESSION['result']="Xóa Sản phẩm thành công !";
            redirect("?mod=categories&action=list_category");
        }
        $delete_category= get_category_by_id($danhmuc_id);
        $data['delete_category']=$delete_category;
        load_view('delete_category',$data);
    }

    function ajax_get_capAction() {
        $kieu = $_POST['kieu'];
        if($kieu == 1){
            echo "
            <option>Chọn cấp</option>
            <option value='1'>Cấp 1</option>
            <option value='2'>Cấp 2</option>";
        }elseif($kieu == 2){
            echo "
            <option>Chọn cấp</option>
            <option value='1'>Cấp 1</option>
            <option value='2'>Cấp 2</option>
            <option value='3'>Cấp 3</option>
            <option value='4'>Cấp 4</option>";
        }elseif($kieu == 3){
            echo "
            <option>Chọn cấp</option>
            <option value='1'>Cấp 1</option>
            <option value='2'>Cấp 2</option>";
        }
    }
    function ajax_get_editcapAction() {
        $kieu = $_POST['kieu'];
        $cap = $_POST['cap'];
        var_dump($cap);
        if ($kieu == 1) {
            echo "<option>Chọn cấp</option>";
            for ($i = 1; $i <= 2; $i++) {
                echo "<option value='$i' " . ($cap == $i ? "selected" : "") . ">Cấp $i</option>";
            }
        } elseif ($kieu == 2) {
            echo "<option>Chọn cấp</option>";
            for ($i = 1; $i <= 4; $i++) {
                echo "<option value='$i' " . ($cap == $i ? "selected" : "") . ">Cấp $i</option>";
            }
        } elseif ($kieu == 3) {
            echo "<option>Chọn cấp</option>";
            for ($i = 1; $i <= 2; $i++) {
                echo "<option value='$i' " . ($cap == $i ? "selected" : "") . ">Cấp $i</option>";
            }
        }
    }
    // function ajax_get_danhmuc_chaAction() {
    //     $kieu = $_POST['kieu'];
    //     $cap = $_POST['cap'];
    //     $danhmuc_cha = get_danhmuc_by_kieu_and_cap($kieu, $cap);
    //     $cap = $cap - 1;
    //     echo '<option value="">--Chọn danh mục cha cấp ' . $cap . ' --</option>';
    //     foreach ($danhmuc_cha as $option) {
    //         // Xây dựng chuỗi cấp danh mục theo cấu trúc phân cấp (1/2/3/...).
    //         $danhmuc_chain = build_danhmuc_chain($option['danhmuc_id']);
    //         $selected = (set_value('cap' . $cap) == $option['danhmuc_id']) ? 'selected' : '';
    //         echo "<option value='{$option['danhmuc_id']}' $selected>{$danhmuc_chain}</option>";
    //     }
    // }
    
    // // Hàm tạo chuỗi phân cấp danh mục
    // function build_danhmuc_chain($danhmuc_id) {
    //     $chain = [];
    //     // Lấy danh mục theo ID và tạo chuỗi phân cấp
    //     $danhmuc = get_category_by_id($danhmuc_id); // Giả sử có hàm này để lấy thông tin danh mục
    //     while ($danhmuc) {
    //         array_unshift($chain, $danhmuc['ten_danhmuc']); // Thêm tên danh mục vào đầu chuỗi
    //         $danhmuc = get_category_by_id($danhmuc['danhmuc_id_cha']); // Lấy danh mục cha
    //     }
    //     return implode(' / ', $chain); // Nối các tên danh mục lại với dấu "/"
    // }

    function ajax_get_danhmuc_chaAction() {
        $kieu = $_POST['kieu'];
        $cap = $_POST['cap'];
        $danhmuc_cha= get_danhmuc_by_kieu_and_cap($kieu,$cap );
        $cap = $cap - 1;
        echo '<option value="">--Chọn danh mục cha cấp '.$cap.' --</option>';
        foreach ($danhmuc_cha as $option) {
            $mang_dm=ajax_ten_danhmuc_cha($option['danhmuc_id']);
            $mang_ten = [];
            foreach (array_reverse($mang_dm) as $item) {
                $mang_ten[] = get_ten($item); // Thêm tên vào mảng
            }
            // Nối các phần tử trong mảng bằng dấu '/'
            $mang_ten = implode(' / ', $mang_ten);
            $selected = (set_value('cap'.$cap) == $option['danhmuc_id']) ? 'selected' : '';
            echo "<option value='{$option['danhmuc_id']}' $selected>{$mang_ten}</option>";
        }
    }
    function ajax_get_edit_danhmuc_chaAction() {
        $kieu = $_POST['kieu'];
        $cap = $_POST['cap'];
        $danhmuc_id_cha = $_POST['idcha'];
        $danhmuc_cha= get_danhmuc_by_kieu_and_cap($kieu,$cap );
        $cap = $cap - 1;
        echo '<option value="">--Chọn danh mục cha cấp '.$cap.' --</option>';
        foreach ($danhmuc_cha as $option) {
            $mang_dm=ajax_ten_danhmuc_cha($option['danhmuc_id']);
            $mang_ten = [];
            foreach (array_reverse($mang_dm) as $item) {
                $mang_ten[] = get_ten($item); // Thêm tên vào mảng
            }
            // Nối các phần tử trong mảng bằng dấu '/'
            $mang_ten = implode(' / ', $mang_ten);
            $selected = ($danhmuc_id_cha == $option['danhmuc_id']) ? 'selected' : '';
            echo "<option value='{$option['danhmuc_id']}' $selected>{$mang_ten}</option>";
        }
    }
    

    
?>
