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
                    <li><strong><span>Trang khách hàng</span></strong></li>
                </ul>
            </div>
        </div>

        <div class="signup page_customer_account">
            <div class="container">
                <div class="rows">
                    <div class="col_3 col-left-ac">
                        <div class="block-account bg-shadow">
                            <h5 class="title-account">Trang tài khoản</h5>
                            <p>Xin chào, <span style="color:#8d251c;">khoa ngo</span>&nbsp;!</p>
                            <ul>
                            <li>
                                <a disabled="disabled" class="title-info active" title="Thông tin tài khoản" href="javascript:void(0);">Thông tin tài khoản</a>
                            </li>
                            <li>
                                <a class="title-info" href="" title="Đơn hàng của bạn">Đơn hàng của bạn</a>
                            </li>
                            
                            <li>
                                <a class="title-info" href="" title="Đăng ký">
                                    Danh sách yêu thích (<span class="js-wishlist-count">0</span>)
                                </a>
                            </li>
                            
                            <li>
                                <a class="title-info" href="" title="Đổi mật khẩu">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a class="title-info" href="" title="Sổ địa chỉ (0)">Sổ địa chỉ (0)</a>
                            </li>
                            <li>
                                <a class="title-info" href="" title="Đăng xuất">Đăng xuất</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="col_9 col-right-ac">
                        <div class="bg-shadow">
                            <h1 class="title-head margin-top-0">Đổi mật khẩu</h1>
                            <div class="rows">
                                <div class="col_6">
                                    <div class="page-login">
                                        <form method="POST" action="?mod=users&action=reset" id="change_customer_password" accept-charset="UTF-8"><input name="FormType" type="hidden" value="change_customer_password"><input name="utf8" type="hidden" value="true">
                                            <p>Để đảm bảo tính bảo mật bạn vui lòng đặt lại mật khẩu với ít nhất 8 kí tự</p>
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <label for="oldPass">Mật khẩu cũ <span class="error">*</span></label>
                                                    <input type="password" name="pass-old" id="pass-old" required="" class="form-control form-control-lg">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="changePass">Mật khẩu mới <span class="error">*</span></label>
                                                    <input type="password" name="password" id="pass-new" required="" class="form-control form-control-lg">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="confirmPass">Xác nhận lại mật khẩu <span class="error">*</span></label>
                                                    <input type="password" name="confirm-pass" id="confirm-pass" required="" class="form-control form-control-lg">
                                                </fieldset>
                                                <button class="button btn-edit-addr btn btn-primary btn-more" name="btn-reset" type="submit" onclick="window.location.reload()"><i class="hoverButton"></i>Đặt lại mật khẩu</button>
                                            </div>
                                        </form>
                                    </div>
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