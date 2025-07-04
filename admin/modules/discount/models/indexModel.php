<?php 
function get_list_discount(){
    $result = db_fetch_array("SELECT * FROM `tbl_voucher` ");
    return $result;
}


function get_discount_by_id($voucher_id){
    $result=db_fetch_row("SELECT * FROM `tbl_voucher` WHERE `id_voucher`='{$voucher_id}'");
    if(!empty($result)){        
        return $result;
    }
    else{
        echo "không tồn tại";
    } 
}

?>