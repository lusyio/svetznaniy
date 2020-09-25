<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Item Tag', 'lezada' ),
		'id'         => 'section_item_tag',
		'subsection' => true,
		'fields'     => array(
			// Hot
			array(
				'id'       => 'hot_tag_section_start',
				'type'     => 'section',
				'title'    => esc_html__( '\'Hot\' tag', 'lezada' ),
				'subtitle' => esc_html__( '', 'lezada' ),
				'indent'   => true,
			),
			array(
				'id'       => 'hot_tag_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick color for the \'Hot\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['hot_tag_color'],
				'active'   => false,
				'visited'  => false,
				'default'  => array(
					'regular' => '#ffffff',
					'hover'   => '#ffffff',
				),
			),
			array(
				'id'       => 'hot_tag_bgcolor',
				'type'     => 'color',
				'title'    => esc_html__( 'Background Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick background color for the \'Hot\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['hot_tag_bgcolor'],
				'default'  => '#f8796c'
			),
			array(
				'id'       => 'hot_tag_bgcolor_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Background Color on Hover', 'lezada' ),
				'subtitle' => esc_html__( 'Pick background color on hover for the \'Hot\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['hot_tag_bgcolor_hover'],
				'default'  => '#f8796c'
			),
			array(
				'id'     => 'hot_tag_section_end',
				'type'   => 'section',
				'indent' => false,
			),

			// New
			array(
				'id'       => 'new_tag_section_start',
				'type'     => 'section',
				'title'    => esc_html__( '\'New\' tag', 'lezada' ),
				'subtitle' => esc_html__( '', 'lezada' ),
				'indent'   => true,
			),
			array(
				'id'       => 'new_tag_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick color for the \'New\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['new_tag_color'],
				'active'   => false,
				'visited'  => false,
				'default'  => array(
					'regular' => '#ffffff',
					'hover'   => '#ffffff',
				),
			),
			array(
				'id'       => 'new_tag_bgcolor',
				'type'     => 'color',
				'title'    => esc_html__( 'Background Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick background color for the \'New\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['new_tag_bgcolor'],
				'default'  => '#6688df'
			),
			array(
				'id'       => 'new_tag_bgcolor_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Background Color on Hover', 'lezada' ),
				'subtitle' => esc_html__( 'Pick background color on hover for the \'New\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['new_tag_bgcolor_hover'],
				'default'  => '#6688df'
			),
			array(
				'id'     => 'new_tag_section_end',
				'type'   => 'section',
				'indent' => false,
			),

			// Sale
			array(
				'id'       => 'sale_tag_section_start',
				'type'     => 'section',
				'title'    => esc_html__( '\'Sale\' tag', 'lezada' ),
				'subtitle' => esc_html__( '', 'lezada' ),
				'indent'   => true,
			),
			array(
				'id'       => 'sale_tag_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick color for the \'Sale\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['sale_tag_color'],
				'active'   => false,
				'visited'  => false,
				'default'  => array(
					'regular' => '#ffffff',
					'hover'   => '#ffffff',
				),
			),
			array(
				'id'       => 'sale_tag_bgcolor',
				'type'     => 'color',
				'title'    => esc_html__( 'Background Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick background color for the \'Sale\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['sale_tag_bgcolor'],
				'default'  => '#98d8ca'
			),
			array(
				'id'       => 'sale_tag_bgcolor_hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Background Color on Hover', 'lezada' ),
				'subtitle' => esc_html__( 'Pick background color on hover for the \'Sale\' tag items', 'lezada' ),
				'output'   => $lezada_selectors['sale_tag_bgcolor_hover'],
				'default'  => '#98d8ca'
			),
			array(
				'id'     => 'sale_tag_section_end',
				'type'   => 'section',
				'indent' => false,
			),
		),
	) );
