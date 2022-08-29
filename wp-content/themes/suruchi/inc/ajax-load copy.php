<?php

function load_scripts()
{
    wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/ajaxFilter.js', ['jquery'], null, true);

    // wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/ajaxFilterProductCat.js', ['jquery'], null, true);

    wp_localize_script('ajax', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));

    // wp_localize_script('ajax', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'load_scripts');

// product category filter
add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{

    $post_items = [
        'post_type' => 'post',
        'posts_per_page' => -1
    ];

    $category = $_POST['category'];

    if (isset($category)) {
        $post_items['category__in'] = array($category);
    }

    $cat_post = new WP_Query($post_items);

    if ($cat_post->have_posts()) : while ($cat_post->have_posts()) : $cat_post->the_post();
?>
            <div class="col">
                <h3 class="product__items--content__title h4"><a href="#"><?php the_title(); ?></a></h3>
            </div>
<?php

        endwhile;
    endif;
    wp_reset_postdata();

    die();
}
