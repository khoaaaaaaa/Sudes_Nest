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
                    <li><strong><span>Đăng nhập tài khoản</span></strong></li>
                </ul>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="page_login">
                    <div class="rows">
                        <div class="col_4 col_relative">
                            <div class="page-login pagecustome clearfix">
                                <div class="wpx">
                                    <h1 class="title_heads a-center"><span>Đăng nhập</span></h1>
                                    <div id="login" class="section">
                                        <form method="post" id="customer_login" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_login"><input name="utf8" type="hidden" value="true">
                                        <span class="form-signup" style="color:red;">
                                            
                                        </span>
                                        <div class="form-signup clearfix">
                                            <fieldset class="form-group">
                                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="<?php echo set_value('email')?>" name="email" id="customer_email" placeholder="Email" required="">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control form-control-lg" value="<?php echo set_value('password')?>" name="password" id="customer_password" placeholder="Mật khẩu" required="">
                                            </fieldset>
                                            <div class="pull-xs-left">
                                                <button type="submit" value="Đăng nhập" name="btn-login" class="btn btn-primary btn-style">Đăng nhập</button>
                                            </div>
                                            <div class="btn_boz_khac">
                                                <div class="btn_khac">
                                                    <span class="quenmk">Quên mật khẩu?</span>
                                                    <a href="dang-ky.htm" class="btn-link-style btn-register" title="Đăng ký tại đây">Đăng ký tại đây</a>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                    <div class="h_recover" style="display:none;">
                                        <div id="recover-password" class="form-signup page-login">
                                            <form method="post" action="/account/recover" id="recover_customer_password" accept-charset="UTF-8"><input name="FormType" type="hidden" value="recover_customer_password"><input name="utf8" type="hidden" value="true">
                                            <div class="form-signup" style="color: red;">
                                                
                                            </div>
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email" required="">
                                                </fieldset>
                                            </div>
                                            <div class="action_bottom">
                                                <button type="submit" value="Lấy lại mật khẩu" class="btn btn-primary" style="margin-top: 0px;">Lấy lại mật khẩu</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="block social-login--facebooks">
                                        <div class="line-break">
                                            <span>hoặc đăng nhập qua</span>
                                        </div>
                                        <script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script>
                                        <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                        <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
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