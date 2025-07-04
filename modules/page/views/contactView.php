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
                <li><strong><span>Liên hệ</span></strong></li>
            </ul>
        </div>
    </div>

    <div class="layout-contact">
        <div class="container">
            <div class="pg_page bg-shadow">
                <div class="rows">
                    <div class="col_5">
                        <div class="contact">
                            <h4>
                                Cửa hàng Sudes Nest
                            </h4>
                            
                            <div class="des_foo"></div>
                            
                            <div class="time_work">
                                <div class="item">
                                    <b>Địa chỉ:</b> 
                                    70 Lữ Gia, Phường 15, Quận 11, Tp.HCM
                                </div>
                                <div class="item">
                                    <b>Hotline:</b> <a class="fone" href="tel:19006750" title="1900 6750">1900 6750</a>
                                </div>
                                <div class="item">
                                    <b>Email:</b> <a href="mailto:support@sapo.vn" title="support@sapo.vn">support@sapo.vn</a>
                                </div>
                                
                                <div class="item">
                                    <a href="he-thong-cua-hang.html" class="btn btn-primary frame" title="Hệ thống cửa hàng">
                                        <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"></path>
                                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"></path>
                                        </svg> 
                                        Hệ thống cửa hàng
                                        <svg width="14" height="32" viewBox="0 0 14 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" fill="none"></path>
                                            <path d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726" stroke="white"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-contact">
                            <h4>
                                Liên hệ với chúng tôi
                            </h4>
                            <div id="pagelogin">
                                <form method="POST" action="?mod=page&action=save_contact" id="contact" accept-charset="UTF-8">
                                    <div class="group_contact">
                                        <div class="rows">
                                            <div class="col_6">
                                                <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required="" value="<?php echo set_value('fullname')?>" name="fullname">
                                            </div>
                                            <div class="col_6">
                                                <input placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" id="email1" class="form-control form-control-lg" value="<?php echo set_value('email')?>" name="email">
                                            </div>
                                            <div class="col_12">
                                                <input type="number" placeholder="Điện thoại" name="phone_number" class="form-control form-control-lg" value="<?php echo set_value('phone_number')?>" required="">
                                            </div>
                                            <div class="col_12">
                                                <textarea placeholder="Nội dung" name="content" value="<?php echo set_value('content')?>" id="comment" class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                                            </div>
                                            <button type="submit" name="btn-add" class="btn btn-primary">Gửi tin nhắn</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col_7">
                        <div id="contact_map" class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.518104241413!2d106.650981814287!3d10.771573662229935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec073c87139%3A0x10ef6fd79e84aa6f!2zNzAgTOG7ryBHaWEsIFBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1647783383128!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
