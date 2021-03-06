<?php
Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Single Product Page', 'lezada' ),
		'id'         => 'section_product',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'product_sidebar_config',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Single Product Page Sidebar Position', 'lezada' ),
				'subtitle' => esc_html__( 'Controls the position of sidebars for the product pages.', 'lezada' ),
				'options'  => array(
					'left'  => array(
						'title' => esc_html__( 'Left', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . '/2cl.png',
					),
					'no'    => array(
						'title' => esc_html__( 'Disable', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . '/1c.png',
					),
					'right' => array(
						'title' => esc_html__( 'Right', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . '/2cr.png',
					),
				),
				'default'  => 'no',
			),

			array(
				'id'       => 'product_sidebar',
				'type'     => 'select',
				'title'    => esc_html__( 'Single Product Page Sidebar', 'lezada' ),
				'subtitle' => esc_html__( 'Choose the sidebar for single product pages.', 'lezada' ),
				'data'     => 'sidebars',
				'default'  => 'sidebar-shop',
				'required' => array(
					array( 'product_sidebar_config', '!=', 'no' ),
				),
			),

			array(
				'id'       => 'product_ajax_add_to_cart',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable AJAX add to cart on single product page', 'lezada' ),
				'subtitle' => wp_kses_post( 'This option does not work if you turn on <b>\'Redirect to the cart page after successful addition\'</b> in <b>WooCommerce Settings >> Products >> Add to cart behaviour</b>.',
					'lezada' ),
				'default'  => true,
			),

			array(
				'id'      => 'show_featured_images',
				'type'    => 'switch',
				'title'   => esc_html__( 'Show only featured images', 'lezada' ),
				'default' => false,
			),

			array(
				'id'       => 'product_thumbnails_position',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Thumbnails Position', 'lezada' ),
				'options'  => array(
					'left'   => esc_html__( 'Left', 'lezada' ),
					'bottom' => esc_html__( 'Bottom', 'lezada' ),
				),
				'default'  => 'bottom',
				'required' => array(
					array( 'show_featured_images', '=', array( false ) ),
				),
			),

			array(
				'id'      => 'product_page_layout',
				'type'    => 'select',
				'title'   => esc_html__( 'Product Page Layout', 'lezada' ),
				'options' => array(
					'basic'                => esc_html__( 'Basic', 'lezada' ),
					'fullwidth'            => esc_html__( 'Fullwidth', 'lezada' ),
					'sticky'               => esc_html__( 'Sticky Details', 'lezada' ),
					'sticky-fullwidth'     => esc_html__( 'Sticky Details (Full-width)', 'lezada' ),
					'background'           => esc_html__( 'With Background', 'lezada' ),
					'background-fullwidth' => esc_html__( 'With Background (Full-width)', 'lezada' ),
				),
				'default' => 'basic',
			),

			array(
				'id'          => 'product_bgcolor',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a background color for the header', 'lezada' ),
				'output'      => $lezada_selectors['product_bgcolor'],
				'default'     => '#f9f9f9',
				'transparent' => false,
				'required'    => array(
					array( 'product_page_layout', '=', array( 'background', 'background-fullwidth' ) ),
				),
			),

			array(
				'id'       => 'product_zoom_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable zoom for product image', 'lezada' ),
				'subtitle' => wp_kses( sprintf( __( 'You have to use images larger than the size of the Single Product Image configured  <a href="%s" target="_blank">here</a>. If you use Product Page Layout as full width, you should use images of 1000px or more in width. Otherwise, this function will not work.  Also, this function does not work with External / Affiliate product.',
					'lezada' ),
					esc_url(add_query_arg( 'autofocus[section]', 'woocommerce_product_images', admin_url( 'customize.php' ) ))),
					array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				'default'  => true,
			),

			array(
				'id'       => 'product_lightbox_button',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show "Zoom image" button', 'lezada' ),
				'subtitle' => esc_html__( 'Click to open image in popup and swipe to zoom', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'product_zoom_on', '=', true ),
				),
			),

			array(
				'id'       => 'product_wishlist_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show "Wishlist" button', 'lezada' ),
				'subtitle' => wp_kses( sprintf( __( 'This feature requires <a href="%s" target="_blank">YITH WooCommerce Wishlist</a> plugin.',
					'lezada' ),
					esc_url( 'https://wordpress.org/plugins/yith-woocommerce-wishlist/' ) ),
					array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				'default'  => true,
			),

			array(
				'id'       => 'product_compare_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show "Compare" button', 'lezada' ),
				'subtitle' => wp_kses( sprintf( __( 'This feature requires <a href="%s" target="_blank">YITH WooCommerce Compare</a> plugin.',
					'lezada' ),
					esc_url( 'https://wordpress.org/plugins/yith-woocommerce-compare/' ) ),
					array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				'default'  => true,
			),

			array(
				'id'       => 'product_show_share',
				'type'     => 'switch',
				'title'    => esc_html__( 'Social Sharing Box', 'lezada' ),
				'subtitle' => esc_html__( 'Turn on to display the social sharing box.', 'lezada' ),
				'default'  => true,
			),

			array(
				'id'       => 'product_share_links',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Share the product on ', 'lezada' ),
				'options'  => array(
					'facebook'  => '<i class="fa fa-facebook"></i>&nbsp;&nbsp;' . esc_html__( 'Facebook', 'lezada' ),
					'twitter'   => '<i class="fa fa-twitter"></i>&nbsp;&nbsp;' . esc_html__( 'Twitter', 'lezada' ),
					'google'    => '<i class="fa fa-google-plus"></i>&nbsp;&nbsp;' . esc_html__( 'Google+',
							'lezada' ),
					'pinterest' => '<i class="fa fa-pinterest"></i>&nbsp;&nbsp;' . esc_html__( 'Pinterest',
							'lezada' ),
					'email'     => '<i class="fa fa-envelope-o"></i>&nbsp;&nbsp;' . esc_html__( 'Email', 'lezada' ),
				),
				'default'  => array(
					'facebook'  => '1',
					'twitter'   => '1',
					'google'    => '1',
					'pinterest' => '1',
					'email'     => '1',
				),
				'required' => array(
					array( 'product_show_share', '=', array( true ) ),
				),
			),

			array(
				'id'       => 'upsells_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Up-Sells', 'lezada' ),
				'subtitle' => esc_html__( 'Up-sells are products which you recommend instead of the currently viewed product.',
					'lezada' ),
				'default'  => esc_html__( 'Also looks great with...', 'lezada' ),
			),

			array(
				'id'            => 'product_related',
				'type'          => 'slider',
				'title'         => esc_html__( 'Related Products', 'lezada' ),
				'subtitle'      => esc_html__( 'Related products is a section on some templates that pulls other products from your store that share the same tags or categories as the current product. Set 0 to hide this section.',
					'lezada' ),
				'min'           => 0,
				'max'           => 24,
				'default'       => 8,
				'display_value' => 'label',
			),
		),
	) );
