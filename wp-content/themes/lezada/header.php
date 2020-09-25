<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lezada
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php if ( function_exists( 'wp_site_icon' ) ) {
		wp_site_icon();
	} ?>

	<?php wp_head(); ?>
<meta name="interkassa-verification" content="ee9511da846c199701fa09623e7bc923" />
</head>

<body <?php body_class(); ?>>

<?php echo Lezada_Templates::mobile_menu(); ?>
<?php
if ( lezada_get_option( 'offcanvas_button_on' ) ) {
	echo Lezada_Templates::header_offcanvas();
}
?>

<?php do_action( 'lezada_site_before' ); ?>

<div id="page-container">

	<?php do_action( 'lezada_page_container_top' ); ?>

	<?php

	if ( lezada_get_option( 'topbar_on' ) ) {
		get_template_part( 'components/topbar/topbar-' . lezada_get_option( 'topbar' ) );
	}

	if ( lezada_get_option( 'search_on' ) ) {
		echo Lezada_Templates::search_form();
	}

	$header = apply_filters( 'lezada_header_layout', lezada_get_option( 'header' ) );

	$header_classes   = array( 'site-header' );
	$header_classes[] = 'header-' . $header;
	$header_classes[] = 'header-scheme--' . lezada_get_option( 'header_scheme' );

	if ( ! lezada_get_option( 'breadcrumbs' ) && ! lezada_get_option( 'page_title_on' ) ) {
		$header_classes[] = 'has-margin-bottom';
	}

	?>
	<!-- Header -->
	<header class="<?php echo implode( ' ', $header_classes ); ?>">
		<?php get_template_part( 'components/header/header-' . lezada_get_option( 'header' ) ); ?>
	</header>
	<!-- End Header -->
	<?php
	$remove_whitespace = lezada_get_option( 'remove_whitespace' );
	$page_title_on     = lezada_get_option( 'page_title_on' );

	$container_class = array( 'main-container' );

	if ( $remove_whitespace ) {
		if ( ! $page_title_on && lezada_get_option( 'shop_toolbar' ) == '1' ) {
			$container_class[] = 'only-shop-tool';
		}
		if ( ! $page_title_on && lezada_get_option( 'shop_toolbar' ) == '0' ) {
			$container_class[] = 'no-whitespace';
		}
	}

	?>

	<div class="<?php echo implode( ' ', $container_class ); ?>">

		<?php
		do_action( 'lezada_main_container_top' );
		echo Lezada_Templates::page_title();
		?>
