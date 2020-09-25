<?php

$settings = array(

	array(
		'id'       => 'header_right_column_notice',
		'type'     => 'info',
		'style'    => 'warning',
		'title'    => esc_html__( 'Note', 'lezada' ),
		'desc'     => esc_html__( 'Does not work with the Vertical Header', 'lezada' ),
		'required' => array(
			array( 'header', '=', 'vertical' ),
		),
	),

	array(
		'id'            => 'right_column_width',
		'type'          => 'slider',
		'title'         => esc_html__( 'Header right column width', 'lezada' ),
		'subtitle'      => esc_html__( 'Set width for icons area in the header (search, wishlist, shopping cart) (in %)',
			'lezada' ),
		'default'       => 15,
		'min'           => 1,
		'max'           => 50,
		'step'          => 1,
		'display_value' => 'label',
		'required'      => array(
			array( 'header', '=', array( 'base' ) ),
		),
	),
);

if ( class_exists( 'WooCommerce' ) ) {


	$settings[] = array(
		'id'       => 'header_login',
		'type'     => 'switch',
		'title'    => esc_html__( 'Login link in header', 'lezada' ),
		'subtitle' => sprintf( __( 'Show links to login/register or my accout page in the header. Please set up the My account page <a href="%s" target="_blank">here</a>.',
			'lezada' ),
			admin_url() . 'admin.php?page=wc-settings&tab=account' ),
		'default'  => true,
		'required' => array(
			array( 'header', '!=', 'vertical' ),
		),
	);

	$settings[] = array(
		'id'       => 'header_login_position',
		'type'     => 'image_select',
		'title'    => esc_html__( 'Login link position', 'lezada' ),
		'subtitle' => esc_html__( 'Select the header right column layout.',
			'lezada' ),
		'options'  => array(
			'none' => array(
				'title' => esc_html__( 'None', 'lezada' ),
				'img'   => LEZADA_ADMIN_IMAGES . DS . 'right-col-none.png',
			),
			'left'    => array(
				'title' => esc_html__( 'Left', 'lezada' ),
				'img'   => LEZADA_ADMIN_IMAGES . DS . 'right-col-left.png',
			),
			'between' => array(
				'title' => esc_html__( 'Between', 'lezada' ),
				'img'   => LEZADA_ADMIN_IMAGES . DS . 'right-col-between.png',
			),
		),
		'default'  => 'left',
		'required' => array(
			array( 'header', '!=', 'vertical' ),
			array( 'header_login', '=', true ),
		),
	);

	$settings[] = array(
		'id'       => 'header_login_icon',
		'type'     => 'switch',
		'title'    => esc_html__( 'Display login as icon', 'lezada' ),
		'default'  => false,
	);

	$settings[] = array(
		'id'          => 'header_login_color',
		'type'        => 'color',
		'transparent' => false,
		'title'       => esc_html__( 'Login link Color', 'lezada' ),
		'output'      => $lezada_selectors['header_login_icon_color'],
		'validate'    => 'color',
		'default'     => '#333333',
		'required'    => array(
			array( 'header', '!=', 'vertical' ),
			array( 'header_login', '=', true ),
		),
	);
}

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Header Right Column', 'lezada' ),
		'id'         => 'section_header_right_column',
		'subsection' => true,
		'fields'     => $settings,
	) );
