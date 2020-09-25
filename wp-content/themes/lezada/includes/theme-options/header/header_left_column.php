<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Header Left Column', 'lezada' ),
		'id'         => 'section_header_left_column',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'header_left_column_notice',
				'type'     => 'info',
				'style'    => 'warning',
				'title'    => esc_html__( 'Note', 'lezada' ),
				'desc'     => esc_html__( 'Only works with the Menu Bottom Header.', 'lezada' ),
				'required' => array(
					array( 'header', '!=', 'menu-bottom' ),
				),
			),

			array(
				'id'       => 'header_left_column_content',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Header Left Column Content', 'lezada' ),
				'subtitle' => esc_html__( 'Select the content is displayed in the header left column layout.',
					'lezada' ),
				'options'  => array(
					'switchers' => array(
						'title' => esc_html__( 'Switchers', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'left-col-switchers.png',
					),
					'social'    => array(
						'title' => esc_html__( 'Social Links', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'left-col-social.png',
					),
					'widget'    => array(
						'title' => esc_html__( 'Widget', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'left-col-widget.png',
					),
				),
				'required' => array(
					array( 'header', '=', 'menu-bottom' ),
				),
				'default'  => 'widget',
			),

			array(
				'id'       => 'header_left_sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Header Left Sidebar', 'lezada' ),
				'data'     => 'sidebars',
				'default'  => 'sidebar-header-left',
				'required' => array(
					array( 'header', '=', 'menu-bottom' ),
					array( 'header_left_column_content', '=', 'widget' ),
				),
			),
		),
	) );
