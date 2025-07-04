<!DOCTYPE html>
<html lang="en" class="floating-labels">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sudes Nest - Thanh toán đơn hàng</title>
    <!-- <script src="public/js/app.js" type="text/javascript"></script> -->
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <link rel="stylesheet" href="public/css/fonts.css" />
    <link rel="stylesheet" href="public/css/checkout.css" />
    <link rel="stylesheet" href="public/css/checkout.vendor.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- <script src="public/js/checkout.vendor.js"></script>-->
    <script src="public/js/checkout.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  </head>
  <body>
    <script>
      var Bizweb = Bizweb || {};
      Bizweb.id = "506650";
      Bizweb.store = "sudes-nest.mysapo.net";

      Bizweb.template = "checkout";
      Bizweb.Checkout = Bizweb.Checkout || {};
    </script>

    <script>
      window.BizwebAnalytics = window.BizwebAnalytics || {};
      window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
      window.BizwebAnalytics.meta.currency = "VND";
      window.BizwebAnalytics.tracking_url = "/s";
      var meta = {};

      for (var attr in meta) {
        window.BizwebAnalytics.meta[attr] = meta[attr];
      }
    </script>
    <header class="banner">
      <div class="wrap">
        <div class="logo logo--center">
          <a href="/">
            <img
              class="logo__image logo__image--medium"
              alt="Sudes Nest"
              src="public/img/checkout_logo.jpg"
            />
          </a>
        </div>
      </div>
    </header>

    <aside>
      <button
        class="order-summary-toggle"
        data-toggle="#order-summary"
        data-toggle-class="order-summary--is-collapsed">
        <span class="wrap">
          <span class="order-summary-toggle__inner">
            <span class="order-summary-toggle__text expandable">
              Đơn hàng (1 sản phẩm)
            </span>
            <span
              class="order-summary-toggle__total-recap"
              data-bind="getTextTotalPrice()"
            ></span>
          </span>
        </span>
      </button>
    </aside>

    <div data-tg-refresh="checkout" id="checkout" class="content">
      <?php if(!empty($list_product_inCart)){?>
      <form id="checkoutForm" method="POST" name="form-checkout" action="">
        <input type="hidden" name="_method" value="patch" />
        <div class="wrap">
          <main class="main">
            <header class="main__header">
              <div class="logo logo--center">
                <a href="/">
                  <img
                    class="logo__image logo__image--medium"
                    alt="Sudes Nest"
                    src="public/img/checkout_logo.jpg"/>
                </a>
              </div>
            </header>
            
            
            <div class="main__content">
              <article class="animate-floating-labels row">
                <div class="col col--two">
                  <section class="section">
                    <div class="section__header">
                      <div class="layout-flex">
                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                          <i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                          Thông tin nhận hàng
                        </h2>
                        <a href="/account/login?returnUrl=/checkout/65a5871b9f6e40959d4025372971a305">
                          <i class="fa fa-user-circle-o fa-lg"></i>
                          <span>Đăng nhập </span>
                        </a>
                      </div>
                    </div>
                    <div class="section__content">
                      <div class="fieldset">
                        <div class="field">
                          <div class="field__input-wrapper">
                            <label for="email" class="field__label">Email</label>
                            <input name="email" id="email" type="text" class="field__input" value="<?php echo set_value('email')?>"/>
                            <?php echo form_error('email')?>
                          </div>
                        </div>

                        <div class="field">
                          <div class="field__input-wrapper">
                            <label for="billingName" class="field__label">Họ và tên</label>
                            <input name="billingName" id="billingName" type="text" class="field__input" value="<?php echo set_value('hoten')?>"/>
                            <?php echo form_error('billingName')?>
                          </div>
                        </div>

                        <div class="field">
                          <div class="field__input-wrapper">
                            <label for="billingPhone" class="field__label">Số điện thoại</label>
                            <input name="sdt" id="phone" type="tel" class="field__input" value="<?php echo set_value('sdt')?>">
                            <?php echo form_error('sdt')?>
                          </div>
                        </div>

                        <div class="field" >
                          <div class="field__input-wrapper">
                            <label for="billingAddress" class="field__label">Địa chỉ (tùy chọn)</label>
                            <input name="sonha" id="address" type="text" class="field__input" value="<?php echo set_value('sonha')?>"/>
                            <?php echo form_error('sonha')?>
                          </div>
                        </div>

                        <!-- Tỉnh thành -->
                        <div class="field field--show-floating-label">
                          <div class="field__input-wrapper field__input-wrapper--select2">
                            <span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;">   
                              <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                              </span>
                              <label for="billingProvince" class="field__label">Tỉnh thành</label>
                              <select name="billingProvince" id="billingProvince" class="field__input field__input--select">
                              <option value="">---</option>
                                <?php
                                  $tinh_list = get_all_tinh();
                                  foreach ($tinh_list as $tinh) {
                                    echo "<option value='{$tinh['id']}'>{$tinh['ten']}</option>";
                                  }
                                ?>
                              </select>
                              <?php echo form_error('billingProvince')?>
                            </span>
                          </div>
                        </div>

                        <!-- Quận huyện -->
                        <div class="field field--show-floating-label">
                          <div class="field__input-wrapper field__input-wrapper--select2">
                            <span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;">   
                              <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                              </span>
                              <label for="billingDistrict" class="field__label">Quận huyện (tùy chọn)</label>
                              <select name="billingDistrict" id="billingDistrict" class="field__input field__input--select">
                                <option value="">---</option>
                              </select>
                              <?php echo form_error('billingDistrict')?>
                            </span>
                          </div>
                        </div>

                        <!-- Phường xã -->
                        <div class="field field--show-floating-label">
                          <div class="field__input-wrapper field__input-wrapper--select2">
                            <span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 100%;">   
                              <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                              </span>
                              <label for="billingWard" class="field__label">Phường xã (tùy chọn)</label>
                              <select name="billingWard" id="billingWard" class="field__input field__input--select">
                                <option value="">---</option>
                              </select>
                              <?php echo form_error('billingWard')?>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <div class="fieldset">
                    <h3 class="visually-hidden">Ghi chú</h3>
                    <div class="field">
                      <div class="field__input-wrapper">
                        <label for="GhiChu" class="field__label">Ghi chú (tùy chọn)</label>
                        <textarea name="GhiChu" id="note" class="field__input" value="<?php echo set_value('GhiChu')?>"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col col--two">
                  <section class="section">
                    <div class="section__header">
                      <div class="layout-flex">
                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                          <i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                          Vận chuyển
                        </h2>
                      </div>
                    </div>
                    <div class="section__content" id="shippingMethodList">
                      <div class="alert alert--loader spinner spinner--active hide">
                        <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                          <use href="#spinner"></use>
                        </svg>
                      </div>

                      <!-- <div class="alert alert--danger hide">
                        Khu vực không hỗ trợ vận chuyển
                      </div>

                      <div class="alert alert-retry alert--danger hide">
                        <span data-bind="loadingShippingErrorMessage">Không thể load phí vận chuyển. Vui lòng thử lại</span>
                        <i class="fa fa-refresh"></i>
                      </div> -->

                      <!-- <div class="content-box hide"></div> -->
                      <div class="alert alert--info">Vui lòng nhập thông tin giao hàng</div>

                      <div class="content-box hide" id="shippingOptionBox">
                        <div class="content-box__row">
                          <div class="radio-wrapper">
                            <div class="radio__input">
                              <input type="radio" class="input-radio" name="shippingMethod" id="" value="Giao hàng tận nơi">
                            </div>
                            <label class="radio__label">
                              <span class="radio__label__primary">
                                <span>Giao hàng tận nơi</span>
                              </span>
                              <span class="radio__label__accessory">
                                <span class="content-box__emphasis price" id="shippingFee">0₫</span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="section">
                    <div class="section__header">
                      <div class="layout-flex">
                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                          <i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                          Thanh toán
                        </h2>
                      </div>
                    </div>

                    <div class="section__content">
                      <div class="content-box">
                        <div class="content-box__row">
                          <div class="radio-wrapper">
                            <div class="radio__input">
                              <input name="payment_method" id="direct-payment" type="radio" class="input-radio" value="Thanh toán tại quầy"/>
                            </div>
                            <label for="direct-payment" class="radio__label">
                              <span class="radio__label__primary">Thanh toán tại quầy</span>
                              <span class="radio__label__accessory">
                                <span class="radio__label__icon">
                                  <i class="payment-icon payment-icon--3"></i>
                                </span>
                              </span>
                            </label>
                          </div>
                        </div>

                        <div class="content-box__row">
                          <div class="radio-wrapper">
                            <div class="radio__input">
                              <input name="payment_method" id="payment-home" type="radio" class="input-radio" value="Thu hộ (COD)"/>
                            </div>
                            <label for="payment-home" class="radio__label">
                              <span class="radio__label__primary">Thu hộ (COD)</span>
                              <span class="radio__label__accessory">
                                <span class="radio__label__icon">
                                  <i class="payment-icon payment-icon--4"></i>
                                </span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <?php echo form_error('payment_method')?>
                    </div>
                  </section>
                </div>
              </article>

              <!-- <div
                class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
                <button
                  type="submit"
                  class="btn btn-checkout spinner"
                  data-bind-class="{'spinner--active': isSubmitingCheckout}"
                  data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode"
                >
                  <span class="spinner-label">ĐẶT HÀNG</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="spinner-loader"
                  >
                    <use href="#spinner"></use>
                  </svg>
                </button>

                <a href="/cart" class="previous-link">
                  <i class="previous-link__arrow">❮</i>
                  <span class="previous-link__content">Quay về giỏ hàng</span>
                </a>
              </div> -->

              <div id="common-alert" data-tg-refresh="refreshError">
                <div class="alert alert--danger hide-on-desktop hide">
                  Có lỗi xảy ra khi xử lý. Vui lòng thử lại
                </div>
              </div>
            </div>
            
            
          </main>

          <aside class="sidebar">
            <div class="sidebar__header">
              <h2 class="sidebar__title">Đơn hàng (3 sản phẩm)</h2>
            </div>
            <div class="sidebar__content">
              <div
                id="order-summary"
                class="order-summary order-summary--is-collapsed"
              >
                <div class="order-summary__sections">
                  <div
                    class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element"
                  >
                    <table
                      class="product-table"
                      id="product-table"
                      data-tg-refresh="refreshDiscount">
                      <caption class="visually-hidden">
                        Chi tiết đơn hàng
                      </caption>
                      <thead class="product-table__header">
                        <tr>
                          <th>
                            <span class="visually-hidden">Ảnh sản phẩm</span>
                          </th>
                          <th>
                            <span class="visually-hidden">Mô tả</span>
                          </th>
                          <th>
                            <span class="visually-hidden">Sổ lượng</span>
                          </th>
                          <th>
                            <span class="visually-hidden">Đơn giá</span>
                          </th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php foreach($list_product_inCart as $item){ ?>
                          <tr class="product">
                            <td class="product__image">
                              <div class="product-thumbnail">
                                <div class="product-thumbnail__wrapper">
                                  <img src="admin/public/images/<?php echo $item['product_thumb']?>" alt="" class="product-thumbnail__image"/>
                                </div>
                                <span class="product-thumbnail__quantity"><?php echo $item['qty']?></span>
                              </div>
                            </td>
                            <th class="product__description">
                              <span class="product__description__name"><?php echo $item['product_title']?></span>
                            </th>
                            <td class="product__quantity visually-hidden">
                              <em>Số lượng:</em> 1
                            </td>
                            <td class="product__price"><?php echo currency_format($item['sub_total']) ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <div
                    class="order-summary__section order-summary__section--discount-code"
                    data-tg-refresh="refreshDiscount"
                    id="discountCode">
                    <h3 class="visually-hidden">Mã khuyến mại</h3>
                    <div class="edit_checkout animate-floating-labels">
                      <div class="fieldset">
                        <div class="field">
                          <div class="field__input-btn-wrapper">
                            <form method="post">
                              <div class="field__input-wrapper">
                                  <label for="ten_voucher" class="field__label">Nhập mã giảm giá</label>
                                  <input name="ten_voucher" id="ten_voucher" type="text" class="field__input"/>
                              </div>
                              <button class="field__input-btn btn spinner" type="submit" name="btn-apdung" >
                                <span class="spinner-label">Áp dụng</span>
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="spinner-loader">
                                  <use href="#spinner"></use>
                                </svg>
                              </button>
                            </form> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
                    data-tg-refresh="refreshOrderTotalPrice"
                    id="orderSummary">
                    <table class="total-line-table">
                      <caption class="visually-hidden">
                        Tổng giá trị
                      </caption>
                      <thead>
                        <tr>
                          <td><span class="visually-hidden">Mô tả</span></td>
                          <td><span class="visually-hidden">Giá tiền</span></td>
                        </tr>
                      </thead>
                      <tbody class="total-line-table__tbody">
                        <tr class="total-line total-line--subtotal">
                          <th class="total-line__name">Tạm tính </th>
                          <td class="total-line__price"><?php echo currency_format(get_total_cart())  ?></td>
                        </tr>

                        <tr class="total-line total-line--shipping-fee">
                          <th class="total-line__name">Phí vận chuyển</th>
                          <td class="total-line__price">
                            <span class="origin-price"></span>
                            <span id="shippingFeeDisplay">-</span>
                          </td>
                        </tr>

                        <?php 
                          if(isset($voucher['gia'])){
                        ?>
                        <tr class="total-line total-line--shipping-fee">
                          <th class="total-line__name">
                            <span class="discount-tag">
															<span class="discount-icon"><i class="fa fa-tag"></i></span>
															<span class="discount-tag__name"><?php echo $voucher['ten_voucher']?></span>
													</span>
                          </th>
                          <td class="total-line__price">
                            <span id="giamgia">-<?php echo currency_format($voucher['gia'])?></span>
                          </td>
                        </tr>
                        <?php } ?>

                        <tr class="total-line total-line--invoice-fee" id="invoiceFeeRow" style="display: none;">
                          <th class="total-line__name">Thuế xuất hóa đơn (10%)</th>
                          <td class="total-line__price"><span id="invoiceFeeDisplay">0₫</span></td>
                        </tr>
                      </tbody>
                      <tfoot class="total-line-table__footer">
                        <tr class="total-line payment-due">
                          <th class="total-line__name">
                            <span class="payment-due__label-total">Tổng cộng</span>
                          </th>
                          <td class="total-line__price">
                            <span  class="payment-due__price"></span>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div
                    class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                    <button type="submit" class="btn btn-checkout spinner" id="order-now" name="btn-dathang" value="Đặt hàng">
                      <span class="spinner-label">ĐẶT HÀNG</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader"> <use href="#spinner"></use></svg>
                    </button>

                    <a href="/cart" class="previous-link">
                      <i class="previous-link__arrow">❮</i>
                      <span class="previous-link__content">Quay về giỏ hàng</span>
                    </a>
                  </div>
                  <div id="common-alert-sidebar" data-tg-refresh="refreshError">
                    <div class="alert alert--danger hide-on-mobile hide">Có lỗi xảy ra khi xử lý. Vui lòng thử lại</div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </form>
      <?php } ?>

      <!-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="spinner">
				<svg viewBox="0 0 30 30">
					<circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
						<animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15" dur="0.7s" repeatCount="indefinite"></animateTransform>
					</circle>
				</svg>
			</symbol>
		</svg> -->
    </div>
  </body>
  <script>
    $(document).ready(function () {
      // Khi chọn tỉnh/thành, tải danh sách quận/huyện và cập nhật phí vận chuyển
      const subtotalText = $('.total-line--subtotal .total-line__price').text();
      $('.payment-due__price').text(subtotalText); // Gán "Tổng cộng" = "Tạm tính"
      
      $('#billingProvince').on('change', function () {
        const provinceId = $(this).val();

        if (provinceId) {
          $.ajax({
              url: 'index.php?mod=cart&action=ajax_get_quan', // Gọi action ajax_get_quan
              type: 'POST',
              data: { tinh_id: provinceId },
              dataType: 'json',
              success: function (response) {
                console.log("Dữ liệu response:", response);
                $('#billingDistrict').html(response.options);
                $('#billingWard').html('<option value="">---</option>');

                // Cập nhật phí vận chuyển
                $('#shippingFee').text(response.fee + '₫');
                $('#shippingMethod-784957_0').val('784957_0,' + response.fee + ' VND');

                updateShippingVisibility(response.fee + '₫');
              },
              error: function (xhr, status, error) {
                  console.error("Lỗi khi tải quận/huyện:", error);
              }
          });
        } else {
          $('#billingDistrict').html('<option value="">---</option>');
          $('#billingWard').html('<option value="">---</option>');
          $('#shippingFee').text('0₫');
        }
      });           

      // Khi chọn quận huyện, tải phường/xã và cập nhật phí vận chuyển
      $('#billingDistrict').on('change', function () {
        const districtId = $(this).val();

        if (districtId) {
          $.ajax({
            url: 'index.php?mod=cart&action=ajax_get_phuong', // Gọi action ajax_get_phuong
            type: 'POST',
            data: { quan_id: districtId },
            dataType: 'json',
            success: function (response) {
              $('#billingWard').html(response.options);

              // Nếu trong response có giá ship thì cập nhật
              if (response.fee) {
                $('#shippingFee').text(response.fee + '₫');
              }

              updateShippingVisibility(response.fee + '₫');
            },
            error: function (xhr, status, error) {
              console.error("Lỗi khi tải phường/xã:", error);
            }
          });
        } else {
            $('#billingWard').html('<option value="">---</option>');
        }
      });

       // Gọi ban đầu
        updateTotalPrice();

        // Theo dõi thay đổi nội dung của phần tử có id="giamgia"
        const target = document.getElementById('giamgia');

        if (target) {
          const observer = new MutationObserver(function () {
            updateTotalPrice();
          });

          observer.observe(target, { childList: true, characterData: true, subtree: true });
        }
    });

    function updateShippingVisibility(feeStr) {
      const feeRaw = feeStr.replace(/[^\d]/g, '');
      const fee = parseInt(feeRaw) || 0;

      if (fee > 0) {
        $('.alert.alert--info').hide();
        $('#shippingOptionBox').removeClass('hide');

        // Hiển thị phí ship vào bảng và cập nhật tổng
        $('#shippingFee').text(feeStr);
        $('#shippingFeeDisplay').text(feeStr);

        updateTotalPrice(); // Gọi hàm tính tổng mới
      } else {
        $('.alert.alert--info').show();
        $('#shippingOptionBox').addClass('hide');

        // Reset lại phí ship và tổng cộng bằng tạm tính
        $('#shippingFee').text('0₫');
        $('#shippingFeeDisplay').text('-');

        const subtotalText = $('.total-line--subtotal .total-line__price').text();
        $('.payment-due__price').text(subtotalText);
      }
    }

    const isInvoice = <?= json_encode(!empty($is_invoice)) ?>;

    function updateTotalPrice() {
      // Lấy số tiền tạm tính (đã định dạng VND như 4.600.000₫)
      const subtotalText = $('.total-line--subtotal .total-line__price').text();
      const subtotal = parseInt(subtotalText.replace(/[^\d]/g, '')) || 0;

      // Lấy phí ship từ phần tử #shippingFeeDisplay
      const feeText = $('#shippingFeeDisplay').text();
      const shippingFee = parseInt(feeText.replace(/[^\d]/g, '')) || 0;

      // Lấy giá trị giảm giá từ voucher (nếu có)
      const discountText = $('#giamgia').text();
      const discount = parseInt(discountText.replace(/[^\d]/g, '')) || 0;

      // Tính tổng: mặc định là subtotal
      let total = subtotal;

      let invoiceFee = 0;

      if (isInvoice) {
        invoiceFee = Math.floor(subtotal * 0.1); // 10% thuế hóa đơn
        $('#invoiceFeeRow').show(); // hiển thị dòng thuế
        $('#invoiceFeeDisplay').text(new Intl.NumberFormat('vi-VN').format(invoiceFee) + '₫');
      } else {
        $('#invoiceFeeRow').hide(); // ẩn dòng thuế nếu không xuất
        $('#invoiceFeeDisplay').text('0₫');
      }

      if (invoiceFee > 0) {
        total += invoiceFee
      }

      if (shippingFee > 0) {
        total += shippingFee;
      }

      if (discount > 0) {
        total -= discount;
      }

      
      // Đảm bảo tổng không âm
      if (total < 0) total = 0;

      // Hiển thị kết quả định dạng VND
      const formattedTotal = new Intl.NumberFormat('vi-VN').format(total) + '₫';
      $('.payment-due__price').text(formattedTotal);
    }
  </script>
</html>
