<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
function get_list_category_level2(){
    $result = db_fetch_array("SELECT * FROM `tbl_danhmuc` WHERE `cap` = 2 AND `kieu` = 2 AND `trangthai`='Công khai'");
    return $result;
}

function get_list_category(){
    $result = db_fetch_array("SELECT * FROM `tbl_danhmuc` WHERE `cap` = 1 AND `trangthai`='Công khai'");
    return $result;
}

function get_list_category_by_idcha($id_cha){
    $result = db_fetch_array("SELECT * FROM `tbl_danhmuc` WHERE `danhmuc_id_cha` = {$id_cha} AND `trangthai`='Công khai'");
    return $result;
}


function get_total_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}
function get_list_img_by_id($product_id){
    $item=db_fetch_array("SELECT * FROM `tbl_images` WHERE (`id_cha` = {$product_id} AND `loai_img`=1) ORDER BY `stt` ASC");
    return $item;
}