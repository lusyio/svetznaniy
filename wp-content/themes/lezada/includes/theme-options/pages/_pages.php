<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'  => __( 'Pages', 'lezada' ),
		'id'     => 'panel_pages',
		'icon'   => 'fa fa-file-text-o',
		'fields' => array(

			array(
				'id'       => 'page_sidebar_config',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Page Sidebar Position', 'lezada' ),
				'subtitle' => esc_html__( 'Controls the position of sidebars for page.', 'lezada' ),
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
				'default'  => 'no',
			),


			array(
				'id'       => 'search_sidebar_config',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Search Sidebar Position', 'lezada' ),
				'subtitle' => esc_html__( 'Controls the position of sidebars for search result page.', 'lezada' ),
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
				'id'       => 'search_sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Search Sidebar', 'lezada' ),
				'subtitle' => esc_html__( 'Choose the sidebar for search result page.', 'lezada' ),
				'data'     => 'sidebars',
				'default'  => 'sidebar',
				'required' => array(
					array( 'search_sidebar_config', '!=', 'no' ),
				),
			),

			array(
				'id'       => '404_bg',
				'type'     => 'background',
				'title'    => esc_html__( '404 Background', 'lezada' ),
				'subtitle' => esc_html__( 'Set background image or color for 404 page.', 'lezada' ),
				'output'   => array( '.area-404' ),
				'default'  => array(
					'background-image'      => LEZADA_IMAGES . DS . '404-bg.jpg',
					'background-repeat'     => 'no-repeat',
					'background-size'       => 'cover',
					'background-attachment' => 'inherit',
					'background-position'   => 'center center',
				),
			),

		),
	) );
