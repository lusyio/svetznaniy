<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'  => esc_html__( 'Page Title', 'lezada' ),
		'id'     => 'panel_page_title',
		'icon'   => 'fa fa-credit-card',
		'fields' => array(

			array(
				'id'       => 'page_title_on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Page Title', 'lezada' ),
				'subtitle' => esc_html__( 'Enabling this option will display the page title area.', 'lezada' ),
				'default'  => true,
			),

			array(
				'id'       => 'page_meta',
				'type'     => 'switch',
				'title'    => esc_html__( 'Page Meta', 'lezada' ),
				'subtitle' => esc_html__( 'Turn on to display post meta on pages (only works in pages)', 'lezada' ),
				'default'  => false,
			),


			array(
				'id'      => 'disable_parallax',
				'type'    => 'switch',
				'title'   => esc_html__( 'Disable Parallax effect', 'lezada' ),
				'default' => false,
			),

			array(
				'id'       => 'remove_whitespace',
				'type'     => 'switch',
				'title'    => esc_html__( 'Remove whitespace', 'lezada' ),
				'subtitle' => esc_html__( 'Remove the whitespace below the header when the Page Title is turned off',
					'lezada' ),
				'default'  => true,
				'required' => array(
					'page_title_on',
					'=',
					false,
				),
			),

			array(
				'id'      => 'page_title_style',
				'type'    => 'button_set',
				'title'   => esc_html__( 'Style', 'lezada' ),
				'options' => array(
					'bg_color' => esc_html__( 'Background Color', 'lezada' ),
					'bg_image' => esc_html__( 'Background Image', 'lezada' ),
				),
				'default' => 'bg_image',
			),

			array(
				'id'      => 'page_title_height',
				'type'    => 'slider',
				'title'   => esc_html__( 'Page Title Height (in pixels)', 'lezada' ),
				'default' => 250,
				'min'     => 100,
				'max'     => 500,
				'step'    => 10,
			),

			array(
				'id'          => 'page_title_text_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Text Color', 'lezada' ),
				'output'      => $lezada_selectors['page_title_text_color'],
				'default'     => '#333333',
			),

			array(
				'id'          => 'page_subtitle_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Subtitle Color', 'lezada' ),
				'output'      => $lezada_selectors['page_subtitle_color'],
				'default'     => '#ababab',
			),

			array(
				'id'          => 'page_title_bg_color',
				'type'        => 'color',
				'transparent' => false,
				'title'       => esc_html__( 'Background Color', 'lezada' ),
				'output'      => $lezada_selectors['page_title_bg_color'],
				'default'     => '#f7f7f7',
				'required'    => array(
					'page_title_style',
					'=',
					'bg_color',
				),
			),

			array(
				'id'       => 'page_title_overlay_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Overlay Color', 'lezada' ),
				'output'   => $lezada_selectors['page_title_overlay_color'],
				'default'  => array(
					'color' => 'transparent',
					'alpha' => 0.01,
				),
				'required' => array(
					'page_title_style',
					'=',
					'bg_image',
				),
			),

			array(
				'id'                    => 'page_title_bg_image',
				'type'                  => 'background',
				'title'                 => esc_html__( 'Background Image', 'lezada' ),
				'background-color'      => false,
				'background-repeat'     => false,
				'background-attachment' => false,
				'background-position'   => false,
				'background-size'       => false,
				'default'               => array(
					'background-image' => LEZADA_IMAGES . '/page-title-bg.jpg',
				),
				'output'                => $lezada_selectors['page_title_bg_image'],
				'required'              => array(
					'page_title_style',
					'=',
					'bg_image',
				),
			),
		),
	) );
