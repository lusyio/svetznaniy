<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title' => esc_html__( 'Custom Code', 'lezada' ),
	'id'    => 'panel_custom',
	'icon'  => 'fa fa-code'
) );

require_once LEZADA_OPTIONS_DIR . DS . 'custom' . DS . 'custom_css.php';
require_once LEZADA_OPTIONS_DIR . DS . 'custom' . DS . 'custom_js.php';

