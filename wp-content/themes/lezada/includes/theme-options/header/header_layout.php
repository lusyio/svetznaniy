<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Header Layout', 'lezada' ),
		'id'         => 'section_header_layout',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'header',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Header Type', 'lezada' ),
				'subtitle' => esc_html__( 'Select your header layout', 'lezada' ),
				'options'  => array(
					'base'        => array(
						'title' => esc_html__( 'Base Header', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'header-base.jpg',
					),
					'split'       => array(
						'title' => esc_html__( 'Split Header (logo in center of the menu)', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'header-split.jpg',
					),
					'menu-bottom' => array(
						'title' => esc_html__( 'Menu Bottom Header', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'header-menu-bottom.jpg',
					),
					'vertical'    => array(
						'title' => esc_html__( 'Vertical Header', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'header-vertical.jpg',
					),
				),
				'default'  => 'base',
			),

			array(
				'id'       => 'sticky_header',
				'type'     => 'switch',
				'title'    => esc_html__( 'Sticky Header', 'lezada' ),
				'subtitle' => esc_html__( 'Enable / Disable sticky header option', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'header', '!=', 'vertical' ),
				),
			),

			array(
				'id'       => 'header_overlap',
				'type'     => 'switch',
				'title'    => esc_html__( 'Header above the content', 'lezada' ),
				'default'  => false,
				'required' => array(
					array( 'header', '=', array( 'base', 'split' ) ),
				),
			),

			array(
				'id'       => 'header_layout_notice',
				'type'     => 'info',
				'style'    => 'warning',
				'title'    => esc_html__( 'Note', 'lezada' ),
				'desc'     => __( 'Note: The width of the Split Header should be Wide or Full width',
					'lezada' ),
				'required' => array(
					array( 'header', '=', 'split' ),
					array( 'header_width', '=', array( 'header_width', 'standard' ) ),
				),
			),

			array(
				'id'       => 'header_width',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Header Width', 'lezada' ),
				'options'  => array(
					'standard'         => esc_html__( 'Standard', 'lezada' ),
					'wide'             => esc_html__( 'Wide', 'lezada' ),
					'full'             => esc_html__( 'Full-width', 'lezada' ),
					'full-no-paddings' => esc_html__( 'Full-width (no paddings)', 'lezada' ),
				),
				'default'  => 'wide',
				'required' => array(
					array( 'header', '!=', 'vertical' ),
				),
			),

			array(
				'id'            => 'header_v_width',
				'type'          => 'slider',
				'title'         => esc_html__( 'Header Width', 'lezada' ),
				'default'       => 120,
				'min'           => 80,
				'step'          => 1,
				'max'           => 300,
				'display_value' => 'label',
				'required'      => array(
					array( 'header', '=', 'vertical' ),
				),
			),

			array(
				'id'       => 'header_text',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Header Text', 'lezada' ),
				'subtitle' => esc_html__( 'Insert the text you want to see in the vertical header here. You can use HTML or shortcodes',
					'lezada' ),
				'default'  => 'Copyright &copy; 2018',
				'args'     => array(
					'textarea_rows' => 2
				),
				'required'      => array(
					array( 'header', '=', 'vertical' ),
				),
			),

			array(
				'id'            => 'header_height',
				'type'          => 'slider',
				'title'         => esc_html__( 'Header Height', 'lezada' ),
				'default'       => 100,
				'min'           => 60,
				'step'          => 1,
				'max'           => 150,
				'display_value' => 'label',
				'required'      => array(
					array( 'header', '!=', 'vertical' ),
				),
			),
		),
	) );
