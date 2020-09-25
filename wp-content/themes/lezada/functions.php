<?php

/**
 * Define constants
 *
 * @since 1.0
 */
$lezada_theme = wp_get_theme();

if ( ! empty( $lezada_theme['Template'] ) ) {
	$lezada_theme = wp_get_theme( $lezada_theme['Template'] );
}

if ( ! defined( 'DS' ) ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

define( 'LEZADA_THEME_NAME', $lezada_theme['Name'] );
define( 'LEZADA_THEME_SLUG', $lezada_theme['Template'] );
define( 'LEZADA_THEME_VERSION', $lezada_theme['Version'] );
define( 'LEZADA_THEME_DIR', get_template_directory() );
define( 'LEZADA_THEME_URI', get_template_directory_uri() );
define( 'LEZADA_CHILD_THEME_URI', get_stylesheet_directory_uri() );
define( 'LEZADA_CHILD_THEME_DIR', get_stylesheet_directory() );

define( 'LEZADA_LIBS_URI', LEZADA_THEME_URI . '/assets/libs' );

define( 'LEZADA_IMAGES', LEZADA_THEME_URI . '/assets/images' );
define( 'LEZADA_ADMIN_IMAGES', LEZADA_THEME_URI . '/assets/admin/images' );

define( 'LEZADA_INC_DIR', LEZADA_THEME_DIR . DS . 'includes' );
define( 'LEZADA_INC_URI', LEZADA_THEME_URI . '/includes' );
define( 'LEZADA_FRAMEWORK_DIR', LEZADA_THEME_DIR . DS . 'framework' );
define( 'LEZADA_FRAMEWORK_URI', LEZADA_THEME_URI . '/framework' );

define( 'LEZADA_OPTIONS_DIR', LEZADA_INC_DIR . DS . 'theme-options' );

/**
 * Load Insight Framework.
 *
 * @since 1.0
 */
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-coming-soon.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-compatible.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-enqueue.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-extras.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-helper.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-import.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-init.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-instagram.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-metabox.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-tgm-plugin-activation.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-plugins.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-sercurity.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-templates.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-walker-nav-menu.php' );
require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-walker-nav-menu-edit.php' );

if ( class_exists( 'Redux' ) ) {
	require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-redux.php' );
}

if ( class_exists( 'WooCommerce' )  ) {
	require_once( LEZADA_FRAMEWORK_DIR . DS . 'class-woo.php' );
}

/**
 * Get option from Theme Options
 */
if ( ! function_exists( 'lezada_get_option' ) ) {
	function lezada_get_option( $option ) {
		return Lezada_Helper::get_option( $option );
	}
}


// only run if Polylang is loaded
if ( function_exists('pll_languages_list') ) { 
	add_action('wpml_loaded', '__return_true', 10, 0);
	do_action('wpml_loaded');
}

