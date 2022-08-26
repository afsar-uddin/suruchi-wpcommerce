(function ($) {
    jQuery(document).ready(function () {
        // jQuery(document).on('click', '.filter-item > a', function (e) {
        $('.filter-item > a').on('click', function (e) {
            e.preventDefault();

            var category = $(this).data('category');
            // console.log(category)

            $.ajax({
                url: wpAjax.ajaxUrl,
                data: { action: 'filter', category: category },
                type: 'post',
                success: function (result) {
                    $('.products-filter').html(result)
                },
                error: function (result) {
                    console.warn(result)
                }
            })


        });
    });
})(jQuery)