<?php

Redux::setSection( Lezada_Redux::$opt_name, array(
	'title' => esc_html__( 'Blog', 'lezada' ),
	'id'    => 'panel_blog',
	'icon'  => 'fa fa-pencil'
) );

require_once LEZADA_OPTIONS_DIR . DS . 'blog' . DS . 'blog_general.php';
require_once LEZADA_OPTIONS_DIR . DS . 'blog' . DS . 'blog_archive.php';
require_once LEZADA_OPTIONS_DIR . DS . 'blog' . DS . 'blog_single.php';
