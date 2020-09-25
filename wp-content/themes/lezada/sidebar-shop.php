<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lezada
 */

$sidebar = Lezada_Helper::get_active_sidebar( true );

if ( ! $sidebar ) {
	return;
}

$class           = 'sidebar col-xs-12 col-md-4';
$full_width_shop = lezada_get_option( 'full_width_shop' );

$class .= ($full_width_shop != 'basic' ) ? ' col-lg-2' : ' col-lg-3';
$class .= ' ' . $sidebar['class'];
?>
<aside id="secondary" class="<?php echo esc_attr( $class ); ?>">
	<div class="widget-area">

		<?php
		dynamic_sidebar( $sidebar['sidebar'] );
		?>

	</div>
</aside>
