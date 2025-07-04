<?php
function get_product_by_id($product_id){
    $result=db_fetch_row("SELECT * FROM `tbl_product` WHERE `product_id`={$product_id}");
    if(!empty($result)){
       
        return $result;
    }
     
}
function get_product_cart_by_id($product_id){
    $result=db_fetch_array("SELECT * FROM `tbl_product` WHERE `product_id`={$product_id}");
    if(!empty($result)){
       
        return $result;
    }
     
}
function buy_now($product_id,$qty){
    $item = get_product_by_id($product_id);
    if(isset($_SESSION['cart']['buy'][$product_id])){
        $qty += $_SESSION['cart']['buy'][$product_id]['qty'];
    }

    $_SESSION['cart']['buy'][$product_id] = array(
        'product_id'    => $item['product_id'],
        'product_title' => $item['title'],
        'price'         => $item['price'],
        'product_thumb' => $item['img'],
        'qty'           => $qty,
        'sub_total'     => $item['price'] * $qty
    );
    update_info_cart();
}

// function add_cart($product_id,$qty){
//     global $qty;
//     $item=get_product_by_id($product_id);
//     #thêm thông tin sản phẩm vào giỏ hàng
//         // print_r($item);
//     // $qty=1;
//     if(isset($_SESSION['cart']['buy']) && array_key_exists($product_id,$_SESSION['cart']['buy'])){
//         $qty= $_SESSION['cart']['buy'][$product_id]['qty']+1;
//     }
    
//     $_SESSION['cart']['buy'][$product_id]=array(
//         'product_id'=>$item['product_id'],
//         'product_title'=>$item['title'],
//         'cap1'=>$item['cap1'],
//         'cap2'=>$item['cap2'],
//         'cap3'=>$item['cap3'],
//         'cap4'=>$item['cap4'],
//         'product_title'=>$item['title'],
//         'product_title'=>$item['title'],
//         'product_title'=>$item['title'],
//         'price'=>$item['price'],
//         'product_thumb'=>$item['img'],
//         'qty'=>$qty,
//         'sub_total'=>$item['price'] * $qty,
//     );
//     update_info_cart();
// }

function add_cart($product_id, $qty){
    $item = get_product_by_id($product_id);

    // Nếu đã có sản phẩm trong giỏ, cộng dồn số lượng
    if (isset($_SESSION['cart']['buy'][$product_id])) {
        $qty += $_SESSION['cart']['buy'][$product_id]['qty'];
    }

    $_SESSION['cart']['buy'][$product_id] = array(
        'product_id' => $item['product_id'],
        'product_title' => $item['title'],
        'cap1' => $item['cap1'],
        'cap2' => $item['cap2'],
        'cap3' => $item['cap3'],
        'cap4' => $item['cap4'],
        'price' => $item['price'],
        'product_thumb' => $item['img'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty,
    );
}


function update_info_cart(){
    $num_order=0;
    $total=0;
    foreach($_SESSION['cart']['buy'] as $item){
        $num_order+=$item['qty'];
        $total+=$item['sub_total'];
    }
    $_SESSION['cart']['info']=array(
        'num_order'=>$num_order,
        'total'=>$total,
    );
}

function get_list_buy_cart(){
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart']['buy'] as &$item){
            $item['url_delete_cart']="?mod=cart&act=delete&id={$item['product_id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}
// sản phẩm trong trang chi tiết
function get_num_order_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}

// function get_total_cart(){
//     if(isset($_SESSION['cart'])){
//         return $_SESSION['cart']['info']['total'];
//     }
//     return false;
// }

// xóa sản phẩm giỏ hàng
function delete_cart($id){
    if(isset($_SESSION['cart'])){
    # Xóa sản phẩm có $id trong giỏ hàng
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }
        
        else{
            unset($_SESSION['cart']);
        }
    }
    
}

// cập nhật giỏ hàng
function update_cart($qty){
    foreach($qty as $id=>$new_qty)
    {
        $_SESSION['cart']['buy'][$id]['qty']=$new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty* $_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}
function get_province(){
    $result=db_fetch_array("SELECT * FROM `province`");
    if(!empty($result)){
       
        return $result;
    }
}
function get_district($province_id){
    $result=db_fetch_array("SELECT * FROM `district` WHERE `province_id` = {$province_id}");
    if(!empty($result)){
       
        return $result;
    }
}
function get_wards($district_id){
    $result=db_fetch_array("SELECT * FROM `wards` WHERE `district_id` = {$district_id}");
    if(!empty($result)){
       
        return $result;
    }
}
function get_id_khachhang($email,$sdt){
    $result=db_fetch_row("SELECT * FROM `tbl_khachhang` WHERE `email` = {$email} AND `sdt`={$sdt}");
    if(!empty($result)){
       
        return $result;
    }
}
function get_province_by_id($id){
    $item=db_fetch_row("SELECT * FROM `tinhthanh` WHERE `id`='{$id}'");
    if(!empty($item)){
        return $item;
    }
    else{
        echo "không tồn tại";
    }
}
function get_district_by_id($id){
    $item=db_fetch_row("SELECT * FROM `tinhthanh` WHERE `id`='{$id}'");
    if(!empty($item)){
        return $item;
    }
    else{
        echo "không tồn tại";
    }
}
function get_wards_by_id($id){
    $item=db_fetch_row("SELECT * FROM `tinhthanh` WHERE `id`='{$id}'");
    if(!empty($item)){
        return $item;
    }
    else{
        echo "không tồn tại";
    }
}
function get_ddh_by_id($id){
    $item=db_fetch_row("SELECT * FROM `tbl_dondathang` WHERE `id_ddh`='{$id}'");
    if(!empty($item)){
        return $item;
    }
    else{
        echo "không tồn tại";
    }
}

function get_kh_by_order($kh_id){
    $item=db_fetch_row("SELECT * FROM `tbl_khachhang` WHERE id_kh='{$kh_id}'");
    if(!empty($item)){
        return $item;
    }
    else{
        echo "không tồn tại";
    }
}
function get_sl_by_order($id_ddh){
    $ddh=db_fetch_array("SELECT * FROM `tbl_ctdondathang` WHERE id_ddh='{$id_ddh}'");
   
    if(!empty($ddh)){
        $tong=0;
        $soluong=0;
        foreach($ddh as $item){
            $tong+=$item['DonGia'];
            $soluong+=$item['soluong'];

        }
        $data=[
            'tong'=>$tong,
            'soluong'=>$soluong
        ];
        return $data;
    }
    else{
        echo "không tồn tại";
    }
}
function get_ctddh_by_order($id_ddh){
    $ddh=db_fetch_array("SELECT * FROM `tbl_ctdondathang` WHERE id_ddh='{$id_ddh}'");
   
    if(!empty($ddh)){
       
        return $ddh;
    }
    else{
        echo "không tồn tại";
    }
}
function get_sp_by_id_ctddh($id_product){
    $result=db_fetch_row("SELECT * FROM `tbl_product` WHERE `product_id`='{$id_product}'");
    if(!empty($result)){
       
        return $result;
    }
    else{
        echo "không tồn tại";
    }
}

function get_list_product_like(){
    $result = db_fetch_array("SELECT * FROM `tbl_product`  WHERE `trangthai`='Công khai' AND `thungrac`='0' ORDER BY RAND() LIMIT 8");
    return $result;
}

function get_all_tinh() {
    $result = db_fetch_array("SELECT id, ten FROM `tinhthanh` WHERE kieu IN (1,2,3) AND anhien = 2 ORDER BY ten ASC");
    return $result;
}


function get_quan_by_tinh($quan_id) {
    return db_fetch_array("
        SELECT id, ten 
        FROM `tinhthanh` 
        WHERE idcha = '{$quan_id}' AND kieu IN (4, 5, 6)
        ORDER BY 
            CASE 
                WHEN ten REGEXP '^[0-9]+' THEN CAST(SUBSTRING_INDEX(ten, ' ', 1) AS UNSIGNED)
                ELSE 9999
            END ASC,
            ten ASC
    ");
}


function get_phuong_by_quan($phuong_id) {
    return db_fetch_array("
        SELECT id, ten 
        FROM `tinhthanh` 
        WHERE idcha = '{$phuong_id}' AND kieu IN (7, 8) 
        ORDER BY 
            CASE 
                WHEN ten REGEXP '^[0-9]+' THEN CAST(SUBSTRING_INDEX(ten, ' ', 1) AS UNSIGNED)
                ELSE 9999
            END ASC,
            ten ASC
    ");
}

function get_shipping_fee_by_tinh($tinh_id) {
    // Lấy giá vận chuyển từ tỉnh
    $row = db_fetch_row("SELECT gia FROM `tinhthanh` WHERE id = '{$tinh_id}'");
    return $row ? (int)$row['gia'] : 0; // Trả về giá nếu có, nếu không trả về 0
}

function get_shipping_fee_by_quan($quan_id) {
    // Lấy giá vận chuyển từ quận
    $row = db_fetch_row("SELECT gia FROM `tinhthanh` WHERE id = '{$quan_id}'");
    return $row ? (int)$row['gia'] : 0; // Trả về giá nếu có, nếu không trả về 0
}

function get_voucher_by_ten($ten_voucher){
    $result = db_fetch_row("SELECT * FROM `tbl_voucher` WHERE ten_voucher = '{$ten_voucher}'");
    return $result;
} 

function get_list_voucher(){
    $result = db_fetch_array("SELECT * FROM `tbl_voucher`  WHERE `anhien`='1'");
    return $result;
}
?>