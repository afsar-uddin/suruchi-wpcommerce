<?php

if ( ! function_exists( 'ic_register_support_team_metaboxes' ) ) {

	function ic_register_support_team_metaboxes( $meta_boxes ) {

		$meta_boxes_tabs = array();
		$meta_boxes_fields = array();

		$meta_boxes[] = array(
			'id'         => 'ic-support-team-meta-box',
			'title'      => esc_html__( 'Support Team ', 'ic-core' ),
			'post_types' => array( 'support' ),
			'fields'     => array(
				
                array(
                    'id'          => "support_phone",
                    'name'        => __( 'Support Phone Number', 'ic-core' ),
                    'placeholder' => __( 'Enter support phone number here', 'ic-core' ),
                    'type'        => 'text',
                ),
                array(
                    'id'          => "support_email",
                    'name'        => __( 'Support Email Address', 'ic-core' ),
                    'placeholder' => __( 'Enter support email address here', 'ic-core' ),
                    'type'        => 'text',
                ),
            ),
		);

		return apply_filters( 'ic_jobs_metabox_meta', $meta_boxes );

	}

	add_filter( 'rwmb_meta_boxes', 'ic_register_support_team_metaboxes' );
}