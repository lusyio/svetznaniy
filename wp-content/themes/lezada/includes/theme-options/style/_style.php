<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title'            => esc_html__( 'Style', 'lezada' ),
	'id'               => 'panel_style',
	'customizer_width' => '400px',
	'icon'             => 'fa fa-paint-brush',
) );

require_once LEZADA_OPTIONS_DIR . DS . 'style' . DS . 'style_typo.php';
require_once LEZADA_OPTIONS_DIR . DS . 'style' . DS . 'style_colors.php';
require_once LEZADA_OPTIONS_DIR . DS . 'style' . DS . 'style_tag.php';
