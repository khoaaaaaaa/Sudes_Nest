<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo base_url(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
    <script src="https://cdn.tiny.cloud/1/x3qgdtb5ciacelhye5u7rzmlra9rscq605jima6m82o8jm37/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
    
    <script src="public/js/app.js" type="text/javascript"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/fonts.css">
    
    <script src="public/js/datepicker.js"></script>
    <script src="public/js/main_yen.js"></script>
    <title>Trang chủ</title>
</head>
<body>
    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="rows">
                    <div class="col_9 header-promo">
                        <div class="notification">
                            <svg viewbox="0 0 166 197">
                                <path d="M82.8652955,196.898522 C97.8853137,196.898522 110.154225,184.733014 110.154225,169.792619 L55.4909279,169.792619 C55.4909279,184.733014 67.8452774,196.898522 82.8652955,196.898522 L82.8652955,196.898522 Z" class="notification--bellClapper"></path>
                                <path d="M146.189736,135.093562 L146.189736,82.040478 C146.189736,52.1121695 125.723173,27.9861651 97.4598237,21.2550099 L97.4598237,14.4635396 C97.4598237,6.74321823 90.6498186,0 82.8530327,0 C75.0440643,0 68.2462416,6.74321823 68.2462416,14.4635396 L68.2462416,21.2550099 C39.9707102,27.9861651 19.5163297,52.1121695 19.5163297,82.040478 L19.5163297,135.093562 L0,154.418491 L0,164.080956 L165.706065,164.080956 L165.706065,154.418491 L146.189736,135.093562 Z" class="notification--bell"></path>
                            </svg>
                        </div>
                        <ul class="ul-default promo-list js-promo">
                            <li class="promo-item">
                                <a class="duration-300 line-clamp-2-new" href="#" title="[05.09 - 01.10] Càng mua càng giảm: mua 6 tặng 1, mua 10 tặng 2, mua 20 tặng 5">
                                    [05.09 - 01.10] Càng mua càng giảm: mua 6 tặng <span>1</span>, mua 10 tặng <span>2</span>, mua 20 tặng <span>5</span>
                                </a>
                            </li>
                            <li class="promo-item">
                                <a class="duration-300 line-clamp-2-new" href="#" title="Khuyến mãi 30/4 - 1/5  hấp dẫn nhất mua hè này KHÔNG THỂ BỎ LỠ!!!!">Khuyến mãi <span>30/4 - 1/5  hấp dẫn nhất mua hè này</span> KHÔNG THỂ BỎ LỠ!!!!</a>
                            </li>
                            <li class="promo-item">
                                <a class="duration-300 line-clamp-2-new" href="#" title="Ưu đãi độc quyền. Giảm 30 - 50% cho những ai có ngày sinh trùng với Black Friday.">Ưu đãi độc quyền. <span>Giảm 30 - 50%</span> cho những ai có ngày sinh trùng với Black Friday.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col_3 header-hotline">
                        <a>
                            <svg id="Layer_1" enable-background="new 0 0 64 64" height="23" viewBox="0 0 64 64" width="23" xmlns="http://www.w3.org/2000/svg"><g><path d="m55.267 22.76h-13.732v-14.337c0-2.07-.809-4.019-2.276-5.486-1.468-1.467-3.416-2.276-5.486-2.276h-25.049c-4.28 0-7.762 3.482-7.762 7.762v16.699c0 4.28 3.482 7.762 7.762 7.762h.587v4.762c0 1.474.877 2.781 2.235 3.331.437.177.892.262 1.343.262.939 0 1.855-.373 2.528-1.067l7.04-7.002v14.05c0 4.279 3.486 7.761 7.77 7.761h11.021l7.312 7.273c.688.708 1.608 1.085 2.552 1.085.451 0 .906-.086 1.344-.264 1.356-.549 2.232-1.854 2.232-3.325v-4.77h.579c4.285 0 7.771-3.481 7.771-7.761v-16.7c0-4.277-3.486-7.759-7.771-7.759zm-33.142 7.124c-.396 0-.777.157-1.058.437l-7.785 7.743c-.229.236-.479.185-.61.132-.135-.055-.361-.198-.361-.55v-6.262c0-.829-.671-1.5-1.5-1.5h-2.087c-2.626 0-4.762-2.136-4.762-4.762v-16.699c0-2.626 2.136-4.762 4.762-4.762h25.048c1.27 0 2.464.496 3.365 1.397.901.9 1.397 2.095 1.397 3.364v16.699c0 2.626-2.137 4.762-4.763 4.762h-11.646zm37.913 17.336c0 2.625-2.14 4.761-4.771 4.761h-2.079c-.828 0-1.5.672-1.5 1.5v6.27c0 .348-.226.491-.359.545-.133.053-.385.107-.634-.148l-7.77-7.729c-.281-.279-.661-.437-1.058-.437h-11.64c-2.63 0-4.77-2.136-4.77-4.761v-14.337h8.314c4.065 0 7.403-3.141 7.73-7.123h13.765c2.631 0 4.771 2.135 4.771 4.76v16.699z"></path><g><path d="m33.461 36.667c-1.22 0-2.213.994-2.213 2.213s.994 2.213 2.213 2.213c1.221 0 2.215-.994 2.215-2.213s-.993-2.213-2.215-2.213z"></path><path d="m42.747 36.667c-1.22 0-2.213.994-2.213 2.213s.994 2.213 2.213 2.213c1.221 0 2.215-.994 2.215-2.213s-.994-2.213-2.215-2.213z"></path><path d="m52.033 36.667c-1.22 0-2.213.994-2.213 2.213s.994 2.213 2.213 2.213c1.221 0 2.215-.994 2.215-2.213s-.994-2.213-2.215-2.213z"></path></g><g><path d="m20.753 21.827c-.866 0-1.568.722-1.568 1.589 0 .846.681 1.589 1.568 1.589s1.589-.743 1.589-1.589c0-.867-.722-1.589-1.589-1.589z"></path><path d="m21.059 8.54c-3.192 0-4.659 1.892-4.659 3.169 0 .922.78 1.348 1.419 1.348 1.277 0 .757-1.821 3.169-1.821 1.182 0 2.128.52 2.128 1.608 0 1.277-1.324 2.01-2.104 2.672-.686.591-1.585 1.561-1.585 3.595 0 1.23.331 1.584 1.301 1.584 1.159 0 1.395-.52 1.395-.97 0-1.23.024-1.939 1.324-2.956.638-.497 2.648-2.105 2.648-4.328.001-2.222-2.009-3.901-5.036-3.901z"></path></g></g></svg>
                            <div class="text-box">
                                <span class="acc-text-small">Tư vấn mua hàng</span>
                                <span class="acc-text">1900 6750</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container">
                <div class="box-header">
                    <div class="rows">
                        <div class="col_3 header-logo">
                            <a href="" class="logo-wrapper">
                                <img src="public/img/logo.webp" alt="" class="lazyload loaded">
                            </a>
                        </div>
                        <div class="col_6 header-mid">
                            <div class="list-top-item header_tim_kiem">
                                <form action="/search" method="get" class="header-search-form input-group search-bar" role="search">
                                    <input name="query" required="" class="input-group-field auto-search search-auto form-control" placeholder="Tìm sản phẩm..." autocomplete="off" type="text">
                                    <input type="hidden" name="type" value="product">
                                    <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                    </button>
                                    
                                    <div class="search-suggest">
                                        <div class="search-recent d-none">
                                            <div class="search-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                                                </svg>
                                                Tìm kiếm gần đây
                                            </div>
                                            <div class="search-list">
                                            </div>
                                        </div>
                                        
                                        <div class="item-suggest">
                                            <div class="search-title">
                                                <svg height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 2"><g id="trend_up"><path id="background" d="m256 31a225.07 225.07 0 0 1 87.57 432.33 225.07 225.07 0 0 1 -175.14-414.66 223.45 223.45 0 0 1 87.57-17.67m0-31c-141.38 0-256 114.62-256 256s114.62 256 256 256 256-114.62 256-256-114.62-256-256-256z"></path><path d="m133.35 334.73a18.11 18.11 0 0 1 -8-1.9c-6.59-3.23-10.36-10.21-9.17-17a22.45 22.45 0 0 1 5.4-11.46c27.31-27.74 54.67-55 75.46-75.63a18 18 0 0 1 12.75-5.63c4.83 0 9.49 2.1 13.47 6.08l47 47 64-64h-6.46c-8.21 0-19.46-.1-25.91-.16-10.16-.08-17.28-7.16-17.33-17.22a17.52 17.52 0 0 1 4.84-12.53 17.19 17.19 0 0 1 12.31-4.88c13-.05 26-.07 38.52-.07 13.05 0 26.06 0 38.67.07 9.73 0 16.84 7 16.9 16.56.18 26.67.17 53 0 78.22-.06 9.58-7.33 16.54-17.28 16.54h-.2c-9.88-.09-16.89-7.06-17.05-16.94-.12-7.75-.1-15.63-.07-23.24q0-5 0-10v-2c-.25.22-.48.44-.7.66q-32.46 32.6-64.89 65.22l-9 9c-5.4 5.43-10.45 8.07-15.44 8.07s-9.9-2.58-15.16-7.88l-46.26-46.25-3.75 3.81c-4 4-7.82 7.76-11.52 11.48l-17.38 17.49c-10 10.08-20.34 20.51-30.55 30.73a18.58 18.58 0 0 1 -13.2 5.86z"></path></g></g></svg>
                                                Đề xuất phổ biến
                                            </div>
                                            <div class="search-list">
                                                <a href="" class="search-item" title="Tìm kiếm Tổ yến">
                                                    Tổ yến
                                                </a>
                                                
                                                <a href="" class="search-item" title="Tìm kiếm Tổ yến chưng tươi">
                                                    Tổ yến chưng tươi
                                                </a>
                                                
                                                <a href="" class="search-item" title="Tìm kiếm Yến chưng sẵn">
                                                    Yến chưng sẵn
                                                </a>
                                                
                                                <a href="" class="search-item" title="Tìm kiếm Sữa hạt tổ yến">
                                                    Sữa hạt tổ yến
                                                </a>
                                                
                                                <a href="" class="search-item" title="Tìm kiếm Tổ yến thô">
                                                    Tổ yến thô
                                                </a>
                                                
                                                <a href="" class="search-item" title="Tìm kiếm Tổ yến không đường">
                                                    Tổ yến không đường
                                                </a>
                                            </div>
                                        </div>
                                        <div class="list-search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col_3 header-right">
                            <div class="sudes-header-stores sm-hidden">
                                <a href="he-thong-cua-hang.html" title="Cửa hàng">
                                    <span class="box-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.34117 3.3316 9.61953 4.01832 10.7286L9.59977 19.723C9.70668 19.8953 9.89504 20 10.0976 20C10.0992 20 10.1007 20 10.1023 20C10.3066 19.9984 10.4954 19.8905 10.6003 19.7152L16.0395 10.6336C16.6883 9.54797 17.0312 8.3023 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0ZM15.0338 10.032L10.0888 18.2885L5.01434 10.1112C4.44273 9.18805 4.13281 8.12305 4.13281 7.03125C4.13281 3.80039 6.76914 1.16406 10 1.16406C13.2309 1.16406 15.8633 3.80039 15.8633 7.03125C15.8633 8.09066 15.5738 9.12844 15.0338 10.032Z" fill="white"></path>
                                            <path d="M10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.95738 8.03582 10.5469 10 10.5469C11.9884 10.5469 13.5156 8.93621 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562ZM10 9.38281C8.7009 9.38281 7.64844 8.32684 7.64844 7.03125C7.64844 5.73891 8.70766 4.67969 10 4.67969C11.2923 4.67969 12.3477 5.73891 12.3477 7.03125C12.3477 8.30793 11.3197 9.38281 10 9.38281Z" fill="white"></path>
                                        </svg>
                                    </span>
                                    <span class="item-title sm-hidden">Cửa hàng</span>
                                </a>
                            </div>
                            <div class="sudes-header-iwish sm-hidden">
                                <a href="danh-sach-yeu-thich.htm" title="Danh sách yêu thích">
                                    <span class="box-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                        </svg>
                                        <span class="js-wishlist-count">0</span>
                                    </span>
                                    <span class="item-title sm-hidden">Yêu thích</span>
                                </a>
                            </div>
                            <div class="sudes-header-account header-action_account">
                                <a href="" class="header-account" aria-label="Tài khoản" title="Tài khoản">
                                    <span class="box-icon">
                                        <svg viewBox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path>
                                        </svg>
                                    </span>
                                    <span class="item-title sm-hidden">Tài khoản</span>
                                    <svg width="30" height="30" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                        <path d="M7.13382 7.1278L7.13379 7.12777L0.512271 0.509686L0.795057 0.226752L0.51227 0.509685C0.512123 0.509538 0.51201 0.509431 0.511927 0.509356L7.13382 7.1278ZM7.13382 7.1278C7.62239 7.61603 7.622 8.40641 7.13301 8.89414L7.13298 8.89417L0.502368 15.5089C0.50222 15.509 0.502106 15.5091 0.502022 15.5092C0.501841 15.5092 0.501547 15.5093 0.501149 15.5093C0.500827 15.5093 0.500574 15.5093 0.500392 15.5092L7.13055 8.89499C7.13056 8.89498 7.13057 8.89497 7.13058 8.89495C7.61976 8.407 7.62011 7.61541 7.13138 7.12699L7.13382 7.1278Z"></path>
                                    </svg>
                                </a>
                                <ul>
                                    
                                    <li class="li-account">
                                        <?php if(is_customer_login()) { ?>
                                            <?php $user_item=get_user_by_email(customer_login()); $slug = create_slug($user_item['fullname']);?>
                                            <a href="<?php echo $slug."-info".$user_item['user_id'].".htm"?>"><i class="fa-regular fa-user" style= "text-align: start;width: 18px;height: 18px;margin-right: 5px;display: flex; align-items: center;"></i> <?php echo $user_item['fullname'];?></a>
                                        <?php 
                                            }
                                            else {
                                        ?>                                       
                                        <a rel="nofollow" href="dang-nhap.htm" title="Đăng nhập">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
                                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                                        </svg>
                                        Đăng nhập</a>
                                        <?php }?>
                                    </li>
                                    <li class="li-account">
                                        <?php if(is_customer_login()) { ?>
                                            <a href="?mod=users&action=logout"><i class="fa-regular fa-arrow-right-from-bracket" style= "text-align: start;width: 18px;height: 18px;margin-right: 5px;display: flex; align-items: center;"></i>Đăng xuất</a>
                                        <?php } else {?>
                                            <a rel="nofollow" href="dang-ky.htm" title="Đăng ký">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                                </svg>
                                            Đăng ký</a>
                                        <?php }?>
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="sudes-header-cart header-action_cart">
                                <a class="a-hea" href="gio-hang.htm" aria-label="Giỏ hàng" title="Giỏ hàng">
                                    <span class="box-icon">
                                        <svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_253_2)">
                                                <path d="M400.739 512H111.461C50.2676 512 0.200195 462.629 0.200195 402.286V398.629L11.3263 106.057C13.1806 45.7143 63.248 0 122.587 0H389.613C448.952 0 499.02 45.7143 500.874 106.057L512 398.629C513.854 427.886 502.728 455.314 482.331 477.257C461.933 499.2 434.118 512 404.448 512C404.448 512 402.594 512 400.739 512ZM122.587 36.5714C81.7915 36.5714 50.2676 67.6572 48.4132 106.057L37.2871 402.286C37.2871 442.514 70.6654 475.429 111.461 475.429H404.448C424.846 475.429 443.389 466.286 456.37 451.657C469.35 437.029 476.768 418.743 476.768 398.629L465.641 106.057C463.787 65.8286 432.263 36.5714 391.468 36.5714H122.587Z" fill="black"></path>
                                                <path d="M256.1 219.429C183.78 219.429 126.295 162.743 126.295 91.4288C126.295 80.4574 133.713 73.1431 144.839 73.1431C155.965 73.1431 163.382 80.4574 163.382 91.4288C163.382 142.629 204.178 182.857 256.1 182.857C308.021 182.857 348.817 142.629 348.817 91.4288C348.817 80.4574 356.235 73.1431 367.361 73.1431C378.487 73.1431 385.904 80.4574 385.904 91.4288C385.904 162.743 328.419 219.429 256.1 219.429Z" fill="black"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_253_2">
                                                    <rect width="512" height="512" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span id="cart-count" class="count_item count_item_pr hidden-count"><?php echo !empty($_SESSION['cart']['buy']) ? $_SESSION['cart']['info']['num_order'] : 0; ?></span>
                                    </span>
                                    <span class="item-title sm-hidden">Giỏ hàng</span>
                                </a>
                                
                                <div class="top-cart-content">		
                                    <div class="CartHeaderContainer">
                                        <?php if(!empty($_SESSION['cart']['buy'])){ ?> 
                                        <form class="cart ajaxcart cartheader">
                                            <div class="title_cart_hea" onclick="window.location.href='gio-hang.htm'">Giỏ hàng</div>
                                                
                                                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                                    
                                                        <?php foreach($_SESSION['cart']['buy'] as $item){
                                                            $slug=create_slug($item['product_title']); ?>
                                                        <div class="ajaxcart__row">
                                                            <div class="ajaxcart__product cart_product" data-line="3 ">
                                                                <a href="<?php echo $slug."sp".$item['product_id'].".htm"?>" class="ajaxcart__product-image cart_image" title="">
                                                                    <img width="80" height="80" src="admin/public/images/<?php echo $item['product_thumb']?>" alt="">
                                                                </a>
                                                                <div class="grid__item cart_info">
                                                                    <div class="ajaxcart__product-name-wrapper cart_name">
                                                                        <a href="<?php echo $slug."sp".$item['product_id'].".htm"?>" class="ajaxcart__product-name h4 line-clamp line-clamp-2-new" title=""><?php echo $item['product_title'] ?></a>
                                                                        <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="?mod=cart&action=delete&id=<?php echo $item['product_id'] ?>" data-line="1"></a>
                                                                    </div>
                                                                    <div class="grid">
                                                                        <div class="grid__item one-half cart_select cart_item_name">
                                                                            <div class="ajaxcart__qty input-group-btn">
                                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="<?php echo $item['product_id']; ?>" data-qty="<?php echo $item['qty']; ?>" data-line="1" aria-label="-"> - </button>
                                                                                <input type="text" name="updates[]" class="num-order number-sidebar" maxlength="3" value="<?php echo $item['qty'] ?>" min="1" data-id="<?php echo $item['product_id'] ?>" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="<?php echo $item['product_id']; ?>" data-line="1" data-qty="<?php echo $item['qty']; ?>" aria-label="+"> + </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid__item one-half text-right cart_prices">
                                                                            <span class="cart-price sub-total"><?php echo currency_format($item['sub_total']) ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    
                                                </div>
                                                
                                                <div class="ajaxcart__footer ajaxcart__footer--fixed cart-footer">
                                                    <div class="ajaxcart__subtotal">
                                                        <div class="cart__subtotal">
                                                            <div class="cart__col-6">Tổng tiền:</div>
                                                            <div class="text-right cart__totle"><span class="total-price"><?php echo currency_format(get_total_cart())  ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="cart__btn-proceed-checkout-dt ">
                                                        <button onclick="window.location.href='gio-hang.htm'" type="button" name="btn-thanhtoan"  class="button btn btn-primary cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php } else{?>
                                        <div class="cart--empty-message">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve"> 
                                                <g> <g> 
                                                    <path d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z"></path> 
                                                </g> </g> 
                                                <g> <g> 
                                                    <path d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z"></path> </g> </g> <g> <g> <path d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z"></path> 
                                                </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> 
                                            </svg>
                                            <p>Giỏ hàng của bạn đang trống</p>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-menu">
            <div class="container">
                <div class="navigation-horizontal">
                    <div class="title-menu-mb md-hidden">
                        <ul id="tabs-menu-mb">
                            <li class="tab-link" data-tab="tab-menu-1">Danh mục</li>
                            <li class="tab-link" data-tab="tab-menu-2">Menu</li>
                        </ul>
                        <div class="close-menu-mb"></div>
                    </div>
                    <div class="rows">
                        <div class="col_3 product-cate sudes-cate-header">
                            <div class="title">
                                <svg class="icon-left" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V7C0 7.26522 0.105357 7.51957 0.292893 7.70711C0.48043 7.89464 0.734784 8 1 8H7C7.26522 8 7.51957 7.89464 7.70711 7.70711C7.89464 7.51957 8 7.26522 8 7V1C8 0.734784 7.89464 0.48043 7.70711 0.292893C7.51957 0.105357 7.26522 0 7 0V0ZM6 6H2V2H6V6ZM17 0H11C10.7348 0 10.4804 0.105357 10.2929 0.292893C10.1054 0.48043 10 0.734784 10 1V7C10 7.26522 10.1054 7.51957 10.2929 7.70711C10.4804 7.89464 10.7348 8 11 8H17C17.2652 8 17.5196 7.89464 17.7071 7.70711C17.8946 7.51957 18 7.26522 18 7V1C18 0.734784 17.8946 0.48043 17.7071 0.292893C17.5196 0.105357 17.2652 0 17 0V0ZM16 6H12V2H16V6ZM7 10H1C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11V17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18H7C7.26522 18 7.51957 17.8946 7.70711 17.7071C7.89464 17.5196 8 17.2652 8 17V11C8 10.7348 7.89464 10.4804 7.70711 10.2929C7.51957 10.1054 7.26522 10 7 10ZM6 16H2V12H6V16ZM14 10C11.794 10 10 11.794 10 14C10 16.206 11.794 18 14 18C16.206 18 18 16.206 18 14C18 11.794 16.206 10 14 10ZM14 16C12.897 16 12 15.103 12 14C12 12.897 12.897 12 14 12C15.103 12 16 12.897 16 14C16 15.103 15.103 16 14 16Z" fill="#F4342A"></path>
                                </svg>
                                <span>Danh mục sản phẩm</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right icon-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path>
                                </svg>
                            </div>
                            <div class="list-product-cate">
                                <ul class="list-main-cate">
                                    <?php $list_category2= get_list_category_level2();
                                    foreach($list_category2 as $item2){
                                        $slug=create_slug($item2['ten_danhmuc']);
                                        $list_category_level3= get_list_category_by_idcha($item2['danhmuc_id']);
                                        $dem_cap3 = count($list_category_level3);
                                    ?>
                                    <li class="<?php if($dem_cap3 > 0) echo 'list-main-cate-child' ?> menu-item-count">
                                        <a href="<?php echo $item2['tenmien']?>.htm" title="Tổ yến">
                                            <img class="lazyload loaded" src="public/img/index-cate-icon-1.webp">
                                            <?php echo $item2['ten_danhmuc']?>
                                        </a>
                                        <i class="open_mnu down_icon"></i>

                                        <ul class="menu-child sub-menu sudes-sub-mega-menu" >
                                            <?php
                                            foreach($list_category_level3 as $item3){
                                                $slug=create_slug($item3['ten_danhmuc']);
                                            ?>
                                            <li class="sudes-main-cate-has-child clearfix">
                                                <a href="<?php echo $item3['tenmien']?>.htm" title="<?php echo $item3['ten_danhmuc']?>"><?php echo $item3['ten_danhmuc']?></a>
                                                <i class="open_mnu down_icon"></i>
                                                <ul class="menu-child menu-child-2 sub-menu clearfix">
                                                    <?php $list_category_level4= get_list_category_by_idcha($item3['danhmuc_id']); 
                                                    foreach($list_category_level4 as $item4){
                                                        $slug=create_slug($item4['ten_danhmuc']);
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo $item4['tenmien']?>.htm" title=""><?php echo $item4['ten_danhmuc']?></a>
                                                    </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="col_9 sudes-main-header">
                            <div class="col-menu has-promo-btn">
                                <ul id="nav" class="nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="" title="Trang chủ">Trang chủ</a>
                                    </li>
                                    <?php $list_category= get_list_category();  
                                    foreach($list_category as $item){
                                        $slug=create_slug($item['ten_danhmuc']);
                                        $list_category_level2= get_list_category_by_idcha($item['danhmuc_id']);
                                        $dem_cap2 = count($list_category_level2);
                                    ?>
                                    <li class="nav-item <?php if($dem_cap2 > 0) echo 'has-childs' ?>">
                                        <a class="nav-link" href="<?php echo  $item['tenmien']?>.htm" title="<?php echo $item['ten_danhmuc']; ?>">
                                            <?php echo $item['ten_danhmuc']?>
                                            <?php if($dem_cap2 > 0) echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path>
                                                </svg>'
                                            ?>   
                                        </a>
                                        <i class="open_mnu down_icon"></i>
                                        <ul class="dropdown-menu">
                                            <?php 
                                            foreach($list_category_level2 as $item2){
                                                $slug=create_slug($item2['ten_danhmuc']);
                                                $list_category_level3= get_list_category_by_idcha($item2['danhmuc_id']);
                                                $dem_cap3 = count($list_category_level3);
                                            ?>
                                            <li class="nav-item-lv2 <?php if($dem_cap3 > 0) echo 'dropdown-submenu has-childs2' ?>">
                                                <a class="nav-link" href="<?php echo $item2['tenmien']?>.htm" title="<?php echo $item2['ten_danhmuc']; ?>">
                                                    <?php echo $item2['ten_danhmuc']?>
                                                    <?php if($dem_cap3 > 0) echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path></svg>'
                                                ?> 
                                                </a>
                                                <i class="open_mnu down_icon"></i>
                                                <ul class="dropdown-menu">
                                                    <?php 
                                                    foreach($list_category_level3 as $item3){
                                                        $slug=create_slug($item3['ten_danhmuc']);
                                                    ?>
                                                    <li class="nav-item-lv3">
                                                        <a class="nav-link" href="<?php echo $item3['tenmien']?>.htm" title="<?php echo $item3['ten_danhmuc']; ?>"><?php echo $item3['ten_danhmuc']?></a>
                                                    </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </li>

                                    <?php }?>


                                    <li class="nav-item ">
                                        <a class="nav-link" href="lien-he.htm" title="Liên hệ">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="button-promo">
                                <a href="/san-pham-khuyen-mai" title="Hot deal" class="duration-300">
                                    <img src="public/img/btn_promotion_icon.webp" data-src="public/img/btn_promotion_icon.webp" alt="Hot deal" class="lazyload loaded" data-was-processed="true">
                                    <span>Hot deal</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        const header = document.querySelector('header.header');
        let headerHeight = header.offsetHeight;
        let resizeWindow = window.innerWidth;
        let offsetStickyHeader = header.offsetHeight;
        let offsetStickyDown = 0;
        let resizeTimer;

        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content-mb');

        const handleResize = () => {
            if (resizeTimer) clearTimeout(resizeTimer);

            resizeTimer = setTimeout(() => {
                const newWidth = window.innerWidth;

                if (resizeWindow !== newWidth) {
                    header.classList.remove('hSticky');
                    header.style.minHeight = '';

                    headerHeight = header.offsetHeight;
                    header.style.minHeight = `${headerHeight}px`;

                    resizeWindow = newWidth;
                }
            }, 200);
        };

        const handleScroll = () => {
            const scrollTop = window.scrollY;

            if (scrollTop > offsetStickyHeader && scrollTop > offsetStickyDown) {
                header.classList.add('hSticky');
            }

            if (scrollTop <= offsetStickyDown && scrollTop <= offsetStickyHeader) {
                header.classList.remove('hSticky');
            }

            offsetStickyDown = scrollTop;
        };

        const handleTabClick = (tabLink) => {
            const tabId = tabLink.dataset.tab;

            tabLinks.forEach((link) => link.classList.remove('active'));
            tabLink.classList.add('active');

            tabContents.forEach((tabContent) => tabContent.classList.remove('active'));
            document.getElementById(tabId).classList.add('active');
        };

        const initializeTabs = () => {
            if (window.innerWidth <= 991) {
                const tabMenu1 = document.getElementById('tab-menu-1');
                const tabLinkMenu1 = document.querySelector('.tab-link[data-tab="tab-menu-1"]');

                tabMenu1.classList.add('active');
                tabLinkMenu1.classList.add('active');

                tabLinks.forEach((tabLink) => {
                    tabLink.addEventListener('click', () => handleTabClick(tabLink));
                });
            }
        };

        window.addEventListener('resize', handleResize);
        window.addEventListener('scroll', handleScroll);

        tabLinks.forEach((tabLink) => {
            tabLink.addEventListener('click', () => handleTabClick(tabLink));
        });

        document.addEventListener('DOMContentLoaded', initializeTabs);
    </script>
