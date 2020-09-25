<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'  => esc_html__( 'Breadcrumbs', 'lezada' ),
	'id'     => 'panel_breadcrumbs',
	'icon'   => 'fa fa-angle-double-right',
	'fields' => array(

		array(
			'id'       => 'breadcrumbs',
			'type'     => 'switch',
			'title'    => esc_html__( 'Breadcrumbs', 'lezada' ),
			'subtitle' => esc_html__( 'Displays a full chain of links to the current page.', 'lezada' ),
			'default'  => true,
		),

		array(
			'id'          => 'breadcrumbs_text_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Breadcrumbs Text Color', 'lezada' ),
			'output'      => $lezada_selectors['breadcrumbs_text_color'],
			'default'     => '#333333',
		),

		array(
			'id'          => 'breadcrumbs_seperator_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Breadcrumbs Separator Color', 'lezada' ),
			'output'      => $lezada_selectors['breadcrumbs_seperator_color'],
			'default'     => '#333333',
		),

		array(
			'id'          => 'breadcrumbs_link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Breadcrumbs Link Color', 'lezada' ),
			'output'      => $lezada_selectors['breadcrumbs_link_color'],
			'default'     => '#999999',
		),

		array(
			'id'          => 'breadcrumbs_link_color_hover',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Breadcrumbs Link Color: Hover', 'lezada' ),
			'output'      => $lezada_selectors['breadcrumbs_link_color_hover'],
			'default'     => '#999999',
		),
	),
) );
