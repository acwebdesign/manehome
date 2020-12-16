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


<footer class="bg-dark small text-white">
    <div class="container pt-5 border-bottom border-secondary">
        <div class="row">
          <div class="col-3">
            <img class="mb-3" src="<?php echo get_field('logo_footer', 'option')['url']; ?>" alt="<?php echo get_field('logo_footer', 'option')['alt']; ?>"/>
            <div class="d-flex flex-column">
              <span><?php echo get_theme_mod('company_address') ?></span>
              <div class="">
                <span><?php echo get_theme_mod('company_zipcode') ?></span>
                <span><?php echo get_theme_mod('company_city') ?></span>
              </div>
              <a href="tel:+33<?php echo substr(str_replace(' ', '', get_theme_mod('company_phone')), 1)?>"><?php echo get_theme_mod('company_phone')?></a>
            </div>
          </div>
          <div class="col-3">
            <span>Useful links</span>
            <?php
            wp_nav_menu(array(
                'menu' => 'quatertiary',
                'theme_location' => 'menu-4',
                'menu_class' => 'footer-menu bottom d-flex list-unstyled flex-wrap flex-column mt-3'
            ));
            ?>
          </div>
          <div class="col-3">
            <span>Suivez-nous!</span>
            <div class="social d-flex pb-2 mt-3">
                <a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="mx-2">
                    <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="<?php echo get_theme_mod( 'instagram' ); ?>" class="mx-2">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </div>
          </div>
          <div class="col-3">
            <span>Newsletter</span>
            <div class="mt-3">
              <p>Recevez toutes nos actualités</p>
              <form method="post">
                <div class="row px-3">
                  <input class="border-0 rounded-left px-3 py-2" type="text" name="mail" value="" placeholder="Entrez votre Email">
                  <button class="bg-warning border-0 rounded-right px-3 py-2" type="submit"><i class="far fa-paper-plane text-white"></i></button>
                </div>
              </form>
            </div>
          </div>

        </div>

    </div>
        <!-- echo !empty(get_theme_mod('company_email')) ? '<a href="mailto:'.get_theme_mod('company_email').'">' . get_theme_mod('company_email') . '</a> &nbsp;' : ''; -->
    <div class="container py-3 text-white-50">
        <div class="row">
            <div class="col-4 text-left">
                Copyright &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>
                - <?php _e('Tous droits réservés', 'acwd'); ?>
            </div>
            <div class="col-4 text-center">
                <?php _e('Réalisation', 'acwd'); ?> <a href="https://acwd.fr">ACWD</a>
            </div>
            <div class="col-4 text-right">
                <a href="#">Politique de confidentialité</a>
                -
                <a href="#">Mentions légales</a>
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
