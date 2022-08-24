<?php
defined('ABSPATH') || exit;

/**
 * Auto loading all custom widgets
 * @since 1.0.0
 * @author ITclanbd
 */
foreach (glob(plugin_dir_path(__FILE__) . "theme-widgets/*.php") as $file) {
	include_once $file;
}

/**
 * Loading Elementor Extension
 * @since 1.0
 * @author ITclanbd
 */
if (did_action('elementor/loaded')) {
	require_once(SURUCHI_INC_DIR . '/elementor-extensions/elementor-init.php');
}

/*---------------------------------------------
* Include metaboxes
* --------------------------------------------*/
if (!class_exists('RW_Meta_Box')) {
	if (file_exists(SURUCHI_INC_DIR . '/extensions/meta-box/meta-box.php')) {
		include_once(SURUCHI_INC_DIR . '/extensions/meta-box/meta-box.php');
	}
}

/**
 * Loading plugin functions
 * @since 1.0.0
 * @author ITclanbd
 */
require_once(SURUCHI_INC_DIR . '/functions.php');

/**
 * Auto loading all classes
 * @since 1.0.0
 * @author ITclanbd
 */
foreach (glob(plugin_dir_path(__FILE__) . "classes/*.php") as $file) {
	require_once $file;
}

if (is_admin()) {
	// require_once( IC_INC_DIR . '/metaboxes/jobs/jobs.php' );
	// require_once( IC_INC_DIR . '/metaboxes/jobs/support-team.php' );
	require_once(SURUCHI_INC_DIR . '/metaboxes/products/product-terms.php');
}
