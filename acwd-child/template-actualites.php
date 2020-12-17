<?php
/**
 * Template Name: Template Actualités
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
						<div class="row">
							<?php
							$articles = array(
								'post_type' => 'post',
								'post_per_page' => -1,
								'orderby'	=> 'date'
							);
							$wp_articles = new WP_Query($articles);
							if( $wp_articles->have_posts() ) :
								while( $wp_articles->have_posts() ) : $wp_articles->the_post();?>
									<div class="col-6">
										<div class="m-3 p-3 bg-warning">
											<h3><?php echo get_the_title() ?></h3>
											<p><?php echo get_the_excerpt() ?></p>
										</div>
									</div>
							<?php endwhile; endif; ?>
						</div>
					</section>


<?php
get_footer();
