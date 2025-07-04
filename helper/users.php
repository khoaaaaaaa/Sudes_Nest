<?php 

function is_customer_login(){
    if(isset($_SESSION['is_customer_login'])){
        return true;
    }
    return false;
}

function customer_login(){
    if(!empty($_SESSION['customer_login'])){
        return $_SESSION['customer_login'];
    }
}

function user_login() {
    if (isset($_SESSION['user_login'])) {
        return $_SESSION['user_login']; // Trả về username của người dùng đã đăng nhập
    }
    return false; // Người dùng chưa đăng nhập
}

function get_user_by_email($email){
    $result=db_fetch_row("SELECT * FROM `tbl_users` WHERE `email`='{$email}'");
    return $result;
}


?>