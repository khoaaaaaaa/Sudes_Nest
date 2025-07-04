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
                    <li><strong><span>Giỏ hàng</span></strong></li>
                </ul>
            </div>
        </div>

        <div class="main-cart-page main-container col1-layout">
            <div class="main container cartpcstyle">
                <?php if(!empty($list_product_inCart)){ ?> 
                <div class="wrap_background_aside margin-bottom-40">
                    <div class="rows">
                        <div class="col_8 col-cart-left">
                            <div class="bg-shadow margin-bottom-20">
                                <div class="header-cart">
                                    <div class="title-block-page">
                                        <h1 class="title_cart">
                                            <span>Giỏ hàng của bạn</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="cart-page d-xl-block d-none">
                                    <div class="drawer__inner">
                                        <div class="CartPageContainer">
                                            <form action="/cart" method="post" novalidate="" class="cart ajaxcart cartpage">
                                                <div class="cart-header-info">
                                                    <div>Thông tin sản phẩm</div>
                                                    <div>Đơn giá</div>
                                                    <div>Số lượng</div>
                                                    <div>Thành tiền</div>
                                                </div>
                                                
                                                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                                    <div class="ajaxcart__row">
                                                        <?php foreach($list_product_inCart as $item){ 
                                                            $slug=create_slug($item['product_title']);
                                                        ?>
                                                        <div class="ajaxcart__product cart_product" data-line="1">
                                                        <a href="<?php echo $slug . "sp" . $item['product_id'] . ".htm" ?>" class="ajaxcart__product-image cart_image" title="">
                                                            <img src="admin/public/images/<?php echo $item['product_thumb']?>" alt="">
                                                        </a>
                                                        <div class="grid__item cart_info">
                                                            <div class="ajaxcart__product-name-wrapper cart_name">
                                                            <a href="<?php echo $slug . "sp" . $item['product_id'] . ".htm" ?>" class="ajaxcart__product-name h4 line-clamp line-clamp-2-new" title=""><?php echo $item['product_title'] ?></a>
                                                            <a title="Xóa" class="cart__btn-remove remove-item-cart ajaxifyCart--remove" href="?mod=cart&action=delete&id=<?php echo $item['product_id'] ?>">Xóa</a>
                                                            </div>
                                                            <div class="grid">
                                                            <div class="grid__item one-half text-right cart_prices">
                                                                <span class="cart-price"><?php echo currency_format($item['price']) ?></span>
                                                            </div>
                                                            </div>
                                                            <div class="grid">
                                                            <div class="grid__item one-half cart_select">
                                                                <div class="ajaxcart__qty input-group-btn">
                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="<?php echo $item['product_id']; ?>" data-qty="<?php echo $item['qty']; ?>" data-line="1" aria-label="-"> - </button>
                                                                <input type="text" name="updates[]" class="num-order number-sidebar" maxlength="3" value="<?php echo $item['qty'] ?>" min="1" data-id="<?php echo $item['product_id'] ?>" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                                                <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="<?php echo $item['product_id']; ?>" data-line="1" data-qty="<?php echo $item['qty']; ?>" aria-label="+"> + </button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="grid justify-right">
                                                            <div class="grid__item one-half text-right cart_prices">
                                                                <span class="cart-price sub-total"><?php echo currency_format($item['sub_total']) ?></span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>                                    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-mobile-page d-block d-xl-none">
                                    <div class="CartMobileContainer"></div>
                                </div>
                            </div>

                            <div class="bg-shadow margin-bottom-20">
                                <div class="product-suggest product-swipers">
                                    <h2>
                                        <a href="/san-pham-noi-bat" title="Có thể bạn thích">
                                            Có thể bạn thích
                                        </a>
                                    </h2>

                                    <div class="swiper_suggest swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php $list_prod_like = get_list_product_like();
                                                foreach ($list_prod_like as $item){
                                                    $slug = create_slug($item['title']);
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="item_product_main">
                                                    <form method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-34775949" enctype="multipart/form-data">
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
                                                        <a class="image_thumb scale_hover" href="<?php echo $slug . "sp" . $item['product_id'] . ".htm" ?>" title="<?php echo $item['title'] ?>">
                                                            <img class="lazyload duration-300 loaded" src="admin/public/images/<?php echo $item['img'] ?>" data-src="admin/public/images/<?php echo $item['title'] ?>" alt="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic" data-was-processed="true">
                                                        </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="name-price">
                                                                <h3 class="product-name line-clamp-2-new">
                                                                    <a href="" title="<?php echo $item['title'] ?>"><?php echo $item['title'] ?></a>
                                                                </h3>
                                                                <div class="product-price-cart">
                                                                    <?php if ($item['price_discount'] > 0) { ?>
                                                                        <span class="compare-price"><?php echo currency_format($item['price_discount']) ?></span>
                                                                    <?php } ?>
                                                    
                                                                    <span class="price"><?php echo currency_format($item['price']) ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="product-button">
                                                                <input type="hidden" name="variantId" value="110202522">
                                                                 <button class="btn-cart btn-views add_to_cart btn btn-primary add_cart" var_id="<?php echo $item['product_id']?>" title="Thêm vào giỏ hàng">
                                                                    <span>Thêm vào giỏ</span>
                                                                    <svg enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"/></g><g><path d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"/></g></g></svg>
                                                                </button>
                                                                <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="saffron-shyam-1gr-nhuy-hoa-nghe-tay-organic" tabindex="0" title="Thêm vào yêu thích">
                                                                    <img width="25" height="25" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1717814629369" alt="Thêm vào yêu thích"> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>

                                        <div class="swiper-button-next">
                                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-prev">
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

                            <script>
                                var swiper_suggest = null;
                                function initSwiperSuggest() {
                                    swiper_suggest = new Swiper('.swiper_suggest', {
                                        slidesPerView: 4,
                                        spaceBetween: 20,
                                        slidesPerGroup: 1,
                                        navigation: {
                                            nextEl: '.swiper_suggest .swiper-button-next',
                                            prevEl: '.swiper_suggest .swiper-button-prev',
                                        },
                                        breakpoints: {
                                            768: {
                                                slidesPerView: 3,
                                                spaceBetween: 20
                                            },
                                            992: {
                                                slidesPerView: 3,
                                                spaceBetween: 20
                                            },
                                            1024: {
                                                slidesPerView: 2.5,
                                                spaceBetween: 20
                                            },
                                            1200: {
                                                slidesPerView: 3,
                                                spaceBetween: 10
                                            }
                                        }
                                    });
                                }
                                function destroySwiperSuggest() {
                                    if (swiper_suggest) {
                                        swiper_suggest.destroy(true, true);
                                        swiper_suggest = null;
                                    }
                                }
                                function toggleSwiperSuggest() {
                                    if ($(window).width() <= 767 && swiper_suggest) {
                                        destroySwiperSuggest();
                                    } else if ($(window).width() > 767 && !swiper_suggest) {
                                        initSwiperSuggest();
                                    }
                                }
                                toggleSwiperSuggest();
                                $(window).resize(toggleSwiperSuggest);
                            </script>
                        </div>

                        <div class="col_4 col-cart-right col_relative">
                            <div class="sticky">
                                <div class="bg-shadow margin-bottom-20">
                                    <div class="ajaxcart__footer">
                                        <div class="checkout-header">
                                            Thông tin đơn hàng
                                        </div>
                                            <form method="post" action="">
                                                <div class="checkout-body">
                                                    <div class="summary-total">
                                                        <div class="content-items">
                                                            <div class="item-content-left">Tổng tiền</div>
                                                            <div class="item-content-right"><span class="total-price"><?php echo currency_format(get_total_cart())  ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="summary-action">
                                                        <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                                                        <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                                    </div>
                                                    
                                                    <div class="summary-vat">
                                                        <div class="formVAT">
                                                            <h4>
                                                                Thời gian giao hàng
                                                            </h4>
                                                            <div class="timedeli-modal">
                                                                <fieldset class="input_group date_pick">
                                                                    <input type="text" placeholder="Chọn ngày*" readonly="" id="date" name="shipdate" class="date_picker" required="">
                                                                    <span style="font-size: 14px;"><?php echo form_error('shipdate'); ?></span>
                                                                </fieldset>
                                                                <fieldset class="input_group date_time">
                                                                    <select name="time" class="timeer timedeli-cta">
                                                                        <option value="-1" selected>Chọn thời gian*</option>
                                                                        <option value="08h00 - 12h00">08h00 - 12h00</option>
                                                                        <option value="14h00 - 18h00">14h00 - 18h00</option>
                                                                        <option value="19h00 - 21h00">19h00 - 21h00</option>
                                                                    </select>
                                                                    <span style="font-size: 14px;"><?php echo form_error('time'); ?></span>
                                                                </fieldset>
                                                            </div>
                                                            
                                                            <div class="r-bill">
                                                                <div class="checkbox">
                                                                    <!-- <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill" value='không'> -->
                                                                    <input type="checkbox" id="checkbox-bill" name="attributes[invoice]" value="có" class="regular-checkbox" />
                                                                    <label for="checkbox-bill" class="box"></label>
                                                                    <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
                                                                </div>
                                                                <div class="bill-field">
                                                                    <div class="form-group">
                                                                        <label>Tên công ty</label>
                                                                        <input type="text" class="form-control val-f" name="company_name" value="" placeholder="Tên công ty" >
                                                                        <?php echo form_error('company_name') ?>
                                                                    </div>	
                                                                    <div class="form-group">
                                                                        <label>Mã số thuế</label>
                                                                        <input type="text" pattern=".{10,}" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" class="form-control val-f val-n" name="tax_code"   value=""  placeholder="Mã số thuế">
                                                                        <?php echo form_error('tax_code') ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Địa chỉ công ty</label>
                                                                        <textarea class="form-control val-f" name="company_address" placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                                                                        <?php echo form_error('company_address') ?>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email nhận hoá đơn</label>
                                                                        <input type="email" class="form-control val-f val-email" name="invoice_email" value="" placeholder="Email nhận hoá đơn">
                                                                        <?php echo form_error('invoice_email') ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="summary-button">
                                                        <div class="cart__btn-proceed-checkout-dt">
                                                            <button type="submit" name="btn-thanhtoan" class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300" id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán ngay</button>
                                                        </div>
                                                        <a class="return_buy btn btn-extent duration-300" title="Tiếp tục mua hàng" href="collections/all">Tiếp tục mua hàng</a>
                                                    </div>
                                                </div>
                                           </form>
                                    </div>
                                </div>

                                <div class="bg-shadow">
                                    <div class="product-coupons">
                                        <div class="title">Khuyến mãi dành cho bạn</div>
                                    
                                    <div class="swiper_coupons swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $list_voucher = get_list_voucher();
                                            foreach($list_voucher as $item) {?>
                                            <div class="swiper-slide">
                                                <div class="box-coupon">
                                                    <div class="mask-ticket"></div>
                                                    <div class="image">
                                                        <img width="88" height="88" class="lazyload" src="admin/public/images/<?php echo $item['img'] ?>" data-src="" alt="<?php echo $item['ten_voucher'] ?>">
                                                    </div>
                                                    <div class="content_wrap">
                                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="<?php echo $item['ten_voucher'] ?>" data-time="<?php echo date('d/m/Y', strtotime($item['ngaykt'])); ?>" data-content="<?php echo $item['dieukien'] ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                                <path d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z"></path>
                                                            </svg>
                                                        </a>
                                                        <div class="content-top">
                                                            <?php echo $item['ten_voucher'] ?>
                                                            <span class="line-clamp line-clamp-2"><?php echo $item['mota'] ?></span>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <span>HSD: <?php echo date('d/m/Y', strtotime($item['ngaykt'])); ?></span>
                                                            <div class="coupon-code js-copy" data-copy="NEST200" title="Sao chép">Copy mã</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                    
                                        <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-bd1e7cbb31560b14" aria-disabled="true">
                                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"></rect>
                                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"></rect>
                                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-bd1e7cbb31560b14" aria-disabled="true">
                                            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"></rect>
                                                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"></rect>
                                                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>

                                    <script>
                                        var swiper_coupons = null;
                                        function initSwiperCoupons() {
                                            swiper_coupons = new Swiper('.swiper_coupons', {
                                                slidesPerView: 4,
                                                spaceBetween: 14,
                                                watchOverflow: true,
                                                slidesPerGroup: 1,
                                                navigation: {
                                                    nextEl: '.swiper_coupons .swiper-button-next',
                                                    prevEl: '.swiper_coupons .swiper-button-prev',
                                                },
                                                breakpoints: {
                                                    640: {
                                                        slidesPerView: 2,
                                                        spaceBetween: 14
                                                    },
                                                    768: {
                                                        slidesPerView: 2.2,
                                                        spaceBetween: 14
                                                    },
                                                    992: {
                                                        slidesPerView: 2.2,
                                                        spaceBetween: 10
                                                    },
                                                    1024: {
                                                        slidesPerView: 1.25,
                                                        spaceBetween: 10
                                                    },
                                                    1200: {
                                                        slidesPerView: 1.25,
                                                        spaceBetween: 10
                                                    }
                                                }
                                            });
                                        }
                                        function destroySwiperCoupons() {
                                            if (swiper_coupons) {
                                                swiper_coupons.destroy(true, true);
                                                swiper_coupons = null;
                                            }
                                        }
                                        function toggleSwiperCoupons() {
                                            if ($(window).width() <= 767 && swiper_coupons) {
                                                destroySwiperCoupons();
                                            } else if ($(window).width() > 767 && !swiper_coupons) {
                                                initSwiperCoupons();
                                            }
                                        }
                                        toggleSwiperCoupons();
                                        $(window).on('resize', function() {
                                            toggleSwiperCoupons();
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{?>
                    <div class="bg-shadow margin-bottom-20">
						<div class="header-cart">
							<div class="title-block-page">
								<h1 class="title_cart">
									<span>Giỏ hàng của bạn</span>
								</h1>
							</div>
						</div>
						<div class="cart-page d-xl-block d-none">
							<div class="drawer__inner">
								<div class="CartPageContainer"><div class="cart--empty-message"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve"> <g> <g> <path d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z"></path> </g> </g> <g> <g> <path d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z"></path> </g> </g> <g> <g> <path d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z"></path> </g> </g> <g> <g> <path d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z"></path> </g> </g> <g> <g> <path d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z"></path> </g> </g> <g> <g> <path d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z"></path> </g> </g> <g> <g> <path d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z"></path> </g> </g> <g> <g> <path d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z"></path> </g> </g> <g> <g> <path d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg><p>Giỏ hàng của bạn đang trống</p></div></div>
							</div>
						</div>
						<div class="cart-mobile-page d-block d-xl-none">
							<div class="CartMobileContainer"><div class="cart--empty-message"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387" style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve"> <g> <g> <path d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z"></path> </g> </g> <g> <g> <path d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z"></path> </g> </g> <g> <g> <path d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z"></path> </g> </g> <g> <g> <path d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z"></path> </g> </g> <g> <g> <path d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z"></path> </g> </g> <g> <g> <path d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z"></path> </g> </g> <g> <g> <path d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z"></path> </g> </g> <g> <g> <path d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z"></path> </g> </g> <g> <g> <path d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg><p>Giỏ hàng của bạn đang trống</p></div></div>
						</div>
					</div>
                <?php }?>
            </div>
        </div>

        <div class="popup-coupon">
            <div class="content">
                <div class="title">
                    Thông tin voucher
                </div>
                <div class="close-popup-coupon" title="Đóng">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"> <g> <g> <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path> </g> </g> </svg>		
                </div>
                <ul> 
                    <li>
                        <span>Mã giảm giá:</span>
                        <span class="code"></span>
                    </li>
                    <li>
                        <span>Ngày hết hạn:</span>
                        <span class="time"></span>
                    </li>
                    <li>
                        <span>Điều kiện:</span>
                        <span class="dieukien">
                        </span>
                    </li>
                </ul>
            </div>
        </div>


    <script>
        $(document).ready(function(){
            var date = new Date();
            date.setDate(date.getDate());

            $('.input_group #date').datepicker ({
                format: "dd/mm/yyyy",
                orientation: "top right",
                todayHightinght: true,
                startDate: date
            });
            setTimeout(function(){$('.colrightvat').removeClass('d-none')},300)
        })
        </script>
        <script>
    $(document).ready(function () {
        // Ẩn/hiện form lúc trang tải
        if ($('#checkbox-bill').is(':checked')) {
        $('.bill-field').show();
        $('#re-checkbox-bill').val('có');
        } else {
        $('.bill-field').hide();
        $('#re-checkbox-bill').val('không');
        }

        // Khi người dùng click checkbox
        $('#checkbox-bill').on('change', function () {
        if ($(this).is(':checked')) {
            $('#re-checkbox-bill').val('có');
            $('.bill-field').stop(true, true).slideDown(400);
        } else {
            $('#re-checkbox-bill').val('không');
            $('.bill-field').stop(true, true).slideUp(400);
        }
        });
    });
    </script>

<?php
get_footer();
?>
