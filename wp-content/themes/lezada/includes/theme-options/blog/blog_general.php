<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'      => esc_html__( 'General', 'lezada' ),
	'id'         => 'section_general',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta', 'lezada' ),
			'subtitle' => esc_html__( 'Turn on to display post meta on blog posts', 'lezada' ),
			'default'  => true,
		),

		array(
			'id'       => 'post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Display Author', 'lezada' ),
			'subtitle' => esc_html__( 'Display author on blog posts', 'lezada' ),
			'default'  => true,
			'required'    => array(
				'post_meta',
				'=',
				true,
			),
		),

		array(
			'id'       => 'post_meta_categories',
			'type'     => 'switch',
			'title'    => esc_html__( 'Display Categories', 'lezada' ),
			'subtitle' => esc_html__( 'Display categories on blog posts', 'lezada' ),
			'default'  => true,
			'required'    => array(
				'post_meta',
				'=',
				true,
			),
		),
	),
) );
