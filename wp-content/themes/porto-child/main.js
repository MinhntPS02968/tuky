jQuery(function($){
    $( document ).ready(function() {
        $('#s').attr('placeholder','Tìm kiếm');
        $('.woocommerce-additional-fields >h3').html('Thêm ghi chú cho hoá đơn');
        $('#order_comments_field >#order_comments').attr('placeholder', 'Nội dung ghi chú');
        $('#billing_address_1_field >input#billing_address_1').attr('placeholder', 'Số nhà và tên đường');
        $('#billing_address_1_field >label').html('Địa chỉ');
        $('#order_comments_field >label').html('Ghi chú');
        $('#billing_company_field >label').html('Tên công ty');
        $('.checkout_coupon input#coupon_code').attr('placeholder','Mã giảm giá');
     });
});