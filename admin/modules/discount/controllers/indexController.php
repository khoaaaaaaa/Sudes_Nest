<?php
    function construct() {
        load_model('index');
        load('lib','validation');
        load('lib','product');
        load('lib','pagging');
    }

    // Hiển thị danh sách danh mục
    function list_discountAction() {
        $list_discount = get_list_discount();
        $data['list_discount']=$list_discount;    
        load_view('list_discount',$data);
    }

    function add_discountAction() {
        global $error, $ten_voucher, $gia, $phantram, $ngaykt, $ngay, $ngayup, $anhien, $mota, $dieukien, $img, $kieu;

        if (isset($_POST['btn-upload'])) {
            $error = array();

            // Kiểm tra các trường đầu vào
            if (empty($_POST['ten_voucher'])) {
                $error['ten_voucher'] = "Không được để trống tên voucher";
            } else {
                $ten_voucher = $_POST['ten_voucher'];
            }

            // if (empty($_POST['gia'])) {
            //     $error['gia'] = "Giá giảm không hợp lệ";
            // } else {
            //     $gia = $_POST['gia'];
            // }

            // if (empty($_POST['phantram'])) {
            //     $error['phantram'] = "Phần trăm giảm không hợp lệ";
            // } else {
            //     $phantram = $_POST['phantram'];
            // }
            $gia = !empty($_POST['gia']) ? $_POST['gia'] : 0;
            $phantram = !empty($_POST['phantram']) ? $_POST['phantram'] : 0;

            if (empty($_POST['ngay'])) {
                $error['ngay'] = "Ngày bắt đầu không được để trống";
            } else {
                $ngay = $_POST['ngay'];
            }

            if (empty($_POST['ngaykt'])) {
                $error['ngaykt'] = "Ngày kết thúc không được để trống";
            } else {
                $ngaykt = $_POST['ngaykt'];
            }

            if (empty($_POST['mota'])) {
                $error['mota'] = "Mô tả không được để trống";
            } else {
                $mota = $_POST['mota'];
            }

            if (empty($_POST['dieukien'])) {
                $error['dieukien'] = "Điều kiện không được để trống";
            } else {
                $dieukien = $_POST['dieukien'];
            }
            
            $kieu = isset($_POST['kieu']) ? (int)$_POST['kieu'] : 2;
            $anhien = isset($_POST['anhien']) ? (int)$_POST['kieu'] : 2;
            $ngayup = date('Y-m-d H:i:s');
            

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
                    $name_img=create_slug($ten_voucher).'-'.date('Y-m-d').''.rand(10,100000);
                    resize_img($_FILES['file']['tmp_name'],$type,$name_img,300,300);                               
                    move_uploaded_file($_FILES['file']['tmp_name'],$upload_file);
                
                    $url_img_new=$name_img.'.'.$type;
                    rename("public/images/{$img_name}","public/images/{$url_img_new}");

                    $data = [
                        'ten_voucher' => $ten_voucher,
                        'gia' => $gia,
                        'phantram' => $phantram,
                        'ngay' => $ngay,
                        'ngaykt' => $ngaykt,
                        'img' => $url_img_new,
                        'kieu' => $kieu,
                        'mota' => $mota,    
                        'dieukien' => $dieukien,
                        'kieu' => $kieu,
                        'ngayup' => $ngayup,
                        'anhien' => $anhien,
                        'img' => $url_img_new
                    ];
                    db_insert('tbl_voucher',$data);
                    $_SESSION['result']="Thêm feedback thành công !";
                    redirect("?mod=discount&action=list_discount");                           
                }
        }
        $list_discount = get_list_discount();
        $data['list_discount']= $list_discount;
        load_view('add_discount',$data);
    }

    function delete_discountAction(){
        $voucher_id =(int)$_GET['id_voucher'];
        // $category= get_category_by_id($danhmuc_id);
        if(isset($_POST['btn-delete'])){
    
            // $file_name=explode(".",$category['img']);
            // unlink("public/images/{$category['img']}");
            // unlink("public/images/{$file_name[0]}_thump.{$file_name[1]}");
    
            db_delete('tbl_voucher',"`id_voucher`={$voucher_id}");
            $_SESSION['result']="Xóa Sản phẩm thành công !";
            redirect("?mod=discount&action=list_discount");
        }
        $delete_voucher= get_discount_by_id($voucher_id);
        $data['delete_discount']=$delete_voucher;
        load_view('delete_discount',$data);
    }

    function edit_discountAction() {
        global $error, $voucher_id, $discount, $ten_voucher, $gia, $phantram, $ngaykt, $ngay, $ngayup, $anhien, $mota, $dieukien, $img, $kieu;
        $voucher_id = (int)$_GET['id_voucher'];
        $discount=get_discount_by_id($voucher_id);
        
        if (isset($_POST['btn-edit'])) {
            $error = array();

            // Kiểm tra các trường đầu vào
            if (empty($_POST['ten_voucher'])) {
                $error['ten_voucher'] = "Không được để trống tên voucher";
            } else {
                $ten_voucher = $_POST['ten_voucher'];
            }

            // if (empty($_POST['gia'])) {
            //     $error['gia'] = "Giá giảm không hợp lệ";
            // } else {
            //     $gia = $_POST['gia'];
            // }

            // if (empty($_POST['phantram'])) {
            //     $error['phantram'] = "Phần trăm giảm không hợp lệ";
            // } else {
            //     $phantram = $_POST['phantram'];
            // }
            $gia = !empty($_POST['gia']) ? $_POST['gia'] : 0;
            $phantram = !empty($_POST['phantram']) ? $_POST['phantram'] : 0;

            if (empty($_POST['ngay'])) {
                $error['ngay'] = "Ngày bắt đầu không được để trống";
            } else {
                $ngay = $_POST['ngay'];
            }

            if (empty($_POST['ngaykt'])) {
                $error['ngaykt'] = "Ngày kết thúc không được để trống";
            } else {
                $ngaykt = $_POST['ngaykt'];
            }

            if (empty($_POST['mota'])) {
                $error['mota'] = "Mô tả không được để trống";
            } else {
                $mota = $_POST['mota'];
            }

            if (empty($_POST['dieukien'])) {
                $error['dieukien'] = "Điều kiện không được để trống";
            } else {
                $dieukien = $_POST['dieukien'];
            }
            
            $kieu = isset($_POST['kieu']) ? (int)$_POST['kieu'] : 2;
            $anhien = isset($_POST['anhien']) ? (int)$_POST['kieu'] : 2;
            $ngayup = date('Y-m-d H:i:s');
            

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
                $name_img=create_slug($ten_voucher).'-'.date('Y-m-d').''.rand(10,100000);
                resize_img($_FILES['file']['tmp_name'],$type,$name_img,300,300);                               
                move_uploaded_file($_FILES['file']['tmp_name'],$upload_file);
            
                $url_img_new=$name_img.'.'.$type;
                rename("public/images/{$img_name}","public/images/{$url_img_new}");

                $data = [
                    'ten_voucher' => $ten_voucher,
                    'gia' => $gia,
                    'phantram' => $phantram,
                    'ngay' => $ngay,
                    'ngaykt' => $ngaykt,
                    'img' => $url_img_new,
                    'kieu' => $kieu,
                    'mota' => $mota,    
                    'dieukien' => $dieukien,
                    'kieu' => $kieu,
                    'ngayup' => $ngayup,
                    'anhien' => $anhien,
                    'img' => $url_img_new
                ];
                db_update('tbl_voucher',$data, "`id_voucher`='{$voucher_id}'");
                redirect("?mod=discount&action=list_discount");                           
            }
        }

        $data['discount'] = $discount;
        $list_discount = get_list_discount();
        $data['list_discount']= $list_discount;
        load_view('edit_discount',$data);
    }