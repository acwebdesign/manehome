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
?>

<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        
			<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php the_content(); ?>
				<div class="row">
					<div class="col-12 col-md-6 ">
						<?php 
						$contact = get_field('formulaire_contact');
						// preprint($contact);
						echo do_shortcode('[contact-form-7 id="'.$contact->ID.'" title="'.$contact->post_title.'"]');
						?>
					</div>
					<div class="col-12 col-md-6 ">
						<p>
							<h5><?php bloginfo( 'name' ); ?></h5><br />
							<?php echo get_theme_mod( 'company_address' ); ?><br />
							<?php echo get_theme_mod( 'company_zipcode' ); ?> <?php echo get_theme_mod( 'company_city' ); ?><br />
							<a href="tel:<?php echo '+33'.substr(str_replace(' ','',get_theme_mod('company_phone')),1); ?>"><?php echo get_theme_mod('company_phone'); ?></a>
						</p>
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="aligncenter contact_image">

						<?php
						$map = get_field('google_map');
						// preprint($map);
						if( !empty($map) ):
						?>
						<div class="acf-map">
							<div class="marker" data-zoom="10" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
						</div>
						<?php endif; ?>		
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();