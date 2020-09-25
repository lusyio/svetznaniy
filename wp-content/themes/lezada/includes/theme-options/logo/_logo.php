<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'  => __( 'Logo', 'lezada' ),
		'id'     => 'panel_logo',
		'icon'   => 'fa fa-picture-o',
		'fields' => array(

			array(
				'id'      => 'logo',
				'type'    => 'media',
				'desc'    => esc_html__( 'Upload image: png, jpg or gif file', 'lezada' ),
				'title'   => esc_html__( 'Logo Image', 'lezada' ),
				'default' => array(
					'url' => LEZADA_IMAGES . '/logo.png',
				),
			),
			array(
				'id'       => 'logo_retina',
				'type'     => 'media',
				'desc'     => esc_html__( 'Upload image: png, jpg or gif file, display as logo retina', 'lezada' ),
				'title'    => esc_html__( 'Logo Retina Image', 'lezada' ),
				'subtitle' => 'for a vivid display of your retina logo (at double the size of logos)',
				'default'  => array(
					'url' => LEZADA_IMAGES . '/logo-retina.png',
				),
			),
			array(
				'id'       => 'logo_alt',
				'type'     => 'media',
				'subtitle' => esc_html__( 'for the header above the content', 'lezada' ),
				'desc'     => esc_html__( 'Upload image: png, jpg or gif file', 'lezada' ),
				'title'    => esc_html__( 'Alternative Logo Image ', 'lezada' ),
				'default'  => array(
					'url' => LEZADA_IMAGES . '/logo-alt.png',
				),
			),
			array(
				'id'      => 'logo_mobile',
				'type'    => 'media',
				'title'   => esc_html__( 'Logo in mobile devices', 'lezada' ),
				'desc'    => esc_html__( 'Upload image: png, jpg or gif file', 'lezada' ),
				'default' => array(
					'url' => LEZADA_IMAGES . '/logo.png',
				),
			),
			array(
				'id'      => 'logo_mobile_alt',
				'type'    => 'media',
				'title'   => esc_html__( 'Alternative logo in mobile devices', 'lezada' ),
				'desc'    => esc_html__( 'Upload image: png, jpg or gif file', 'lezada' ),
				'default' => array(
					'url' => LEZADA_IMAGES . '/logo.png',
				),
			),
			array(
				'id'            => 'logo_width',
				'type'          => 'slider',
				'title'         => esc_html__( 'Logo width', 'lezada' ),
				'subtitle'      => esc_html__( 'Set width for logo area in the header (in %)', 'lezada' ),
				'default'       => 15,
				'min'           => 1,
				'max'           => 50,
				'step'          => 1,
				'display_value' => 'label',
				'required'      => array(
					array( 'header', '=', array( 'base' ) ),
				),
			),
			'default' => true,

			array(
				'id'    => 'favicon_notice',
				'type'  => 'info',
				'style' => 'info',
				'title' => esc_html__( 'Favicon (Site Icon)', 'lezada' ),
				'desc'  => wp_kses( sprintf( __( 'Note: From WordPress 4.3, you can set favicon in your site in <b>Appearance >> Customize >> Site Identify >> Site Icon</b><br/><img src="https://codex.wordpress.org/images/3/3b/customizer-siteicon.jpg"/>',
					'lezada' ),
					admin_url( 'widgets.php' ) ),
					wp_kses_allowed_html( 'post' ) ),
			),
		),
	) );
