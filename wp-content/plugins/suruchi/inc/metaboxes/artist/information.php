<?php
/**
 * Add information metabox tab
 *
 * @param $metabox_tabs
 *
 * @return array
 */
function ic_artist_information_metabox_tab( $metabox_tabs ) {
	if ( is_array( $metabox_tabs ) ) {

		$metabox_tabs['artist_info'] = array(
			'label' => 'Information',
			'icon'  => 'dashicons-admin-home',
		);

	}

	return $metabox_tabs;
}

add_filter( 'ic_artist_metabox_tabs', 'ic_artist_information_metabox_tab', 10 );


/**
 * Add information metaboxes fields
 *
 * @param $metabox_fields
 *
 * @return array
 */
function ic_artist_information_metabox_fields( $metabox_fields ) {
	$ic_prefix = 'ic_';

	$fields = array(
		array(
			'id'          => "{$ic_prefix}artist_email",
			'name'        => __( 'Email', 'ic-core' ),
			'placeholder' => __( 'Enter artist email', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 4,
			'tab'         => 'artist_info',
		),
		array(
			'id'          => "{$ic_prefix}artist_phone",
			'name'        => __( 'Phone', 'ic-core' ),
			'placeholder' => __( 'Enter artist phone', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 4,
			'tab'         => 'artist_info',
		),
		array(
			'id'          => "{$ic_prefix}artist_website",
			'name'        => __( 'Website', 'ic-core' ),
			'placeholder' => __( 'Enter artist website', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 4,
			'tab'         => 'artist_info',
		),
		array(
			'id'          => "{$ic_prefix}artist_city",
			'name'        => __( 'City', 'ic-core' ),
			'placeholder' => __( 'Enter artist city', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 12,
			'tab'         => 'artist_info',
		),

	);

	return array_merge( $metabox_fields, $fields );

}

add_filter( 'ic_artist_metabox_fields', 'ic_artist_information_metabox_fields', 10 );