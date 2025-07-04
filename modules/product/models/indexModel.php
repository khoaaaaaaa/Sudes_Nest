<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_user`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `tbl_user` WHERE `user_id` = {$id}");
    return $item;
}
function get_list_cat_product(){
    $result = db_fetch_array("SELECT * FROM `tbl_loaiproduct` ,`tbl_users` WHERE `tbl_loaiproduct`.`user_id`=`tbl_users`.`user_id`");
    return $result;
}

function get_list_product(){
    $result = db_fetch_array("SELECT * FROM `tbl_product`,`tbl_users` WHERE (`tbl_product`.`user_id`=`tbl_users`.`user_id`) AND `thungrac`='0'");
    return $result;
}
function get_product_by_id($product_id){
    $result=db_fetch_row("SELECT * FROM `tbl_product` WHERE `product_id`='{$product_id}'");
    if(!empty($result)){
       
        return $result;
    }
    else{
        echo "không tồn tại";
    }
   
}
function get_list_product_noibat(){
    $result = db_fetch_array("SELECT * FROM `tbl_product` ,`tbl_loaiproduct` WHERE (`tbl_product`.`cat_id`=`tbl_loaiproduct`.`cat_id` ) AND `thungrac`='0' LIMIT 3");
    return $result;
}
function get_list_page(){
    $result = db_fetch_array("SELECT * FROM `tbl_page`");
    return $result;
}

function get_list_product_by_cat_id($cat_id){
    $result = db_fetch_array("SELECT * FROM `tbl_product` WHERE `cat_id`='{$cat_id}'");
    return $result;
}

function get_cat_by_id($cat_id){
    $result=db_fetch_row("SELECT * FROM `tbl_loaiproduct` WHERE `cat_id`='{$cat_id}'");
    if(!empty($result)){
       
        return $result;
    }
    else{
        echo "không tồn tại";
    }
   
}
function get_total_product_by_cat($cat_id){
    $result=db_fetch_array("SELECT * FROM `tbl_product` WHERE `cat_id`={$cat_id}");
    return count($result);
}

function get_list_sub_categories($danhmuc_id_cha) {
    return db_fetch_array("SELECT * FROM `tbl_danhmuc` WHERE `trangthai` = 'Công khai' AND `danhmuc_id_cha` = {$danhmuc_id_cha}");
}

function get_product_by_cat($danhmuc_id_cha){
    return db_fetch_array("SELECT * FROM `tbl_product` WHERE `trangthai` = 'Công khai' AND `danhmuc_id_cha` = {$danhmuc_id_cha}");
}

function get_list_voucher(){
    $result = db_fetch_array("SELECT * FROM `tbl_voucher`  WHERE `anhien`='1'");
    return $result;
}

function get_list_product_seen(){
    $result = db_fetch_array("SELECT * FROM `tbl_product`  WHERE `trangthai`='Công khai' AND `thungrac`='0' ORDER BY RAND() LIMIT 6");
    return $result;
}