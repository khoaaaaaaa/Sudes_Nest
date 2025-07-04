<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
    load('lib','post');
    load('lib','validation');
}

function indexAction() {
   load_view('index');
}
function contactAction() {
   $save_contact = get_save_contact();
   $data['save_contact']= $save_contact;
   load_view('contact');
}

function favor_productAction() {
   //$save_contact = get_save_contact();
   //$data['save_contact']= $save_contact;
   load_view('favor_product');
}

 function blogAction(){  
   $list_post=get_list_post();
   $data['list_post']=$list_post;
    load_view('blog',$data);
 }
 function detail_postAction(){
   $post_id=(int) $_GET['post_id'];
   $post_detail=get_post_by_id($post_id);
   $data['post_detail']=$post_detail;
   load_view('detail_post',$data);
}

function save_contactAction(){
   global $fullname,$email,$error,$phone_number,$content,$kieu,$created_at;
   if(isset($_POST['btn-add'])){
       $error=array();
       if(empty($_POST['fullname'])){
           $error['fullname']="Không được để trống Tiêu đề";
       }
       else{
           $fullname=$_POST['fullname'];       
       }
       if(empty($_POST['email'])){
           $error['email']="Không được để trống Mô tả bài viết";
       }
       else{
           $email=$_POST['email'];       
       }
       if(empty($_POST['phone_number'])){
           $error['phone_number']="Không được để trống Mô tả ngắn";
       }
       else{
           $phone_number=$_POST['phone_number'];       
       }
       if(empty($_POST['content'])){
           $error['content']="Không được để trống Mô tả chi tiết";
       }
       else{
           $content=$_POST['content'];       
       }
       if(empty($_POST['kieu'])){
           $kieu=1;
       }

       $created_at = date('Y-m-d H:i:s');

       if(empty($error)){
           $data=array(
               'fullname'=>$fullname,
               'email'=>$email,
               'phone_number'=>$phone_number,
               'content'=>$content,
               'created_at' => $created_at,  
               'kieu'=>$kieu,
           );
           db_insert('tbl_lienhe',$data);
           echo '<script>alert("Gửi tin nhắn thành công!")</script>';
           redirect("?mod=page&action=contact");
          
       }
   }
   $save_contact = get_save_contact();
   $data['save_contact']= $save_contact;
   load_view('contact',$data);
}

