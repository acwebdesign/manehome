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
<main>
	<section class="container">
		<div class="row py-5">
			<div class="col-12 col-md-6 ">
				<?php
				$contact = get_field('formulaire_contact');
				echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
				?>
			</div>
			<div class="col-12 col-md-6">
				<div class="contact-coordonnee pl-5">
					<h2>Contact</h2>
					<div class="my-3">
						<i class="fas fa-map-marker-alt text-warning fa-lg mr-3"></i> <?php echo get_theme_mod( 'company_address' ); ?>
					<?php echo get_theme_mod( 'company_zipcode' ); ?> <?php echo get_theme_mod( 'company_city' ); ?>
					</div>
					<div class="my-3"><a class="text-dark my-5 py-5" href="mailto:<?php echo get_theme_mod('company_email'); ?>"><i class="fas fa-envelope text-warning fa-lg mr-3"></i> <?php echo get_theme_mod('company_email'); ?></a></div>
					<div class="my-3"><a class="text-dark my-5 py-5" href="tel:<?php echo '+33'.substr(str_replace(' ','',get_theme_mod('company_phone')),1); ?>"><i class=" text-warning fa-lg mr-3 fas fa-phone-alt"></i> <?php echo get_theme_mod('company_phone'); ?></a></div>
				</div>
					<div>
						<?php
						$image = get_field('image_localisation');
						if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="container_dowload_plaquette">
		<div class="container">
			<div class="row py-3 justify-content-center align-items-center">
				<div class="col-12 col-md-4">
					<?php
					$image = get_field('image');
					if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
				<?php endif; ?>
				</div>
				<div class="col-12 col-md-4"><a href="<?php echo get_field('lien_telechargement'); ?>" class="btn" target="_blank">Télécharger la plaquette</a></div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
