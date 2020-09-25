<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'      => esc_html__( 'Header Appearance', 'lezada' ),
	'id'         => 'section_header_appearance',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'header_white',
			'type'     => 'switch',
			'title'    => esc_html__( 'Header White mode', 'lezada' ),
			'subtitle' => esc_html__( 'Make everything (such as text, icon, menu, etc...) on the header to white color. Only works when the "Header above the content" option (in Header > Header Layout) is enabled.',
				'lezada' ),
			'default'  => false,
		),
		array(
			'id'       => 'header_bgcolor',
			'type'     => 'color',
			'title'    => esc_html__( 'Background Color', 'lezada' ),
			'subtitle' => esc_html__( 'Pick a background color for the header', 'lezada' ),
			'output'   => $lezada_selectors['header_bgcolor'],
			'default'  => '#ffffff',
		),

		array(
			'id'       => 'header_bdcolor',
			'type'     => 'color',
			'title'    => esc_html__( 'Border Color', 'lezada' ),
			'subtitle' => esc_html__( 'Pick a border color for the header', 'lezada' ),
			'output'   => $lezada_selectors['header_bdcolor'],
			'validate' => 'color',
			'default'  => 'transparent',
			'required' => array(
				array( 'header', '!=', 'vertical' ),
			),
		),

		array(
			'id'      => 'header_scheme',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Header color scheme', 'lezada' ),
			'options' => array(
				'dark'   => esc_html__( 'Dark', 'lezada' ),
				'light'  => esc_html__( 'Light', 'lezada' ),

			),
			'default' => 'light',
		),
	),
) );
