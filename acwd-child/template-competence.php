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
						<h1 class="py-3"><?php echo get_field('titre_competences') ?></h1>
						<p class="chapo py-5"><?php echo get_field('chapo_competences') ?></p>
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
							<div class="col-12 col-md-6 py-3 ">
								<div class="bloc-competence row bg-orange py-4 h-100 w-100">
									<?php $img_compétences = get_the_post_thumbnail_url(); ?>
									<div class="col-12 col-md-5 d-flex align-items-center">
										<img class="img-competences" src="<?php echo $img_compétences; ?>" alt="<?php echo $img_compétences;?>" width="100%">
									</div>
									<div class="col-12 col-md-6 d-flex align-items-center position-relative">
										<div class="position-absolute d-flex flex-column">
											<?php $nom = explode(" ", get_the_title(), 2); ?>
											<span class="prenom"><?php echo $nom[0] ?></span>
											<span class="nom pb-3"><?php echo $nom[1] ?></span>
											<span class="competence"><?php echo get_field('role'); ?></span>
										</div>
										<p class="texte-competence"><?php echo get_the_content(); ?></p>
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
								<div class="d-flex justify-content-center align-items-center h-100 w-100">
									<?php $img_last = get_field('dernier_bloc'); ?>
									<img src="<?php echo $img_last['url'] ?>" alt="<?php echo $img_last['alt'] ?>" width="70%">
								</div>
							</div>
						</div>
					</section>
					<?php get_template_part( 'template-parts/chiffres-cles'); ?>
					<script type="text/javascript">
					// jQuery(document).ready(function () {
					// 	console.log('oui');
					// 	jQuery('#competence').each(function(){
					// 		jQuery(this).find('.texte-competence').hide();
					// 		jQuery(this).mouseover(function(){
					// 			console.log('oui');
					// 		})
					// 	})
					// });

					</script>
<?php
get_footer();
