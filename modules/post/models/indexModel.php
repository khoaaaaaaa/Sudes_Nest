<?php

function get_list_post(){
    $result = db_fetch_array("SELECT * FROM `tbl_post`,`tbl_users` WHERE (`tbl_post`.`user_id`=`tbl_users`.`user_id`) AND `thungrac`='0'");
    return $result;
}

function get_post_by_id($post_id){
    $result=db_fetch_row("SELECT * FROM `tbl_post` WHERE `post_id`='{$post_id}'");
    if(!empty($result)){
       
        return $result;
    }
    else{
        echo "không tồn tại";
    }
}

function get_list_post_by_id_cha($danhmuc_id_cha){
    $result = db_fetch_array("SELECT * FROM `tbl_post` WHERE `danhmuc_id_cha`= '{$danhmuc_id_cha}' AND `thungrac`='0'");
    return $result;
}

function get_list_post_noibat(){
    $result = db_fetch_array("SELECT * FROM `tbl_post` WHERE `noibat` = '1' AND `thungrac`='0'");
    return $result;
}



