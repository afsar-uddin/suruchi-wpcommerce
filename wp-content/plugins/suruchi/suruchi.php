<?php

/**
 * Plugin Name: Suruchi 
 * Plugin URI:  https://www.afsarbd.com
 * Description: Plugin that adds additional features needed by our theme
 * Version:     1.0.0
 * Author:      Afsar Uddin
 * Author URI:  https://www.afsarbd.com
 * Text Domain: suruchi
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 *
 * @package suruchi
 * @author  Afsar
 * @license GPL-2.0+
 * @copyright  2020, Suruchi
 */

defined('ABSPATH') || exit;

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define('SURUCHI_CORE_VERSION', '1.0.0');

if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

/* define plugin file */
if (!defined('SURUCHI_CORE_PLUGIN_FILE')) {
    define('SURUCHI_CORE_PLUGIN_FILE', __FILE__);
}

/* define plugin path */
if (!defined('SURUCHI_CORE_PATH')) {
    define('SURUCHI_CORE_PATH', plugin_dir_path(__FILE__));
}

/* define plugin URL */
if (!defined('SURUCHI_CORE_URL')) {
    define('SURUCHI_CORE_URL', plugins_url() . '/itclan-core');
}

/* define inc URL */
if (!defined('SURUCHI_INC_URL')) {
    define('SURUCHI_INC_URL', SURUCHI_CORE_URL . '/inc');
}

/* define inc path */
if (!defined('SURUCHI_INC_DIR')) {
    define('SURUCHI_INC_DIR', SURUCHI_CORE_PATH . 'inc');
}

function suruchi_core_construct()
{

    /*
	** Require file
	*/
    require_once(SURUCHI_INC_DIR . '/init.php');

    /*
	** Load text domain
	*/
    load_plugin_textdomain('suruchi', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

add_action('plugins_loaded', 'suruchi_core_construct', 20);

/**
 * The code that runs during plugin inc.
 * This action is documented in /inc/class-activator.php
 */
function suruchi_plugin_activate()
{
    require_once(SURUCHI_INC_DIR . '/class-activator.php');
    // Suruchi_Plugin_Activator::activate();
}

register_activation_hook(__FILE__, 'suruchi_plugin_activate');


/**
 * The code that runs during plugin deactivation.
 * This action is documented in /inc/class-deactivator.php
 */
function suruchi_plugin_deactivate()
{
    require_once(SURUCHI_INC_DIR . '/class-deactivator.php');
    // Suruchi_Plugin_Deactivator::deactivate();
}

register_deactivation_hook(__FILE__, 'suruchi_plugin_deactivate');
