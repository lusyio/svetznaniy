<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title' => esc_html__( 'Shop', 'lezada' ),
	'id'    => 'panel_woo',
	'icon'  => 'fa fa-shopping-basket'
) );

require_once LEZADA_OPTIONS_DIR . DS . 'woo' . DS . 'woo_general.php';
require_once LEZADA_OPTIONS_DIR . DS . 'woo' . DS . 'woo_shop.php';
require_once LEZADA_OPTIONS_DIR . DS . 'woo' . DS . 'woo_shop_toolbar.php';
require_once LEZADA_OPTIONS_DIR . DS . 'woo' . DS . 'woo_product.php';
