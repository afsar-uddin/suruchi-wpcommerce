<?php

if ( ! function_exists( 'ic_register_jobs_metaboxes' ) ) {

	function ic_register_jobs_metaboxes( $meta_boxes ) {

		$meta_boxes_tabs = array();
		$meta_boxes_fields = array();

		$meta_boxes[] = array(
			'id'         => 'ic-jobs-meta-box',
			'title'      => esc_html__( 'Jobs ', 'ic-core' ),
			'post_types' => array( 'job' ),
			'tab_style'  => 'box',
            'tabs'      => array(
                'job_desc' => array(
                    'label' => 'Job Description',
                ),
                'job_org' => array(
                    'label' => 'Organization',
                ),
                'working_conditions' => array(
                    'label' => 'Working Conditions',
                ),
                'culture' => array(
                    'label' => 'Culture',
                ),
            ),
            'tab_wrapper' => true,
			'fields'     => array(
				
                array(
                    'id'          => "job_subtitle",
                    'name'        => __( 'Short Description', 'ic-core' ),
                    'placeholder' => __( 'Enter job Short Description here', 'ic-core' ),
                    'type'        => 'text',
                    // 'tab' => "contact",
                ),
                
                array(
                    'id'          => "qualifications",
                    'name'        => __( 'Qualifications', 'ic-core' ),
                    'placeholder' => __( 'Enter qualifications here ', 'ic-core' ),
                    'type'        => 'text',
	                'desc' => __( 'Examples: MBO, HBO', 'ic-core' ),
                ),
				
                // array(
                //     'id'          => "job_thumb",
                //     'name'        => __( 'Job Thumb', 'ic-core' ),
                //     'placeholder' => __( 'Attach job thumb here', 'ic-core' ),
                //     'type'        => 'single_image',
                // ),
				
                array(
                    'id'          => "weekly_hrs",
                    'name'        => __( 'Weekly Hours', 'ic-core' ),
                    'placeholder' => __( 'Add weekly hours here', 'ic-core' ),
                    'type'        => 'text',
                ),

                array(
                    'id'          => "job_link",
                    'name'        => __( 'Company website', 'ic-core' ),
                    'placeholder' => __( 'Enter job link here', 'ic-core' ),
                    'type'        => 'link',
                ),

                array(
                    'id'          => "company_name",
                    'name'        => __( 'Company Name', 'ic-core' ),
                    'placeholder' => __( 'Enter company name here', 'ic-core' ),
                    'type'        => 'text',
                ),

                array(
                    'id'          => "company_logo",
                    'name'        => __( 'Job Holder Company Logo', 'ic-core' ),
                    'placeholder' => __( 'Attach company logo here', 'ic-core' ),
                    'type'        => 'single_image',
                ),

                array(
                    'id'          => "job_experience",
                    'name'        => __( 'Experience', 'ic-core' ),
                    'placeholder' => __( 'Enter job experience here', 'ic-core' ),
                    'type'        => 'text',
                ),

                array(
                    'id'          => "job_salary",
                    'name'        => __( 'Salary Range', 'ic-core' ),
                    'placeholder' => __( 'Enter job salary per month basis here', 'ic-core' ),
                    'type'        => 'text',
                ),

                array(
                    'id'          => "job_application_date",
                    'name'        => __( 'Application Last Date', 'ic-core' ),
                    'placeholder' => __( 'Enter application last date here', 'ic-core' ),
                    'type'        => 'date',
                ),

                array(
                    'id'          => "location_name",
                    'name'        => __( 'State', 'ic-core' ),
                    'placeholder' => __( 'Enter your state here', 'ic-core' ),
                    'type'        => 'text',
                ),

                array(
                    'id'          => "location_zipcode",
                    'name'        => __( 'Zipcode', 'ic-core' ),
                    'placeholder' => __( 'Enter zipcode here', 'ic-core' ),
                    'type'        => 'text',
                ),

                array(
                    'id'          => "office_address",
                    'name'        => __( 'Address', 'ic-core' ),
                    'placeholder' => __( 'Enter address here', 'ic-core' ),
                    'type'        => 'text',
                ),

				array(
					'id'            => "company_location",
					'name'          => '',
					'desc'          => __('Drag and drop the pin on map to find exact location', 'ic-core'),
					'type'          => 'map',
					'std'           => '-6.233406,-35.049906,8',
					'style'         => 'width: 100%; height: 410px',
					'address_field' => "office_address",
					'api_key'       => 'AIzaSyBNrASOuKNnXr4a5rEqDC_8fo_isduYSeU',
					'language'      => get_locale(),
				),
				array(
					'id' => 'company_location_lat',
					'type' => 'hidden',
					'std' => '-6.233406',
				),
				array(
					'id' => 'company_location_lng',
					'type' => 'hidden',
					'std' => '-35.049906',
				),

                array(
                    'id'          => "download_link",
                    'name'        => __( 'Job description download link', 'ic-core' ),
                    'placeholder' => __( 'Enter your download link', 'ic-core' ),
                    'type'        => 'text',
                ),
                array(
                    'id'          => "job_detail_desc",
                    'name'        => __( 'Job Description', 'ic-core' ),
                    'placeholder' => __( 'Enter job Description here', 'ic-core' ),
                    'type'        => 'WYSIWYG',
                    'tab' => "job_desc",
                ),
                array(
                    'id'          => "job_detail_requirements",
                    'name'        => __( 'Job Requirements', 'ic-core' ),
                    'placeholder' => __( 'Enter job Requirements here', 'ic-core' ),
                    'type'        => 'WYSIWYG',
                    'tab' => "job_desc",
                ),
                array(
                    'id'          => "job_org_detail",
                    'name'        => __( 'Organization', 'ic-core' ),
                    'placeholder' => __( 'Enter about organization here', 'ic-core' ),
                    'type'        => 'WYSIWYG',
                    'tab' => "job_org",
                ),
                array(
                    'id'          => "working_conditions",
                    'name'        => __( 'Working conditions', 'ic-core' ),
                    'placeholder' => __( 'Enter working description here', 'ic-core' ),
                    'type'        => 'WYSIWYG',
                    'tab' => "working_conditions",
                ),
                array(
                    'id'          => "job_culture",
                    'name'        => __( 'Culture', 'ic-core' ),
                    'placeholder' => __( 'Enter about culture here', 'ic-core' ),
                    'type'        => 'WYSIWYG',
                    'tab' => "culture",
                ),
                array(
                    'id'          => "support_member",
                    'name'        => __( 'Support Member', 'ic-core' ),
                    'type'       => 'post',
                    'post_type'        => 'support',
                ),
                array(
                    'id'          => "linkedin_apply",
                    'name'        => __( 'Linkedin apply job link', 'ic-core' ),
                    'type'       => 'text',
                ),

                
            ),
		);

		return apply_filters( 'ic_jobs_metabox_meta', $meta_boxes );

	}

	add_filter( 'rwmb_meta_boxes', 'ic_register_jobs_metaboxes' );
}