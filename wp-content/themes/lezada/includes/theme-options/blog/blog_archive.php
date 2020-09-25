<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Blog Archive', 'lezada' ),
		'id'         => 'section_blog_archive',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'archive_sidebar_config',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Archive Sidebar Position', 'lezada' ),
				'subtitle' => esc_html__( 'Controls the position of sidebars for the archive pages.', 'lezada' ),
				'options'  => array(
					'left'  => array(
						'title' => esc_html__( 'Left', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . '2cl.png',
					),
					'no'    => array(
						'title' => esc_html__( 'Disable', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . '1c.png',
					),
					'right' => array(
						'title' => esc_html__( 'Right', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . '2cr.png',
					),
				),
				'default'  => 'right',
			),

			array(
				'id'       => 'archive_sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Archive Sidebar', 'lezada' ),
				'subtitle' => esc_html__( 'Choose the sidebar for archive pages.', 'lezada' ),
				'data'     => 'sidebars',
				'default'  => 'sidebar',
				'required' => array(
					array( 'archive_sidebar_config', '!=', 'no' ),
				),
			),


			array(
				'id'       => 'archive_display_type',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Archive Display Type', 'lezada' ),
				'subtitle' => esc_html__( 'Select the display type.', 'lezada' ),
				'options'  => array(
					'standard'  => esc_html__( 'Standard', 'lezada' ),
					'grid'      => esc_html__( 'Grid', 'lezada' ),
					'list'      => esc_html__( 'List', 'lezada' ),
					'masonry'   => esc_html__( 'Masonry', 'lezada' ),
					'full-grid' => esc_html__( '1st Full-width then Grid', 'lezada' ),
				),
				'default'  => 'standard',
			),

			array(
				'id'       => 'archive_content_output',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Archive Content Output', 'lezada' ),
				'subtitle' => esc_html__( 'Select if you\'d like to output the content or excerpt on archive pages.',
					'lezada' ),
				'options'  => array(
					'excerpt' => esc_html__( 'Excerpt', 'lezada' ),
					'content' => esc_html__( 'Content', 'lezada' ),
				),
				'default'  => 'excerpt',
			),

			array(
				'id'                => 'excerpt_length',
				'type'              => 'text',
				'title'             => esc_html__( 'Excerpt Length', 'lezada' ),
				'subtitle'          => sprintf( esc_html__( 'Controls the number of words of the post excerpt (from 0 to %s words)',
					'lezada' ),
					apply_filters( 'lezada_max_excerpt_length', 500 ) ),
				'default'           => 30,
				'display_value'     => 'label',
				'validate_callback' => 'lezada_validate_excerpt_callback',
				'required'          => array(
					'archive_content_output',
					'=',
					'excerpt',
				),
			),

			array(
				'id'       => 'archive_pagination',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Pagination Type', 'lezada' ),
				'subtitle' => esc_html__( 'Select pagination type', 'lezada' ),
				'options'  => array(
					'default'  => esc_html__( 'Default', 'lezada' ),
					'more-btn' => esc_html__( 'Load More Button', 'lezada' ),
					'infinite' => esc_html__( 'Infinite Scroll', 'lezada' ),
				),
				'default'  => 'default',
			),

		),
	) );

if ( ! function_exists( 'lezada_validate_excerpt_callback' ) ) {
	function lezada_validate_excerpt_callback( $field, $value, $existing_value ) {
		$error = false;

		if ( ! is_numeric( $value ) ) {

			$error = true;

			$value        = $existing_value;
			$field['msg'] = esc_html__( 'You must provide a numerical value for this option.', 'lezada' );

		} elseif ( $value < 0 || $value > apply_filters( 'lezada_max_excerpt_length', 500 ) ) {

			$error = true;

			$value        = $existing_value;
			$field['msg'] = sprintf( esc_html__( 'The excerpt length must be from 0 to %s words.', 'lezada' ),
				apply_filters( 'lezada_max_excerpt_length', 500 ) );
		}

		$return['value'] = $value;

		if ( $error ) {
			$return['error'] = $field;
		}

		return $return;
	}
}

