<?php
function construct()
{
    load_model('index');
    load('lib','validation');
    load('lib','email');
    
}

function indexAction()
{
    global $error;
    //  unset($_SESSION['cart']);
     $list_product_inCart=get_list_buy_cart();
     // show_array($list_product_inCart);
     $data['list_product_inCart']=$list_product_inCart;
    //  show_array($data);
    //  load_view('index',$data);
    if(isset($_POST['btn-thanhtoan'])){
        $error=array();
        if(empty($_POST['shipdate'])){
            $error['shipdate']="Không được để trống trường này";
        }
        else{
            $_SESSION['ngaygiao']=$_POST['shipdate']; 
        }
        if($_POST['time'] > 0){
            $_SESSION['thoigian']=$_POST['time'];
        }
        else{
            $error['time']="Không được để trống trường này";
        }
        if(empty($_POST['company_name'])){
            $_SESSION['company_name']="";
        }
        else{
            $_SESSION['company_name']=$_POST['company_name']; 
        }
        if(empty($_POST['tax_code'])){
            $_SESSION['tax_code']="";
        }
        else{
            $_SESSION['tax_code']=$_POST['tax_code']; 
        }
        if(empty($_POST['company_address'])){
            $_SESSION['company_address']="";
        }
        else{
            $_SESSION['company_address']=$_POST['company_address']; 
        }
        if(empty($_POST['invoice_email'])){
            $_SESSION['invoice_email']="";
        }
        else{
            $_SESSION['invoice_email']=$_POST['invoice_email']; 
        }

        $_SESSION['is_invoice'] = (isset($_POST['attributes']['invoice']) && $_POST['attributes']['invoice'] === 'có');

        if(empty($error)){
            redirect('thanh-toan.htm');
        }
        else{   
            load_view('index',$data);
            show_array($error);
        }
    }
    else{
        load_view('index',$data);
    }
}
function buy_nowAction(){
    $product_id = (int)$_GET['product_id']; 
    $qty = isset($_GET['num_order']) ? (int)$_GET['num_order'] : 1;
    buy_now($product_id, $qty);
    redirect('gio-hang.htm');
}

function ajax_add_cartAction(){
    $product_id = (int)$_POST['product_id'];
    $qty = 1;

    if (isset($_POST['add_cart'])) {
        $qty = isset($_POST['num_order']) ? (int)$_POST['num_order'] : 1;
    }

    add_cart($product_id, $qty);
    update_info_cart();
    $num_order = $_SESSION['cart']['info']['num_order'];

    header('Content-Type: application/json');
    echo json_encode([
        'num_order' => $num_order
    ]);
}


function checkoutAction(){
    $list_product_inCart=get_list_buy_cart();
    $list_province=get_province();
    $data['list_province']=$list_province;
    $is_invoice = $_SESSION['is_invoice'] ?? false;
    $data['is_invoice'] = $is_invoice;
    $data['list_product_inCart']=$list_product_inCart;
    global $error,$hoten,$email,$province,$district,$sonha,$wards,$sdt,$GhiChu,$payment_method,$shippingMethod,$trangthai,$ten_voucher,$voucher,$gia,$ngaygiao, $thoigian, $company_name, $tax_code, $company_address, $invoice_email;
    if(isset($_POST['btn-apdung'])){
        $error=array();
        if(empty($_POST['ten_voucher'])){
            $error['ten_voucher']="Không được để trống họ tên";
        }
        else{
            $ten_voucher=$_POST['ten_voucher']; 
        }
        $voucher=get_voucher_by_ten($ten_voucher);
        if(isset($voucher)){
            $gia = $voucher['gia'];
            $_SESSION['gia'] = $gia;
            $data['voucher'] = $voucher;
        }
        else {
            $gia = 0;
            $_SESSION['gia'] = $gia;
            $error['ten_voucher'] = "Mã khuyến mãi không tồn tại";
            // load_view('checkout', $data);
        }
        // $data['error'] = $error;
    }
    if(isset($_POST['btn-dathang'])){
        $error=array();
        if(empty($_POST['billingName'])){
            $error['billingName']="Không được để trống họ tên";
        }
        else{
            $hoten=$_POST['billingName']; 
        }
        if(empty($_POST['email'])){
            $error['email']="Không được để trống email";
        }
        else{
                $email=$_POST['email']; 
        }
        if(empty($_POST['billingProvince'])){
            $error['billingProvince']="Không được để trống tỉnh/thành phố";
        }
        else{
            $id_province=(int)$_POST['billingProvince'];
            $province_name=get_province_by_id($id_province);
                $province=$province_name['ten']; 
        }
        if(empty($_POST['billingDistrict'])){
            $error['billingDistrict']="Không được để trống Quận/Huyện";
        }
        else{
            $id_district=(int)$_POST['billingDistrict'];
            $district_name=get_district_by_id($id_district);
                $district=$district_name['ten']; 
        }
        if(empty($_POST['billingWard'])){
            $wards="";
        }
        else{
            $id_wards=(int)$_POST['billingWard'];
            $wards_name=get_wards_by_id($id_wards);
            $wards=$wards_name['ten']; 
        }
        if(empty($_POST['sonha'])){
            $error['sonha']="Không được để trống số nhà";
        }
        else{
                $sonha=$_POST['sonha']; 
        }
        if(empty($_POST['sdt'])){
            $error['sdt']="Không được để trống số điện thoại";
        }
        else{
                $sdt=$_POST['sdt']; 
        }
        if(empty($_POST['payment_method'])){
            $error['payment_method']="Không được để trống hình thức thanh toán";
        }
        else{
            $payment_method=$_POST['payment_method'];
        }
       
        $GhiChu=$_POST['GhiChu'];
       
        if ($payment_method == "Thanh toán tại quầy") {
            $trangthai = "Thành công";
        } else {
            $trangthai = "Đang xử lý";
        }

        if(empty($_POST['shippingMethod'])){
            $error['shippingMethod']="Không được để tống hình thức giao hàng";
        }
        else{
            $shippingMethod = $_POST['shippingMethod'];
        }

        $ngaygiao = $_SESSION['ngaygiao'] ?? '';
        $thoigian = $_SESSION['thoigian'] ?? '';
        $company_name = $_SESSION['company_name'] ?? '';
        $tax_code = $_SESSION['tax_code'] ?? '';
        $company_address = $_SESSION['company_address'] ?? '';
        $invoice_email = $_SESSION['invoice_email'] ?? '';
        if(empty($error)){
            $data=array(
                'HoTen'=>$hoten,
                'email'=>$email,
                'province_id'=>$province,
                'district_id'=>$district,
                'ward_id'=>$wards,
                'sonha'=>$sonha,
                'sdt'=>$sdt,
                'company_name'=>$company_name,
                'tax_code'=>$tax_code,
                'company_address'=>$company_address,
                'invoice_email'=>$invoice_email,
                'GhiChu'=>$GhiChu
            );
            $id_kh=db_insert('tbl_khachhang',$data);
            $data_donhang=array(
                'NgayDat'=>date('d-m-Y'),
                'diachidh'=>$sonha.",".$wards.",".$district.",".$province,
                'ptthanhtoan'=>$payment_method,
                'trangthai'=>$trangthai,
                'id_kh'=>$id_kh,
                'ngaygiao'=>$ngaygiao,
                'thoigian'=>$thoigian
            );
            $id_ddh=db_insert('tbl_dondathang',$data_donhang);
            $list_product_inCart=get_list_buy_cart();
            foreach($list_product_inCart as $item){
                $data_ctddh=array(
                    'id_ddh'=>$id_ddh,
                    'id_product'=>$item['product_id'],
                    'product_title'=>$item['product_title'],
                    'soluong'=>$item['qty'],
                    'DonGia'=>$item['sub_total']
                );
                db_insert('tbl_ctdondathang',$data_ctddh);
            }
            // delete_cart('');          
            $order=get_ddh_by_id($id_ddh);
            $data_order['order']=$order;
            send_mail("{$data['email']}","{$data['HoTen']}","Đặt hàng thành công",$id_ddh);
            delete_cart('');
            load_view('checkout_success',$data_order);
        }
        else{
            load_view('checkout',$data);
        }
    }
    else{
        // $data['error'] = $error ?? array();
        load_view('checkout',$data);
    }
}
// function buynowAction(){
//     $product_id=$_GET['product_id'];
//     $product=get_product_by_id($product_id);
//     $list_province=get_province();
//     $data['list_province']=$list_province;
//     $data['product']=$product;
//     global $error,$hoten,$email,$province,$district,$sonha,$wards,$sdt,$GhiChu,$payment_method,$trangthai;
//     if(isset($_POST['btn-dathang'])){
//         $error=array();
//         if(empty($_POST['hoten'])){
//             $error['hoten']="Không được để trống họ tên";
//         }
//         else{
//                 $hoten=$_POST['hoten']; 
//         }
//         if(empty($_POST['email'])){
//             $error['email']="Không được để trống email";
//         }
//         else{
//                 $email=$_POST['email']; 
//         }
//         if(empty($_POST['province'])){
//             $error['province']="Không được để trống tỉnh/thành phố";
//         }
//         else{
//             $id_province=(int)$_POST['province'];
//             $province_name=get_province_by_id($id_province);
//                 $province=$province_name['name']; 
//         }
//         if(empty($_POST['district'])){
//             $error['district']="Không được để trống Quận/Huyện";
//         }
//         else{
//             $id_district=(int)$_POST['district'];
//             $district_name=get_district_by_id($id_district);
//                 $district=$district_name['name']; 
//         }
//         if(empty($_POST['wards'])){
//             $error['wards']="Không được để trống Phường/Xã";
//         }
//         else{
//                 $id_wards=(int)$_POST['wards'];
//                 $wards_name=get_wards_by_id($id_wards);
//                 $wards=$wards_name['name']; 
//         }
//         if(empty($_POST['sonha'])){
//             $error['sonha']="Không được để trống số nhà";
//         }
//         else{
//                 $sonha=$_POST['sonha']; 
//         }
//         if(empty($_POST['sdt'])){
//             $error['sdt']="Không được để trống số điện thoại";
//         }
//         else{
//                 $sdt=$_POST['sdt']; 
//         }
//         if(empty($_POST['payment_method'])){
//             $error['payment_method']="Không được để trống hình thức thanh toán";
//         }
//         else{
//                 $payment_method=$_POST['payment_method']; 
//         }
       
//         $GhiChu=$_POST['GhiChu'];  
       
//         if ($payment_method == "Thanh toán tại quầy") {
//             $trangthai = "Thành công";
//         } else {
//             $trangthai = "Đang xử lý";
//         }
//         if(empty($error)){
//             $data=array(
//                 'HoTen'=>$hoten,
//                 'email'=>$email,
//                 'province_id'=>$province,
//                 'district_id'=>$district,
//                 'ward_id'=>$wards,
//                 'sonha'=>$sonha,
//                 'sdt'=>$sdt,
//                 'GhiChu'=>$GhiChu
//             );
//             $id_kh=db_insert('tbl_khachhang',$data);
//             $data_donhang=array(
//                 'NgayDat'=>date('d-m-Y'),
//                 'diachidh'=>$sonha.",".$wards.",".$district.",".$province,
//                 'ptthanhtoan'=>$payment_method,
//                 'trangthai'=>$trangthai,
//                 'id_kh'=>$id_kh,
        
//             );
//             $id_ddh=db_insert('tbl_dondathang',$data_donhang);
          
//             $data_ctddh=array(
//                 'id_ddh'=>$id_ddh,
//                 'id_product'=>$product['product_id'],
//                 'product_title'=>$product['title'],
//                 'soluong'=>1,
//                 'DonGia'=>$product['price']
//             );
//             db_insert('tbl_ctdondathang',$data_ctddh);
            
//             // delete_cart('');          
//             $order=get_ddh_by_id($id_ddh);
//             $data_order['order']=$order;
//             send_mail("{$data['email']}","{$data['HoTen']}","Đặt hàng thành công",$id_ddh);
//             // delete_cart('');
//             load_view('checkout_success',$data_order);
//         }
//         else{
//             load_view('buynow',$data);
//         }
//     }
//     else{
//         load_view('buynow',$data);
//     }
// }
function checkout_successAction(){
    load_view('checkout_success');
}

function updateAction(){
    if(isset($_POST['btn_update_cart'])){
        //show_array($_POST);
        update_cart($_POST['qty']);
        redirect('?mod=cart&action=index');
    }
}
// function update_slAction(){
//     $id=(int)$_POST['data_id'];
//     $new_qty=(int)$_POST['num_order'];
//     $item=get_product_by_id($id);
    
//     // cập nhật số lượng
//     $_SESSION['cart']['buy'][$id]['qty']=$new_qty;
//     // cập nhật tổng tiền
//     $sub_total=$item['price']*$new_qty;
//     $_SESSION['cart']['buy'][$id]['sub_total']=$sub_total;
//     // cập nhật toàn bộ giỏ hàng
//     update_info_cart();
    
//     $total=get_total_cart();
//     $num_order=$_SESSION['cart']['info']['num_order'];
//     $result=array(
//         'sub_total'=>currency_format($sub_total) ,
//         'total'=>currency_format($total),
//         'num_order'=>$num_order,
//         'qty'=>$new_qty,
//     );
//     echo json_encode($result);
// }
function update_slAction() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    header('Content-Type: application/json');
    ob_clean(); // Xóa mọi output trước khi in JSON

    $id = (int)$_POST['data_id'];
    $new_qty = max(1, (int)$_POST['num_order']);

    if (!isset($_SESSION['cart']['buy'][$id])) {
        echo json_encode(['error' => 'Sản phẩm không tồn tại']);
        exit;
    }

    $item = get_product_by_id($id);
    $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;

    $sub_total = $item['price'] * $new_qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;

    update_info_cart();

    $total = get_total_cart();
    $num_order = $_SESSION['cart']['info']['num_order'];

    $result = [
        'sub_total' => currency_format($sub_total), // Đảm bảo giá trị đúng
        'total' => currency_format($total),
        'num_order' => $num_order,
        'qty' => $new_qty,
    ];

    session_write_close();
    echo json_encode($result);
    exit;
}




function deleteAction(){
    $id=$_GET['id'];
    delete_cart($id);
    update_info_cart();
    redirect('?mod=cart&action=index');
}
function ajax_get_districtAction(){
    $province_id = $_GET['province_id'];
    
   
    $result = get_district($province_id);

    $data[0] = [
        'id' => null,
        'name' => 'Chọn một Quận/huyện'
    ];
    foreach($result as $row) {
        $data[] = [
            'id' => $row['district_id'],
            'name'=> $row['name']
        ];
    }
    echo json_encode($data);
}
function ajax_get_wardsAction(){
    $district_id = $_GET['district_id'];

    // echo $district_id;
    
   
    $result = get_wards($district_id);


    $data[0] = [
        'id' => null,
        'name' => 'Chọn một xã/phường'
    ];

    foreach($result as $row) {
        $data[] = [
            'id' => $row['wards_id'],
            'name'=> $row['name']
        ];
    }
    echo json_encode($data);
}

function ajax_get_tinhAction() {
    $list = get_all_tinh();
    echo '<option value="">--Chọn Tỉnh/Thành--</option>';
    foreach ($list as $item) {
        echo "<option value='{$item['id']}'>{$item['ten']}</option>";
    }
    exit;
}


// function ajax_get_quanAction() {
//     $tinh_id = $_POST['tinh_id'] ?? 0;

//     if (empty($tinh_id)) {
//         echo json_encode([
//             'options' => '<option value="">-- Không có tỉnh/thành --</option>',
//             'fee' => 0
//         ]);
//         return;
//     }

//     $list_quan = get_quan_by_tinh($tinh_id);
//     $shipping_fee = get_shipping_fee_by_tinh($tinh_id);

//     $html = '<option value="">-- Chọn Quận/Huyện --</option>';
//     foreach ($list_quan as $item) {
//         $html .= "<option value='{$item['id']}'>Quận {$item['ten']}</option>";
//     }

//     echo json_encode([
//         'options' => $html,
//         'fee' => number_format($shipping_fee, 0, ',', '.')
//     ]);
// }

function ajax_get_quanAction() {
    $tinh_id = $_POST['tinh_id'] ?? 0;

    if (empty($tinh_id)) {
        echo json_encode([
            'options' => '<option value="">-- Không có tỉnh/thành --</option>',
            'fee' => 0
        ]);
        return;
    }

    // Lấy danh sách quận/huyện của tỉnh
    $list_quan = get_quan_by_tinh($tinh_id);
    $shipping_fee = get_shipping_fee_by_tinh($tinh_id); // Chỉ lấy giá từ tỉnh

    // Render danh sách quận
    $html = '<option value="">-- Chọn Quận/Huyện --</option>';
    foreach ($list_quan as $item) {
        $html .= "<option value='{$item['id']}'>{$item['ten']}</option>";
    }

    echo json_encode([
        'options' => $html, 
        'fee' => number_format($shipping_fee, 0, ',', '.')
    ]);
}

function ajax_get_phuongAction() { 
    $quan_id = $_POST['quan_id'] ?? 0;

    if (empty($quan_id)) {
        echo json_encode([
            'options' => '<option value="">-- Không có quận/huyện --</option>',
            'fee' => 0
        ]);
        return;
    }

    // Lấy danh sách phường/xã
    $list_phuong = get_phuong_by_quan($quan_id);
    $shipping_fee = get_shipping_fee_by_quan($quan_id); // Lấy giá từ quận

    // Render danh sách phường/xã
    $html = '<option value="">-- Chọn Phường/Xã --</option>';
    foreach ($list_phuong as $item) {
        $html .= "<option value='{$item['id']}'>{$item['ten']}</option>";
    }

    echo json_encode([
        'options' => $html,
        'fee' => number_format($shipping_fee, 0, ',', '.')
    ]);
}


