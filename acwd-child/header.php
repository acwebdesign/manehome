<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACWD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
    <div class="container  justify-content-center justify-content-lg-around">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
        <button class="navbar-toggler navbar-toggler-right position-absolute" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" id="nav-bar-toggle">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <?php
        wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'menu-1',
                // 'depth'             => 2,
                'container' => 'div',
                'container_id' => 'navbarResponsive',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker())
        );
        ?>
        <div class="social col-auto d-lg-flex justify-content-center pb-2 mt-3 mx-auto  d-none">
            <a href="#" class="mx-2">
                <i class="fas fa-search"></i>
            </a>
            <a href="" class="btn btn-secondary">Contactez-nous</a>
        </div>

        <!-- <div class="social social-mobile col-12 col-md-auto d-flex justify-content-center pb-2 mt-3 mx-auto flex-column flex-lg-row position-absolute d-lg-none">
            <a href="#" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="tel:+33<?php echo substr(str_replace(' ', '', get_theme_mod('company_phone')), 1)?>" class="mx-2">
                <i class="fa fa-phone"></i>
            </a>
            <a href="mailto:<?php echo get_theme_mod('company_email'); ?>" class="mx-2">
                <i class="fa fa-at"></i>
            </a>
        </div> -->
    </div>
</nav>
<div id="page" class="site">
    <!-- <header class="masthead" id="home">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
                <h2 class="mx-auto my-0 text-uppercase"><?php echo esc_attr( get_bloginfo( 'description', 'display' ) ); ?></h2>
                <h3 class="text-white-50 mx-auto mt-2 mb-5"><?php the_title(); ?></h3>
                <a href="#service" class="btn btn-primary js-scroll-trigger">Découvrir</a>
            </div>
        </div>
    </header> -->

    <main role="main">
        <?php
        // require_once get_template_directory() . '/../acwd-child/inc/slider_header.php';
        ?>
