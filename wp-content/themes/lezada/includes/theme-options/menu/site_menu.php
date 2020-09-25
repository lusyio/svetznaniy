<?php

Redux::setSection( Lezada_Redux::$opt_name,
	array(
		'title'      => esc_html__( 'Main Menu', 'lezada' ),
		'id'         => 'section_site_menu',
		'subsection' => true,
		'fields'     => array(

			array(
				'id'       => 'site_menu_align',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Main menu align', 'lezada' ),
				'subtitle' => esc_html__( 'Set the text align for the main menu of your site', 'lezada' ),
				'options'  => array(
					'left'   => esc_html__( 'Left', 'lezada' ),
					'center' => esc_html__( 'Center', 'lezada' ),
					'right'  => esc_html__( 'Right', 'lezada' ),
				),
				'default'  => 'center',
				'required' => array(
					array( 'header', '=', 'base' ),
				),
			),

			array(
				'id'       => 'site_menu_style',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Menu Style', 'lezada' ),
				'options'  => array(
					'base'      => array(
						'title' => esc_html__( 'Base', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'menu-base.png',
					),
					'separator' => array(
						'title' => esc_html__( 'With separator', 'lezada' ),
						'img'   => LEZADA_ADMIN_IMAGES . DS . 'menu-separator.png',
					),
				),
				'default'  => 'base',
				'required' => array(
					array( 'header', '=', 'base' ),
				),
			),

			array(
				'id'       => 'site_menu_items_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Menu Item Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick color for the menu items', 'lezada' ),
				'output'   => $lezada_selectors['site_menu_items_color'],
				'active'   => false,
				'visited'  => false,
				'default'  => array(
					'regular' => '#7E7E7E',
					'hover'   => PRIMARY_COLOR,
				),
			),

			array(
				'id'       => 'site_menu_subitems_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Menu Sub Item Color', 'lezada' ),
				'subtitle' => esc_html__( 'Pick color for the menu sub items', 'lezada' ),
				'output'   => $lezada_selectors['site_menu_subitems_color'],
				'active'   => false,
				'visited'  => false,
				'default'  => array(
					'regular' => '#7E7E7E',
					'hover'   => PRIMARY_COLOR,
				),
			),

			array(
				'id'       => 'site_menu_bgcolor',
				'type'     => 'color',
				'title'    => esc_html__( 'Menu Background Color', 'lezada' ),
				'subtitle' => esc_html__( 'Only works with Menu Bottom Header', 'lezada' ),
				'output'   => $lezada_selectors['site_menu_bgcolor'],
				'active'   => false,
				'visited'  => false,
				'default'  => '#ffffff',
				'required' => array(
					array( 'header', '=', array( 'menu-bottom' ) ),
				),
			),

			array(
				'id'       => 'site_menu_bdcolor',
				'type'     => 'color',
				'title'    => esc_html__( 'Menu Border Color', 'lezada' ),
				'subtitle' => esc_html__( 'Only works with Menu Bottom Header', 'lezada' ),
				'output'   => $lezada_selectors['site_menu_bdcolor'],
				'active'   => false,
				'visited'  => false,
				'default'  => '#eeeeee',
				'required' => array(
					array( 'header', '=', array( 'menu-bottom' ) ),
				),
			),
		),
	) );
