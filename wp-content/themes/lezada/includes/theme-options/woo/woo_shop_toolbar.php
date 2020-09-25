<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Shop Toolbar', 'lezada' ),
		'id'         => 'section_shop_toolbar',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'shop_toolbar',
				'type'     => 'switch',
				'title'    => esc_html__( 'Shop Toolbar', 'lezada' ),
				'subtitle' => esc_html__( 'Enable shop toolbar on the top of shop pages', 'lezada' ),
				'default'  => true,
			),

			array(
				'id'       => 'product_tabs',
				'type'     => 'switch',
				'title'    => esc_html__( 'Product Tabs', 'lezada' ),
				'subtitle' => esc_html__( 'Enable products tabs on the left', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'shop_toolbar', '=', true ),
				),
			),

			array(
				'id'       => 'product_tabs_type',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Product Tabs Type', 'lezada' ),
				'subtitle' => esc_html__( 'Select how to group products in tabs', 'lezada' ),
				'options'  => array(
					'groups'     => esc_html__( 'Groups', 'lezada' ),
					'categories' => esc_html__( 'Categories', 'lezada' ),
					'tags'       => esc_html__( 'Tags', 'lezada' ),
				),
				'default'  => 'groups',
				'required' => array(
					array( 'shop_toolbar', '=', true ),
					array( 'product_tabs', '=', true ),
				),
			),

			array(
				'id'       => 'product_tabs_groups',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Product Tabs Groups', 'lezada' ),
				'options'  => array(
					'featured' => esc_html__( 'Hot Products', 'lezada' ),
					'new'      => esc_html__( 'New Products', 'lezada' ),
					'sale'     => esc_html__( 'Sale Products', 'lezada' ),
				),
				'default'  => array(
					'featured' => '1',
					'new'      => '1',
					'sale'     => '1',
				),
				'required' => array(
					array( 'shop_toolbar', '=', true ),
					array( 'product_tabs', '=', true ),
					array( 'product_tabs_type', '=', 'groups' ),
				),
			),

			array(
				'id'       => 'product_tabs_categories',
				'type'     => 'text',
				'title'    => esc_html__( 'Categories', 'lezada' ),
				'subtitle' => esc_html__( 'Enter category names, separate by commas. Leave empty to get all categories. Enter a number to get limit number of top categories.',
					'lezada' ),
				'default'  => 3,
				'required' => array(
					array( 'shop_toolbar', '=', true ),
					array( 'product_tabs', '=', true ),
					array( 'product_tabs_type', '=', 'categories' ),
				),
			),

			array(
				'id'       => 'product_tabs_tags',
				'type'     => 'text',
				'title'    => esc_html__( 'Tags', 'lezada' ),
				'subtitle' => esc_html__( 'Enter tag names. Separate by commas.', 'lezada' ),
				'default'  => '',
				'required' => array(
					array( 'shop_toolbar', '=', true ),
					array( 'product_tabs', '=', true ),
					array( 'product_tabs_type', '=', 'tags' ),
				),
			),

			array(
				'id'       => 'product_filter',
				'type'     => 'switch',
				'title'    => esc_html__( 'Product Filter', 'lezada' ),
				'subtitle' => esc_html__( 'Show filter widgets', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'shop_toolbar', '=', true ),
				),
			),

			array(
				'id'       => 'product_sorting',
				'type'     => 'switch',
				'title'    => esc_html__( 'Product Sort', 'lezada' ),
				'subtitle' => esc_html__( 'Show the sort options instead of product count', 'lezada' ),
				'default'  => true,
				'required' => array(
					array( 'shop_toolbar', '=', true ),
				),
			),

			array(
				'id'      => 'column_switcher',
				'type'    => 'switch',
				'title'   => esc_html__( 'Show column switcher', 'lezada' ),
				'default' => true,
				'required' => array(
					array( 'shop_toolbar', '=', true ),
				),
			),
		),

	) );
