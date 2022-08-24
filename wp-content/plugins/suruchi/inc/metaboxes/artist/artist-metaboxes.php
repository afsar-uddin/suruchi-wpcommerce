<?php
include_once( IC_INC_DIR . '/metaboxes/artist/information.php' );
include_once( IC_INC_DIR . '/metaboxes/artist/map.php' );
include_once( IC_INC_DIR . '/metaboxes/artist/added_by.php' );

if ( ! function_exists( 'ic_register_artist_metaboxes' ) ) {

	function ic_register_artist_metaboxes( $meta_boxes ) {

		$meta_boxes_tabs = array();
		$meta_boxes_fields = array();

		$meta_boxes[] = array(
			'id'         => 'ic-artist-meta-box',
			'title'      => esc_html__( 'Artist', 'ic-core' ),
			'post_types' => array( 'artist' ),
			'tabs'       => apply_filters( 'ic_artist_metabox_tabs', $meta_boxes_tabs ),
			'tab_style'  => 'box',
			'fields'     => apply_filters( 'ic_artist_metabox_fields', $meta_boxes_fields ),
		);

		return apply_filters( 'ic_artist_metabox_meta', $meta_boxes );

	}

	add_filter( 'rwmb_meta_boxes', 'ic_register_artist_metaboxes' );
}