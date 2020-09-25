<?php

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Shopping Cart', 'lezada' ),
		'id'         => 'section_header_cart',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'minicart_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable Shopping Cart', 'lezada' ),
				'subtitle' => esc_html__( 'Enable / Disable the shopping cart', 'lezada' ),
				'default'  => true,
			),
			array(
				'id'       => 'minicart_message',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Shopping Cart Message', 'lezada' ),
				'subtitle' => esc_html__( 'Insert the text you want to see in the shopping cart here.', 'lezada' ),
				'default'  => __( 'Free Shipping on All Orders Over $100!', 'lezada' ),
			),
			array(
				'id'       => 'minicart_message_pos',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Message Position', 'lezada' ),
				'subtitle' => esc_html__( 'Set the position for shopping cart message in the dropdown', 'lezada' ),
				'options'  => array(
					'top'    => esc_html__( 'Top', 'lezada' ),
					'bottom' => esc_html__( 'Bottom', 'lezada' ),
				),
				'default'  => 'bottom',
			),
			array(
				'id'      => 'minicart_icon',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Shopping Cart Icon', 'lezada' ),
				'options' => array(
					'ion-ios-cart'      => '<i class="ion-ios-cart"></i>&nbsp;&nbsp;' . esc_html__( 'Cart',
							'lezada' ),
					'ion-ios-cart-outline' => '<i class="ion-ios-cart-outline"></i>&nbsp;&nbsp;' . esc_html__( 'Cart Outline',
							'lezada' ),
				),
				'default' => 'ion-ios-cart',
			),
			array(
				'id'          => 'minicart_icon_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Cart Icon Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a color for the shopping cart icon', 'lezada' ),
				'output'      => $lezada_selectors['minicart_icon_color'],
				'default'     => PRIMARY_COLOR,
			),
			array(
				'id'          => 'minicart_count_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Cart Item Count Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a color for the text of shopping cart', 'lezada' ),
				'output'      => $lezada_selectors['minicart_count_color'],
				'default'     => '#ffffff',
			),
			array(
				'id'          => 'minicart_count_bg_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Cart Item Count Background Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a background color for the item count of shopping cart',
					'lezada' ),
				'output'      => $lezada_selectors['minicart_count_bg_color'],
				'validate'    => 'color',
				'default'     => '#d3122a',
			),
			array(
				'id'          => 'minicart_count_bd_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Cart Item Count Border Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a border color for the item count of shopping cart',
					'lezada' ),
				'output'      => $lezada_selectors['minicart_count_bd_color'],
				'validate'    => 'color',
				'default'     => '#d3122a',
			),
		),
	) );
