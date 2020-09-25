<?php
$container_classes     = array( '' );
$container_classes[]   = 'container ' . lezada_get_option( 'header_width' );
$header_login_position = lezada_get_option( 'header_login_position' );
$offcanvas_position    = lezada_get_option( 'offcanvas_position' );

?>
<?php Lezada_Helper::slider(); ?>

<div class="<?php echo esc_attr( implode( ' ', $container_classes ) ); ?>">
	<div class="row">
		<?php
		if ( $offcanvas_position == 'left' ) {
			echo Lezada_Templates::header_offcanvas_btn();
		}
		echo Lezada_Templates::header_block_logo();
		echo Lezada_Templates::header_block_site_menu();
		?>
		<div class="right-col header-tools">
			<?php
			if ( $header_login_position == 'left' ) {
				echo Lezada_Templates::header_block_header_login();
			}

			echo Lezada_Templates::header_block_search();


			if ( $header_login_position == 'between' ) {
				echo Lezada_Templates::header_block_header_login();
			}

			echo Lezada_Templates::header_block_wishlist();
			echo Lezada_Templates::header_block_cart();
			echo Lezada_Templates::header_block_mobile_btn();

			if ( $offcanvas_position == 'right' ) {
				echo Lezada_Templates::header_offcanvas_btn();
			}
			?>
		</div>
	</div>
</div>
