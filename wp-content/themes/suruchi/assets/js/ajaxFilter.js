(function ($) {

    jQuery(document).ready(function () {
        $('.filter-item > a').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $('.filter-item > a').removeClass('active');
            $(this).addClass('active');

            var category = $(this).data('category');
            // console.log(category)

            $.ajax({
                url: wpAjax.ajaxUrl,
                data: { action: 'filter', category: category },
                type: 'post',
                beforeSend: function () {
                    $('.products-container > .if-not-product').addClass('spinner-border d-block');
                },
                success: function (result) {
                    $('.products-filter').html(result);
                    $('.products-container > .if-not-product').removeClass('spinner-border d-block');
                },
                error: function (result) {
                    console.warn(result)
                }
            });
        });
    });


})(jQuery)

