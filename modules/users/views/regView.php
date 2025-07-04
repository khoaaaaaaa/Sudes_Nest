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
                    <li><strong><span>Đăng ký tài khoản</span></strong></li>
                </ul>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="wrap_background_aside page_login">
                    <div class="rows">
                        <div class="col_4 col_relative">
                            <div class="page-login pagecustome clearfix">
                                <div class="wpx">
                                    <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                    <span class="block a-center dkm margin-top-10">
                                        Đã có tài khoản, đăng nhập 
                                        <a href="" class="btn-link-style btn-register">tại đây</a>
                                    </span>

                                    <div id="login" class="section">
                                        <form method="post" action="" id="customer_register" accept-charset="UTF-8"><input name="FormType" type="hidden" value="customer_register"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-c4fc155c26f949d48b4823934b2f6328" name="Token" value="03AFcWeA64Yg6x10gZ6y3dWvx_q5whsSkZXwYBqTzdQ5A8PtyB5lx-FoLITn6BCgkO2fOfMZvmBksqAMwWrk7WrA9ZRpF5kf2Kim9iD8SvyMYbFmq_ZVCK2XeeySQ9XXt3__9f2XzahGQhl-oQN3q0UvVyJoCVPNhdhLD84qGbPhQH7FzlL2-_yCLzO4KlCEV8zDU_9vWfxkGr1NMQnFIHqqqP3ZQNtXr8TOcpRTfNj5U2QC2gSs_zo4n2_ljUqbdUuJ1DtrjYQy-c1u24yDgddInNw9X4oqQD1qXuJXUPaw8QLerksAiUoSBnvh-gg05eMdxP2_Dd6dUuhLnEFx1jxrjKI8fbhcjE8vRBfNTkccnHaF3MfgikF_e2O3AK3lF3EfYJhR9Xbm_uNdcIAe0OTGXMlJ1oLgfee6EUBuCdQgjBGtctKWx-HJnWag5j-JzO_divL_QnQOafyBNsfszow6sOXJPR0dFwaIcUX23TmPTWMJRtCJ4_tGvBS_-sIj1oNXA-ZMqVO8ULCn-h-JBSAFe3030CiRvJAB1CWSl-AYmKwgsUxbe4fo6dSI1IX0EyW7DXHKGJXVAYP2GDw9zu9foOek6SgkkRxe_WbnjBl_hv4h1iSBi4pLOHx4ayUJhzrYh5rusVDqALNXXvl6a2kRoKsRBArLgw3L5r3xCdmDGVq6OFFccFdE7Su_d_eQMb0yIWNfEjGiIuF49IxdIn1AERoOVkQtVoPEMSSkvlpn8DcU-PvqRj1W_UzuHTiVnXt6lziWph3NBDpjEDrRj8OWYuBDPXWe69LHvVkUtwWjrwklX3HneMkfXl-qyjY0oLWVgXN8QG5l-zbhn_Zi2QDXDwvr3kJpURrjdchGw7adEx9hHC6yjXXAo"><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script><script>grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "customer_register"}).then(function(token) {document.getElementById("Token-c4fc155c26f949d48b4823934b2f6328").value = token});});</script>
                                        <div class="form-signup " style="color:red;">
                                            
                                        </div>
                                        <div class="form-signup clearfix">
                                            <div class="rows">
                                                <div class="col_12 col_relative">
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control form-control-lg" value="<?php echo set_value('fullname')?>" name="fullname" id="fullname" placeholder="Họ tên" required="">
                                                    </fieldset>
                                                    <?php echo form_error('fullname') ?>
                                                </div>
                                                <div class="col_12 col_relative">
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control form-control-lg" value="<?php echo set_value('username')?>" name="username" id="username" placeholder="Tên người dùng" required="">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="rows">
                                                <div class="col_12 col_relative">
                                                    <fieldset class="form-group">
                                                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="<?php echo set_value('email')?>" name="email" id="email" placeholder="Email" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col_12 col_relative">
                                                    <fieldset class="form-group">	
                                                        <input placeholder="Số điện thoại" type="text" pattern="\d+" class="form-control form-control-comment form-control-lg" value="<?php echo set_value('phone_number')?>" name="phone_number" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col_12 col_relative">
                                                    <fieldset class="form-group">
                                                        <input type="password" class="form-control form-control-lg" value="<?php echo set_value('password')?>" name="password" id="password" placeholder="Mật khẩu" required="">
                                                    </fieldset>
                                                    <span style="text-align: left;"><?php echo form_error('password') ?></span>
                                                </div>
                                            </div>
                                            <div class="section">
                                                <button type="submit" value="Đăng ký" name="btn-register" class="btn btn-primary">Đăng ký</button>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="block social-login--facebooks margin-top-15">
                                            <p class="a-center">
                                                Hoặc đăng nhập bằng
                                            </p>
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
        </div>

<?php
get_footer();
?>

