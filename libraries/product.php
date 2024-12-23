<?php
// function get_list_users() {
//     $result = db_fetch_array("SELECT * FROM `tbl_user`");
//     return $result;
// }
// function get_list_product_tuongtu($cat_id,$product_id){
//     // $result = db_fetch_array("SELECT * FROM `tbl_product` ,`tbl_loaiproduct` WHERE  `cat_id`='{$cat_id}' AND `product_id`!='{$product_id}'");
//     $result = db_fetch_array("SELECT * FROM `tbl_product` ,`tbl_loaiproduct` WHERE (`tbl_product`.`cat_id`=`tbl_loaiproduct`.`cat_id`) AND `cat_id`='{$cat_id}' AND `product_id`!='{$product_id}'");

//     return $result;
// }
function get_product_by_string($string){
    $result = db_fetch_array("SELECT * FROM `tbl_product` WHERE title LIKE '%{$string}%'");
    return $result;
}

function get_list_pro_by_level($danhmuc_id, $limit = 4){

    $danhmuc = db_fetch_row("SELECT * FROM `tbl_danhmuc` WHERE `danhmuc_id`='{$danhmuc_id}' LIMIT {$limit}");
    $cap = $danhmuc['cap'];
    if($cap == 1){
        $where = "cap1 = '{$danhmuc_id}' ";
    }
    elseif($cap == 2){
        $where = "cap2 = '{$danhmuc_id}' ";
    }
    elseif($cap == 3){
        $where = "cap3 = '{$danhmuc_id}' ";
    }
    elseif($cap == 4){
        $where = "cap4 = '{$danhmuc_id}' ";
    }
    $result = db_fetch_array("SELECT * FROM `tbl_product` WHERE $where LIMIT {$limit}");
    return $result;
}

?>