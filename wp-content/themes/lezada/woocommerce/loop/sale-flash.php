<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see           https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

// New
$newdays     = apply_filters( 'lezada_shop_new_days', lezada_get_option( 'shop_new_days' ) );
$is_new      = ( time() - get_the_time( 'U', $post->ID ) < DAY_IN_SECONDS * $newdays ) && lezada_get_option( 'shop_new_badge_on' );
$is_featured = $product->is_featured() && lezada_get_option( 'shop_hot_badge_on' );
$is_sale     = $product->is_on_sale() && lezada_get_option( 'shop_sale_badge_on' );

if ( ! $product->is_in_stock() || $is_new || $is_featured || $is_sale ) {
	echo '<div class="product-badges">';
}

if ( ! $product->is_in_stock() ) {
	echo '<span class="outofstock hint--right hint--bounce" aria-label="' . esc_html__( 'Out of stock', 'lezada' ) . '"><i class="ion-android-sad"></i></span>';
}

if ( $is_new ) {
	echo '<span class="new">' . esc_html__( 'New', 'lezada' ) . '</span>';
}

// Sale
if ( $is_sale ) {

	$str = esc_html__( 'Sale', 'lezada' );

	if ( lezada_get_option( 'shop_sale_percent_on' ) && ( $product->is_type( 'simple' ) || $product->is_type( 'external' ) ) ) {
		$str = Lezada_Woo::get_sale_percentage( $product );
	}

	echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . $str . '</span>', $post, $product );
}

// Featured (Hot)
if ( $is_featured ) {
	echo '<span class="hot">' . esc_html__( 'Hot', 'lezada' ) . '</span>';
}

if ( ! $product->is_in_stock() || $is_new || $is_featured || $is_sale ) {
	echo '</div>';
}

