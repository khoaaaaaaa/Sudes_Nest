

<?php
// contruct là hàm dùng chung
function construct(){
    // echo "dung chung ,load đầu tiên <br>";
    load_model('index');
    load('lib','validation');
    load('lib','email');
}


function loginAction(){
    // echo date('d/m/Y');
    global $error,$email,$password;
    if(isset($_POST['btn-login'])){
        $error=array();
       
        if(empty($_POST['email'])){
            $error['email']="không được để trống email";
        }
        else{
           if(!is_email($_POST['email'])){
                $error['email']="Không đúng định dạng của email";
            }
        
            else{
                $email=$_POST['email'];
            }
        }

        if(empty($_POST['password'])){
            $error['password']="không được để trống password";
        }
        else{
           if(!is_password($_POST['password'])){
                $error['password']="Không đúng định dạng của password";
            }
        
            else{
                $password=md5($_POST['password']);
            }
        }
        if(empty($error)){
            if(check_login($email,$password)){
                $_SESSION['is_customer_login']=true;
                $_SESSION['customer_login']=$email;
                redirect('?mod=home');
            }
        }
    }
    load_view('login');
}

function regAction(){
    // echo date('d/m/Y');
    global $error, $fullname, $email, $phone_number,$username,$password;
    if(isset($_POST['btn-register'])){
        $error=array();
        if(empty($_POST['fullname'])){
            $error['fullname']= "Không được để trống fullname";
        }
        else{
            $fullname=$_POST['fullname'];
        }
        if(empty($_POST['email'])){
            $error['email']= "Không được để trống email";
        }
        else{
            $email=$_POST['email'];
        }
        if(empty($_POST['phone_number'])){
            $error['phone_number']= "Không được để trống phone_number";
        }
        else{
            $phone_number=$_POST['phone_number'];
        }

        if(empty($_POST['username'])){
            $error['username']="không được để trống username";
        }
        else{
           if(!is_username($_POST['username'])){
                $error['username']="Không đúng định dạng của username";
            }
        
            else{
                $username=$_POST['username'];
            }
        }

        if(empty($_POST['password'])){
            $error['password']="không được để trống password";
        }
        else{
           if(!is_password($_POST['password'])){
                $error['password']="Không đúng định dạng của password";
            }
        
            else{
                $password=md5($_POST['password']);
            }
        }
        if (empty($error)) {
            // Chuẩn bị dữ liệu để chèn vào cơ sở dữ liệu
            $created_at = date('Y-m-d H:i:s');
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'phone_number' => $phone_number,
                'password' => $password, // Mã hóa mật khẩu trước khi truyền vào
                'created_date' => $created_at
            );
    
            // Thực hiện chèn vào bảng `tbl_users`
            db_insert('tbl_users', $data);
            $_SESSION['result'] = "Đăng ký thành công!";
            redirect("dang-nhap.htm"); // Chuyển hướng đến trang đăng nhập
            
        }
        else{
            load_view('reg');
            $_SESSION['result'] = "Đăng ký thất bại, vui lòng thử lại!";
            show_array($error);
        }
    }
    load_view('reg');
}

function logoutAction(){
    unset($_SESSION['is_customer_login']);
    unset($_SESSION['customer_login']);
    redirect();
}
// function resetAction() {
//     global $error, $email, $password;

//     $reset_password = (int)$_GET['user_id'];
//     // Lấy reset_token từ GET (nếu có)
//     $reset_token = isset($_GET['reset_token']) ? $_GET['reset_token'] : '';

//     if (!empty($reset_token)) {
//         // Nếu reset_token tồn tại
//         if (check_reset_token($reset_token)) {
//             if (isset($_POST['btn-new-pass'])) {
//                 $error = array();

//                 // Kiểm tra password
//                 if (empty($_POST['password'])) {
//                     $error['password'] = "Không được để trống password";
//                 } else {
//                     if (!is_password($_POST['password'])) {
//                         $error['password'] = "Không đúng định dạng của password";
//                     } else {
//                         $password = md5($_POST['password']);
//                     }
//                 }

//                 // Nếu không có lỗi, cập nhật mật khẩu và chuyển hướng
//                 if (empty($error)) {
//                     $data = array(
//                         'password' => $password
//                     );
//                     update_pass($data, $reset_token);
//                     if(update_pass($data, $reset_token)){
//                         echo "Cập nhật mật khẩu thành công!";
//                     } else {
//                         echo "Lỗi khi cập nhật mật khẩu!";
//                     }
//                     exit();
//                     redirect("?mod=users&action=resetok");
//                     exit; // Dừng thực thi sau khi redirect
//                 }
//             }
//             // Load view cho thiết lập mật khẩu mới
//             load_view("newPass");
//         } else {
//             echo "Yêu cầu lấy lại mật khẩu không tồn tại";
//             // Bạn có thể load một view lỗi hoặc redirect về trang khác nếu cần
//         }
//     } else {
//         // Trường hợp không có reset_token (yêu cầu lấy lại mật khẩu)
//         if (isset($_POST['btn-reset'])) {
//             $error = array();

//             // Kiểm tra email
//             if (empty($_POST['email'])) {
//                 $error['email'] = "Không được để trống email";
//             } else {
//                 $email = $_POST['email'];
//             }

//             if (empty($error)) {
//                 if (check_email($email)) {
//                     // Tạo reset_token mới và cập nhật vào database
//                     $reset_token = md5($email . time());
//                     $data = array(
//                         'reset_token' => $reset_token
//                     );
//                     update_reset_token($data, $email);
//                     $link = base_url("?mod=users&action=reset&reset_token={$reset_token}");
//                     $content = "<p>Bạn vui lòng click vào link sau để thiết lập lại mật khẩu: {$link}</p>
//                     <p>Nếu không phải yêu cầu của bạn, bạn vui lòng bỏ qua Email này</p>";
//                     send_mail($email, "", "Khôi phục mật khẩu", $content);
//                     echo "Email có tồn tại";
//                     // Sau khi gửi mail bạn có thể redirect hoặc load view thông báo
//                 } else {
//                     $error['account'] = "Email không tồn tại trên hệ thống";
//                 }
//             }
//         }
//         // Load view cho form nhập email yêu cầu reset mật khẩu
//         load_view("reset");
//     }
// }

function resetAction() {
    global $error, $password_old, $password_new, $password_confirm;

    if (isset($_POST['btn-reset'])) {
        $error = array();

        // Kiểm tra mật khẩu cũ
        if (empty($_POST['pass-old'])) {
            $error['pass-old'] = "Không được để trống mật khẩu cũ";
        } else {
            $password_old = trim($_POST['pass-old']);
        }

        // Kiểm tra mật khẩu mới
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu mới";
        } elseif (strlen($_POST['password']) < 6) {
            $error['password'] = "Mật khẩu mới phải có ít nhất 6 ký tự";
        } else {
            $password_new = trim($_POST['password']);
        }

        // Kiểm tra xác nhận mật khẩu
        if (empty($_POST['confirm-pass'])) {
            $error['confirm-pass'] = "Không được để trống xác nhận mật khẩu";
        } else {
            $password_confirm = trim($_POST['confirm-pass']);
        }

        // Kiểm tra nếu không có lỗi
        if (empty($error)) {
            $email = $_SESSION['customer_login']; // Lấy email của user đã đăng nhập
            $password_old_md5 = md5($password_old);
            $password_new_md5 = md5($password_new);

            // Kiểm tra mật khẩu cũ có đúng không
            if (!check_login($email, $password_old_md5)) {
                $error['pass-old'] = "Mật khẩu cũ không chính xác";
            } else {
                if ($password_new_md5 !== md5($password_confirm)) {
                    $error['confirm-pass'] = "Mật khẩu mới và xác nhận mật khẩu không khớp";
                } else {
                    // Cập nhật mật khẩu mới
                    $update = db_query("UPDATE tbl_users SET password='{$password_new_md5}' WHERE email='{$email}'");

                    if ($update) {
                        $_SESSION['success'] = "Mật khẩu đã được thay đổi thành công";
                        redirect('?mod=home'); // Chuyển hướng về trang chủ hoặc trang khác
                    } else {
                        $error['general'] = "Có lỗi xảy ra, vui lòng thử lại";
                    }
                }
            }
        }
    }

    load_view('reset');
}




function indexAction(){
    $list_user=get_list_users();
    $data['list_user']=$list_user;
    load_view('index',$data);
}
// function add_user(){

function accountAction(){
    $user = $_GET['user_id'];
    $info_user = get_user_by_id($user);
    $data['info_user'] = $info_user;
    load_view('account',$data);
}

// }
function updateAction(){
    if(isset($_POST['btn-update'])){
       
        global $error;
        $error=array();
        if(empty($_POST['fullname'])){
           $error['fullname']= "Không được để trống fullname";
        }
        else{
            $fullname=$_POST['fullname'];
        }
        if(empty($_POST['phone_number'])){
            $error['phone_number']= "Không được để trống phone_number";
        }
        else{
            $phone_number=$_POST['phone_number'];
        }
        $address=$_POST['address'];
      
        if(empty($error)){
            $data=array(
                'fullname'=>$fullname,
                'address'=>$address,
                'phone_number'=>$phone_number,
                
            );
            update_user_login(user_login(),$data);
        }  
    }
    $info_user=get_user_by_username(user_login());
    // show_array($info_user);
    $data['info_user']=$info_user;
    load_view('update',$data);
}
function add_userAction(){
    global $error,$fullname,$username,$sdt,$email,$password;
    if(isset($_POST['btn-add'])){
        $error=array();
        if(empty($_POST['fullname'])){
            $error['fullname']="Không được để trống họ tên";
        }
        else{
            $fullname=$_POST['fullname'];
        }
        if(empty($_POST['username'])){
            $error['username']="Không được để trống username";
        }
        else{
            if(!is_username($_POST['username'])){
                 $error['username']="Không đúng định dạng của username";
             }
         
             else{
                 $username=$_POST['username'];
             }
         }

        if(empty($_POST['sdt'])){
            $error['sdt']="Không được để trống sdt";
        }
        else{
            if(!is_phone_number($_POST['sdt'])){
                 $error['sdt']="Không đúng định dạng của sdt";
             }
         
             else{
                 $sdt=$_POST['sdt'];
             }
         }
        if(empty($_POST['email'])){
            $error['email']="Không được để trống email";
        }
        else{
            if(check_email($_POST['email'])){
                 $error['email']="email đã tồn tại";
             }
         
             else{
                 $email=$_POST['email'];
             }
         }
        if(empty($_POST['password'])){
            $error['password']="Không được để trống sdt";
        }
        else{
            if(!is_password($_POST['password'])){
                 $error['password']="Không đúng định dạng của password";
             }
         
             else{
                 $password=md5($_POST['password']);
             }
         }
         if(empty($error)){
            $time=date('d/m/Y - H:i:s');
            $data=array(
                'fullname'=>$fullname,
                'username'=>$username,
                'phone_number'=>$sdt,
                'email'=>$email,
                'created_date'=>$time,
                'password'=>$password
            );
            db_insert('tbl_users',$data);
            redirect("?mod=users&action=index");
        }
    }
    load_view('add');
}

?>