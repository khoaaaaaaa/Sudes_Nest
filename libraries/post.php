    <?php 
        function get_list_post_by_level($danhmuc_id, $limit = 4){

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
            $result = db_fetch_array("SELECT * FROM `tbl_post` WHERE $where LIMIT {$limit}");
            return $result;
        }
