<?php

/**
 * Enqueue scripts and styles.
 */
function suruchi_scripts()
{


	wp_enqueue_style('suruchi-glightbox', get_theme_file_uri('/assets/css/plugins/glightbox.min.css'));

	// wp_enqueue_style('bootstrap-style',get_theme_file_uri('/assets/plugins/bootstrap/css/bootstrap.min.css'));

	wp_enqueue_style('suruchi-swippercss', get_theme_file_uri('/assets/css/plugins/swiper-bundle.min.css'));

	wp_enqueue_style('suruchi-bootstrap', get_theme_file_uri('/assets/css/plugins/bootstrap.min.css'));

	wp_enqueue_style('suruchi-style', get_theme_file_uri('/assets/css/style.css'));

	wp_enqueue_style('suruchi-style', get_theme_file_uri(), array(), _S_VERSION);


	wp_style_add_data('suruchi-style', 'rtl', 'replace');



	wp_enqueue_script('suruchi-navigation', get_theme_file_uri('/js/navigation.js'), array(), _S_VERSION, true);

	wp_enqueue_script('suruchi-glightbox', get_theme_file_uri('/assets/js/plugins/glightbox.min.js'), 'jQuery', _S_VERSION, true);

	wp_enqueue_script('suruchi-swipper', get_theme_file_uri('/assets/js/plugins/swiper-bundle.min.js'), 'jQuery', _S_VERSION, true);

	wp_enqueue_script('suruchi-bs', get_theme_file_uri('/assets/js/vendor/bootstrap.min.js'), 'jQuery', _S_VERSION, true);

	wp_enqueue_script('suruchi-popper', get_theme_file_uri('/assets/js/vendor/popper.js'), 'jQuery', _S_VERSION, true);

	wp_enqueue_script('suruchi-custom', get_theme_file_uri('/assets/js/script.js'), 'jQuery', _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'suruchi_scripts');
