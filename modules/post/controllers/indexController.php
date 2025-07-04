<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
    load('lib','post');
}

function indexAction() {  
    $list_post=get_list_post();
    $data['list_post']=$list_post;
    load_view('post',$data);
}

function detail_postAction(){
    $post_id=(int) $_GET['post_id'];
    $post_detail=get_post_by_id($post_id);
    $data['post_detail']=$post_detail;
    $list_post=get_list_post();
    //$list_img=get_list_img_by_id($product_id);
    //$data['list_img']=$list_img;
    $data['list_post']=$list_post;
    load_view('detail_post',$data);
}

?>