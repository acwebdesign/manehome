<?php
/**
 * Template Name: Template Réinventer
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

					<h1><?php echo get_field('titre_reinventer') ?></h1>
					<section class="container">
						<?php if (have_rows('blocs_reinventer')):
							while (have_rows('blocs_reinventer')): the_row(); ?>
							<div class="row my-5">
								<div class="col-2">
									<?php $img = get_sub_field('image') ?>
									<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>" width="100%">
								</div>
								<div class="col-10">
									<?php echo get_sub_field('texte') ?>
									<div class="bg-light row">
										<div class="col-1 pl-0">
											<?php $picto = get_sub_field('picto') ?>
											<img src="<?php echo $picto['url'] ?>" alt="<?php echo $picto['alt'] ?>" width="100%">
										</div>
										<div class="col-11">
											<?php echo get_sub_field('citation') ?>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					</section>


<?php
get_footer();
