<?php

if ( ! class_exists( 'YITH_WCWL' ) ) {
	return;
}

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Wishlist', 'lezada' ),
		'id'         => 'section_header_wishlist',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'wishlist_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable Wishlist', 'lezada' ),
				'subtitle' => esc_html__( 'Enable / Disable the wishlist icon in the header', 'lezada' ),
				'default'  => false,
			),
			array(
				'id'      => 'wishlist_icon',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Wishlist Icon', 'lezada' ),
				'options' => array(
					'ion-android-favorite'         => '<i class="ion-android-favorite"></i>&nbsp;&nbsp;' . esc_html__( 'Heart',
							'lezada' ),
					'ion-android-favorite-outline' => '<i class="ion-android-favorite-outline"></i>&nbsp;&nbsp;' . esc_html__( 'Heart Outline',
							'lezada' ),
				),
				'default' => 'ion-android-favorite',
			),
			array(
				'id'      => 'wishlist_add_to_cart_on',
				'type'    => 'switch',
				'title'   => esc_html__( 'Show Add To Cart Button', 'lezada' ),
				'default' => true,
			),
			array(
				'id'      => 'wishlist_target',
				'type'    => 'switch',
				'title'   => esc_html__( 'Open Wishlist page in a new tab', 'lezada' ),
				'default' => false,
			),
			array(
				'id'          => 'wishlist_icon_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Wishlist Icon Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a color for the wishlist icon', 'lezada' ),
				'output'      => $lezada_selectors['wishlist_icon_color'],
				'validate'    => 'color',
				'default'     => PRIMARY_COLOR,
			),
			array(
				'id'          => 'wishlist_count_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Wishlist Item Count Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a color for the text of wishlist widget', 'lezada' ),
				'output'      => $lezada_selectors['wishlist_count_color'],
				'validate'    => 'color',
				'default'     => '#ffffff',
			),
			array(
				'id'          => 'wishlist_count_bg_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Wishlist Item Count Background Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a background color for the item count of wishlist widget',
					'lezada' ),
				'output'      => $lezada_selectors['wishlist_count_bg_color'],
				'validate'    => 'color',
				'default'     => '#d3122a',
			),
			array(
				'id'          => 'wishlist_count_bd_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Wishlist Item Count Border Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a border color for the item count of wishlist widget',
					'lezada' ),
				'output'      => $lezada_selectors['wishlist_count_bd_color'],
				'validate'    => 'color',
				'default'     => '#d3122a',
			),
		),
	) );
