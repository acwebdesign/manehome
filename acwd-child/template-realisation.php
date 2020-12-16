<?php
/**
 * Template Name: Template Réalisations
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
		<?php if (have_rows('blocs_realisations')):
			while (have_rows('blocs_realisations')): the_row(); ?>
			<div class="col-6">
				<div class="m-3 p-3" style="background: url(<?php echo get_sub_field('image_fond')['url'] ?>); background-size: cover; background-position: center;">
					<!-- <?php $img_realisation = get_sub_field('image'); ?>
					<div class="col-5">
						<img src="<?php echo $img_realisation['url'] ?>" alt="<?php echo $img_realisation['alt'] ?>" width="100%">
					</div>
					<div class="col-7"> -->
						<span class="prenom"><?php echo get_sub_field('titre'); ?></span>
						<p><?php echo get_sub_field('texte'); ?></p>
					<!-- </div> -->
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>


<?php
get_footer();
