<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Shop Page', 'lezada' ),
		'id'         => 'section_shop',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'shop_sidebar_config',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Shop sidebar position', 'lezada' ),
				'subtitle' => esc_html__( 'Controls the position of sidebars for the shop pages.', 'lezada' ),
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
				'id'       => 'shop_sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Shop Sidebar', 'lezada' ),
				'subtitle' => esc_html__( 'Choose the sidebar for archive pages.', 'lezada' ),
				'data'     => 'sidebars',
				'default'  => 'sidebar-shop',
				'required' => array(
					array( 'shop_sidebar_config', '!=', 'no' ),
				),

			),

			array(
				'id'       => 'full_width_shop',
				'type'     => 'button_set',
				'title'    => esc_html__( '', 'lezada' ),
				'subtitle' => esc_html__( 'Set the layout for shop', 'lezada' ),
				'options'  => array(
					'basic'      => esc_html__( 'Basic', 'lezada' ),
					'full-width' => esc_html__( 'Full width', 'lezada' ),
					'no-space'   => esc_html__( 'Full width and no space', 'lezada' ),
				),
				'default'  => 'basic',
			),

			array(
				'id'       => 'categories_layout',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Categories Layout', 'lezada' ),
				'subtitle' => esc_html__( 'Select layout for the categories block', 'lezada' ),
				'options'  => array(
					'grid'     => esc_html__( 'Grid', 'lezada' ),
					'carousel' => esc_html__( 'Carousel', 'lezada' ),
				),
				'default'  => 'carousel',
			),

			array(
				'id'       => 'categories_columns',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Categories columns', 'lezada' ),
				'subtitle' => esc_html__( 'How many categories you want to show per row on the shop page?',
					'lezada' ),
				'options'  => array(
					3 => '3',
					4 => '4',
					5 => '5',
				),
				'default'  => 5,
			),

			array(
				'id'      => 'shop_ajax_on',
				'type'    => 'switch',
				'title'   => esc_html__( 'Enable AJAX functionality on shop (If you use menu full screen please disable this option.)', 'lezada' ),
				'default' => true,
			),

			array(
				'id'       => 'shop_pagination',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Pagination Type', 'lezada' ),
				'subtitle' => esc_html__( 'Select pagination type', 'lezada' ),
				'options'  => array(
					'default'  => esc_html__( 'Default', 'lezada' ),
					'more-btn' => esc_html__( 'Load More Button', 'lezada' ),
					'infinite' => esc_html__( 'Infinite Scroll', 'lezada' ),
				),
				'default'  => 'default',
				'required' => array(
					array( 'shop_ajax_on', '=', true ),
				),
			),
		),
	) );
