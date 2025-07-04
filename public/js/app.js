// $(document).ready(function () {
//     $(".num-order").change(function () {
//         var data_id = $(this).attr('data_id');
//         var num_order = $(this).val();
//         var data = { data_id: data_id, num_order: num_order};
//         console.log(data);
//         $.ajax({
//             url:'?mod=cart&action=update_sl',
//             method: 'POST',
//             data: data,
//             dataType: 'json',
//             success: function(data) {
//                 $(".sub-total-"+data_id).text(data.sub_total);
//                 $("#total").text(data.total);
//                 $("#Provisional").text(data.total);
//                 $("#total_cart").text(data.total);
//                 $("#btn-cart span#num").text(data.num_order);
//                 $("#num").text(data.num_order);
//                 $("span#qty-"+data_id).text(data.qty);
//             },
//             error: function (xhr, ajaxOptions, throwError) {
//                 alert(xhr.status);
//                 alert(throwError);
//                 alert(data);
                 
//             }
//         });
//     })
// });


$(document).ready(function () {
    $(document).off("click").on("click", ".ajaxcart__qty-adjust", function () {
        var data_id = $(this).attr("data-id");
        var current_qty = parseInt($("input[data-id='" + data_id + "']").val());
        
        if ($(this).hasClass("ajaxcart__qty--plus")) {
            current_qty++;
        } else if ($(this).hasClass("ajaxcart__qty--minus") && current_qty > 1) {
            current_qty--;
        }
        
        $("input[data-id='" + data_id + "']").val(current_qty);
        updateCartQuantity(data_id, current_qty);
    });
    
    $(".num-order").change(function () {
        var data_id = $(this).attr("data-id");
        var num_order = parseInt($(this).val());
        if (num_order < 1 || isNaN(num_order)) {
            num_order = 1;
            $(this).val(1);
        }
        updateCartQuantity(data_id, num_order);
    });
});

function updateCartQuantity(data_id, num_order) {
    var data = { data_id: data_id, num_order: num_order };

    $.ajax({
        url: '?mod=cart&action=update_sl',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function (data) {
            console.log("Server response:", data); // Kiểm tra dữ liệu trả về
        
            let productRow = $(".cart_product").filter(function () {
                return $(this).find("input[data-id='" + data_id + "']").length > 0;
            });
        
            if (productRow.length > 0) {
                productRow.find(".cart-price.sub-total").text(data.sub_total); // Cập nhật đúng sub_total
            }
        
            $("#total").text(data.total);
            $("#Provisional").text(data.total);
            $("#total_cart").text(data.total);
            $(".total-price").text(data.total);
            $("#btn-cart span#num").text(data.num_order);
            $("#num").text(data.num_order);
            $("span#qty-" + data_id).text(data.qty);
            $(".count_item").text(data.num_order);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log("XHR response:", xhr.responseText); // In nội dung lỗi từ server
            alert("Error: " + xhr.status + " - " + thrownError);
        }
    });
}



// $(document).ready(function () {
//     // Xử lý khi thay đổi số lượng bằng input
//     $(".num-order").change(function () {
//         var data_id = $(this).attr("data-id");
//         var num_order = parseInt($(this).val()) || 0;
//         var data = { data_id: data_id, num_order: num_order };

//         // Cập nhật trực tiếp sub_total trên giao diện ngay lập tức
//         var price = parseFloat($(this).closest('.cart_select').find('.product-price').text().replace(/[^0-9.-]+/g, "")); // Giả sử có giá sản phẩm ở trong .product-price
//         var sub_total = (price * num_order).toFixed(2);
//         $(".sub-total-"+data_id).text(currency_format(sub_total)); // Cập nhật sub_total trực tiếp

//         $.ajax({
//             url: "?mod=cart&action=update_sl",
//             method: "POST",
//             data: data,
//             dataType: "json",
//             success: function (data) {
//                 // Cập nhật lại toàn bộ thông tin sau khi nhận được kết quả từ server
//                 $(".sub-total-"+data_id).text(data.sub_total);
//                 $("#total").text(data.total);
//                 $("#Provisional").text(data.total);
//                 $("#total_cart").text(data.total);
//                 $("#btn-cart span#num").text(data.num_order);
//                 $("#num").text(data.num_order);
//                 $("span#qty-"+data_id).text(data.qty);
//             },
//             error: function (xhr, ajaxOptions, throwError) {
//                 console.error("Lỗi AJAX:", throwError);
//                 alert("Lỗi cập nhật giỏ hàng!");
//             }
//         });
//     });

//     // Xử lý khi nhấn nút "+" hoặc "-"
//     $(".ajaxcart__qty-adjust").click(function () {
//         var $input = $(this).closest(".cart_select").find(".num-order");
//         var num_order = parseInt($input.val()) || 0;
//         var minValue = parseInt($input.attr("min")) || 0;
//         var data_id = $input.attr("data-id");

//         // Cập nhật số lượng ngay lập tức trên giao diện
//         if ($(this).hasClass("ajaxcart__qty--plus")) {
//             num_order++;
//         } else if ($(this).hasClass("ajaxcart__qty--minus") && num_order > minValue) {
//             num_order--;
//         }

//         // Cập nhật sub_total ngay lập tức trên giao diện
//         var price = parseFloat($input.closest('.cart_select').find('.product-price').text().replace(/[^0-9.-]+/g, ""));
//         var sub_total = price * num_order;  // Tính lại sub_total
//         $(".sub-total-"+data_id).text(sub_total); // Cập nhật sub_total ngay lập tức

//         $input.val(num_order).trigger("change");
//     });
// });




// $(document).ready(function () {
//     $(".ajaxcart__qty-adjust").on("click", function () {
//         let $input = $(this).closest(".ajaxcart__qty").find(".ajaxcart__qty-num");
//         let num_order = parseInt($input.val()) || 0;
//         let minValue = parseInt($input.attr("min")) || 0;
//         let price = parseFloat($input.attr("data-price")) || 0; // Giá sản phẩm
//         let data_id = $input.attr("data-id");

//         if ($(this).hasClass("ajaxcart__qty--plus")) {
//             num_order++;
//         } else if ($(this).hasClass("ajaxcart__qty--minus") && num_order > minValue) {
//             num_order--;
//         }

//         $input.val(num_order).trigger("change");

//         // Cập nhật trực tiếp sub_total trên giao diện
//         let total_price = (num_order * price).toLocaleString("vi-VN") + " đ";
//         $(".sub-total-" + data_id).text(total_price);
//     });

//     $(".ajaxcart__qty-num").on("change", function () {
//         let $input = $(this);
//         let data_id = $input.attr("data-id");
//         let num_order = parseInt($input.val()) || 0;

//         let data = {
//             data_id: data_id,
//             num_order: num_order
//         };

//         $.ajax({
//             url: "?mod=cart&action=update_sl",
//             method: "POST",
//             data: data,
//             dataType: "json",
//             success: function (data) {
//                 $(".sub-total-" + data.data_id).text(data.sub_total);
//                 $("#total, #Provisional, #total_cart").text(data.total);
//                 $("#btn-cart span#num, #num").text(data.num_order);
//                 $("span#qty-" + data.data_id).text(data.qty);
//             },
//             error: function (xhr, status, error) {
//                 console.error("Lỗi:", error);
//             }
//         });
//     });
// });

