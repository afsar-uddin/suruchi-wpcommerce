<?php
/**
 * Add artist addedby metabox tab
 *
 * @param $metabox_tabs
 *
 * @return array
 */
function ic_artist_addedby_metabox_tab( $metabox_tabs ) {
	if ( is_array( $metabox_tabs ) ) {

		$metabox_tabs['artist_addedby'] = array(
			'label' =>  'Added By',
			'icon'  => 'dashicons-admin-users',
		);

	}

	return $metabox_tabs;
}

add_filter( 'ic_artist_metabox_tabs', 'ic_artist_addedby_metabox_tab', 20 );


/**
 * Add artist added by metaboxes fields
 *
 * @param $metabox_fields
 * @return array
 */
function ic_artist_addedby_metabox_fields( $metabox_fields ) {
	$ic_prefix = 'ic_';

	$fields = array(
		array(
			'id'          => "{$ic_prefix}artist_ab_name",
			'name'        => __( 'Name', 'ic-core' ),
			'placeholder' => __( 'Enter name', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 4,
			'tab'         => 'artist_addedby',
		),
		array(
			'id'          => "{$ic_prefix}artist_ab_email",
			'name'        => __( 'Email', 'ic-core' ),
			'placeholder' => __( 'Enter email', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 4,
			'tab'         => 'artist_addedby',
		),
		array(
			'id'          => "{$ic_prefix}artist_ab_phone",
			'name'        => __( 'Phone', 'ic-core' ),
			'placeholder' => __( 'Enter phone', 'ic-core' ),
			'type'        => 'text',
			'columns'     => 4,
			'tab'         => 'artist_addedby',
		),
		array(
			'id'          => "{$ic_prefix}artist_ab_admin_note",
			'name'        => __( 'Admin Note', 'ic-core' ),
			'placeholder' => __( 'Enter admin note', 'ic-core' ),
			'type'        => 'textarea',
			'columns'     => 12,
			'tab'         => 'artist_addedby',
		),
	);

	return array_merge( $metabox_fields, $fields );

}

add_filter( 'ic_artist_metabox_fields', 'ic_artist_addedby_metabox_fields', 20 );
