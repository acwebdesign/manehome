<?php
/**
 * Template Name: Template Presse
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
	.texte-face{
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
	}
</style>
					<section class="container">
						<div class="row my-5 text-center ">
							<div class="col">
								<h1 class="mb-3"><?php echo get_field('titre_introduction') ?></h1>
								<p class="chapo">
									<?php echo get_field('texte_introduction', false,false) ?>
								</p>
							</div>
						</div>
						<div class="row justify-content-center pb-5">
							<?php if (have_rows('bloc_presse')):
								while (have_rows('bloc_presse')): the_row(); ?>
								<div class="col-8 col-md-3">
									<a href="<?php echo get_sub_field('liens') ?>" class="flip my-3">
										<div class="card">
											<div class="face front">
												<div class="inner text-center">
													<div class="texte-face position-absolute">
														<img src="https://img.icons8.com/metro/80/000000/download.png" class="pb-3"/>
														<h2 class="text-uppercase"><?php echo get_sub_field('titre') ?></h2>
													</div>

													<?php $bg_img = get_sub_field('image_de_fond')?>
													<img src="<?php echo $bg_img['url'] ?>" alt="<?php echo $bg_img['alt'] ?>" width="100%">
												</div>
											</div>
											<div class="face back">
												<div class="inner row justify-content-center align-items-center">
													<p class="position-absolute text-center"><?php echo get_sub_field('texte_au_survol') ?></p>
													<?php $bg_img_hover = get_sub_field('image_de_fond_au_survol')?>
													<img src="<?php echo $bg_img_hover['url'] ?>" alt="<?php echo $bg_img_hover['alt'] ?>" width="100%">
												</div>
										</div>
									</div>
								</a>
							</div>
							<?php endwhile; endif; ?>
						</div>
					</section>


<?php
get_footer();
