<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'            => __( 'Colors', 'lezada' ),
	'id'               => 'section_colors',
	'subsection'       => true,
	'customizer_width' => '450px',
	'fields'           => array(
		array(
			'id'    => 'info_color',
			'type'  => 'info',
			'style' => 'warning',
			'title' => esc_html__( 'IMPORTANT NOTE', 'lezada' ),
			'icon'  => 'el-icon-info-sign',
			'desc'  => esc_html__( 'This tab contains general color options. Additional color options for specific areas, can be found within other tabs. Example: For menu color options go to the menu tab.', 'lezada' ),
		),

		array(
			'id'          => 'primary_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Primary Color', 'lezada' ),
			'default'     => PRIMARY_COLOR,
			'validate'    => 'color',
			'output'      => $lezada_selectors['primary_color'],
		),

		array(
			'id'          => 'secondary_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Secondary Color', 'lezada' ),
			'default'     => SECONDARY_COLOR,
			'validate'    => 'color',
			'output'      => $lezada_selectors['secondary_color'],
		),

		array(
			'id'          => 'tertiary_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Tertiary Color', 'lezada' ),
			'default'     => TERTIARY_COLOR,
			'validate'    => 'color',
			'output'      => $lezada_selectors['tertiary_color'],
		),

		array(
			'id'          => 'link_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Links Color', 'lezada' ),
			'subtitle'    => esc_html__( 'Controls the color of all text links.', 'lezada' ),
			'default'     => SECONDARY_COLOR,
			'validate'    => 'color',
			'output'      => $lezada_selectors['link_color'],
		),
		array(
			'id'          => 'link_hover_color',
			'type'        => 'color',
			'transparent' => false,
			'title'       => esc_html__( 'Links Hover Color', 'lezada' ),
			'subtitle'    => esc_html__( 'Controls the color of all text links when hover.', 'lezada' ),
			'default'     => PRIMARY_COLOR,
			'validate'    => 'color',
			'output'      => $lezada_selectors['link_hover_color'],
		),
	),
) );
