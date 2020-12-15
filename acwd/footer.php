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
	<span class="logo_footer" ><img src="<?php the_field('logo_footer', 'option'); ?>" /></span>
	<footer id="colophon" class="site-footer">
		<?php
		// the_custom_logo();
		?>
		<?php
		wp_nav_menu( array(
			'menu'              => 'quatertiary',
			'theme_location'    => 'menu-4',
			'menu_class'        => 'footer-menu bottom',
			));
		?>
		© <?php echo date('Y'); ?> - <?php bloginfo( 'name' ); ?> - <?php _e('Tous droits réservés', 'acwd');?>
		<div class="site-info">
				<?php _e('Réalisation', 'acwd');?> <a href="https://acwd.fr">ACWD</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
