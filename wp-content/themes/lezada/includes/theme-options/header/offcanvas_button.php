<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Off-Canvas Sidebar', 'lezada' ),
		'id'         => 'section_off_canvas',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'header_offcanvas_column_notice',
				'type'     => 'info',
				'style'    => 'warning',
				'title'    => esc_html__( 'Note', 'lezada' ),
				'desc'     => esc_html__( 'Does not work with the Vertical Header', 'lezada' ),
				'required' => array(
					array( 'header', '=', 'vertical' ),
				),
			),
			array(
				'id'       => 'offcanvas_button_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Off-canvas Button', 'lezada' ),
				'subtitle' => esc_html__( 'Turn on / off off-canvas button', 'lezada' ),
				'default'  => false,
			),
			array(
				'id'      => 'offcanvas_action',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Action', 'lezada' ),
				'options' => array(
					'sidebar' => esc_html__( 'Open Sidebar', 'lezada' ),
					'menu'    => esc_html__( 'Open Full-screen Menu', 'lezada' ),
				),
				'default'  => 'sidebar',
			),
			array(
				'id'       => 'offcanvas_sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Select Sidebar', 'lezada' ),
				'subtitle' => esc_html__( 'Choose the custom off-canvas sidebar.', 'lezada' ),
				'data'     => 'sidebars',
				'default'  => 'sidebar-offcanvas',
				'required' => array(
					array( 'offcanvas_action', '=', array( 'sidebar' ) ),
				),
			),
			array(
				'id'       => 'offcanvas_notice',
				'type'     => 'info',
				'style'    => 'warning',
				'title'    => esc_html__( 'Note', 'lezada' ),
				'desc'     => __( 'Note: Please add a menu to the Full-screen Menu location on Appearance >> Menus page', 'lezada' ),
				'required' => array(
					array( 'offcanvas_action', '=', array( 'menu' ) ),
				),
			),
			array(
				'id'      => 'offcanvas_position',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Position', 'lezada' ),
				'options' => array(
					'left'  => esc_html__( 'Left', 'lezada' ),
					'right' => esc_html__( 'Right', 'lezada' ),
				),
				'default' => 'left',
			),
			array(
				'id'          => 'offcanvas_button_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Off-canvas button color', 'lezada' ),
				'output'      => $lezada_selectors['offcanvas_button_color'],
				'validate'    => 'color',
				'default'     => SECONDARY_COLOR,
			),
		),
	) );
