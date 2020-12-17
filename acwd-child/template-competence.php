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
						<?php // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
							$args = array(
							    'post_type' => 'equipe',
							    'posts_per_page' => -1,
									'order' => 'ASC',
							);

							// 2. On exécute la WP Query
							$my_query = new WP_Query( $args );

							// 3. On lance la boucle !
							if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
							<div class="col-6">
								<div class="row bg-warning m-3">
									<?php $img_compétences = get_the_post_thumbnail_url(); ?>
									<div class="col-5">
										<img src="<?php echo $img_compétences; ?>" alt="<?php echo $img_compétences;?>" width="100%">
									</div>
									<div class="col-7">
										<span class="nom font-weight-bold"><?php echo get_the_title(); ?></span><br>
										<span class="competence"><?php echo get_field('role'); ?></span><br>
										<p><?php echo get_the_content(); ?></p>
									</div>
								</div>
							</div>
						<?php
						endwhile;
						endif;

						// 4. On réinitialise à la requête principale (important)
						wp_reset_postdata();
						 ?>
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
