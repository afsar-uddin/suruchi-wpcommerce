<?php
defined('ABSPATH') || exit;

/**
 * Loading Style and Scripts.
 * @since 1.0.0
 * @author ITclanbd
 */
add_action('admin_enqueue_scripts', 'ic_core_admin_scripts', 99);
function ic_core_admin_scripts($screen)
{
	wp_enqueue_script(
		'ic-admin',
		SURUCHI_CORE_URL . '/admin/js/ic-admin.js',
		array('jquery'),
		SURUCHI_CORE_VERSION,
		true
	);
}

function ic_get_current_url()
{
	$protocol = is_ssl() ? 'https://' : 'http://';

	return ($protocol) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

add_shortcode('current_year', 'year_shortcode');
function year_shortcode()
{
	$year = date_i18n('Y');

	return $year;
}


add_shortcode('ic_copyright_logo', 'ic_copyright_logo');
function ic_copyright_logo()
{
	$logo = '';
	$logo .= '<a href="' . esc_url('https://itclanbd.com/') . '" target="_blank" style="display: inline-block; margin-left: 5px;">';
	$logo .= '<img src="' . SURUCHI_CORE_URL . '/assets/images/itclan-logo.png" alt="ITclan BD"/>';
	$logo .= '</a>';

	return $logo;
}
