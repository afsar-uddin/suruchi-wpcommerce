<?php
function ic_add_elementor_widget_categories( $elements_manager ) {

	$category_prefix = 'ic_elements';
	$elements_manager->add_category(
		'ic_elements',
		[
			'title' => __( 'IC Elements', 'ic-core' ),
			'icon'  => 'font',
		]
	);

}

add_action( 'elementor/elements/categories_registered', 'ic_add_elementor_widget_categories' );