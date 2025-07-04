// $(document).ready(function(){
//     $('.add-to-cart-ajax').click(function(e){
//         e.preventDefault();

//         let productId = $(this).data('id');

//         $.ajax({
//             url: '?mod=cart&action=add_cart',
//             type: 'POST',
//             data: {
//                 product_id: productId,
//                 qty: 1
//             },
//             dataType: 'json',
//             success: function(response){
//                 if(response.status === 'success'){
//                     alert(response.message);
//                     $('#cart-count').text(response.total_items);

//                     // Gọi thêm AJAX để load lại giỏ hàng mini
//                     $.ajax({
//                         url: '?mod=cart&action=load_cart&ajax=1',
//                         type: 'GET',
//                         success: function(cartHtml){
//                             console.log('HTML load lại:', cartHtml); // Kiểm tra output
//                             $('.ajaxcart__inner').html(cartHtml);
//                         }
//                     });
//                 } else {
//                     alert(response.message);
//                 }
//             },
//             error: function(){
//                 alert("Lỗi khi thêm vào giỏ hàng!");
//             }
//         });
//     });
// });
// $(document).ready(function(){
//     $(document).on('click', '.add-to-cart-ajax', function(e){
//         e.preventDefault();

//         let productId = $(this).data('id');

//         $.ajax({
//             url: '?mod=cart&action=add_cart',
//             type: 'POST',
//             data: {
//                 product_id: productId,
//                 qty: 1
//             },
//             dataType: 'json',
//             success: function(response){
//                 if(response.status === 'success'){
//                     alert(response.message);
//                     $('#cart-count').text(response.total_items);

//                     // Cập nhật giỏ hàng ngay sau khi thêm
//                     $.ajax({
//                         url: '?mod=cart&action=load_cart&ajax=1',
//                         type: 'GET',
//                         cache: false,
//                         success: function(cartHtml){
//                             console.log(cartHtml);
//                             $('.ajaxcart__inner').html(cartHtml);
//                         }
//                     });

//                 } else {
//                     alert(response.message);
//                 }
//             },
//             error: function(){
//                 alert("Lỗi khi thêm vào giỏ hàng!");
//             }
//         });
//     });
// });

// $(document).ready(function() {
//     $('.add_cart').on('click', function(e) {
//         e.preventDefault(); 
//         var product_id = $(this).attr('var_id');
//         $.ajax({
//             url: '?mod=cart&action=ajax_add_cart',
//             method: 'POST',
//             data: {product_id},
//             dataType: 'json',
//             success: function(data) {
//                 $("#num").text(data.num_order);
//                 console.log(data.num_order);
//                 var answer=confirm("Quý khách đã thêm sản phẩm vào giỏ hàng. Vui lòng chọn [Cancel] để tiếp tục chọn thêm sản phẩm khác hoặc chọn [OK] để thanh toán."); 
//                 if(answer){window.location="gio-hang.htm";}
//                 else{window.location.href = window.location.href;}
//             },
//         })
//     });
//});

$(document).ready(function () {
    $('.add_cart').on('click', function (e) {
        e.preventDefault();

        var $button = $(this);
        var product_id = $button.attr('var_id');

        // Kiểm tra số lượng
        var qty = 1;
        var qtyInput = $button.closest('.flex-quantity').find('.qty-input');
        if (qtyInput.length > 0) {
            var inputVal = parseInt(qtyInput.val());
            if (!isNaN(inputVal) && inputVal > 0) {
                qty = inputVal;
            }
        }

        // Hỏi người dùng trước khi thêm sản phẩm vào giỏ
        const answer = confirm("Bạn có chắc muốn thêm sản phẩm này vào giỏ hàng?\nChọn OK để tiếp tục mua hàng hoặc Cancel để hủy.");

        if (answer) {
            $.ajax({
                url: '?mod=cart&action=ajax_add_cart',
                method: 'POST',
                data: {
                    product_id: product_id,
                    num_order: qty,
                    add_cart: true
                },
                dataType: 'json',
                success: function (data) {
                    if (data.num_order !== undefined) {
                        $('#num').text(data.num_order);
                        //alert("Sản phẩm đã được thêm vào giỏ hàng.");
                        location.reload();
                    } else {
                        alert("Lỗi: Dữ liệu trả về không hợp lệ.");
                        console.log(data);
                    }
                },
                error: function (xhr, status, error) {
                    alert("Đã xảy ra lỗi khi thêm vào giỏ hàng.");
                    console.error("Lỗi AJAX:", xhr.responseText);
                }
            });
        } else {
            console.log("Người dùng đã hủy thêm sản phẩm.");
        }
    });
});


function buyNow(product_id) {
    const qty = parseInt(document.getElementById('qtym').value) || 1;
    window.location.href = `?mod=cart&action=buy_now&product_id=${product_id}&num_order=${qty}`;
}

