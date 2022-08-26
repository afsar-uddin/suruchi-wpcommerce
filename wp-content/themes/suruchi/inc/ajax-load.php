<?php

function load_scripts()
{
    wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/ajaxFilter.js', ['jquery'], null, true);

    wp_localize_script('ajax', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'load_scripts');


add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{

    $category = $_POST['category'];


    // var_dump($category);

    // $cat_args = [
    //     'post_type' => 'post',
    //     'posts_per_page' => -1
    // ];
    $cat_args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );
    if (isset($category)) {
        $cat_args['category__in'] = array($category);
    }

    $cat_post = new WP_Query($cat_args);


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
