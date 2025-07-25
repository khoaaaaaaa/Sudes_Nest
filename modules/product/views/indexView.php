<?php
get_header();
?>

<div class="bodywrap">
        <div class="layout-collection">
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

            <div class="container">
                <div class="rows">
                    <div class="dqdt-sidebar left-content">
                        <div class="close-filters" title="Đóng bộ lọc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                            </svg>
                        </div>

                        <div class="section-box-bg">
                            <div class="filter-content">
                                <div class="filter-container">
                                    <div class="filter-container__selected-filter " style="display: none;">
                                        <div class="filter-container__selected-filter-header clearfix">
                                            <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                            <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all" title="Bỏ chọn hết">Bỏ chọn hết <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10" height="10" x="0" y="0" viewBox="0 0 365.696 365.696" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0" fill="#ffffff" data-original="#000000" style="" class=""></path></g></svg></i></a>
                                        </div>
                                        <div class="filter-container__selected-filter-list">
                                            <ul></ul>
                                        </div>
                                    </div>

                                    <!-- Lọc giá -->
                                    <aside class="aside-item filter-price">
                                        <div class="aside-title">
                                            <h2><span>Chọn mức giá</span></h2>
                                        </div>
                                        <div class="aside-content filter-group content_price">
                                            <ul>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label data-filter="2-000-000d" for="filter-duoi-2-000-000d">
                                                            <input type="checkbox" id="filter-duoi-2-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 2.000.000đ" value="(<2000000)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Dưới 2 triệu
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label data-filter="6-000-000d" for="filter-2-000-000d-6-000-000d">
                                                            <input type="checkbox" id="filter-2-000-000d-6-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="2.000.000đ - 6.000.000đ" value="(>=2000000 AND <=6000000)" data-operator="OR">
                                                            <i class="fa"></i> 
                                                            Từ 2 triệu - 6 triệu							
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label data-filter="15-000-000d" for="filter-6-000-000d-15-000-000d">
                                                            <input type="checkbox" id="filter-6-000-000d-15-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="6.000.000đ - 15.000.000đ" value="(>=6000000 AND <=15000000)" data-operator="OR">
                                                            <i class="fa"></i> 
                                                            Từ 6 triệu - 15 triệu							
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label data-filter="20-000-000d" for="filter-15-000-000d-20-000-000d">
                                                            <input type="checkbox" id="filter-15-000-000d-20-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="15.000.000đ - 20.000.000đ" value="(>=15000000 AND <=20000000)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Từ 15 triệu - 20 triệu							
                                                        </label>
                                                    </span>
                                                </li>	

                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label data-filter="20-000-000d" for="filter-tren20-000-000d">
                                                            <input type="checkbox" id="filter-tren20-000-000d" data-group="Khoảng giá" data-field="price_min" data-text="Trên 20.000.000đ" value="(>20000000)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Trên 20 triệu
                                                        </label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                    
                                    <!-- End Lọc giá -->
                            
                                    <!-- Lọc Loại -->
                                    <aside class="aside-item aside-itemxx filter-type">
                                        <div class="aside-title">
                                            <h2 class="title-filter title-head margin-top-0"><span>Loại sản phẩm</span></h2>
                                        </div>
                                        <div class="aside-content filter-group">
                                            <ul>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-hac-sam">
                                                            <input type="checkbox" id="filter-hac-sam" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Hắc Sâm&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Hắc Sâm
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-hong-sam">
                                                            <input type="checkbox" id="filter-hong-sam" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Hồng Sâm&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Hồng Sâm
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-my-pham">
                                                            <input type="checkbox" id="filter-my-pham" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Mỹ phẩm&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Mỹ phẩm
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-saffron-cao-cap">
                                                            <input type="checkbox" id="filter-saffron-cao-cap" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Saffron Cao Cấp&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Saffron Cao Cấp
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-sam-tuoi">
                                                            <input type="checkbox" id="filter-sam-tuoi" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Sâm Tươi&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Sâm Tươi
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-set-qua">
                                                            <input type="checkbox" id="filter-set-qua" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Set quà&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Set quà
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-soup">
                                                            <input type="checkbox" id="filter-soup" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Soup&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Soup
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-thien-sam">
                                                            <input type="checkbox" id="filter-thien-sam" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Thiên Sâm&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Thiên Sâm
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-yen-chung">
                                                            <input type="checkbox" id="filter-yen-chung" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Yến Chưng&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Yến Chưng
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-yen-tho">
                                                            <input type="checkbox" id="filter-yen-tho" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Yến Thô&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Yến Thô
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-yen-tinh-che">
                                                            <input type="checkbox" id="filter-yen-tinh-che" data-group="PRODUCT_TYPE" data-field="product_type.filter_key" data-text="" value="(&quot;Yến Tinh Chế&quot;)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Yến Tinh Chế
                                                        </label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <!-- End Lọc Loại -->
                            
                                    <!-- Lọc Thương hiệu -->
                                    <aside class="aside-item filter-vendor f-left">
                                        <div class="aside-title">
                                            <h2 class="title-filter title-head margin-top-0"><span>Thương hiệu</span></h2>
                                        </div>
                                        <div class="aside-content margin-top-0 filter-group">
                                            <ul>
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-achimmadang">
                                                            <input type="checkbox" id="filter-achimmadang" data-group="Hãng" data-field="vendor" data-text="Achimmadang" value="(Achimmadang)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Achimmadang
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-kanghwa">
                                                            <input type="checkbox" id="filter-kanghwa" data-group="Hãng" data-field="vendor" data-text="KangHwa" value="(KangHwa)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            KangHwa
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-kgs-han-quoc">
                                                            <input type="checkbox" id="filter-kgs-han-quoc" data-group="Hãng" data-field="vendor" data-text="KGS Hàn Quốc" value="(KGS Hàn Quốc)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            KGS Hàn Quốc
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-saffron-shyam">
                                                            <input type="checkbox" id="filter-saffron-shyam" data-group="Hãng" data-field="vendor" data-text="Saffron SHYAM" value="(Saffron SHYAM)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Saffron SHYAM
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-sanga">
                                                            <input type="checkbox" id="filter-sanga" data-group="Hãng" data-field="vendor" data-text="SangA" value="(SangA)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            SangA
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-sudes-nest">
                                                            <input type="checkbox" id="filter-sudes-nest" data-group="Hãng" data-field="vendor" data-text="Sudes Nest" value="(Sudes Nest)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Sudes Nest
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-teawong">
                                                            <input type="checkbox" id="filter-teawong" data-group="Hãng" data-field="vendor" data-text="Teawong" value="(Teawong)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Teawong
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-the-journey-of-skin">
                                                            <input type="checkbox" id="filter-the-journey-of-skin" data-group="Hãng" data-field="vendor" data-text="The Journey of Skin" value="(The Journey of Skin)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            The Journey of Skin
                                                        </label>
                                                    </span>
                                                </li>
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green ">
                                                    <span>
                                                        <label for="filter-thuong-vy-yen-dao">
                                                            <input type="checkbox" id="filter-thuong-vy-yen-dao" data-group="Hãng" data-field="vendor" data-text="Thượng Vy Yến đảo" value="(Thượng Vy Yến đảo)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Thượng Vy Yến đảo
                                                        </label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <!-- End Lọc Thương hiệu -->
                            
                                    <!-- Lọc tag 1 -->
                                    <aside class="aside-item filter-tag">
                                        <div class="aside-title">
                                            <h2 class="title-head margin-top-0">
                                                <span>Theo vỏ</span>
                                            </h2>
                                        </div>
                                        <div class="aside-content filter-group">	
                                            <ul>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-gio-carton">
                                                            <input type="checkbox" id="filter-gio-carton" data-group="tag2" data-field="tags" data-text="Giỏ carton" value="(Giỏ carton)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Giỏ carton
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-gio-da">
                                                            <input type="checkbox" id="filter-gio-da" data-group="tag2" data-field="tags" data-text="Giỏ da" value="(Giỏ da)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Giỏ da
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-gio-may">
                                                            <input type="checkbox" id="filter-gio-may" data-group="tag2" data-field="tags" data-text="Giỏ mây" value="(Giỏ mây)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Giỏ mây
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-gio-go">
                                                            <input type="checkbox" id="filter-gio-go" data-group="tag2" data-field="tags" data-text="Giỏ gỗ" value="(Giỏ gỗ)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Giỏ gỗ
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-hop-carton">
                                                            <input type="checkbox" id="filter-hop-carton" data-group="tag2" data-field="tags" data-text="Hộp carton" value="(Hộp carton)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Hộp carton
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-hop-da">
                                                            <input type="checkbox" id="filter-hop-da" data-group="tag2" data-field="tags" data-text="Hộp da" value="(Hộp da)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Hộp da
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-hop-may">
                                                            <input type="checkbox" id="filter-hop-may" data-group="tag2" data-field="tags" data-text="Hộp mây" value="(Hộp mây)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Hộp mây
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-hop-go">
                                                            <input type="checkbox" id="filter-hop-go" data-group="tag2" data-field="tags" data-text="Hộp gỗ" value="(Hộp gỗ)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Hộp gỗ
                                                        </label>
                                                    </span>
                                                </li>	
                                            </ul>
                                        </div>
                                    </aside>
                                    <!-- End lọc tag 1 -->
                            
                                    <!-- Lọc tag 2 -->
                                    <aside class="aside-item filter-tag">
                                        <div class="aside-title">
                                            <h2 class="title-head margin-top-0">
                                                <span>Theo vị</span>
                                            </h2>
                                        </div>
                                        <div class="aside-content filter-group">	
                                            <ul>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-cay">
                                                            <input type="checkbox" id="filter-cay" data-group="tag2" data-field="tags" data-text="Cay" value="(Cay)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Cay
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-chua">
                                                            <input type="checkbox" id="filter-chua" data-group="tag2" data-field="tags" data-text="Chua" value="(Chua)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Chua
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-deo">
                                                            <input type="checkbox" id="filter-deo" data-group="tag2" data-field="tags" data-text="Dẻo" value="(Dẻo)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Dẻo
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-the">
                                                            <input type="checkbox" id="filter-the" data-group="tag2" data-field="tags" data-text="The" value="(The)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            The
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-man">
                                                            <input type="checkbox" id="filter-man" data-group="tag2" data-field="tags" data-text="Mặn" value="(Mặn)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Mặn
                                                        </label>
                                                    </span>
                                                </li>	
                                                
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label for="filter-ngot">
                                                            <input type="checkbox" id="filter-ngot" data-group="tag2" data-field="tags" data-text="Ngọt" value="(Ngọt)" data-operator="OR">
                                                            <i class="fa"></i>
                                                            Ngọt
                                                        </label>
                                                    </span>
                                                </li>	
                                            </ul>
                                        </div>
                                    </aside>
                                    <!-- End lọc tag 2 -->
                            
                                    <!-- Lọc tag 3 -->
                                    
                                </div>
                            </div>				
                        </div>
                    </div>

                    <div class="col_12 col-banner">
                        <a href="/collections/all" title="click xem ngay" class="duration-300 has-aspect-1">
                            <picture>
                                <source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/506/650/themes/944598/assets/collection_banner_mb.jpg?1717814629369">
                                <img alt="Banner top" width="1250" height="306" class="lazyload loaded" data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/collection_banner.jpg?1717814629369" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/collection_banner.jpg?1717814629369" data-was-processed="true">
                            </picture>
                        </a>
                    </div>

                    <div class="col_12">
                        <div class="col-title">
                            <h1><?php echo $danhmuc_detail['ten_danhmuc'] ?></h1>
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>

                        <div class="col-list-cate">
                            <div class="menu-list">
                                <?php
                                    $categories =  get_list_sub_categories($danhmuc_detail['danhmuc_id']);
                                    foreach ($categories as $category) {
                                ?>
                                <a class="cate-item duration-300 " href="?mod=home&action=load_menu&danhmuc_id=<?php echo $category['danhmuc_id'] ?>" title="Tổ yến">
                                    <div class="cate-info-title"><?php echo $category['ten_danhmuc'] ?></div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-desc">
                            <p>
                                <strong>Sudes Nest</strong> đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng - tinh tế - hợp khẩu vị trong từng dòng sản phẩm về Yến sào. 
                                <strong>Sudes Nest</strong> luôn mang đến cho quý khách hàng những sản phẩm chất lượng nhất - tốt nhất - tinh hoa nhất với đội ngũ chuyên gia nghiên 
                                cứu dinh dưỡng hàng đầu Việt Nam và luôn đầu tư dây chuyền sản xuất công nghệ cao, hiện đại, quy mô sản xuất lớn.
                            </p>
                        </div>
                    </div>

                    <div class="block-collection col_12 col_relative">
                        <div class="category-products products-view">
                            <div class="filter-containers">
                                <div class="sort-cate clearfix">
                                    <div class="sudes-filter">
                                        <a class="btn btn-outline btn-filter" title="Bộ lọc">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"></path>
                                            </svg>
                                            Bộ lọc
                                            <span class="count-filter-val">0</span>
                                        </a>
                                    </div>
                                    
                                    <div class="sort-cate-right">
                                        <h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"></path>
                                                <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"></path>
                                            </svg> Xếp theo</h3>
                                        <ul>
                                            <li class="btn-quick-sort default active">
                                                <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc định</a>
                                            </li>
                                            <li class="btn-quick-sort alpha-asc">
                                                <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
                                            </li>
                                            <li class="btn-quick-sort alpha-desc">
                                                <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
                                            </li>
                                            <li class="btn-quick-sort position-desc">
                                                <a href="javascript:;" onclick="sortby('created-desc')" title="Hàng mới"><i></i>Hàng mới</a>
                                            </li>
                                            <li class="btn-quick-sort price-asc">
                                                <a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                            </li>
                                            <li class="btn-quick-sort price-desc">
                                                <a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <script>
                                    function countFilterItem() {
                                        var countFilter = $('.filter-container__selected-filter-list ul li').length;
                                        $(".count-filter-val").text(countFilter);
                                    }
                                    countFilterItem();
                                </script>
                            </div>

                            <div class="products-view products-view-grid list_hover_pro">
                                <div class="rows">
                                    <?php
                                        $list_products =  get_list_pro_by_level($danhmuc_detail['danhmuc_id'],20);
                                        if (!empty($list_products) ) { // Kiểm tra nếu $list_product_by_id_sub không rỗng và là một mảng
                                            foreach ($list_products as $list_product) {
                                                $slug = create_slug($list_product['title']);
                                    ?>
                                        <div class="col_3 col_realtive">
                                            <div class="item_product_main">
                                                <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form="" data-id="product-actions-34775949" enctype="multipart/form-data">
                                                    <span class="flash-sale">-6%</span>
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
                                                        <a class="image_thumb scale_hover" href="<?php echo $slug . "sp" . $list_product['product_id'] . ".htm" ?>" title="<?php echo $list_product['title'] ?>">
                                                            <img class="lazyload duration-300 loaded" src="admin/public/images/<?php echo $list_product['img']?>" alt="<?php echo $list_product['title'] ?>" data-was-processed="true">
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="name-price">
                                                            <h3 class="product-name line-clamp-2-new">
                                                                <a href="<?php echo $slug . "sp" . $list_product['product_id'] . ".htm" ?>" title="<?php echo $list_product['title'] ?>"><?php echo $list_product['title'] ?></a>
                                                            </h3>
                                                            <div class="product-price-cart">
                                                                <?php if ($list_product['price_discount'] > 0) { ?>
                                                                    <span class="compare-price"><?php echo currency_format($list_product['price_discount']) ?></span>
                                                                <?php } ?>
                                                
                                                                <span class="price"><?php echo currency_format($list_product['price']) ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-button">
                                                            <input type="hidden" name="variantId" value="111118886">
                                                             <button class="btn-cart btn-views add_to_cart btn btn-primary add_cart" var_id="<?php echo $list_product['product_id']?>" title="Thêm vào giỏ hàng">
                                                                <span>Thêm vào giỏ</span>
                                                                <svg enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"/></g><g><path d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"/></g></g></svg>
                                                            </button>
                                                            <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="copy-of-to-yen-tinh-che-cho-be-baby-loai-3" tabindex="0" title="Thêm vào yêu thích">
                                                                <img width="25" height="25" src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/heart.png?1717814629369" alt="Thêm vào yêu thích"> 
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php }} ?>
                                </div>
                            </div>

                            <div class="pagenav">
                                <nav class="collection-paginate clearfix col_relative nav_pagi w_100">
                                    <ul class="pagination clearfix">
                                        <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                                        <li class="active page-item disabled"><a class="page-link" href="javascript:;" style="pointer-events:none">1</a></li>
                                        <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>
                                        <li class="page-item"><a class="page-link link-next-pre" onclick="doSearch(2)" href="javascript:;" title="2">»</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/filter.js"></script>

<?php
get_footer();
?>
