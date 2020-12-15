<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACWD
 */

?>

</div><!-- #content -->


<footer class="bg-black small text-center text-white-50">
    <div class="container">
        <div class="row"></div>

        <div class="col-12 col-md-2 mx-auto">
            <div>
                <img class="w-100" src="<?php the_field('logo_footer', 'option'); ?>"/>
            </div>
        </div>
        <section class="contact-section pt-0">
            <div class="container">
                <div class="social d-flex justify-content-center pb-2 mt-3">
                    <a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo get_theme_mod( 'instagram' ); ?>" class="mx-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="<?php echo get_theme_mod( 'linkedin' ); ?>" class="mx-2">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>
        <div class="row justify-content-center">
            <?php
            wp_nav_menu(array(
                'menu' => 'quatertiary',
                'theme_location' => 'menu-4',
                'container_class'   => 'col-6 col-sm-8 col-md-6',
                'menu_class' => 'footer-menu bottom d-flex justify-content-around list-unstyled flex-wrap flex-column flex-md-row',
            ));
            ?>
        </div>
        <div class="row justify-content-center">
            <?php
            echo !empty(get_theme_mod('company_name')) ? '<p>' . get_theme_mod('company_name') . ' </p>' : '';
            ?>
            &nbsp;
            -
            &nbsp;
            <?php
                  echo !empty(get_theme_mod('company_address')) ? '<p>' . get_theme_mod('company_address') . ' </p> &nbsp;' : '';
                  echo !empty(get_theme_mod('company_zipcode')) ? '<p>' . get_theme_mod('company_zipcode') . ' </p> &nbsp;' : '';
                echo !empty(get_theme_mod('company_city')) ? '<p>' . get_theme_mod('company_city') . ' </p>' : '';
            ?>
        </div>
        <div class="row justify-content-center">

            <?php

            echo !empty(get_theme_mod('company_phone')) ? '<a href="tel:+33'.substr(str_replace(' ', '', get_theme_mod('company_phone')), 1).'">' . get_theme_mod('company_phone') . '</a> &nbsp; - &nbsp;' : '';
            echo !empty(get_theme_mod('company_mobile')) ? '<a href="tel:+33'.substr(str_replace(' ', '', get_theme_mod('company_phone')), 1).'">' . get_theme_mod('company_mobile') . '</a> &nbsp;' : '';
            echo !empty(get_theme_mod('company_email')) ? '<a href="mailto:'.get_theme_mod('company_email').'">' . get_theme_mod('company_email') . '</a> &nbsp;' : '';
            echo !empty(get_theme_mod('company_lat')) ? '<p>' . get_theme_mod('company_lat') . '</p> &nbsp;' : '';
            echo !empty(get_theme_mod('company_long')) ? '<p>' . get_theme_mod('company_long') . '</p> &nbsp; - &nbsp;' : '';
            /*echo !empty(get_theme_mod('company_designer')) ? '<p>' . get_theme_mod('company_designer') . '</p>' : '';*/
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                Copyright &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>
                - <?php _e('Tous droits réservés', 'acwd'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php _e('Réalisation', 'acwd'); ?> <a href="https://acwd.fr">ACWD</a>
            </div>
        </div>
    </div>
</footer>
    <?php
    // the_custom_logo();
    ?>
</div><!-- #page -->
<script>
/*
    (function ($) {
        "use strict"; // Start of use strict

        // Smooth scrolling using jQuery easing
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: (target.offset().top - 70)
                    }, 1000, "easeInOutExpo");
                    return false;
                }
            }
        });

        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function () {
            $('.navbar-collapse').collapse('hide');
        });

        // Activate scrollspy to add active class to navbar items on scroll
        $('body').scrollspy({
            target: '#mainNav',
            offset: 100
        });

       /* // Collapse Navbar
        var navbarCollapse = function () {
            if (jQuery("#mainNav").offset().top > 100) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        };
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);*/
/*
    })(jQuery); // End of use strict
*/
</script>
<?php wp_footer(); ?>

</body>
</html>
