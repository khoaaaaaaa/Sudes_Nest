<?php
get_header();
?>

<div class="bodywrap">
    <div class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">					
                <li class="home">
                    <a href="/" title="Trang chủ"><span>Trang chủ</span></a>						
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li><strong><span><?php echo $danhmuc_detail['ten_danhmuc'] ?></span></strong></li>
            </ul>
        </div>
    </div>

    <div class="blog_wrapper layout-blog">
        <div class="container">
            <div class="rows">
                <div class="col_12">
                    <div class="title-page">
                        <h1><?php echo $danhmuc_detail['ten_danhmuc'] ?></h1>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>

                    <div class="rows list-news">
                        <?php
                            $list_post =  get_list_post_by_level($danhmuc_detail['danhmuc_id'],8);
                            if (!empty($list_post) ) { // Kiểm tra nếu $list_product_by_id_sub không rỗng và là một mảng
                                foreach ($list_post as $post) {
                                    $slug = create_slug($post['post_title']);
                        ?>
                        <div class="col_3 ">
                            <div class="item-blog">
                                <div class="wrapper">
                                    <a class="block-thumb thumb" href="<?php echo $slug . "tt" . $post['post_id'] . ".htm" ?>" title="1 tai yến chưng bao nhiêu nước? Cách chưng 1 tai yến không bị mất chất">
                                        <img width="400" height="240" class="lazyload duration-300 loaded" src="admin/public/images/<?php echo $post['img'] ?>" data-src="assets/img/<?php echo $post['img'] ?>" alt="1 tai yến chưng bao nhiêu nước? Cách chưng 1 tai yến không bị mất chất" data-was-processed="true">
                                    </a>
                                    <div class="block-content">
                                        <h3>
                                            <a href="1-tai-yen-chung-bao-nhieu-nuoc.html" title="1 tai yến chưng bao nhiêu nước? Cách chưng 1 tai yến không bị mất chất" class="line-clamp-2-new"><?php echo $post['post_title'] ?></a>
                                        </h3>
                                        <div class="article-content">
                                            <p class="justify line-clamp line-clamp-3"><?php echo $post['mota'] ?></p>
                                            
                                            <div class="article-info">
                                                <p class="time-post">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                                    </svg>
                                                    <span>
                                                        05/01/2024
                                                    </span>
                                                </p>
                                                <a href="1-tai-yen-chung-bao-nhieu-nuoc.html" title="Đọc thêm" class="read-more">Đọc thêm »</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>