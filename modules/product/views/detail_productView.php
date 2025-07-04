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
                    <li>
                        <a href="/" title="Trang chủ"><span>
                            <?php 
                            if(!empty($product_detail['cap4']))
                            {
                                echo $product_detail['ten_cap4'];
                            }
                            elseif(!empty($product_detail['cap3']))
                            {
                                echo $product_detail['ten_cap3'];
                            }
                            elseif(!empty($product_detail['cap2']))
                            {
                                echo $product_detail['ten_cap2'];
                            }
                            elseif (!empty($product_detail['ten_cap1']))
                            {
                                echo $product_detail['ten_cap1'];
                            }
                        ?>
                        </span></a>
                        <span class="mr_lr">
                            &nbsp;
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                            </svg>
                            &nbsp;
                        </span>
                    </li>
                    <li><strong><span><?php echo $product_detail['title'] ?></span></strong></li>
                </ul>
            </div>
        </div>

        <div class="product layout-product">
            <div class="container">
                <div class="details-product">
                    <div class="bg-shadow margin-bottom-20">
                        <div class="rows">
                            <div class="col_6">
                                <div class="sticky">
                                    <div class="product-image-block col_relative">
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper" id="lightgallery">
                                                <?php
                                                    foreach ($list_img as $img1) {
                                                    
                                                ?>
                                                <a class="swiper-slide" data-hash="0" href="//bizweb.dktcdn.net/thumb/1024x1024/100/506/650/products/set-qua-20-10-maneli-1.jpg?v=1708655273420" title="Click để xem">
                                                    <img height="370" width="480" src="admin/public/images/<?php echo $img1['url_img'] ?>" alt="Set qu&#224; 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan" data-image="https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-1.jpg?v=1708655273420" class="img-responsive mx-auto d-block swiper-lazy" />
                                                </a>
                                                <?php } ?>
                                                
                                                
                                            </div>
                                        </div>

                                        <div class="swiper-container gallery-thumbs ">
                                            <div class="swiper-wrapper">
                                                <?php
                                                    foreach ($list_img as $img1) {
                                                ?>
                                                <div class="swiper-slide" data-hash="0">
                                                    <div class="p-100">
                                                        <img height="80" width="80" src="admin/public/images/<?php echo $img1['url_img'] ?>" alt="Set qu&#224; 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan" data-image="admin/public/images/<?php echo $img1['img'] ?>" class="swiper-lazy" />
                                                    </div>	
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="swiper-button-next">
                                            </div>
                                            <div class="swiper-button-prev">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col_6 details-pro">
                                <h1 class="title-product"><?php echo $product_detail['title'] ?></h1>
                                <div class="product-top clearfix">
                                    <div class="sku-product clearfix">
                                        <span class="d-none" itemprop="brand" itemtype="http://schema.org/Brand" itemscope=""><meta itemprop="name" content="Saffron SHYAM">Thương hiệu: <strong>Saffron SHYAM</strong></span>
                                        <span class="variant-sku" itemprop="sku" content="Đang cập nhật">Mã: <span class="a-sku">Đang cập nhật</span></span>
                                        <br>
                                        <span class="d-none" itemprop="type" itemtype="http://schema.org/Type" itemscope=""><meta itemprop="name" content="Set quà">Chất liệu: <strong>Set quà</strong></span>
                                    </div>
                                    
                                    <div class="product-review" onclick="scrollToxx();">
                                        <div class="sapo-product-reviews-badge " data-id="34620973">
                                        </div> 
                                    </div>
                                </div>

                                <div class="inventory_quantity">
                                    <span class="mb-break">
                                        <span class="stock-brand-title">Thương hiệu:</span>
                                        <span class="a-vendor">
                                            Saffron SHYAM
                                        </span>
                                    </span>
                                    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="mb-break">
                                        <span class="stock-brand-title">Tình trạng:</span>
                                        
                                        <span class="a-stock">
                                            Còn hàng
                                        </span>
                                    </span>
                                </div>

                                <form method="post" class="form-inline">
							
                                    <div class="product-summary">
                                        <div class="rte"><?php echo $product_detail['description'] ?></div>
                                    </div>
                                    
                                    <a class="block-flashsale" href="/san-pham-khuyen-mai" title="Xem ngay">
                                        <div class="heading-flash">
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
                                            Hot sale năm mới
                                        </div>
                                        <div class="count-down">
                                            <p class="title-count">
                                                Kết thúc sau:
                                            </p>
                                            <div class="timer-view" data-countdown="countdown" data-date="12-25-2024-09-15-45">
                                                <div class="block-timer">
                                                    <p><b>89</b></p>
                                                    <span>Ngày</span>
                                                </div>
                                                <div class="block-timer">
                                                    <p><b>22</b></p>
                                                    <span>Giờ</span>
                                                </div>
                                                <div class="block-timer">
                                                    <p><b>58</b></p><span>Phút</span>
                                                </div>
                                                <div class="block-timer">
                                                    <p><b>44</b></p><span>Giây</span>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
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
                                                            $('.block-flashsale').hide();
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
                                        </script>
                                    </a>
                                    <div class="price-box clearfix">
                                        <span class="special-price">
                                            <span class="price product-price"><?php echo currency_format($product_detail['price']) ?></span>
                                            <meta itemprop="price" content="500000">
                                            <meta itemprop="priceCurrency" content="VND">
                                        </span> <!-- Giá Khuyến mại -->
                                        <span class="old-price" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/priceSpecification">
                                            <del class="price product-price-old"><?php echo currency_format($product_detail['price_discount']) ?></del>
                                            <meta itemprop="price" content="799000">
                                            <meta itemprop="priceCurrency" content="VND">
                                        </span> <!-- Giás gốc -->
                                        
                                        <span class="sale-off">-  
                                            <?php echo $product_detail['discount'] ?>%
                                        </span>
                                    </div>
                                    
                                    <div class="form-product">
                                        <div class="box-variant clearfix  d-none ">
                                            <input type="hidden" id="one_variant" name="variantId" value="110202248">
                                        </div>
                                        
                                        <div class="boz-form ">
                                            <div class="flex-quantity">
                                                <div class="custom custom-btn-number show">
                                                    <span>Số lượng: </span>
                                                    <div class="input_number_product">									
                                                        <button class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;return false;" type="button">-</button>
                                                        <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity qty-input" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                                        <button class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><span>+</span></button>
                                                    </div>                                                    
                                                </div>

                                                <div class="btn-mua button_actions clearfix">
                                                    <button class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-extent add_cart" var_id="<?php echo $product_detail['product_id']?>" title="Thêm vào giỏ hàng">
                                                        <span class="txt-main">Thêm vào giỏ</span>
                                                    </button>
                                                    <a href="javascript:void(0)" class="btn-buyNow btn btn-primary" onclick="buyNow(<?php echo $product_detail['product_id']; ?>)">
                                                        <span class="txt-main">Mua ngay</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="bottom-product">
                                    <ul class="social-media" role="list">
                                        <li class="title">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"></path>
                                            </svg>
                                            Chia sẻ
                                        </li>
                                        <li class="social-media__item social-media__item--facebook">
                                            <a title="Chia sẻ lên Facebook" href="https://www.facebook.com/sharer.php?u=https://sudes-nest.mysapo.net/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" target="_blank" rel="noopener" aria-label="Chia sẻ lên Facebook">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
                                                    <g>
                                                        <path id="f_1_" style="fill:#010002;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
                                                                                                 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
                                                                                                 v20.341H37.29v27.585h23.814v70.761H89.584z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="social-media__item social-media__item--pinterest">
                                            <a title="Chia sẻ lên Pinterest" href="https://pinterest.com/pin/create/button/?url=https://sudes-nest.mysapo.net/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan&amp;" target="_blank" rel="noopener" aria-label="Pinterest">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
                                                                     c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
                                                                     c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
                                                                     c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
                                                                     c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
                                                                     S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
                                                                     c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
                                                                     c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="social-media__item social-media__item--twitter">
                                            <a title="Chia sẻ lên Twitter" href="https://twitter.com/share?url=https://sudes-nest.mysapo.net/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" target="_blank" rel="noopener" aria-label="Tweet on Twitter">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                                                     c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                                                     c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                                                     c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                                                     c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                                                     c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                                                     C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                                                     C480.224,136.96,497.728,118.496,512,97.248z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                    <div class="line"></div>

                                    <div class="product-wish">
                                        <a href="javascript:void(0)" class="setWishlist btn-views" data-wish="set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" tabindex="0" title="Thêm vào yêu thích">
                                            <img width="25" height="25" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1717814629369" alt="Thêm vào yêu thích"> 
                                            Thêm vào yêu thích
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rows">
                        <div class="col_12 product-coupons margin-bottom-20">
                            <div class="bg-shadow">
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
                                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="NEST200" data-time="12/12/2024" data-content="Áp dụng cho đơn hàng từ <b>4,500,000đ</b> trở lên Không đi kèm với chương trình khác">
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

                            <script>
                                var swiper_coupons = null;
                                function initSwiperCoupons() {
                                    swiper_coupons = new Swiper('.swiper_coupons', {
                                        slidesPerView: 4,
                                        spaceBetween: 16,
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
                                                slidesPerView: 2.3,
                                                spaceBetween: 14
                                            },
                                            992: {
                                                slidesPerView: 2.3,
                                                spaceBetween: 16
                                            },
                                            1024: {
                                                slidesPerView: 3,
                                                spaceBetween: 16
                                            },
                                            1200: {
                                                slidesPerView: 4,
                                                spaceBetween: 16
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
                                        <span class="code">NEST100</span>
                                    </li>
                                    <li>
                                        <span>Ngày hết hạn:</span>
                                        <span class="time">24/12/2024</span>
                                    </li>
                                    <li>
                                        <span>Điều kiện:</span>
                                        <span class="dieukien">Áp dụng cho đơn hàng từ <b>2,500,000đ</b> trở lên Không đi kèm với chương trình khác</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <script>
                            var swiper_coupons = null;
                            function initSwiperCoupons() {
                                swiper_coupons = new Swiper('.swiper_coupons', {
                                    slidesPerView: 4,
                                    spaceBetween: 16,
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
                                            slidesPerView: 2.3,
                                            spaceBetween: 14
                                        },
                                        992: {
                                            slidesPerView: 2.3,
                                            spaceBetween: 16
                                        },
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 16
                                        },
                                        1200: {
                                            slidesPerView: 4,
                                            spaceBetween: 16
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

                        <div class="col_12 margin-bottom-20">
                            <div class="bg-shadow">
                                <div class="rows">
                                    <div class="col_8 product-review-details">
                                        <div class="product-tab e-tabs not-dqtab">
                                            <ul class="tabs tabs-title clearfix">	
                                                <li class="tab-link active" data-tab="#tab-1">
                                                    <h3>Mô tả sản phẩm</h3>
                                                </li>																	
                                                <li class="tab-link" data-tab="#tab-2">
                                                    <h3>Hướng dẫn mua hàng</h3>
                                                </li>																	
                                                <li class="tab-link" data-tab="#tab-3">
                                                    <h3>Đánh giá</h3>
                                                </li>																	
                                            </ul>

                                            <div class="tab-float">
                                                <div id="tab-1" class="tab-content active content_extab">
                                                    <div class="rte product_getcontent product-review-content">
                                                        <div class="ba-text-fpt has-height">
                                                            <?php echo $product_detail['detail'] ?>
                                                        </div>

                                                        <div class="show-more hidden-lg hidden-md hidden-sm">
                                                            <div class="btn btn-primary btn-default btn--view-more duration-300">
                                                                <span class="more-text">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
                                                                    </svg></span>
                                                                <span class="less-text">Thu gọn <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"></path>
                                                                    </svg></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="tab-2" class="tab-content content_extab">
                                                    <div class="rte">
                                                        <p><strong>Bước 1</strong>: Truy cập website và lựa chọn sản phẩm cần mua để mua hàng</p>
                                                        <p><strong>Bước 2</strong>: Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau</p>
                                                        <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng</p>
                                                        <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                                        <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán</p>
                                                        <p><strong>Bước 3</strong>: Lựa chọn thông tin tài khoản thanh toán</p>
                                                        <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                                        <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
                                                        <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản</p>
                                                        <p><strong>Bước 4</strong>: Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                                        <p><strong>Bước 5</strong>: Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng</p>
                                                        <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                                        <p>Trân trọng cảm ơn.</p>	
                                                    </div>
                                                </div>	

                                                <div id="tab-3" class="tab-content content_extab">
                                                    <div class="rte">
                                                        <div class="alert alert-info alert-dismissible margin-top-15 section" role="alert" style="max-width: 100% !important;">
                                                            Bạn tiến hàng mua và cài app <a style="color: red" target="_blank" href="https://apps.sapo.vn/danh-gia-san-pham-v2" title="Đánh giá sản phẩm">Đánh giá sản phẩm</a> mới sử dụng được tính năng này! 
                                                        </div>
                                                    </div>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col_4 product-sidebar">
                                        <div class="sticky-box">
                                            <div class="section-viewed-product recent-page-viewed">
                                                <h2>
                                                    <span>
                                                        Bạn đã xem
                                                    </span>
                                                </h2>
            
                                                <div class="product-viewed-content">
                                                    <?php $list_prod_like = get_list_product_seen();
                                                        foreach ($list_prod_like as $item){
                                                            $slug = create_slug($item['title']);
                                                    ?>
                                                    <div class="product-view">
                                                        <a class="image_thumb" href="/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" title="<?php echo $item['title'] ?>">
                                                            <img width="370" height="480" class="lazyload loaded" src="admin/public/images/<?php echo $item['img'] ?>" data-src="" alt="" data-was-processed="true">
                                                        </a>
                                                        <div class="product-info">
                                                            <h3 class="product-name"><a href="/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" title="<?php echo $item['title'] ?>" class="line-clamp line-clamp-3-new"><?php echo $item['title'] ?></a></h3>
                                                            <div class="price-box">
                                                                <span class="price"><?php echo $item['price'] ?></span>
                                                                <span class="compare-price"><?php echo $item['price_discount'] ?></span>
                                                            </div>
                                                            <a class="view-more" href="/set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan" title="Xem chi tiết">Xem chi tiết »</a>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>

                                                <script>
                                                    let hasViewItem = false;
                                                    if(localStorage.last_viewed_products != undefined){
                                                        jQuery('.recent-page-viewed').removeClass('d-none');
                                                        hasViewItem = true;
                                                        var last_viewd_pro_array = JSON.parse(localStorage.last_viewed_products);
                                                        var recentview_promises = [];
                                                        var size_pro_review = last_viewd_pro_array.length;
                                                        if ( size_pro_review >= 6 ) {
                                                            size_pro_review = 6;
                                                        } else {
                                                            size_pro_review = last_viewd_pro_array.length;
                                                        }
                                                        if (size_pro_review < 1 ) {
                                                            jQuery('.recent-page-viewed').addClass('d-none');
                                                            hasViewItem = false;
                                                        }else{
                                                            jQuery('.recent-page-viewed').removeClass('d-none');
                                                            hasViewItem = true;
                                                        }
                                                        if (size_pro_review > 0 ) {
                                                            for (i = 0; i < size_pro_review; i++){
                                                                var alias_product = last_viewd_pro_array[i];
                                                                if (!!alias_product.alias){
                                                                    var promise = new Promise(function(resolve, reject) {
                                                                        $.ajax({
                                                                            url:'/' + alias_product.alias + '?view=viewed',
                                                                            success: function(product){
                                                                                resolve(product);
                                                                            },
                                                                            error: function(err){
                                                                                resolve('');
                                                                            }
                                                                        })
                                                                    });
                                                                    recentview_promises.push(promise);	
                                                                }
                                                            }
                                                            Promise.all(recentview_promises).then(function(values) {
                                                                $.each(values, function(i, v){
                                                                    $('.recent-page-viewed .product-viewed-content').append(v);
                                                                });
                                                                awe_lazyloadImage();
                                                            });
                                                        }
                                                    }else{
                                                        jQuery('.recent-page-viewed').addClass('d-none');
                                                        hasViewItem = false;
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col_12 product-related product-swipers">
                            <div class="bg-shadow">
                                <h2>
                                    <a href="/my-pham-saffron" title="Sản phẩm liên quan">
                                        Sản phẩm liên quan
                                    </a>
                                </h2>

                                <div class="swiper_product_related swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php
                                            if ($product_detail['cap4'] != 0) {
                                                $list_product =  get_list_pro_by_level($product_detail['cap4'], 6);
                                            }
                                            if ($product_detail['cap3'] != 0) {
                                                $list_product =  get_list_pro_by_level($product_detail['cap3'], 6);
                                            }
                                            if ($product_detail['cap2'] != 0) {
                                                $list_product =  get_list_pro_by_level($product_detail['cap2'], 6);
                                            }
                                            if ($product_detail['cap1'] != 0) {
                                                $list_product =  get_list_pro_by_level($product_detail['cap1'], 6);
                                            }
                                            if (!empty($list_product) ) { // Kiểm tra nếu $list_product_by_id_sub không rỗng và là một mảng
                                                foreach ($list_product as $prod) {
                                                    $slug = create_slug($prod['title']);
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="item_product_main">
                                                <form method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-34621119" enctype="multipart/form-data">
                                                    <div class="tag-promo" title="Quà tặng">
                                                        <img src="public/img/tag_pro_icon.svg" data-src="public/img/tag_pro_icon.svg" alt="Quà tặng" class="lazyload loaded" data-was-processed="true">
                                                        <div class="promotion-content">
                                                            <div class="line-clamp-5-new" title="Tặng bình thủy tinh 300ml Freeship từ 2 gram">
                                                                <ul>
                                                                    <li>
                                                                        <span style="letter-spacing: -0.2px;">Tặng bình thủy tinh 300ml</span>
                                                                    </li>
                                                                    <li>
                                                                        <span style="letter-spacing: -0.2px;">Freeship từ 2 gram</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="product-thumbnail">
                                                        <a class="image_thumb scale_hover" href="<?php echo $slug . "sp" . $prod['product_id'] . ".htm" ?>" title="<?php echo $prod['title'] ?>">
                                                            <img class="lazyload duration-300 loaded" src="admin/public/images/<?php echo $prod['img'] ?>" data-src="admin/public/images/<?php echo $prod['title'] ?>" alt="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic" data-was-processed="true">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="name-price">
                                                            <h3 class="product-name line-clamp-2-new">
                                                                <a href="" title="<?php echo $prod['title'] ?>"><?php echo $prod['title'] ?></a>
                                                            </h3>
                                                            <div class="product-price-cart">
                                                                <?php if ($prod['price_discount'] > 0) { ?>
                                                                    <span class="compare-price"><?php echo currency_format($prod['price_discount']) ?></span>
                                                                <?php } ?>
                                                
                                                                <span class="price"><?php echo currency_format($prod['price']) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-button">
                                                            <button class="btn-cart btn-views add_to_cart btn btn-primary add_cart" var_id="<?php echo $prod['product_id']?>" title="Thêm vào giỏ hàng">
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
                                        <?php }} ?>
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
                            var swiper_related = null;
                            function initSwiperRelated() {
                                swiper_related = new Swiper('.swiper_product_related', {
                                    slidesPerView: 4,
                                    spaceBetween: 20,
                                    slidesPerGroup: 1,
                                    navigation: {
                                        nextEl: '.swiper_product_related .swiper-button-next',
                                        prevEl: '.swiper_product_related .swiper-button-prev',
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
                            }
                            function destroySwiperRelated() {
                                if (swiper_related) {
                                    swiper_related.destroy(true, true);
                                    swiper_related = null;
                                }
                            }
                            function toggleSwiperRelated() {
                                if ($(window).width() <= 767 && swiper_related) {
                                    destroySwiperRelated();
                                } else if ($(window).width() > 767 && !swiper_related) {
                                    initSwiperRelated();
                                }
                            }
                            toggleSwiperRelated();
                            $(window).resize(toggleSwiperRelated);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var getLimit = 6;
        var alias = 'set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan';
        
        function activeTab(obj){
            $('.product-tab ul li').removeClass('active');
            $(obj).addClass('active');
            var id = $(obj).attr('data-tab');
            $('.tab-content').removeClass('active');
            $(id).addClass('active');
        }


        $('.product-tab ul li').click(function(){
            activeTab(this);
            return false;
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 5,
            slidesPerView: 10,
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            slideToClickedSlide: true,
            breakpoints: {
                260: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                300: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    direction: 'vertical'
                },
                1199: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    direction: 'vertical' 
                }
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            lazy: true,
            hashNavigation: true,
            thumbs: {
                swiper: galleryThumbs
            }
        });
        var swiper = new Swiper('.product-relate-swiper', {
            slidesPerView: 4,
            loop: false,
            grabCursor: true,
            spaceBetween: 30,
            roundLengths: true,
            slideToClickedSlide: false,
            navigation: {
                nextEl: '.product-relate-swiper .swiper-button-next',
                prevEl: '.product-relate-swiper .swiper-button-prev',
            },
            autoplay: false,
            breakpoints: {
                260: {
                    slidesPerView: 'auto',
                    spaceBetween: 15
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                991: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            }
        });
        $(document).ready(function() {
            $("#lightgallery").lightGallery({
                thumbnail: false
            }); 
            $("#videolary").lightGallery({
                thumbnail: false
            }); 
        });
        
        $('.btn--view-more').on('click', function(e){
            e.preventDefault();
            var $this = $(this);
            if( $('.product-review-details .product-review-content').hasClass('expanded')) {
                $('html, body').animate({ scrollTop: $('.product-review-details').offset().top - 110 }, 'slow');
            }
            $this.parents('.product-review-details').find('.product-review-content').toggleClass('expanded');
            $(this).toggleClass('active');
            return false;
        });
        
        $(document).ready(function ($){
            var product = {"id":34620973,"name":"Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan","alias":"set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan","vendor":"Saffron SHYAM","type":"Set quà","content":"<p>Chọn quà tặng đã khó, chọn một món quà cho mẹ còn khó hơn. Với mẹ, một món quà chẳng cần đắt đỏ, xa xỉ, mà phải thật sự thành tâm và ý nghĩa. Đó cũng là lý do những set quà tặng sức khỏe như Maneli #1 từ Saffron VIETNAM luôn được lòng rất nhiều anh chị khách hàng, bởi lúc nào cũng “đong đầy” sức khỏe, thứ mà ai cũng cần, ai cũng quý.</p>\n<h2>I. THÀNH PHẦN SET</h2>\n<p>Set quà Maneli #1 với tặng phẩm đặc biệt Nhụy hoa nghệ tây cao cấp Shyam và Trà thảo mộc Healthy Tea bồi bổ sức khỏe được đựng trong túi hộp trang nhã, tinh tế. Bộ tặng phẩm chi tiết bên trong gồm:</p>\n<ul>\n<li>Saffron Shyam1gr: Thảo dược “”vàng đỏ”” quý giá từ Trung Đông, có thể sử dụng pha trà uống hằng ngày giúp ngủ ngon, thư giãn, thanh nhiệt thải độc cơ thể, tốt cho tim mạch, huyết áp.</li>\n<li>Trà Healthy Tea 7 gói: \u00A0 \u00A0Mix 6 nguyên liệu thảo mộc bồi bổ sức khỏe: kỷ tử, táo đỏ, long nhãn, hoa cúc, hoa hồng, cỏ ngọt. Hương vị thơm ngọt tự nhiên nhẹ nhàng.</li>\n<li>Mật ong hoa rừng 100ml:Mật ong nguyên chất đặc sánh giàu dưỡng chất kháng viêm, bồi bổ sức khỏe.</li>\n<li>Túi quà kèm nơ: Hộp và túi qua cao cấp kèm nơ tinh tế, trang trọng.</li>\n<li>Thiệp 20/10: Thiệp chúc 20/10 được thiết kế riêng.</li>\n</ul>\n<p><img loading=\"lazy\" class=\"alignnone size-full wp-image-32378\" src=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16.jpg\" alt=\"\" width=\"850\" height=\"1275\" srcset=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16.jpg 850w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16-200x300.jpg 200w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16-687x1030.jpg 687w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16-768x1152.jpg 768w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16-470x705.jpg 470w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-16-600x900.jpg 600w\" sizes=\"(max-width: 850px) 100vw, 850px\"></p>\n<p><img loading=\"lazy\" class=\"alignnone size-full wp-image-32377\" src=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14.jpg\" alt=\"\" width=\"850\" height=\"850\" srcset=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14.jpg 850w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-300x300.jpg 300w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-80x80.jpg 80w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-768x768.jpg 768w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-36x36.jpg 36w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-180x180.jpg 180w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-705x705.jpg 705w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-100x100.jpg 100w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-600x600.jpg 600w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-14-150x150.jpg 150w\" sizes=\"(max-width: 850px) 100vw, 850px\"></p>\n<p><img loading=\"lazy\" class=\"alignnone size-full wp-image-32375\" src=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12.jpg\" alt=\"\" width=\"850\" height=\"850\" srcset=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12.jpg 850w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-300x300.jpg 300w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-80x80.jpg 80w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-768x768.jpg 768w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-36x36.jpg 36w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-180x180.jpg 180w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-705x705.jpg 705w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-100x100.jpg 100w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-600x600.jpg 600w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-12-150x150.jpg 150w\" sizes=\"(max-width: 850px) 100vw, 850px\"></p>\n<h2>II. Tại sao nên lựa chọn set quà 20/10 Maneli #1</h2>\n<p>“Vàng đỏ” Trung Đông từ lâu đã được biết đến là “bảo sắc thanh xuân” của chị em phụ nữ, là món quà ý nghĩa và quý giá dành tặng cho chị em 20/10 mà chắc hẳn bất kỳ người phụ nữ nào cũng cần và ao ước.</p>\n<p>Nhụy hoa nghệ tây không chỉ chăm sóc sức khỏe từ bên trong, mà còn giúp dưỡng nhan, chống lão hóa, khỏe đẹp từ trong ra ngoài. Lựa chọn set quà 20/10 Maneli #1 với bộ tặng phẩm có “vàng đỏ” Saffron sẽ là món quà tuyệt vời cho phái đẹp.</p>\n<h3>Người phụ nữ nào cũng có thể dùng và nên dùng</h3>\n<p>Khác biệt với những món quà túi xách, quần áo, mỹ phẩm, son phấn có thể hợp người này nhưng không hợp sở thích của người kia, nhụy hoa nghệ tây ai cũng có thể dùng và nên dùng, phù hợp với mọi đối tượng độ tuổi. Lại là món quà có ý nghĩa rất thiết thực, giúp sức khỏe và nhan sắc chị em cải thiện theo thời gian.</p>\n<p><img loading=\"lazy\" class=\"alignnone size-full wp-image-32374\" src=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11.jpg\" alt=\"\" width=\"850\" height=\"850\" srcset=\"https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11.jpg 850w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-300x300.jpg 300w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-80x80.jpg 80w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-768x768.jpg 768w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-36x36.jpg 36w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-180x180.jpg 180w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-705x705.jpg 705w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-100x100.jpg 100w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-600x600.jpg 600w, https://saffron.vn/wp-content/uploads/2023/10/Set-qua-20.10-Maneli-11-150x150.jpg 150w\" sizes=\"(max-width: 850px) 100vw, 850px\"></p>\n<p>Với người yêu, vợ: món quà 20/10 ý nghĩa nhụy hoa nghệ tây giúp làn da trắng mịn hơn, không có nám sạm; giúp vóc dáng thon gọn hơn; nội tiết tố ổn định, đến tháng nhẹ nhàng; phụ nữ có thai và sau sinh có thai kỳ khỏe mạnh, nhiều sữa, ít mệt mỏi, ngủ ngon hơn;…</p>\n<p>Với mẹ, bà: ở độ tuổi trung niên và cao tuổi, việc chăm sóc sức khỏe đều đặn là vô cùng quan trọng giúp duy trì sự khỏe mạnh, nâng cao tuổi thọ, hạn chế các bệnh nguy hiểm. Món quà 20/10 ý nghĩa nhụy hoa nghệ tây giúp mẹ, bà có huyết áp ổn định; ngủ ngon và sâu giấc hơn; cải thiện tình trạng tiền mãn kinh bốc hỏa mệt mỏi; giúp xương khớp khỏe mạnh và linh hoạt hơn; tăng cường sức khỏe tim mạch; tốt cho trí nhớ phòng bệnh Alzheimer; chống lão hóa;…</p>\n<p><img loading=\"lazy\" class=\"alignnone size-full wp-image-31175\" src=\"https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5.jpg\" alt=\"\" width=\"850\" height=\"1275\" srcset=\"https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5.jpg 850w, https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5-200x300.jpg 200w, https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5-687x1030.jpg 687w, https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5-768x1152.jpg 768w, https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5-470x705.jpg 470w, https://saffron.vn/wp-content/uploads/2021/02/Qua-8.3-cho-vo-nhuy-hoa-nghe-tay-shyam5-600x900.jpg 600w\" sizes=\"(max-width: 850px) 100vw, 850px\"></p>\n<h3>Đáp ứng nhu cầu chăm sóc sức khỏe, làm đẹp nhanh chóng nhưng hiệu quả của phái nữ</h3>\n<p>Mỗi người phụ nữ đều yêu thích chăm sóc sắc đẹp và cơ thể mình. Tuy nhiên những người phụ nữ đặc biệt là làm vợ, làm mẹ rất bận rộn với gia đình, con cái mà khiến việc chăm sóc bản thân trở nên lơ là, làn da không được chăm sóc nhiều có thể xuất hiện nếp nhăn, nám sạm, đặc biệt là phụ nữ sau 30.</p>\n<p>Hộp quà nhụy hoa nghệ tây Saffron đáp ứng đủ nhu cầu chăm sóc sức khỏe, làm đẹp từ sâu bên trong của phái nữ:</p>\n<ul>\n<li>Giúp ngủ ngon, huyết áp ổn định, cải thiện sức khỏe tim mạch</li>\n<li>Phòng ngừa cảm cúm, suy nhược mệt mỏi</li>\n<li>Giúp da dẻ căng mịn, xóa mờ những nếp nhăn tuổi tác, cho làn da trẻ ra cả chục tuổi</li>\n<li>Giúp da mờ đi nám sạm, trắng mịn phát sáng</li>\n<li>Cách dùng Nhụy hoa nghệ tây lại vô cùng đơn giản không tốn thời gian phù hợp cho những người phụ nữ bận rộn, ít có thời gian chăm sóc bản thân.</li>\n<li>Hiệu quả cao và rõ rệt, lại an toàn lành tính.</li>\n</ul>\n<p><img loading=\"lazy\" class=\"alignnone size-full wp-image-30578\" src=\"https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1.jpg\" alt=\"\" width=\"850\" height=\"834\" srcset=\"https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1.jpg 850w, https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1-300x294.jpg 300w, https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1-768x754.jpg 768w, https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1-36x36.jpg 36w, https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1-705x692.jpg 705w, https://saffron.vn/wp-content/uploads/2022/12/Set-qua-Tet-EMAD-4-1-600x589.jpg 600w\" sizes=\"(max-width: 850px) 100vw, 850px\"></p>\n<p>Có những yêu thương không thể nói thành lời, thì hãy đừng quên thể hiện bằng hành động để tình cảm thêm gắn kết nhé!</p>","summary":"<ul>\n<li>Cực kỳ ý nghĩa và giá trị giúp chăm sóc sức khỏe, sắc đẹp người nhận mỗi ngày</li>\n<li>\u00A0Không lãng phí, không đại trà</li>\n<li>\u00A0Món quà thể hiện sự quan tâm chân thành</li>\n<li>\u00A0Túi hộp thiết kế vô cùng sang trọng, thể hiện sự chỉn chu tinh tế khi tặng quà</li>\n</ul>","template_layout":"product","available":true,"tags":["item_250"],"price":500000.0000,"price_min":500000.0000,"price_max":500000.0000,"price_varies":false,"compare_at_price":799000.0000,"compare_at_price_min":799000.0000,"compare_at_price_max":799000.0000,"compare_at_price_varies":false,"variants":[{"id":110202248,"barcode":"","sku":"","title":"Default Title","options":["Default Title"],"option1":"Default Title","option2":null,"option3":null,"available":true,"taxable":false,"price":500000.0000,"compare_at_price":799000.0000,"inventory_management":"bizweb","inventory_policy":"deny","inventory_quantity":116,"weight_unit":"g","weight":0,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-1.jpg?v=1708655273420"}}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-1.jpg?v=1708655273420"},"images":[{"src":"https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-1.jpg?v=1708655273420"},{"src":"https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-12.jpg?v=1708655273420"},{"src":"https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-13.jpg?v=1708655273420"},{"src":"https://bizweb.dktcdn.net/100/506/650/products/set-qua-20-10-maneli-14.jpg?v=1708655273420"}],"options":["Title"],"created_on":"2024-02-23T09:27:53","modified_on":"2024-04-03T20:57:37","published_on":"2024-02-23T09:27:55"};
            var alias_pro = 'set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan';
            var array_list = [product];
            var list_viewed_pro_old = localStorage.getItem('last_viewed_products');
            var last_viewed_pro_new = "";
            if(list_viewed_pro_old == null || list_viewed_pro_old == '')
                last_viewed_pro_new = array_list;
            else{
                var list_viewed_pro_old = JSON.parse(localStorage.last_viewed_products);
                list_viewed_pro_old.splice(5, 1);
                for (i = 0; i < list_viewed_pro_old.length; i++) {
                    if ( list_viewed_pro_old[i].alias == alias_pro ) {
                        list_viewed_pro_old.splice(i,1);
                        break;
                    }
                }
                list_viewed_pro_old.unshift(array_list[0]);
                last_viewed_pro_new = list_viewed_pro_old;
            }
            localStorage.setItem('last_viewed_products',JSON.stringify(last_viewed_pro_new));
        });
        

        // Check if either specificationsDiv or viewContentDiv is absent or empty.
        // If true, hide the productBarDiv by adding the 'hidden' class.
        $(document).ready(function() {
            var productBarDiv = $('.product-sidebar');
            var productDetailsDiv = $('.product-review-details');
            var hasSpecifications = false;
            if (hasSpecifications == false && hasViewItem == false) {
                productBarDiv.addClass('hidden');
                productDetailsDiv.removeClass('col-lg-8').addClass('col-lg-12');
            }
        });
    </script>
        
<?php
get_footer();
?>