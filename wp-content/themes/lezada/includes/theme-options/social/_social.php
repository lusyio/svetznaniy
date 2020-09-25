<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'  => esc_html__( 'Social', 'lezada' ),
	'id'     => 'panel_social',
	'icon'   => 'fa fa-share-alt',
	'fields' => array(
		array(
			'id'       => 'tooltip',
			'type'     => 'switch',
			'title'    => esc_html__( 'Display tooltip', 'lezada' ),
			'subtitle' => esc_html__( 'Enabling tooltip for the social icons when hover.', 'lezada' ),
			'default'  => true,
		),

		array(
			'id'       => 'social_open_in_new_tab',
			'type'     => 'switch',
			'title'    => esc_html__( 'Open link in new tab', 'lezada' ),
			'default'  => false,
		),

		array
		(
			'id'         => 'social_links',
			'type'       => 'repeater',
			'title'      => esc_html__( 'Social Items', 'lezada' ),
			'item_name'  => esc_html__( 'Items', 'lezada' ),
			'bind_title' => 'icon',
			'fields'     => array(

				array(
					'id'      => 'icon',
					'title'   => esc_html__( 'Icon', 'lezada' ),
					'type'    => 'select',
					'desc'    => esc_html__( 'Select a social network to automatically add its icon', 'lezada' ),
					'options' => Lezada_Helper::social_icons(),
					'default' => 'none',
				),

				array(
					'id'          => 'icon_class',
					'title'       => esc_html__( 'Custom Icon', 'lezada' ),
					'type'        => 'text',
					'placeholder' => esc_html__( 'Font Awesome Class', 'lezada' ),
					'desc'        => wp_kses( sprintf( __( 'Use your custom icon. You can find Font Awesome icon class <a target="_blank" href="%s">here</a>.', 'lezada' ), 'http://fontawesome.io/cheatsheet/' ), array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
					) ),
				),

				array(
					'id'          => 'url',
					'type'        => 'text',
					'title'       => esc_html__( 'Link (URL)', 'lezada' ),
					'placeholder' => esc_html__( 'http://', 'lezada' ),
					'desc'        => esc_html__( 'Add an URL to your social network', 'lezada' ),
				),

				array(
					'id'          => 'title',
					'title'       => esc_html__( 'Title', 'lezada' ),
					'type'        => 'text',
					'placeholder' => esc_html__( 'Title', 'lezada' ),
					'desc'        => esc_html__( 'Insert your custom title here', 'lezada' ),
				),

				array(
					'id'    => 'custom_class',
					'title' => esc_html__( 'Custom CSS class', 'lezada' ),
					'type'  => 'text',
					'desc'  => esc_html__( 'Insert your custom CSS class here', 'lezada' ),
				),
			),
		),
	),
) );
