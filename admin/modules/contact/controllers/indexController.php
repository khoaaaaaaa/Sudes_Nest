<?php
    function construct() {
        load_model('index');
        load('lib','validation');
        load('lib','product');
        load('lib','pagging');
    }

    // Hiển thị danh sách liên hệ
    function list_contactAction() {
        $list_contact=get_list_contact();
        $data['list_contact']=$list_contact;    
        load_view('list_contact',$data);
    }

    // Thêm mới liên hệ
    function add_contactAction() {
        global $error, $fullname, $email, $phone_number, $content, $img, $kieu, $job;

        if (isset($_POST['btn-upload'])) {
            $error = array();

            // Kiểm tra các trường đầu vào
            if (empty($_POST['fullname'])) {
                $error['fullname'] = "Không được để trống họ và tên";
            } else {
                $fullname = $_POST['fullname'];
            }

            if (empty($_POST['email'])) {
                $error['email'] = "Email không hợp lệ";
            } else {
                $email = $_POST['email'];
            }

            if (empty($_POST['phone_number'])) {
                $error['phone_number'] = "Số điện thoại không hợp lệ";
            } else {
                $phone_number = $_POST['phone_number'];
            }

            if (empty($_POST['job'])) {
                $error['job'] = "Nội dung không được để trống";
            } else {
                $job = $_POST['job'];
            }

            if (empty($_POST['content'])) {
                $error['content'] = "Nội dung không được để trống";
            } else {
                $content = $_POST['content'];
            }
            
            $kieu = isset($_POST['kieu']) ? (int)$_POST['kieu'] : 2;
            $created_at = date('Y-m-d H:i:s');
            

            if(isset($_FILES['file'])){
                $upload_dir='public/images/';
                // Đường dẫn của file sau khi upload
                $upload_file=$upload_dir.$_FILES['file']['name'];
                // xử lý upload đúng file ảnh
                $type_allow=array('jpg','png','gift','jpeg');
                // thư mục chứa file uploads
                $file_name=pathinfo($_FILES['file']['name'],PATHINFO_FILENAME);
                $type=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
                // lấy đuôi file
                // echo $type;
                if(!in_array(strtolower($type),$type_allow)){
                    $error['type']='chỉ được upload file có đuôi jpg,png,gift,jpeg';
                }
                else{
                    # upload file có kích thước cho phép(20mb~ 29000000)
                    $file_size=$_FILES['file']['size'];
                    if($file_size>29000000){
                        $error['file_size']='chỉ được upload file bé hơn 20MB';
                    }
                    # kiểm tra trùng file trên hệ thống 
                    if(file_exists($upload_file)){
                        # kiểm tra trùng file trên hệ thống
                        //===================
                        // Xử lý tên file tự động
                        //===================
                        #Tạo file mới
                        // tên file.duoi file
                        $file_name=pathinfo($_FILES['file']['name'],PATHINFO_FILENAME);
                        $new_file_name=$file_name.'-copy.';
                        $new_upload_file=$upload_dir.$new_file_name.$type;
                        $k=1;
                        while(file_exists($new_upload_file)){
                            $new_file_name=$file_name."-copy({$k}).";
                            $k++;
                            $new_upload_file=$upload_dir.$new_file_name.$type;
                        }
                        $upload_file=$new_upload_file;
                        $img_name=$new_file_name.$type;
                       
                    }
                    $img_name=$file_name.'.'.$type;
                }
            }

            // Nếu không có lỗi, lưu vào database
            if (empty($error)) {
                $type=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
                $name_img=create_slug($fullname).'-'.date('Y-m-d').''.rand(10,100000);
                resize_img($_FILES['file']['tmp_name'],$type,$name_img,300,300);                               
                move_uploaded_file($_FILES['file']['tmp_name'],$upload_file);
            
                $url_img_new=$name_img.'.'.$type;
                rename("public/images/{$img_name}","public/images/{$url_img_new}");

                $data = [
                    'fullname' => $fullname,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'content' => $content,
                    'img' => $url_img_new,
                    'kieu' => $kieu,
                    'created_at' => $created_at,    
                    'job' => $job
                ];
                db_insert('tbl_lienhe',$data);
                $_SESSION['result']="Thêm feedback thành công !";
                redirect("?mod=contact&action=list_contact");                           
            }
        }
        $list_contact = get_list_contact();
        $data['list_contact']= $list_contact;
        load_view('add_contact',$data);
    }

    // Sửa thông tin liên hệ
    function edit_contactAction() {
        $lienhe_id = (int)$_GET['lienhe_id'];
        $contact = db_fetch_row("SELECT * FROM contacts WHERE lienhe_id = {$lienhe_id}");

        if (!$contact) {
            redirect('?mod=contact&controller=ContactController&action=list_contacts');
        }

        if (isset($_POST['btn_submit'])) {
            $error = array();

            // Kiểm tra và lấy dữ liệu từ POST
            $fullname = empty($_POST['fullname']) ? $contact['fullname'] : $_POST['fullname'];
            $email = empty($_POST['email']) ? $contact['email'] : $_POST['email'];
            $phone_number = empty($_POST['phone_number']) ? $contact['phone_number'] : $_POST['phone_number'];
            $content = empty($_POST['content']) ? $contact['content'] : $_POST['content'];
            $img = $contact['img'];

            
            $kieu = isset($_POST['kieu']) ? (int)$_POST['kieu'] : $contact['kieu'];
            $job = empty($_POST['job']) ? $contact['job'] : $_POST['job'];
            
            // Cập nhật vào database
            if (empty($error)) {
                $data = [
                    'fullname' => $fullname,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'content' => $content,
                    'img' => $img,
                    'kieu' => $kieu,
                    'job' => $job
                ];
                db_update('contacts', $data, "lienhe_id = {$lienhe_id}");
                redirect('?mod=contact&controller=ContactController&action=list_contacts');
            }
        }

        load_view('edit_contact', compact('contact'));
    }

    function delete_contactAction(){
        $lienhe_id=(int)$_GET['lienhe_id'];
        $contact=get_contact_by_id($lienhe_id);
        if(isset($_POST['btn-delete'])){
    
            $file_name=explode(".",$contact['img']);
            unlink("public/images/{$contact['img']}");
            unlink("public/images/{$file_name[0]}_thump.{$file_name[1]}");
    
            db_delete('tbl_lienhe',"`lienhe_id`={$lienhe_id}");
            $_SESSION['result']="Xóa Sản phẩm thành công !";
            redirect("?mod=contact&action=list_contact");
        }
        $delete_contact=get_contact_by_id($lienhe_id);
        $data['delete_contact']=$delete_contact;
        load_view('delete_contact',$data);
    }
    ?>
