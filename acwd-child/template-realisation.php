<?php
/**
 * Template Name: Template Réalisations
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

<style>
.img-realisation{
	filter: grayscale(100%);
	mix-blend-mode: luminosity;
	opacity: 1;
}

.titre-realisation{
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
	opacity: 0;
	color: white;
	font-size: 20px;
	text-shadow: black 0.1em 0.1em 0.2em
}

.bloc-realisation:hover .titre-realisation{
	opacity: 1;
}

.bloc-realisation:hover .img-realisation{
	filter: none;
	mix-blend-mode: normal;
}
.titre-realisation,
.img-realisation{
	transition: all .3s;
}

</style>
<section class="container realisation">
	<div class="row">
		<div class="col ">
			<h1 class="my-5"><?php echo get_field('titre_realisations') ?></h1>
			<div class="chapo"><?php echo get_field('chapo_realisations') ?></div>
		</div>

	</div>
	<div class="row">
		<?php		if( have_rows('blocs_realisations') ): while( have_rows('blocs_realisations') ): the_row(); ?>
			<div class="col-12 col-md-4 my-3">
				<div class="col-12 bloc-realisation row  my-2 ">
					<div class="bg-orange">
						<?php
						$image = get_sub_field('image_fond');
						if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" class="img-realisation"/>
						<?php endif; ?>

					</div>

						<span class="titre-realisation"><?php echo get_sub_field('titre'); ?></span>
				</div>
			</div>
		<?php		endwhile;	endif;?>
	</div>
</section>


<?php
get_footer();
