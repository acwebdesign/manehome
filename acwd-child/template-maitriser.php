<?php
/**
 * Template Name: Template Maîtriser
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
					<section class="container py-5">
						<h1 class="pb-5"><?php echo get_field('titre_maitriser') ?></h1>
            <div class="maitriser_projet_contenu position-relative py-5">
              <?php $image = get_field('image') ?>
              <div class="maitriser_projet col-12 col-md-5 position-absolute paragraphe-type-1" style="top:15%; right:5%;">
                <h2><?php echo get_field('titre_image') ?></h2>
                <p><?php echo get_field('texte_image') ?></p>
              </div>
  						<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" width="100%">
            </div>
						<div class="paragraphe-type-1">
            <h2><?php echo get_field('titre_section') ?></h2>
	            <div class="row">
	              <div class="col-12 col-md-6">
	                <p><?php echo get_field('texte_gauche') ?></p>
	              </div>
	              <div class="col-12 col-md-6">
	                <p><?php echo get_field('texte_droite') ?></p>
	              </div>
	            </div>
						</div>
					</section>


<?php
get_footer();
