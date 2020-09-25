<?php
$container_classes          = array( '' );
$container_classes[]        = 'container ' . lezada_get_option( 'header_width' );
$offcanvas_position         = lezada_get_option( 'offcanvas_position' );
$header_left_column_content = lezada_get_option( 'header_left_column_content' );
$header_text                = lezada_get_option( 'header_text' );
?>
<?php Lezada_Helper::slider(); ?>

<div class="<?php echo esc_attr( implode( ' ', $container_classes ) ); ?>">
	<div class="row">
		<?php echo Lezada_Templates::header_block_logo(); ?>
		<div class="menu-wrapper">
			<?php echo Lezada_Templates::header_block_site_menu(); ?>
		</div>
		<div class="header-tools">
			<?php
			echo Lezada_Templates::header_block_search();
			echo Lezada_Templates::header_block_wishlist();
			echo Lezada_Templates::header_block_cart();
			echo Lezada_Templates::header_block_mobile_btn();
			?>
		</div>
		<?php if ( $header_text ) { ?>
			<p class="header-text">
				<?php echo lezada_get_option( 'header_text' ); ?>
			</p>
		<?php } ?>
	</div>
</div>
