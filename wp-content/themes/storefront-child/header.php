<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>

<?php do_action('storefront_before_site'); ?>

<div id="page" class="hfeed site">
    <?php do_action('storefront_before_header'); ?>

    <header id="masthead" class="site-header border-bottom" role="banner" style="<?php storefront_header_styles(); ?>">
        <div class="border-bottom">
            <div class="container">

                <div class="header__top-block pb-2">
                    <div class="d-flex justify-content-between">

                        <div class="d-flex">
                            <div class="border-right mr-2 pr-2">
                                <?php pll_the_languages(array('dropdown' => 1)); ?>
                            </div>
                            <div class="border-right mr-2 pr-2 pl-1">
                                <?php echo do_shortcode('[woocs show_flags=1 txt_type="desc" style=3]'); ?>
                            </div>
                            <div class="pl-1">
                                <span class="header__top-block-phone">8 (800) 200-30-23</span>
                            </div>
                        </div>

                        <div class="d-flex header__top-block-social">
                            <a href="https://www.instagram.com/ilz_publishing/" target="_blank" class="mr-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/Light-of-Knowlege-Publishing-100911005000147/"
                               target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="container pt-2 pb-2">


            <div class="row">

                <div class="col-2">
                    <a href="/">
                        <img src="/wp-content/themes/storefront-child/inc/assets/logo.png"
                                     alt="<?= get_bloginfo('name'); ?>"/>
                    </a>
                </div>

                <div class="col-7">

                    <nav class="navbar navbar-expand-xl mt-2">


                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => '',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id' => false,
                            'menu_class' => 'navbar-nav',
                            'depth' => 3,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </nav>

                    <div class="outer-menu">
                        <button class="navbar-toggler position-relative" type="button" style="z-index: 1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <input class="checkbox-toggle" data-toggle="collapse" data-target="#main-nav"
                               aria-controls="" aria-expanded="false" aria-label="Toggle navigation" type="checkbox"/>
                        <div class="menu">
                            <div>
                                <div class="border-header">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'container' => 'div',
                                        'container_id' => 'main-nav',
                                        'container_class' => 'collapse navbar-collapse justify-content-end',
                                        'menu_id' => false,
                                        'menu_class' => 'navbar-nav',
                                        'depth' => 3,
                                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                        'walker' => new wp_bootstrap_navwalker()
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">

                    <div class="d-flex justify-content-end mt-4">
                        <div>
                            <?php get_search_form() ?>
                        </div>

                        <div>

                            <?php if (class_exists('WooCommerce')): ?>
                                <div class="s-header__basket-wr woocommerce pr-0 pl-0 position-relative">
                                    <?php
                                    global $woocommerce; ?>
                                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
                                       class="basket-btn basket-btn_fixed-xs text-decoration-none position-relative">
                                        <span class="basket-btn__label"><i class="fas fa-shopping-cart"></i></span>
                                        <?php if (sprintf($woocommerce->cart->cart_contents_count) != 0): ?>
                                            <span class="basket-btn__counter"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>


                </div>


                </nav>

            </div>

        </div>


</div>

</header><!-- #masthead -->

<?php
/**
 * Functions hooked in to storefront_before_content
 *
 * @hooked storefront_header_widget_region - 10
 * @hooked woocommerce_breadcrumb - 10
 */
do_action('storefront_before_content');
?>

<div id="content" class="site-content">
    <div class="container">
        <div class="row">

<?php
do_action('storefront_content_top');
