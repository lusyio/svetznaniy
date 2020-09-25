<?php
/**a
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lezada
 */

?>
<?php

do_action( 'lezada_main_container_bottom' );

$pageID         = Lezada_Helper::get_the_ID();
$disable_footer = get_post_meta( $pageID, 'lezada_disable_footer', true );

$footer_width        = lezada_get_option( 'footer_width' );
$footer_color_scheme = lezada_get_option( 'footer_color_scheme' );

$footer_sidebars = array(
	'sidebar-footer-1',
	'sidebar-footer-2',
	'sidebar-footer-3',
	'sidebar-footer-4',
);

$layout = explode( '_', lezada_get_option( 'footer_layout' ) );

?>

</div>

<?php if ( ! $disable_footer ) : ?>

	<div id="footer" class="site-footer site-footer--<?php echo esc_attr( $footer_color_scheme ); ?> ">
		<div class="container<?php echo '' . ( $footer_width == 'wide' ) ? ' wide' : ''; ?>">
			<div class="row">
				<?php

				$columns = $layout[0];
				$col_xl  = $layout[1];
				$col_lg  = $columns > 1 ? 4 : 12;

				?>

				<?php for ( $i = 0; $i < $columns; $i ++ ) : ?>
					<div
						class="footer-column col-xs-12 col-lg-<?php echo esc_attr( $col_lg ); ?> col-xl-<?php echo esc_attr( $col_xl ); ?>">
						<?php if ( is_active_sidebar( $footer_sidebars[ $i ] ) ) : ?>
							<?php dynamic_sidebar( $footer_sidebars[ $i ] ); ?>
						<?php endif; ?>
					</div>
				<?php endfor; ?>

			</div>
		</div>

		<?php if ( lezada_get_option( 'footer_copyright' ) ): ?>
			<div class="site-copyright">
				<div class="container<?php echo '' . ( $footer_width == 'wide' ) ? ' wide' : ''; ?>">
					<div class="row flex-items-xs-middle">
						<div class="col-xs-12 text-xs-center">
							<?php echo wp_kses_post( lezada_get_option( 'footer_copyright_text' ) ); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

	</div>
<?php endif; ?>

<?php do_action( 'lezada_site_bottom' ); ?>

<?php echo Lezada_Templates::back_to_top() ?>
<?php echo Lezada_Templates::cookie_notice() ?>

</div>

<?php do_action( 'lezada_after_page_container' ); ?>
<?php wp_footer(); ?>

</body>

</html>
