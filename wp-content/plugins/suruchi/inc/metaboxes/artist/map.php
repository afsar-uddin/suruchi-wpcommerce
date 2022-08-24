<?php
/**
 * Add map metabox tab
 *
 * @param $metabox_tabs
 *
 * @return array
 */
function ic_artist_map_metabox_tab( $metabox_tabs ) {
	if ( is_array( $metabox_tabs ) ) {

		$metabox_tabs['artist_map'] = array(
			'label' => __( 'Map', 'ic-core' ),
			'icon'  => 'dashicons-location',
		);

	}

	return $metabox_tabs;
}

add_filter( 'ic_artist_metabox_tabs', 'ic_artist_map_metabox_tab', 20 );


/**
 * Add map metaboxes fields
 *
 * @param $metabox_fieldsic @return array
 */
function ic_artist_map_metabox_fields( $metabox_fields ) {
	$ic_prefix = 'ic_';

	$fields = array(
		array(
			'name'    => __( 'Map', 'ic-core' ),
			'id'      => "{$ic_prefix}artist_map",
			'type'    => 'radio',
			'std'     => 1,
			'options' => array(
				1 => __( 'Show ', 'ic-core' ),
				0 => __( 'Hide', 'ic-core' )
			),
			'columns' => 12,
			'tab'     => 'artist_map',
		),
		array(
			'id'          => "{$ic_prefix}artist_map_address",
			'name'        => __( 'Address', 'ic-core' ),
			'placeholder' => __( 'Enter your artist address', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 12,
			'tab'         => 'artist_map',
		),
		array(
			'id'            => "{$ic_prefix}artist_location",
			'desc'          => __( 'Drag and drop the pin on map to find exact location', 'ic-core' ),
			'type'          => 'map',
			'std'           => '-6.233406,-35.049906,15',
			'style'         => 'width: 100%; height: 410px',
			'address_field' => "{$ic_prefix}artist_map_address",
			'api_key'       => ic_map_api_key(),
			'language'      => get_locale(),
			'columns'       => 12,
			'tab'           => 'artist_map',
		),
	);

	return array_merge( $metabox_fields, $fields );

}

add_filter( 'ic_artist_metabox_fields', 'ic_artist_map_metabox_fields', 20 );
