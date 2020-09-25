<?php

$search_post_type = array(
	'post' => esc_html__( 'Post', 'lezada' ),
);

if ( class_exists( 'WooCommerce' ) ) {
	$search_post_type['product'] = esc_html__( 'Product', 'lezada' );
}

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Search', 'lezada' ),
		'id'         => 'section_header_search',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'search_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enable Search', 'lezada' ),
				'subtitle' => esc_html__( 'Enable / Disable the search box', 'lezada' ),
				'default'  => true,
			),

			array(
				'id'       => 'search_post_type',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Search content type', 'lezada' ),
				'subtitle' => esc_html__( 'Select content type you want to use in the search box', 'lezada' ),
				'options'  => $search_post_type,
				'default'  => class_exists( 'WooCommerce' ) ? 'product' : 'post',
			),

			array(
				'id'       => 'search_by',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Search product by', 'lezada' ),
				'options'  => array(
					'title' => esc_html__( 'Title', 'lezada' ),
					'sku'   => esc_html__( 'SKU', 'lezada' ),
					'both'  => esc_html__( 'Both title & SKU', 'lezada' ),
				),
				'default'  => 'both',
				'required' => array(
					array( 'search_post_type', '=', array( 'product' ) ),
				),
			),

			array(
				'id'       => 'search_categories_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Categories select box', 'lezada' ),
				'subtitle' => esc_html__( 'Turn on this option if you want to show categories select box',
					'lezada' ),
				'default'  => true,
			),
			array(
				'id'      => 'search_ajax_on',
				'type'    => 'switch',
				'title'   => esc_html__( 'Live Search', 'lezada' ),
				'default' => true,
			),
			array(
				'id'            => 'search_min_chars',
				'type'          => 'slider',
				'title'         => esc_html__( 'Minimum number of characters', 'lezada' ),
				'subtitle'      => esc_html__( 'Minimum number of characters required to trigger autosuggest',
					'lezada' ),
				'min'           => 1,
				'max'           => 10,
				'step'          => 1,
				'default'       => 1,
				'display_value' => 'label',
				'required'      => array(
					array( 'search_ajax_on', '=', array( true ) ),
				),
			),
			array(
				'id'            => 'search_limit',
				'type'          => 'slider',
				'title'         => esc_html__( 'Maximum number of results', 'lezada' ),
				'subtitle'      => esc_html__( 'Maximum number of results showed within the autosuggest box',
					'lezada' ),
				'min'           => 1,
				'max'           => 20,
				'step'          => 1,
				'default'       => 6,
				'display_value' => 'label',
				'required'      => array(
					array( 'search_ajax_on', '=', array( true ) ),
				),
			),
			array(
				'id'       => 'search_excerpt_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show excerpt', 'lezada' ),
				'subtitle' => esc_html__( 'Show the excerpt of search result', 'lezada' ),
				'default'  => false,
				'required' => array(
					array( 'search_ajax_on', '=', array( true ) ),
				),
			),
			array(
				'id'          => 'search_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Search Icon Color', 'lezada' ),
				'subtitle'    => esc_html__( 'Pick a color for the search icon', 'lezada' ),
				'output'      => $lezada_selectors['search_color'],
				'validate'    => 'color',
				'default'     => '#333333',
			),
		),
	) );
