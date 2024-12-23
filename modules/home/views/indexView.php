<?php
get_header();
?>
    <div class="bodywrap">
            <div class="section-slider">
                <div class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transition-duration: 1000ms;">
                        <div class="swiper-slide">
                            <a href="/collections/all" class="clearfix" title="Slider 1">
                                <picture>
                                    <source 
                                        media="(min-width: 1200px)"
                                        srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_1.jpg?1717814629369">
                                    <source 
                                        media="(min-width: 992px)"
                                        srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_1.jpg?1717814629369">
                                    <source 
                                        media="(min-width: 569px)"
                                        srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_1.jpg?1717814629369">
                                    <source 
                                        media="(max-width: 480px)"
                                        srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/slider_1.jpg?1717814629369">
                                    <img width="1920" height="600"
                                        src="//bizweb.dktcdn.net/thumb/grande/100/506/650/themes/944598/assets/slider_1.jpg?1717814629369" 
                                        alt="Slider 1" class="img-responsive center-block duration-300" />
                                </picture>
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="/collections/all" class="clearfix" title="Slider 2">
                                <picture>
                                    <source 
                                            media="(min-width: 1200px)"
                                            srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_2.jpg?1717814629369">
                                    <source 
                                            media="(min-width: 992px)"
                                            srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_2.jpg?1717814629369">
                                    <source 
                                            media="(min-width: 569px)"
                                            srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_2.jpg?1717814629369">
                                    <source 
                                            media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/slider_2.jpg?1717814629369">
                                    <img width="1920" height="600"
                                        src="//bizweb.dktcdn.net/thumb/grande/100/506/650/themes/944598/assets/slider_2.jpg?1717814629369" 
                                        alt="Slider 2" class="img-responsive center-block duration-300" />
                                </picture>
                            </a>
                        </div>                    
                        
                        <div class="swiper-slide">
                            <a href="/collections/all" class="clearfix" title="Slider 3">
                                <picture>
                                    <source 
                                            media="(min-width: 1200px)"
                                            srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_3.jpg?1717814629369">
                                    <source 
                                            media="(min-width: 992px)"
                                            srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_3.jpg?1717814629369">
                                    <source 
                                            media="(min-width: 569px)"
                                            srcset="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_3.jpg?1717814629369">
                                    <source 
                                            media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/slider_3.jpg?1717814629369">
                                    <img width="1920" height="600"
                                        src="//bizweb.dktcdn.net/thumb/grande/100/506/650/themes/944598/assets/slider_3.jpg?1717814629369" 
                                        alt="Slider 3" class="img-responsive center-block duration-300" />
                                </picture>
                            </a>
                        </div>
                        
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                            <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                            <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-progress-bar"><div class="progress"></div></div>
                </div>
            </div>
        </div>
        <script>
            let swiperSlider = null;
            let progressBarInterval;
        
            function initProgressBar() {
                const progressBar = document.querySelector('.section-slider .swiper-progress-bar .progress');
                progressBar.style.width = 0;
            }
        
            function startProgressBar() {
                const progressBar = document.querySelector('.section-slider .swiper-progress-bar .progress');
                const duration = 8000;
                progressBarInterval = setInterval(function () {
                    let progress = parseFloat(progressBar.style.width) || 0;
                    progress += (100 / duration) * (1000 / 60);
                    progressBar.style.width = Math.min(progress, 100) + '%';
                }, 1000 / 60);
            }
        
            function resetProgressBar() {
                clearInterval(progressBarInterval);
                initProgressBar();
            }
        
            function initSwiperSlider() {
                swiperSlider = new Swiper('.section-slider .swiper-container', {
                    speed: 1000,
                    spaceBetween: 14,
                    effect: 'fade',
                    navigation: {
                        nextEl: '.section-slider .swiper-container .swiper-button-next',
                        prevEl: '.section-slider .swiper-container .swiper-button-prev',
                    },
                    autoplay: {
                        delay: 8000,
                        disableOnInteraction: false,
                    },
                    on: {
                        init: function () {
                            initProgressBar();
                            startProgressBar();
                        },
                        slideChangeTransitionStart: function () {
                            resetProgressBar();
                        },
                        slideChangeTransitionEnd: function () {
                            startProgressBar();
                        },
                    },
                    pagination: {
                        el: '.section-slider .swiper-container .swiper-pagination',
                        clickable: true,
                    },
                });
            }
        
            initSwiperSlider();
        </script>

        <div class="section-services">
            <div class="container">
                <div class="bg-container">
                    <div class="wire-left"></div>
                    <div class="wire-right"></div>
                    <div class="services-border">
                        <div class="rows promo-box">
                            <div class="col_3 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload loaded" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_1.png?1717814629369" alt="Sudes Nest" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_1.png?1717814629369" data-was-processed="true">
                                </div>
                                <div class="info">
                                    <h3>
                                        Giao hàng siêu tốc
                                    </h3>
                                    <span>
                                        Giao hàng trong 24h
                                    </span>
                                </div>
                            </div>
                            <div class="col_3 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload loaded" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_2.png?1717814629369" alt="Sudes Nest" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_2.png?1717814629369" data-was-processed="true">
                                </div>
                                <div class="info">
                                    <h3>
                                        Tư vấn miễn phí
                                    </h3>
                                    <span>
                                        Đội ngũ tư vấn tận tình
                                    </span>
                                </div>
                            </div>
                            <div class="col_3 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload loaded" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_3.png?1717814629369" alt="Sudes Nest" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_3.png?1717814629369" data-was-processed="true">
                                </div>
                                <div class="info">
                                    <h3>
                                        Thanh toán
                                    </h3>
                                    <span>
                                        Thanh toán an toàn
                                    </span>
                                </div>
                            </div>
                            <div class="col_3 promo-item duration-300">
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload loaded" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_4.png?1717814629369" alt="Sudes Nest" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/ser_4.png?1717814629369" data-was-processed="true">
                                </div>
                                <div class="info">
                                    <h3>
                                        Giải pháp quà tặng
                                    </h3>
                                    <span>
                                        Dành cho doanh nghiệp
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-index section_collection">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        Yến sào Sudes Nest
                    </span>
                    
                    <h2>
                        Bộ sưu tập quà tặng cao cấp
                    </h2>
                    
                    <div class="desc">
                        Bộ quà tặng Sudes Nest là giải pháp quà Tết, quà Trung Thu, quà tặng doanh nghiệp,.. được lựa chọn để kết nối các mối quan hệ xã hội, kết nối tình thân, vun đắp các mối quan hệ thêm bền chặt gắn kết.
                    </div>
                    
                    <div class="title-separator">
                        <div class="separator-center"></div>
                    </div>
                </div>

                <div class="rows load-after">
                    <div class="col_3 col_relative">
                        <div class="three_banner">
                            <a class="duration-300" href="" title="Bộ quà 4 mùa">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/img_4banner_1.jpg?1717814629369">
                                    <img loading="lazy" class="lazyload duration-300 loaded" src="public/img/img_4banner_1.webp" alt="Bộ quà 4 mùa" data-was-processed="true">
                                </picture>
                                <div class="banner-info duration-300">
                                    <h3>
                                        Bộ quà 4 mùa
                                    </h3>
                                    <span>
                                        Giá chỉ từ 499k
                                    </span>
                                    <div class="btn">
                                        Xem ngay »
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col_3 col_relative">
                        <div class="three_banner">
                            <a class="duration-300" href="" title="Bộ quà Lộc Phát">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/img_4banner_2.jpg?1717814629369">
                                    <img loading="lazy" class="lazyload duration-300 loaded" src="public/img/img_4banner_2.webp" alt="Bộ quà Lộc Phát" data-was-processed="true">
                                </picture>
                                <div class="banner-info duration-300">
                                    <h3>
                                        Bộ quà Lộc Phát
                                    </h3>
                                    <span>
                                        Giá chỉ từ 599k
                                    </span>
                                    <div class="btn">
                                        Xem ngay »
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col_3 col_relative">
                        <div class="three_banner">
                            <a class="duration-300" href="" title="Bộ quà Thịnh Vượng">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/img_4banner_3.jpg?1717814629369">
                                    <img loading="lazy" class="lazyload duration-300 loaded" src="public/img/img_4banner_3.webp" alt="Bộ quà Thịnh Vượng" data-was-processed="true">
                                </picture>
                                <div class="banner-info duration-300">
                                    <h3>
                                        Bộ quà Thịnh Vượng
                                    </h3>
                                    <span>
                                        Giá chỉ từ 799k
                                    </span>
                                    <div class="btn">
                                        Xem ngay »
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col_3 col_relative">
                        <div class="three_banner">
                            <a class="duration-300" href="" title="Bộ quà Tài lộc">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/img_4banner_4.jpg?1717814629369">
                                    <img loading="lazy" class="lazyload duration-300 loaded" src="public/img/img_4banner_4.webp" alt="Bộ quà Tài lộc" data-was-processed="true">
                                </picture>
                                <div class="banner-info duration-300">
                                    <h3>
                                        Bộ quà Tài lộc
                                    </h3>
                                    <span>
                                        Giá chỉ từ 999k
                                    </span>
                                    <div class="btn">
                                        Xem ngay »
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-index section_flash_sale">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        Yến sào Sudes Nest
                    </span>
                    
                    <h2>
                        <a href="/san-pham-khuyen-mai" title="Khuyến mãi đặc biệt">
                            Khuyến mãi đặc biệt
                        </a>
                    </h2>

                    <div class="title-separator">
                        <div class="separator-center"></div>
                    </div>

                    <div class="count-down">
        				<div class="timer-view" data-countdown="countdown" data-date="12-25-2024-09-15-45"></div>
			        </div>
                </div>

                <div class="block-product-sale has-deal-time">
                    <div class="swiper_sale swiper-container">
                        <div class="swiper-wrapper load-after" data-section="section_flash_sale">					
                            <?php foreach($list_product_banchay as $item) { 
                                $slug=create_slug($item['title']);
                                ?>
                                <div class="swiper-slide">
                                    <div class="item_product_main">							
                                        <form action="/cart/add" method="post" class="variants product-action item-product-main product-flash-sale duration-300" data-cart-form="" data-id="product-actions-34620973" enctype="multipart/form-data">
                                            <span class="flash-sale">-37%</span>
                                            
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="chi-tiet-san-pham.html" title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">
                                                    <img class="lazyload duration-300 loaded" src="admin/public/images/<?php echo $item['img']?>" data-src="public/img/<?php echo $item['img']?>" alt="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan" data-was-processed="true">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="chi-tiet-san-pham.html" title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan"><?php echo $item['title']?></a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="compare-price">799.000₫</span>
                                                        <span class="price"><?php echo currency_format($item['price']) ?></span>
                                                        <div class="productcount">
                                                            <div class="countitem visible">	
                                                                <div class="fire">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16">
                                                                        <defs>
                                                                            <linearGradient id="prefix__a" x1="50%" x2="50%" y1="36.31%" y2="88.973%">
                                                                                <stop offset="0%" stop-color="#FDD835"></stop>
                                                                                <stop offset="100%" stop-color="#FFB500"></stop>
                                                                            </linearGradient>
                                                                        </defs>
                                                                        <g fill="none" fill-rule="evenodd">
                                                                            <path d="M0 0H16V16H0z"></path>
                                                                            <path fill="url(#prefix__a)" stroke="#FF424E" stroke-width="1.1" d="M9.636 6.506S10.34 2.667 7.454 1c-.087 1.334-.786 2.571-1.923 3.401-1.234 1-3.555 3.249-3.53 5.646-.017 2.091 1.253 4.01 3.277 4.953.072-.935.549-1.804 1.324-2.41.656-.466 1.082-1.155 1.182-1.912 1.729.846 2.847 2.469 2.944 4.27v.012c1.909-.807 3.165-2.533 3.251-4.467.205-2.254-1.134-5.316-2.321-6.317-.448.923-1.144 1.725-2.022 2.33z" transform="rotate(4 8 8)"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <span class="a-center">Đã bán <b>134</b></span>
                                                                <div class="countdown" style="width:54%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110202248">
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary " title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"></path></g><g><path d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"></path></g></g></svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1717814629369" alt="Thêm vào yêu thích"> 
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php }?>
                        </div>

                        <div class="swiper-button-prev">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="view-more clearfix">
                        <a href="san-pham-khuyen-mai" title="Xem tất cả" class="btn btn-primary frame">
                            <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"/>
                                <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"/>
                            </svg>
                            Xem tất cả 
                            <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                                <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"/>
                                <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"/>
                            </svg>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

            <!-- <script>
                $(document).ready(function ($) {
                    var swiper_sale = null;
                        swiper_sale = new Swiper('.swiper_sale', {
                            slidesPerView: 4,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            navigation: {
                                nextEl: '.swiper_sale .swiper-button-next',
                                prevEl: '.swiper_sale .swiper-button-prev',
                            },
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                }
                            }
                        });
                    
                    function destroySwiperSale() {
                        if (swiper_sale) {
                            swiper_sale.destroy(true, true);
                            swiper_sale = null;
                        }
                    }
                    function toggleSwiperSale() {
                        if ($(window).width() <= 767 && swiper_sale) {
                            destroySwiperSale();
                        } else if ($(window).width() > 767 && !swiper_sale) {
                            initSwiperSale();
                        }
                    }
                    toggleSwiperSale();
                    $(window).resize(toggleSwiperSale);	
                });

                (function($){
                    "user strict";
                    $.fn.Dqdt_CountDown = function( options ) {
                        return this.each(function() {
                            new  $.Dqdt_CountDown( this, options );
                        });
                    }
                    $.Dqdt_CountDown = function( obj, options ){
                        this.options = $.extend({
                            autoStart			: true,
                            LeadingZero:true,
                            DisplayFormat:"<div><span>%%D%%</span> Days</div><div><span>%%H%%</span> Hours</div><div><span>%%M%%</span> Mins</div><div><span>%%S%%</span> Secs</div>",
                            FinishMessage:"Háº¿t háº¡n",
                            CountActive:true,
                            TargetDate:null
                        }, options || {} );
                        if( this.options.TargetDate == null || this.options.TargetDate == '' ){
                            return ;
                        }
                        this.timer  = null;
                        this.element = obj;
                        this.CountStepper = -1;
                        this.CountStepper = Math.ceil(this.CountStepper);
                        this.SetTimeOutPeriod = (Math.abs(this.CountStepper)-1)*1000 + 990;
                        var dthen = new Date(this.options.TargetDate);
                        var dnow = new Date();
                        if( this.CountStepper > 0 ) {
                            ddiff = new Date(dnow-dthen);
                        }
                        else {
                            ddiff = new Date(dthen-dnow);
                        }
                        gsecs = Math.floor(ddiff.valueOf()/1000);
                        this.CountBack(gsecs, this);
                    };
                    $.Dqdt_CountDown.fn =  $.Dqdt_CountDown.prototype;
                    $.Dqdt_CountDown.fn.extend =  $.Dqdt_CountDown.extend = $.extend;
                    $.Dqdt_CountDown.fn.extend({
                        calculateDate:function( secs, num1, num2 ){
                            var s = ((Math.floor(secs/num1))%num2).toString();
                            if ( this.options.LeadingZero && s.length < 2) {
                                s = "0" + s;
                            }
                            return "<b>" + s + "</b>";
                        },
                        CountBack:function( secs, self ){
                            if (secs < 0) {
                                self.element.innerHTML = '<div class="lof-labelexpired"> '+self.options.FinishMessage+"</div>";
                                return;
                            }
                            clearInterval(self.timer);
                            DisplayStr = self.options.DisplayFormat.replace(/%%D%%/g, self.calculateDate( secs,86400,100000) );
                            DisplayStr = DisplayStr.replace(/%%H%%/g, self.calculateDate(secs,3600,24));
                            DisplayStr = DisplayStr.replace(/%%M%%/g, self.calculateDate(secs,60,60));
                            DisplayStr = DisplayStr.replace(/%%S%%/g, self.calculateDate(secs,1,60));
                            self.element.innerHTML = DisplayStr;
                            if (self.options.CountActive) {
                                self.timer = null;
                                self.timer =  setTimeout( function(){
                                    self.CountBack((secs+self.CountStepper),self);
                                },( self.SetTimeOutPeriod ) );
                            }
                        }
                    });
                    $(document).ready(function(){
                        $('[data-countdown="countdown"]').each(function(index, el) {
                            var $this = $(this);
                            var $date = $this.data('date').split("-");
                            $this.Dqdt_CountDown({
                                TargetDate:$date[0]+"/"+$date[1]+"/"+$date[2]+" "+$date[3]+":"+$date[4]+":"+$date[5],
                                DisplayFormat:"<div class=\"block-timer\"><p>%%D%%</p><span>Ngày</span></div><div class=\"block-timer\"><p>%%H%%</p><span>Giờ</span></div><div class=\"block-timer\"><p>%%M%%</p><span>Phút</span></div><div class=\"block-timer\"><p>%%S%%</p><span>Giây</span></div>",
                                FinishMessage: "Chương trình đã hết hạn"
                            });
                        });
                    });
                })(jQuery);
            </script> -->
            

            <div class="section-index section_coupons">
                <div class="container">
                    <div class="section-title">
                        <span class="sub-title">
                            Yến sào Sudes Nest
                        </span>
                        
                        <h2>
                            Mã giảm giá dành cho bạn
                        </h2>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>
                    <div class="swiper_coupons swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-coupon">
                                    <div class="mask-ticket"></div>
                                    <div class="image">
                                        <img  width="88" height="88" class="lazyload" src="public/img/img_coupon_1.webp" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/img_coupon_1.jpg?1717814629369" alt="NEST200">
                                    </div>
                                    <div class="content_wrap">
                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="NEST200" data-time="12/12/2024" data-content="Áp dụng cho đơn hàng từ <b>4,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                <path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"></path>
                                            </svg>
                                        </a>
                                        <div class="content-top">
                                            NEST200
                                            <span class="line-clamp line-clamp-2">Giảm 200k giá trị đơn hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 12/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NEST200" title="Sao chép">Copy mã</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="box-coupon">
                                    <div class="mask-ticket"></div>
                                    <div class="image">
                                        <img  width="88" height="88" class="lazyload" src="public/img/img_coupon_1.webp" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/img_coupon_2.jpg?1717814629369" alt="NEST100">
                                    </div>
                                    <div class="content_wrap">
                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="NEST100" data-time="24/12/2024" data-content="Áp dụng cho đơn hàng từ <b>2,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                <path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"></path>
                                            </svg>
                                        </a>
                                        <div class="content-top">
                                            NEST100
                                            <span class="line-clamp line-clamp-2">Giảm 100k giá trị đơn hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 24/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NEST100" title="Sao chép">Copy mã</div>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            
                            
                            <div class="swiper-slide">
                                <div class="box-coupon">
                                    <div class="mask-ticket"></div>
                                    <div class="image">
                                        <img  width="88" height="88" class="lazyload" src="public/img/img_coupon_1.webp" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/img_coupon_3.jpg?1717814629369" alt="NEST50">
                                    </div>
                                    <div class="content_wrap">
                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="NEST50" data-time="25/12/2024" data-content="Áp dụng cho đơn hàng từ <b>1,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                <path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"></path>
                                            </svg>
                                        </a>
                                        <div class="content-top">
                                            NEST50
                                            <span class="line-clamp line-clamp-2">Giảm 50k giá trị đơn hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 25/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NEST50" title="Sao chép">Copy mã</div>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            
                            
                            <div class="swiper-slide">
                                <div class="box-coupon">
                                    <div class="mask-ticket"></div>
                                    <div class="image">
                                        <img  width="88" height="88" class="lazyload" src="public/img/img_coupon_1.webp" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/img_coupon_4.jpg?1717814629369" alt="NESTFREESHIP">
                                    </div>
                                    <div class="content_wrap">
                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="NESTFREESHIP" data-time="25/12/2024" data-content="Miễn phí giao hàng (tối đa 30k) cho đơn hàng từ <b>1,000,000đ</b> trở lên">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                <path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"></path>
                                            </svg>
                                        </a>
                                        <div class="content-top">
                                            NESTFREESHIP
                                            <span class="line-clamp line-clamp-2">Miễn phí giao hàng</span>
                                        </div>
                                        <div class="content-bottom">
                                            <span>HSD: 25/12/2024</span>
                                            <div class="coupon-code js-copy" data-copy="NESTFREESHIP" title="Sao chép">Copy mã</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-button-prev">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-index section_about">
                <div class="bg-banner">
                    <div class="container">
                        <div class="rows">
                            <div class="col_6 col_relative col-left">
                                <div class="product-content">
                                    <div class="section-title">
                                        
                                        <span class="sub-title">
                                            Yến sào Sudes Nest
                                        </span>
                                        
                                        <h2>
                                            Câu chuyện về Sudes Nest
                                        </h2>
                                        <div class="title-separator">
                                            <div class="separator-center"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="desc">
                                        Như quý vị đã biết: "Tài sản lớn nhất của đời người là sức khỏe và trí tuệ", có sức khỏe và trí tuệ thì sẽ có tất cả. Sản phẩm yến sào là thực phẩm bổ dưỡng mang lại cho Quý vị sức khỏe, trí tuệ và sự trẻ trung. Yến sào được thị trường đón nhận với phương châm: "Chất lượng uy tín là thương hiệu". <br>
                                        Sản phẩm yến sào của Yến sào <b>Sudes Nest</b> được khai thác và yến nuôi tổ với chất lượng tuyệt đối...
                                    </div>
                                    
                                    
                                    <a href="/gioi-thieu" title="Xem chi tiết" class="show-more btn btn-extent frame">
                                        <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                        </svg>
                                        Xem chi tiết
                                        <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                        </svg>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="col_6 col_relative col-right">
                                <div class="banner-product">
                                    <img width="600" height="371" src="public/img/section_about_product_1.webp" data-src="//bizweb.dktcdn.net/thumb/grande/100/506/650/themes/944598/assets/section_about_product_1.png?1717814629369" alt="Sudes Banner" class="img-responsive center-block lazyload loaded" data-was-processed="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                $parent_categories_filter = array_filter($parent_categories, function ($cat_item){
                    return $cat_item['cap'] == 2 && $cat_item['noibat'] == 2;
                });
                
                $loop_counter = 0;
                foreach ($parent_categories_filter as $parent_category){
                    $loop_counter++;
            ?>
            <div class="section-index section_product_tab section_product_tab_1">
                <div class="container">
                    <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1">
                        <div class="section-title">
                    
                            <span class="sub-title">
                                Yến sào Sudes Nest
                            </span>
                            
                            <h2>
                                <a href=" /to-yen" title="Tổ yến"><?php echo $parent_category['ten_danhmuc'] ?></a>
                            </h2>

                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                            
                            <div class="tab_big">
                                <div class="tab_ul">
                                    
                                    <ul class="tabs tabs-title tabtitle2 ajax clearfix">
                                        <?php
                                        $sub_categories = get_list_sub_categories($parent_category['danhmuc_id']);
                                        foreach ($sub_categories as $sub_category) {
                                            if ($sub_category['noibat'] == 2) {
                                        ?>
                                        <li class="tab-link tab_cate " data-tab="tab<?php echo $sub_category['danhmuc_id'] ?>" data-url="to-yen-tho">
                                            <span><?php echo $sub_category['ten_danhmuc'] ?></span>
                                        </li>

                                        <?php }}?>
                                    </ul>
                                    
                                    <div class="grad-left">
                                        <a href="javascript:;" class="prev button" title="prev" style="display: none;">
                                            <svg width="24" height="24" viewBox="0 0 61 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="31.7349" y="3.02869" width="40.2232" height="4" transform="rotate(45 31.7349 3.02869)" fill="black"></rect>
                                                <rect x="28.9717" y="62.9694" width="22.3263" height="4" transform="rotate(-135 28.9717 62.9694)" fill="black"></rect>
                                                <rect x="28.0605" y="58.2244" width="41.6244" height="4" transform="rotate(-45 28.0605 58.2244)" fill="black"></rect>
                                                <rect x="31.9126" y="3.20361" width="22.4441" height="4" transform="rotate(135 31.9126 3.20361)" fill="black"></rect>
                                                <path d="M2 31.0007H38" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="grad-right">
                                        <a href="javascript:;" class="next button" title="next" style="display: none;">
                                            <svg width="24" height="24" viewBox="0 0 61 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="31.7349" y="3.02869" width="40.2232" height="4" transform="rotate(45 31.7349 3.02869)" fill="black"></rect>
                                                <rect x="28.9717" y="62.9694" width="22.3263" height="4" transform="rotate(-135 28.9717 62.9694)" fill="black"></rect>
                                                <rect x="28.0605" y="58.2244" width="41.6244" height="4" transform="rotate(-45 28.0605 58.2244)" fill="black"></rect>
                                                <rect x="31.9126" y="3.20361" width="22.4441" height="4" transform="rotate(135 31.9126 3.20361)" fill="black"></rect>
                                                <path d="M2 31.0007H38" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="block-products">
                        <?php
                            $sub_categories = get_list_sub_categories($parent_category['danhmuc_id']);
                            if (!empty($sub_categories) ) { // Kiểm tra nếu $sub_categories không rỗng và là một mảng
                                foreach ($sub_categories as $sub_category) {
                        ?>
                            <div class="tab<?php echo $sub_category['danhmuc_id'] ?> tab-content">
                                <div class="rows load-after">
                                <?php
                                    $list_product_by_id_sub = get_list_pro_by_level($sub_category['danhmuc_id'],8);
                                    if (!empty($list_product_by_id_sub) ) { // Kiểm tra nếu $list_product_by_id_sub không rỗng và là một mảng
                                        foreach ($list_product_by_id_sub as $item) {
                                            $slug = create_slug($item['title']);
                                ?>
                                    <div class="col_3 col_relative">
                                        <div class="item_product_main">
                                            <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-34775949" enctype="multipart/form-data">
                                                <span class="flash-sale">-6% </span>
                                                <div class="tag-promo" title="Quà tặng">
                                                    <img src="public/img/tag_pro_icon.svg" data-src="public/img/tag_pro_icon.svg" alt="Quà tặng" class="lazyload loaded" data-was-processed="true">
                                                    <div class="promotion-content">
                                                        <div class="line-clamp-5-new" title="- Tặng 1 túi giấy xách đi kèm - 1 Hộp đường phèn">
                                                            <p>
                                                            <span style="letter-spacing: -0.2px;">- Tặng 1 túi giấy xách đi kèm <br>- 1 Hộp đường phèn </span>
                                                            </p>
                                                        </div>                                                        
                                                    </div>                                                        
                                                </div>
                                                    
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover" href="/copy-of-to-yen-tinh-che-cho-be-baby-loai-3" title="Tổ Yến Tinh Chế cho bé BaBy (loại 3)">
                                                        <img class="lazyload duration-300 loaded" src="admin/public/images/<?php echo $item['img']?>" alt="Tổ Yến Tinh Chế cho bé BaBy (loại 3)" data-was-processed="true">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="/copy-of-to-yen-tinh-che-cho-be-baby-loai-3" title="Tổ Yến Tinh Chế cho bé BaBy (loại 3)"><?php echo $item['title']?></a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                            <span class="compare-price">3.100.000₫</span>
                                                            <span class="price"><?php echo currency_format($item['price']) ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">
                                                        <input type="hidden" name="variantId" value="111118886">
                                                        <button class="btn-cart btn-views add_to_cart btn btn-primary " title="Thêm vào giỏ hàng">
                                                            <span>Thêm vào giỏ</span>
                                                            <svg enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"></path></g><g><path d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"></path></g></g></svg>
                                                        </button>
                                                        <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="copy-of-to-yen-tinh-che-cho-be-baby-loai-3" tabindex="0" title="Thêm vào yêu thích">
                                                            <img width="25" height="25" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1717814629369" alt="Thêm vào yêu thích"> 
                                                        </a>
                                                    </div>    
                                                </div>                                                    
                                            </form>
                                        </div>  
                                    </div>  
                                    <?php }
                                        } else {
                                            echo "<div class='alert alert-warning alert-dismissible show margin-bottom-0' role='alert'>
                                                    <span>Hiện tại chưa có sản phẩm nào trong danh mục này!...</span>
                                                </div>";
                                        }
                                    ?>
                                </div>              
                            </div>
                            <?php }}?>
                        </div>
                        <div class="view-more clearfix">
                                    <a href="to-yen-tho" title="Xem tất cả" class="btn btn-primary frame">
                                        <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                        </svg>
                                        Xem tất cả 
                                        <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                        </svg>
                                    </a>
                                </div>
                    </div>
                </div>
            </div>
            <?php 
                if ($loop_counter == 2) {
            ?>
                <div class="section-index section_why_choise">
                    <div class="container">
                        <div class="section-title">
                            <span class="sub-title">
                                Yến sào Sudes Nest
                            </span>
                            <h2>
                                Vì sao chọn chúng tôi
                            </h2>
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>

                        <div class="wrap-choise rows">
                            <div class="col col_4 col_relative col_left">
                                <div class="wrap-choise-mb">
                                    <div class="choise_item">
                                        <div class="img_choise">
                                            <img class="lazyload loaded" alt="Yến sào cao cấp" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_1_icon.png?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_1_icon.png?1717814629369" data-was-processed="true">
                                        </div>
                                        <div class="text_choise">
                                            <h3>Yến sào cao cấp</h3>
                                            <div class="content_choise">Hoàn toàn được gia công</div>
                                        </div>
                                    </div>
                                    
                                    <div class="choise_item">
                                        <div class="img_choise">
                                            <img class="lazyload loaded" alt="Chất lượng tuyệt đối" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_2_icon.png?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_2_icon.png?1717814629369" data-was-processed="true">
                                        </div>
                                        <div class="text_choise">
                                            <h3>Chất lượng tuyệt đối</h3>
                                            <div class="content_choise">100% tự nhiên</div>
                                        </div>
                                    </div>
                                    
                                    <div class="choise_item">
                                        <div class="img_choise">
                                            <img class="lazyload loaded" alt="Sản phẩm" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_3_icon.png?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_3_icon.png?1717814629369" data-was-processed="true">
                                        </div>
                                        <div class="text_choise">
                                            <h3>Sản phẩm</h3>
                                            <div class="content_choise">Đạt chuẩn ATVSTP</div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="col_4 col_relative col_center">
                                <div class="banner-product">
                                    <img width="429" height="499" alt="Vì sao chọn chúng tôi" data-src="public/img/banner_choise.webp" src="public/img/banner_choise.webp" class="lazyload loaded" data-was-processed="true">
                                </div>
                            </div>
                            <div class="col col_4 col_relative col_right">
                                <div class="choise_item">
                                    <div class="img_choise">
                                        <img class="lazyload loaded" alt="Giá cả hợp lý" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_4_icon.png?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_4_icon.png?1717814629369" data-was-processed="true">
                                    </div>
                                    <div class="text_choise">
                                        <h3>Giá cả hợp lý</h3>
                                        <div class="content_choise">Không qua trung gian</div>
                                    </div>
                                </div>
                                
                                <div class="choise_item">
                                    <div class="img_choise">
                                        <img class="lazyload loaded" alt="Giao hàng" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_5_icon.png?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_5_icon.png?1717814629369" data-was-processed="true">
                                    </div>
                                    <div class="text_choise">
                                        <h3>Giao hàng</h3>
                                        <div class="content_choise">Siêu tốc trong 24h</div>
                                    </div>
                                </div>
                                
                                <div class="choise_item">
                                    <div class="img_choise">
                                        <img class="lazyload loaded" alt="Thanh toán" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_6_icon.png?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/why_choise_6_icon.png?1717814629369" data-was-processed="true">
                                    </div>
                                    <div class="text_choise">
                                        <h3>Thanh toán</h3>
                                        <div class="content_choise">Đa dạng và an toàn</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }} ?>            

            <script>
                $(document).ready(function ($) {
                    lazyBlockProduct('section_product_tab_3','0px 0px -250px 0px');
                    var tabUl = $('.section_product_tab_3 .tab_ul ul');
                    var prevBtn = $(".section_product_tab_3 .tab_ul .prev");
                    var nextBtn = $(".section_product_tab_3 .tab_ul .next");
            
                    function checkOverflow() {
                        if (tabUl.get(0).scrollWidth > tabUl.get(0).clientWidth) {
                            prevBtn.show();
                            nextBtn.show();
                        } else {
                            prevBtn.hide();
                            nextBtn.hide();
                        }
                    }
            
                    prevBtn.click(function () {
                        var leftPos = tabUl.scrollLeft();
                        tabUl.animate({scrollLeft: leftPos - 345}, 500);
                    });
            
                    nextBtn.click(function () {
                        var leftPos = tabUl.scrollLeft();
                        tabUl.animate({scrollLeft: leftPos + 150}, 500);
                    });
            
                    checkOverflow();
                    $(window).resize(checkOverflow);
                });
            </script>

            <div class="section-index section_feedback">
                <div class="bg-section">
                    <div class="container">
                        <div class="section-title">
                            <span class="sub-title">
                                Yến sào Sudes Nest
                            </span>
                            
                            <h2>
                                Khách hàng nói về chúng tôi
                            </h2>
                            
                            <div class="desc">
                                Hơn +50,000 khách hàng đã sử dụng cảm nhận như thế nào về Sudes Nest
                            </div>
                            
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>

                        <div class="swiper_feedback swiper-container control-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="avatar">
                                        <img data-src="public/img/feedback_1_avatar.jpg" alt="Ngọc Vy" width="200" height="200" class="lazyload" src="public/img/feedback_1_avatar.jpg"/>
                                    </div>
                                    <div class="feedback-item">
                                        <div class="block-content">
                                            <b>
                                                Ngọc Vy
                                            </b>
                                            <span>
                                                Kế toán
                                            </span>
                                            <div class="feedback-content">
                                                "Tôi đã lựa chọn Sudes Nest để dành tặng cho người yêu của mình những món quà thật ý nghĩa.
                                                Tôi rất hài lòng với dịch vụ chuyên nghiệp, chất lượng sản phẩm cũng như sự tận tình của Sudes Nest.
                                                Chắc chắn rằng tôi sẽ quay lại nhiều lần nữa."				
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="avatar">
                                        <img data-src="public/img/feedback_2_avatar.jpg" alt="Minh Trần" width="200" height="200" class="lazyload" src="public/img/feedback_2_avatar.jpg"/>
                                    </div>
                                    <div class="feedback-item">
                                        <div class="block-content">
                                            <b>
                                                Minh Trần
                                            </b>
                                            <span>
                                                Lập trình viên
                                            </span>
                                            <div class="feedback-content">
                                                "Rất thích sản phẩm của Sudes Nest, trước toàn ra mua trực tiếp, lần này đặt hàng online, được 2 hôm là có hàng, chuẩn mẫu mã, ship nhanh và chất lượng tốt nữa. Tôi sẽ quay lại mua nữa."
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="avatar">
                                        <img data-src="public/img/feedback_3_avatar.jpg" alt="Thùy Trang" width="200" height="200" class="lazyload" src="public/img/feedback_3_avatar.jpg"/>
                                    </div>
                                    <div class="feedback-item">
                                        <div class="block-content">
                                            <b>
                                                Thùy Trang
                                            </b>
                                            <span>
                                                Đầu bếp
                                            </span>
                                            <div class="feedback-content">
                                                "Biết đến Sudes Nest khi định mua quà biếu Tết. Sản phẩm đa dạng tha hồ cho các bạn lựa khi đến đây. Giá cả theo mình là rất xứng đáng với chất lượng sản phẩm. Mua online hay offline cũng được."
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="avatar">
                                        <img data-src="public/img/feedback_4_avatar.jpg" alt="Hồng Vân" width="200" height="200" class="lazyload" src="public/img/feedback_4_avatar.jpg"/>
                                    </div>
                                    <div class="feedback-item">
                                        <div class="block-content">
                                            <b>
                                                Hồng Vân
                                            </b>
                                            <span>
                                                Người mẫu
                                            </span>
                                            <div class="feedback-content">
                                                "Tôi đã lựa chọn Sudes Nest để dành tặng cho mẹ yêu của mình những món quà thật ý nghĩa.
                                                Tôi rất hài lòng với dịch vụ chuyên nghiệp, chất lượng sản phẩm cũng như sự tận tình của Sudes Nest.
                                                Chắc chắn rằng tôi sẽ quay lại nhiều lần nữa."
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-index section_blog">
                <div class="container">
                    <div class="section-title">
                        <span class="sub-title">
                            Yến sào Sudes Nest
                        </span>
                        
                        <h2> 
                            <a href="kien-thuc.html" title="Tin tức - Tư vấn từ Sudes Nest">
                                Tin tức - Tư vấn từ Sudes Nest
                            </a>
                        </h2>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>

                    <div class="content-group3 rows">
                        <div class="col_4 big-news">
                            <?php 
                            $i = 0; // Khởi tạo bộ đếm
                            foreach($list_post as $item) {
                                if ($i >= 1) break; // Dừng vòng lặp sau khi hiển thị bài đầu tiên
                                $slug = create_slug($item['post_title']);
                            ?>
                            <a href="" title="1 tai yến chưng bao nhiêu nước? Cách chưng 1 tai yến không bị mất chất" class="news-top_item_img clearfix">
                                <div class="grow-0">
                                    <div class="item-img">
                                        <img src="admin/public/images/<?php echo $item['img']?>" data-src="admin/public/images/<?php echo $item['img']?>" alt="1 tai yến chưng bao nhiêu nước? Cách chưng 1 tai yến không bị mất chất" class="lazyload duration-300 loaded" data-was-processed="true">
                                    </div>
                                </div>
                                <div class="item-img-content">
                                    <h3><?php echo $item['post_title']?></h3>
                                    
                                    <div class="content-des d-md-block d-lg-none line-clamp line-clamp-3">
                                        1 tai yến chưng bao nhiêu nước? 1 tai yến ăn được bao nhiêu lần?… là những câu hỏi rất được quan tâm bởi những người muốn tìm hiểu và sử dụng yến sào. Những câu hỏi này sẽ giúp bạn dùng yến sào đạt...
                                    </div>
                                    
                                    <p class="time-post">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                        </svg>
                                        <span>
                                            05/01/2024
                                        </span>
                                    </p>
                                </div>
                            </a>
                            <?php 
                            $i++; }?>
                        </div>
                        <div class="col_8 list-news">
                            <div class="swapper-articles">
                                <?php 
                                foreach(array_slice($list_post, 1) as $item) { // Bắt đầu từ bài thứ hai
                                    $slug = create_slug($item['post_title']);
                                    ?>
                                <a href="" class="news-top_item_img">
                                    <div class="grow-0">
                                        <div class="item-img">
                                            <img src="admin/public/images/<?php echo $item['img']?>" data-src="admin/public/images/<?php echo $item['img']?>"  class="lazyload duration-300 loaded" data-was-processed="true">
                                        </div>
                                    </div>
                                    <div class="item-img-content">
                                        <h3 class="line-clamp-2-new"><?php echo $item['post_title']?></h3>
                                        <p class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"></path>
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"></path>
                                            </svg>
                                            <span>
                                                05/01/2024
                                            </span>
                                        </p>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col_12 view-more">
                            <a class="btn btn-primary frame" href="kien-thuc" title="Xem thêm">
                                <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                </svg>
                                Xem thêm
                                <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                    <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-index section_brands">
                <div class="container">
                    <div class="section-title">
                        <span class="sub-title">
                            Yến sào Sudes Nest
                        </span>
                        
                        <h2>
                            Đối tác của chúng tôi
                        </h2>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>

                    <div class="swiper_brands swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="" title="Brand 1" class="brand-item">
                                    <img data-src="" alt="Brand 1" width="225" height="113" class="lazyload" src="public/img/img_brand_1.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 2" class="brand-item">
                                    <img data-src="" alt="Brand 2" width="225" height="113" class="lazyload" src="public/img/img_brand_2.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 3" class="brand-item">
                                    <img data-src="" alt="Brand 3" width="225" height="113" class="lazyload" src="public/img/img_brand_3.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 4" class="brand-item">
                                    <img data-src="" alt="Brand 4" width="225" height="113" class="lazyload" src="public/img/img_brand_4.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 5" class="brand-item">
                                    <img data-src="" alt="Brand 5" width="225" height="113" class="lazyload" src="public/img/img_brand_5.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 6" class="brand-item">
                                    <img data-src="" alt="Brand 6" width="225" height="113" class="lazyload" src="public/img/img_brand_6.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 7" class="brand-item">
                                    <img data-src="" alt="Brand 7" width="225" height="113" class="lazyload" src="public/img/img_brand_1.webp"/>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="" title="Brand 8" class="brand-item">
                                    <img data-src="" alt="Brand 8" width="225" height="113" class="lazyload" src="public/img/img_brand_2.webp"/>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-button-prev">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <script src="public/js/main_yen.js"></script>
<?php
get_footer();
?>
