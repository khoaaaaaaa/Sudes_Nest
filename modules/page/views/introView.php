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

    <div class="page">
        <div class="container">
            <div class="pg_page bg-shadow">
                <div class="rows">
                    <div class="col_12">
                        <div class="page-title category-title">
                            <h1 class="title-head"><a href="/gioi-thieu" title="Giới thiệu"><?php echo $danhmuc_detail['ten_danhmuc'] ?></a></h1>
                        </div>
                        <div class="content-page rte">
                        <?php echo $danhmuc_detail['detail_danhmuc'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
