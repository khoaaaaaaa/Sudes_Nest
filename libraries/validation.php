<?php

function is_username($username){
    $partten="/^[A-Za-z0-9_\.]{6,32}$/";
    if(!preg_match($partten,$username,$matchs))    {
        return false;
    }
    else{
        return true;
}
}
function is_password($password){
    $partten="/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(!preg_match($partten,$password,$matchs)){
        return false;
    }
    else{
        return true;               
    }
}
function is_phone_number($number){
    $partten="/^(09|08|01[2|6|8|9])+([0-9]{8})$/";
    if(!preg_match($partten,$number,$matchs)){return false;} 
    else{
        return true;
    }
    
}
function is_email($email){
    // Biểu thức chính quy để kiểm tra email hợp lệ
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    
    // Sử dụng preg_match để so sánh email với biểu thức chính quy
    if (!preg_match($pattern, $email, $matchs)) {
        return false; // Email không hợp lệ
    }
    return true; // Email hợp lệ
}
function form_error($label_field){
    global $error;
    if(!empty($error[$label_field])){echo " <p style='color:red' class='error'>{$error[$label_field]} </p>";} 
}
function set_value($label_field){
    global $$label_field;
    if(!empty($$label_field)){return $$label_field;}

}

?>