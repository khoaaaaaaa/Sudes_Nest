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
                <?php  
                foreach ($info_user as $info) {   
                ?>
                <div class="col_3 col-left-ac">
                    <div class="block-account bg-shadow">
                        <h5 class="title-account">Trang tài khoản</h5>
                        <p>Xin chào, <span style="color:#8d251c;"><?php echo $info['fullname'] ?></span>&nbsp;!</p>
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
                            <a class="title-info" href="?mod=users&action=reset" title="Đổi mật khẩu">Đổi mật khẩu</a>
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
					<h1 class="title-head margin-top-0">Thông tin tài khoản</h1>
					<div class="form-signup name-account m992">
                        
						<p><strong>Họ tên:</strong> <?php echo $info['fullname'] ?></p>
						<p> <strong>Email:</strong> <?php echo $info['email'] ?></p>
                        
					</div>
				</div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuItems = document.querySelectorAll(".title-info");

        menuItems.forEach(item => {
            item.addEventListener("click", function (event) {
                // Loại bỏ class 'active' khỏi tất cả các mục
                menuItems.forEach(el => el.classList.remove("active"));
                
                // Thêm class 'active' vào mục được click
                this.classList.add("active");
            });
        });
    });
</script>


<?php
get_footer();
?>