<?php
/**
 * Template Name: Template Contact
 *
 * This is the template that displays contact page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */

get_header();
get_template_part( 'template-parts/content', 'header');
?>

			<div class="container">
				<div class="row">

					<div class="col-12">
						<p>
							<h5><?php bloginfo( 'name' ); ?></h5><br />
							<?php echo get_theme_mod( 'company_address' ); ?><br />
							<?php echo get_theme_mod( 'company_zipcode' ); ?> <?php echo get_theme_mod( 'company_city' ); ?><br />
							<a href="mailto:<?php echo get_theme_mod('company_email'); ?>"><?php echo get_theme_mod('company_email'); ?></a><br />
							<a href="tel:<?php echo '+33'.substr(str_replace(' ','',get_theme_mod('company_phone')),1); ?>"><?php echo get_theme_mod('company_phone'); ?></a>
						</p>
					</div>
					<div class="col-12 col-md-6 ">
							<?php
							$contact = get_field('formulaire_contact');
							echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
							?>
					</div>
					<div class="col-12 col-md-6 ">
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
