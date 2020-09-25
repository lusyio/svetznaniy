<?php
/**
 * The template for displaying Author bios
 */

if ( ! lezada_get_option( 'post_show_author_info' ) ) {
	return;
}

$author_description = get_the_author_meta( 'description' );

if ( ! empty( $author_description ) ) {
	?>

	<div class="author-info">
		<div class="author-avatar">
			<?php
			/**
			 * Filter the author bio avatar size.
			 *
			 * @since lezada Thirteen 1.0
			 *
			 * @param int $size The avatar height and width size in pixels.
			 */
			$author_bio_avatar_size = apply_filters( 'lezada_author_bio_avatar_size', 90 );
			echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
			?>
		</div><!-- .author-avatar -->
		<div class="author-description">
			<h2 class="author-title">
				<a class="author-link"
				   href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
				   rel="author"><?php echo get_the_author(); ?></a>
			</h2>
			<p class="author-bio">
				<?php the_author_meta( 'description' ); ?>
			</p>
		</div><!-- .author-description -->
	</div><!-- .author-info -->

	<?php
}
