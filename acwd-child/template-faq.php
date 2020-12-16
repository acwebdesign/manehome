<?php
/**
 * Template Name: Template FAQ
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
						<div class="row">
							<?php if (have_rows('blocs_faq')):
								while (have_rows('blocs_faq')): the_row(); ?>
								<div class="col-6">
									<div class="row align-items-center justify-content-between mx-0 px-3 py-2 bg-warning rounded ">
										<span class="col-11 pl-0 text-white"><?php echo get_sub_field('question') ?></span>
										<a href="" class="col-1 pr-0 text-white text-center"><i class="fas fa-minus"></i></a>
									</div>
									<div class="px-3 py-5">
										<?php echo get_sub_field('reponse') ?>
									</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</section>


<?php
get_footer();
