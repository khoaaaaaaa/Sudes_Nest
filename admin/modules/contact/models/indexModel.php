<?php
    function get_list_contact(){
        $result = db_fetch_array("SELECT * FROM `tbl_lienhe` ");
        return $result;
    }

    function get_contact_by_id($lienhe_id){
        $result=db_fetch_row("SELECT * FROM `tbl_lienhe` WHERE `lienhe_id`='{$lienhe_id}'");
        if(!empty($result)){
       
            return $result;
        }
        else{
            echo "không tồn tại";
        }
    }


?>