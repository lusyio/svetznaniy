<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'      => esc_html__( 'General', 'lezada' ),
	'id'         => 'section_woo_general',
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'product_style',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Product Item Style', 'lezada' ),
			'subtitle' => esc_html__( 'Select product item style', 'lezada' ),
			'options'  => array(
				'default'   => array(
					'title' => esc_html__( 'Default', 'lezada' ),
					'img'   => LEZADA_ADMIN_IMAGES . DS . 'product-default.png',
				),
				'button-hover'  => array(
					'title' => esc_html__( 'Button Hover', 'lezada' ),
					'img'   => LEZADA_ADMIN_IMAGES . DS . 'product-button-hover.png',
				),
				'button-hover-alt'  => array(
					'title' => esc_html__( 'Button Hover Alt', 'lezada' ),
					'img'   => LEZADA_ADMIN_IMAGES . DS . 'product-button-hover-alt.png',
				),
			),
			'default'  => 'default',
		),

		// Badge
		array(
			'id'       => 'badge_section_start',
			'type'     => 'section',
			'title'    => esc_html__( 'Badge', 'lezada' ),
			'subtitle' => esc_html__( '', 'lezada' ),
			'indent'   => true,
		),

		array(
			'id'      => 'shop_new_badge_on',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show "New" badge', 'lezada' ),
			'default' => true,
		),

		array(
			'id'            => 'shop_new_days',
			'type'          => 'slider',
			'title'         => esc_html__( 'New Product with how many days?', 'lezada' ),
			'min'           => 1,
			'max'           => 60,
			'default'       => 10,
			'display_value' => 'label',
		),

		array(
			'id'      => 'shop_hot_badge_on',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show "Hot" badge', 'lezada' ),
			'default' => true,
		),

		array(
			'id'      => 'shop_sale_badge_on',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show "Sale" badge', 'lezada' ),
			'default' => true,
		),

		array(
			'id'       => 'shop_sale_percent_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show saved sale price percentage', 'lezada' ),
			'subtitle' => wp_kses( sprintf( __( 'Show percentage instead of text on "Sale" label. Only available with Simple & External/Affiliate product type. You can see <a href="%s" target="_blank">here</a> for more information about product type.', 'lezada' ), esc_url( 'https://docs.woocommerce.com/document/managing-products/#product-types' ) ), array(
				'a' => array(
					'href'   => array(),
					'target' => array(),
				),
			) ),
			'default'  => true,
		),

		array(
			'id'     => 'badge_section_end',
			'type'   => 'section',
			'indent' => false,
		),

		// Quick View
		array(
			'id'       => 'quickview_section_start',
			'type'     => 'section',
			'title'    => esc_html__( 'Quick View', 'lezada' ),
			'subtitle' => esc_html__( '', 'lezada' ),
			'indent'   => true,
		),

		array(
			'id'      => 'shop_quick_view_on',
			'type'    => 'switch',
			'title'   => esc_html__( 'Quick View', 'lezada' ),
			'default' => true,
		),

		array(
			'id'       => 'animated_quick_view_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Animated Quick View', 'lezada' ),
			'default'  => true,
			'required' => array(
				array(
					'shop_quick_view_on',
					'=',
					true,
				),
			),
		),

		array(
			'id'     => 'quickview_section_end',
			'type'   => 'section',
			'indent' => false,
		),

		// Buttons
		array(
			'id'       => 'buttons_section_start',
			'type'     => 'section',
			'title'    => esc_html__( 'Buttons', 'lezada' ),
			'subtitle' => esc_html__( '', 'lezada' ),
			'indent'   => true,
		),

		array(
			'id'       => 'shop_compare_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show "Compare" button', 'lezada' ),
			'subtitle' => wp_kses( sprintf( __( 'This feature requires <a href="%s" target="_blank">YITH WooCommerce Compare</a> plugin.', 'lezada' ), esc_url( 'https://wordpress.org/plugins/yith-woocommerce-compare/' ) ), array(
				'a' => array(
					'href'   => array(),
					'target' => array(),
				),
			) ),
			'default'  => true,
		),

		array(
			'id'       => 'shop_wishlist_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show "Wishlist" button', 'lezada' ),
			'subtitle' => wp_kses( sprintf( __( 'This feature requires <a href="%s" target="_blank">YITH WooCommerce Wishlist</a> plugin.', 'lezada' ), esc_url( 'https://wordpress.org/plugins/yith-woocommerce-wishlist/' ) ), array(
				'a' => array(
					'href'   => array(),
					'target' => array(),
				),
			) ),
			'default'  => true,
		),

		array(
			'id'       => 'animated_wishlist_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Animated "Wishlist" button', 'lezada' ),
			'default'  => true,
			'required' => array(
				array(
					'shop_wishlist_on',
					'=',
					true,
				),
			),
		),

		array(
			'id'     => 'buttons_section_end',
			'type'   => 'section',
			'indent' => false,
		),

		// Notification
		array(
			'id'       => 'notification_section_start',
			'type'     => 'section',
			'title'    => esc_html__( 'Notification', 'lezada' ),
			'subtitle' => esc_html__( '', 'lezada' ),
			'indent'   => true,
		),

		array(
			'id'       => 'shop_add_to_cart_favico_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable "Add to cart" notification on favicon', 'lezada' ),
			'subtitle' => esc_html__( 'Allows you to show number of cart item via favicon like Facebook', 'lezada' ),
			'default'  => true,
		),

		array(
			'id'      => 'shop_add_to_cart_notification_on',
			'type'    => 'switch',
			'title'   => esc_html__( 'Enable "Add to cart" notification', 'lezada' ),
			'default' => true,
		),

		array(
			'id'       => 'shop_wishlist_notification_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable "Add to wishlist" notification', 'lezada' ),
			'subtitle' => wp_kses( sprintf( __( 'This feature requires <a href="%s" target="_blank">YITH WooCommerce Wishlist</a> plugin.', 'lezada' ), esc_url( 'https://wordpress.org/plugins/yith-woocommerce-wishlist/' ) ), array(
				'a' => array(
					'href'   => array(),
					'target' => array(),
				),
			) ),
			'default'  => true,
		),

		array(
			'id'     => 'notification_section_end',
			'type'   => 'section',
			'indent' => false,
		),
	),
) );
