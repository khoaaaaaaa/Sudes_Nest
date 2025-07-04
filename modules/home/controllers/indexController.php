<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
    load('lib','validation');
    load('lib','product');  
    load('lib','post');
}

function indexAction() {  
    $list_slide=get_list_slide();
    $list_banner_trai=get_list_banner_trai();
    $list_banner_tren=get_list_banner_tren();
    $list_product=get_list_product();
    $list_product_banchay=get_list_product_banchay();
    $list_post=get_list_post();
    $list_voucher=get_list_voucher();
    $parent_categories = get_list_parent_categories();
    $data['parent_categories'] = $parent_categories;
    $data['list_slide']=$list_slide;
    $data['list_banner_trai']=$list_banner_trai;
    $data['list_banner_tren']=$list_banner_tren;
    $data['list_product_banchay']=$list_product_banchay;
    $data['list_product']=$list_product;
    $data['list_post']=$list_post;
    $data['list_voucher']=$list_voucher;
    load_view('index',$data);
}
function detailAction(){
    $product_id=(int) $_GET['product_id'];
    $product_detail=get_product_by_id($product_id);
    
    $data['product_detail']=$product_detail;
   
    load_view('detail',$data);
}
function detail_postAction(){
    $post_id=(int) $_GET['post_id'];
    $post_detail=get_post_by_id($post_id);
    $data['post_detail']=$post_detail;
    load_view('detail_post',$data);
}
function searchAction(){
    $string=(string)$_POST['text_input'];
    if(!empty($string)){
        $list_search=get_product_by_string($string);
        //$list_search=get_product_by_string($string);
        // show_array($list_search);
        // echo 1;
        // echo $string;
        $result=[
            'list_search'=>$list_search
        ];
        echo json_encode($result);
    }
}

function load_menuAction(){
    $danhmuc_id=(int) $_GET['danhmuc_id'];
    $danhmuc_detail= get_category_by_id($danhmuc_id);
    $data['danhmuc_detail']=$danhmuc_detail;
    switch ($danhmuc_detail['kieu']) {
        case 1:
            load_view_menu('intro',$data, 'page');
            break;
        case 2:
            load_view_menu('index',$data, 'product');
            break;
        case 3:
            load_view_menu('post',$data, 'post');
            break;
        default:
        break;
    }
}   

function load_menu_by_slugAction() {
    $slug = $_GET['slug'];
    // tìm trong DB danh mục có slug là $slug
    $danhmuc = db_fetch_row("SELECT * FROM tbl_danhmuc WHERE `tenmien` = '{$slug}' LIMIT 1");

    if (!$danhmuc) {
        echo "Không tìm thấy danh mục";
        return;
    }

    // gọi lại đúng logic như load_menuAction
    $data['danhmuc_detail'] = $danhmuc;
    switch ($danhmuc['kieu']) {
        case 1:
            load_view_menu('intro', $data, 'page');
            break;
        case 2:
            load_view_menu('index', $data, 'product');
            break;
        case 3:
            load_view_menu('post', $data, 'post');
            break;
        default:
            echo "Không xác định kiểu danh mục";
            break;
    }
}


function testAction() {
    $tinh_id = $_POST['tinh_id'];
    echo 'thành công';
}