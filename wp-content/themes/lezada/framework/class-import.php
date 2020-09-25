<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Initial OneClick import for this theme
 *
 * @package   InsightFramework
 */
if ( ! class_exists( 'Lezada_Import' ) ) {

	class Lezada_Import {

		/**
		 * The constructor.
		 */
		public function __construct() {
			// Import Demo.
			add_filter( 'insight_core_import_demos', array( $this, 'import_demos' ) );
		}

		/**
		 * Import Demo
		 *
		 * @since 1.0
		 */
		public function import_demos() {
			return array(
				'01' => array(
					'screenshot' => LEZADA_THEME_URI . Lezada_Helper::get_config( 'screenshot' ),
					'name'       => LEZADA_THEME_NAME,
					'url'        => Lezada_Helper::get_config( 'import_package_url' ),
				),
			);
		}

		public function generate_thumb() {
			return true;
		}
	}

	new Lezada_Import();
}
