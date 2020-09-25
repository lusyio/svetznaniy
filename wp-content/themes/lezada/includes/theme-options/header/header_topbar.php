<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Top Bar', 'lezada' ),
		'id'         => 'section_topbar',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'header_topbar_column_notice',
				'type'     => 'info',
				'style'    => 'warning',
				'title'    => esc_html__( 'Note', 'lezada' ),
				'desc'     => esc_html__( 'Does not work with the Vertical Header', 'lezada' ),
				'required' => array(
					array( 'header', '=', 'vertical' ),
				),
			),
			array(
				'id'       => 'topbar_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Top bar', 'lezada' ),
				'subtitle' => esc_html__( 'Enabling this option will display top area', 'lezada' ),
				'default'  => false,
			),
			array(
				'id'       => 'topbar',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Topbar Layout', 'lezada' ),
				'subtitle' => esc_html__( 'Select your topbar layout', 'lezada' ),
				'options'  => array(
					'switchers-left'  => array(
						'title' => esc_html__( 'Switchers on the left, social links on the right', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'topbar-switcher-left.png',
					),
					'switchers-right' => array(
						'title' => esc_html__( 'Switchers on the right, social links on the left', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'topbar-switcher-right.png',
					),
					'only-text'       => array(
						'title' => esc_html__( 'The topbar has only text',
							'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'topbar-only-text.png',
					),
				),
				'default'  => 'switchers-left',
			),
			array(
				'id'       => 'topbar_can_close',
				'type'     => 'switch',
				'title'    => esc_html__( 'Top bar can be close', 'lezada' ),
				'subtitle' => esc_html__( 'Enabling this option if you want to show a close button on the top bar',
					'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'topbar', '==', array( 'only-text' ) ),
				),
			),
			array(
				'id'       => 'topbar_text',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Text in the top bar', 'lezada' ),
				'subtitle' => esc_html__( 'Insert the text you want to see in the top bar here. You can use HTML or shortcodes',
					'lezada' ),
				'args'     => array(
					'textarea_rows' => 3,
				),
				'default'  => 'Order Online Call Us <a href="tel:0123456789">(0123) 456789</a>',
			),
			array(
				'id'            => 'topbar_height',
				'type'          => 'slider',
				'title'         => esc_html__( 'Top bar height', 'lezada' ),
				'default'       => 44,
				'min'           => 30,
				'step'          => 1,
				'max'           => 60,
				'display_value' => 'label',
			),
			array(
				'id'      => 'topbar_width',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Top bar width', 'lezada' ),
				'options' => array(
					'standard'         => esc_html__( 'Standard', 'lezada' ),
					'wide'             => esc_html__( 'Wide', 'lezada' ),
					'full'             => esc_html__( 'Full width', 'lezada' ),
					'full-no-paddings' => esc_html__( 'Full width (no paddings)', 'lezada' ),

				),
				'default' => 'wide',
			),
			array(
				'id'       => 'topbar_social',
				'type'     => 'switch',
				'title'    => esc_html__( 'Social links', 'lezada' ),
				'subtitle' => esc_html__( 'Enable / Disable the social links on the top bar', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'topbar', '!=', array( 'only-text' ) ),
				),
			),
			array(
				'id'       => 'topbar_menu',
				'type'     => 'switch',
				'title'    => esc_html__( 'Menu', 'lezada' ),
				'subtitle' => esc_html__( 'Enable / Disable the top bar menu', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'topbar', '!=', array( 'only-text' ) ),
				),
			),
			array(
				'id'       => 'topbar_logged_in_menu',
				'type'     => 'select',
				'title'    => esc_html__( 'Top bar menu (for logged-in users)', 'lezada' ),
				'subtitle' => esc_html__( 'Select a menu to display in the top bar for logged-in users', 'lezada' ),
				'options'  => Lezada_Helper::get_all_menus(),
				'default'  => 'none',
				'required' => array(
					array( 'topbar_menu', '=', array( true ) ),
					array( 'topbar', '!=', array( 'only-text' ) ),
				),
			),

			array(
				'id'      => 'topbar_scheme',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Top bar color scheme', 'lezada' ),
				'options' => array(
					'dark'   => esc_html__( 'Dark', 'lezada' ),
					'light'  => esc_html__( 'Light', 'lezada' ),

				),
				'default' => 'light',
			),

			array(
				'id'       => 'topbar_language_switcher_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Language Switcher', 'lezada' ),
				'subtitle' => wp_kses( sprintf( __( 'Enable / Disable the Language Switcher in the top bar instead of the Language Menu. This feature requires <a href="%s" target="_blank">WPML</a> or <a href="%s" target="_blank">Polylang</a> plugin.',
					'lezada' ),
					esc_url( 'https://wpml.org/' ),
					esc_url( 'https://wordpress.org/plugins/polylang/' ) ),
					array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				'desc'     => esc_html__( 'The switchers was customized to compatible with our theme', 'lezada' ),
				'default'  => false,
				'required' => array(
					array( 'topbar', '!=', array( 'only-text' ) ),
				),
			),

			array(
				'id'       => 'topbar_currency_switcher_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Currency Switcher', 'lezada' ),
				'subtitle' => wp_kses( sprintf( __( 'Enable / Disable the Currency Switcher in the top bar instead of the Currency Menu. This feature requires <a href="%s" target="_blank">WooCommerce Multilingual</a> or <a href="%s" target="_blank">WooCommerce Currency Switcher</a> plugin.',
					'lezada' ),
					esc_url( 'https://wordpress.org/plugins/woocommerce-multilingual/' ),
					esc_url( 'https://wordpress.org/plugins/woocommerce-currency-switcher/' ) ),
					array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				'desc'     => esc_html__( 'The switchers was customized to compatible with our theme', 'lezada' ),
				'default'  => false,
				'required' => array(
					array( 'topbar', '!=', array( 'only-text' ) ),
				),
			),
		),
	) );
