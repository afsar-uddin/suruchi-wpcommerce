<?php


require get_template_directory() . '/inc/suruchi-widget.php';

require get_template_directory() . '/inc/suruchi-setuptheme.php';

require get_template_directory() . '/inc/enqueue.php';

// require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/suruchi-action-filter.php';

require get_template_directory() . '/inc/ajax-load.php';

require get_template_directory() . '/inc/customizer.php';


if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
