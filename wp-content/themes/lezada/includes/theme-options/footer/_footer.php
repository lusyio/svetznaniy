<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'  => esc_html__( 'Footer', 'lezada' ),
		'id'     => 'panel_footer',
		'icon'   => 'fa fa-angle-double-down ',
		'fields' => array(

			array(
				'id'       => 'footer_layout',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Footer columns', 'lezada' ),
				'subtitle' => esc_html__( 'Choose number of columns to display in footer area', 'lezada' ),
				'desc'     => wp_kses( sprintf( __( 'Note: Each column represents one Footer Sidebar in <a href="%s">Appearance -> Widgets</a> settings.',
					'lezada' ),
					admin_url( 'widgets.php' ) ),
					wp_kses_allowed_html( 'post' ) ),
				'options'  => array(
					'1_12' => array(
						'title' => esc_html__( '1 Column', 'lezada' ),
						'img'   => get_template_directory_uri() . '/assets/admin/images/footer_col_1.png',
					),
					'2_6'  => array(
						'title' => esc_html__( '2 Columns', 'lezada' ),
						'img'   => get_template_directory_uri() . '/assets/admin/images/footer_col_2.png',
					),
					'3_4'  => array(
						'title' => esc_html__( '3 Columns', 'lezada' ),
						'img'   => get_template_directory_uri() . '/assets/admin/images/footer_col_3.png',
					),
					'4_3'  => array(
						'title' => esc_html__( '4 Columns', 'lezada' ),
						'img'   => get_template_directory_uri() . '/assets/admin/images/footer_col_4.png',
					),
				),
				'default'  => '3_4',
			),

			array(
				'id'      => 'footer_width',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Footer Width', 'lezada' ),
				'options' => array(
					'standard' => esc_html__( 'Standard', 'lezada' ),
					'wide'     => esc_html__( 'Wide', 'lezada' ),

				),
				'default' => 'wide',
			),

			array(
				'id'      => 'footer_color_scheme',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Footer Color Scheme', 'lezada' ),
				'options' => array(
					'light'  => esc_html__( 'Light', 'lezada' ),
					'dark'   => esc_html__( 'Dark', 'lezada' ),
					'custom' => esc_html__( 'Custom', 'lezada' ),
				),
				'default' => 'light',
			),

			array(
				'id'      => 'footer-bg-color',
				'type'    => 'color',
				'title'   => esc_html__( 'Background color', 'lezada' ),
				'output'  => $lezada_selectors['bg_color_footer'],
				'default' => '#f8f8f8',

				'required'    => array(
					'footer_color_scheme',
					'=',
					'custom',
				),
			),
		),
	) );

require_once LEZADA_OPTIONS_DIR . DS . 'footer' . DS . 'footer_copyright.php';
