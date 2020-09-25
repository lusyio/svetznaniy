<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'  => esc_html__( 'Cookie Notice', 'lezada' ),
	'id'     => 'panel_cookie',
	'icon'   => 'fa fa-sticky-note-o',
	'fields' => array(
		array(
			'id'       => 'cookie_on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Cookie Notice', 'lezada' ),
			'subtitle' => esc_html__( 'Cookie Notice allows you to elegantly inform users that your site uses cookies and to comply with the EU cookie law regulations. Turn on this option and user will see info box at the bottom of the page that your web-site is using cookies.', 'lezada' ),
			'default'  => true,
		),
		array(
			'id'       => 'cookie_expires',
			'type'     => 'select',
			'title'    => esc_html__( 'Cookie expiry', 'lezada' ),
			'subtitle' => esc_html__( 'The ammount of time that cookie should be stored for', 'lezada' ),
			'options'  => array(
				1       => esc_html__( '1 day', 'lezada' ),
				7       => esc_html__( '1 week', 'lezada' ),
				30      => esc_html__( '1 month', 'lezada' ),
				90      => esc_html__( '3 months', 'lezada' ),
				180     => esc_html__( '6 months', 'lezada' ),
				365     => esc_html__( '1 year', 'lezada' ),
				3650000 => esc_html__( 'Infinity', 'lezada' ),
			),
			'default' => 30
		),
		array(
			'id'       => 'cookie_message',
			'type'     => 'editor',
			'title'    => esc_html__( 'Message', 'lezada' ),
			'subtitle' => esc_html__( 'Place here some information about cookies usage that will be shown in the notice', 'lezada' ),
			'default'  => esc_html__( 'We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.', 'lezada' ),
		),
	),
) );
