<?php
/**
 * Template Name: Template Compétences
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

					<section class="container">
						<h1><?php echo get_field('titre_competences') ?></h1>
						<p class="chapo"><?php echo get_field('chapo_competences') ?></p>
						<div class="row">
						<?php if (have_rows('blocs_competences')):
							while (have_rows('blocs_competences')): the_row(); ?>
							<div class="col-6">
								<div class="row bg-warning m-3">
									<?php $img_compétences = get_sub_field('image'); ?>
									<div class="col-5">
										<img src="<?php echo $img_compétences['url'] ?>" alt="<?php echo $img_compétences['alt'] ?>" width="100%">
									</div>
									<div class="col-7">
										<span class="prenom"><?php echo get_sub_field('prenom'); ?></span>
										<span class="nom"><?php echo get_sub_field('nom'); ?></span>
										<span class="competence"><?php echo get_sub_field('competence'); ?></span>
										<p><?php echo get_sub_field('texte_hover'); ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
							<div class="col-6">
								<div class="row m-3 justify-content-center align-items-center">
									<?php $img_last = get_field('dernier_bloc'); ?>
									<img src="<?php echo $img_last['url'] ?>" alt="<?php echo $img_last['alt'] ?>">
								</div>
							</div>
						</div>
					</section>
					<?php get_template_part( 'template-parts/chiffres-cles'); ?>


<?php
get_footer();
