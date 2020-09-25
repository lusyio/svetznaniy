<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title' => esc_html__( 'Navigation', 'lezada' ),
	'id'    => 'panel_nav',
	'icon'  => 'fa fa-bars',
) );

require_once LEZADA_OPTIONS_DIR . DS . 'menu' . DS . 'site_menu.php';
require_once LEZADA_OPTIONS_DIR . DS . 'menu' . DS . 'mobile_menu.php';
