<?php
/**
 * Template Name: Template Galerie
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
<section class="container my-5 galerie">
	<div class="row">
		<?php		if( have_rows('galerie') ): while( have_rows('galerie') ): the_row(); ?>
			<div class="col-12 col-md-4 my-3">
				<div class="col-12 bloc_galerie row">
					<?php
					$image = get_sub_field('image');
					if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" class="img-realisation" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
					<?php endif; ?>
						<span class="titre-realisation"><?php echo get_sub_field('titre'); ?></span>
				</div>
			</div>
		<?php		endwhile;	endif;?>
	</div>
</section>


<?php
get_footer();
