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

					<section class="container position-relative py-5">
			        <div class="dots-left row">
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			        </div>
			        <div class="dots-right row">
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			          <div class="dot"></div>
			        </div>
						<h1 class="pb-5"><?php echo get_field('titre_reinventer') ?></h1>
						<?php if (have_rows('blocs_reinventer')):
							while (have_rows('blocs_reinventer')): the_row(); ?>
							<div class="py-5">
								<div class="row mx-0">
									<div class="img-reinventer px-5 col-3 d-flex align-items-center">
										<?php $img = get_sub_field('image') ?>
										<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>" width="100%">
									</div>
									<div class="col-9 pl-5 pr-0 text-grey">
										<?php echo get_sub_field('texte') ?>
									</div>
								</div>
								<div class="citation col-9 px-0 mr-0 mt-5 ml-auto row">
									<div class="col-1 pl-0">
										<?php $picto = get_sub_field('picto') ?>
										<img src="<?php echo $picto['url'] ?>" alt="<?php echo $picto['alt'] ?>" width="100%">
									</div>
									<div class="col-11 py-3 text-grey">
										<?php echo get_sub_field('citation') ?>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					</section>


<?php
get_footer();
