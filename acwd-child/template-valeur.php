<?php
/**
 * Template Name: Template Valeur et Engagement
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
get_template_part( 'template-parts/content', 'header_black');
?>

	<section class="valeurs_et_engagements">
		<div class="container">
			<div class="row my-5 text-center ">
				<div class="col">
					<h1 class="mb-3"><?php echo get_field('titre_introduction') ?></h1>
					<p class="chapo">
						<?php echo get_field('texte_introduction', false,false) ?>
					</p>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-12 col-md-6 paragraphe-type-1">
					<?php
					$image = get_field('image_valeurs_et_engagements');
					if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"width="100%" />
					<?php endif; ?>
				</div>
				<div class="col-12 col-md-6 paragraphe-type-1">
					<h2 class="mb-3"><?php echo get_field('titre_valeurs_et_engagements') ?></h2>
					<p>
						<?php echo get_field('texte_valeurs_et_engagements', false,false) ?>
					</p>
				</div>
			</div>
			<div class="row my-5 valeurs_engagements_patenaires">
				<div class="col-12 col-md-6">
					<h2 class="mb-3"><?php echo get_field('titre_partenaires') ?></h2>
					<p>
						<?php echo get_field('texte_partenaires', false,false) ?>
					</p>
				</div>
				<div class="col-12 col-md-6">
					<?php
					$image = get_field('image_partenaires');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"width="100%" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="charte-qualite py-2">
		<div class="container">
			<div class="row my-5 ">
				<div class="col-12 col-md-3 pb-3">
					<h2 class="text-uppercase"><?php echo get_field('titre_charte_qualite_part1') ?> <span class="qualite text-white"><?php echo get_field('titre_charte_qualite_part2') ?></span></h2>
					<h3><?php echo get_field('sous-titre_charte_qualite') ?></h3>
				</div>
				<div class="col-12 col-md-9 liste-qualite">
					<ul>
						<?php
						if( have_rows('liste_charte_qualite') ): while( have_rows('liste_charte_qualite') ): the_row(); ?>
			        <li>
								<p><i class="fas fa-check pr-2 fa-lg"></i><?php the_sub_field('qualite',false,false); ?></p>
			        </li>
					  <?php endwhile; endif; ?>
					</ul>

				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
