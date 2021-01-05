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


<footer class="small text-white">
  <div class="container border-bottom border-secondary">
    <div class="row py-5">
      <div class="col-md-3 col-sm-6 col-12">
        <img class="mb-3" src="<?php echo get_field('logo_footer', 'option')['url']; ?>" alt="<?php echo get_field('logo_footer', 'option')['alt']; ?>"/>
        <div class="d-flex flex-column">
          <span><?php echo get_theme_mod('company_address') ?></span>
          <div class="">
            <span><?php echo get_theme_mod('company_zipcode') ?></span>
            <span><?php echo get_theme_mod('company_city') ?></span>
          </div>
          <a class="text-orange" href="tel:+33<?php echo substr(str_replace(' ', '', get_theme_mod('company_phone')), 1)?>"><?php echo get_theme_mod('company_phone')?></a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12 pt-3">
        <span class="footer-title">Plan du site</span>
        <?php
        wp_nav_menu(array(
          'menu' => 'quatertiary',
          'theme_location' => 'menu-4',
          'menu_class' => 'footer-menu bottom d-flex flex-wrap flex-column mt-2'
        ));
        ?>
      </div>
      <div class="col-md-3 col-sm-6 col-12 pt-3">
        <span class="footer-title">Suivez-nous!</span>
        <div class="social d-flex pb-2 mt-3">
          <?php if(!empty(get_theme_mod('facebook'))):?>
            <a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="mr-3" target="_blank">
              <i class="fab fa-facebook-square fa-2x text-white"></i>
            </a>
          <?php endif;?>
          <?php if(!empty(get_theme_mod('linkedin'))):?>
            <a href="<?php echo get_theme_mod( 'linkedin' ); ?>" class="mr-3" target="_blank">
              <i class="fab fa-linkedin fa-2x text-white"></i>
            </a>
          <?php endif;?>
          <?php if(!empty(get_theme_mod('youtube'))):?>
            <a href="<?php echo get_theme_mod( 'youtube' ); ?>" class="mr-3" target="_blank">
              <i class="fab fa-youtube fa-2x text-white"></i>
            </a>
          <?php endif;?>
          <?php if(!empty(get_theme_mod('instagram'))):?>
            <a href="<?php echo get_theme_mod( 'instagram' ); ?>" class="mr-3" target="_blank">
              <i class="fab fa-youtube fa-2x text-white"></i>
            </a>
          <?php endif;?>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-12 pt-3">
        <span class="footer-title">Newsletter</span>
        <div class="mt-3">
          <p>Recevez toutes nos actualités</p>
          <form method="post" action="">
            <div class="d-flex flex-nowrap">
              <input class="border-0 rounded-left px-3 py-2" style="width: calc(100% - 44.8px);" type="text" name="mail" value="" placeholder="Entrez votre Email">
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
      <div class="copyright col-12 col-md-4 text-left p-0">
        Copyright &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>
        - <?php _e('Tous droits réservés', 'acwd'); ?>
      </div>
      <div class="mentions col-12 col-md-4 text-right p-0">
        <a href="https://v3.manehome.fr/politique-de-confidentialite/
        " class="lien-footer" >Politique de confidentialité</a>
        -
        <a href="https://v3.manehome.fr/mentions-legales/" class="lien-footer" >Mentions légales</a>
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
