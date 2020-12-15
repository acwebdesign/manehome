<?php
/**
 * Template Name: Template Accueil
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
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <div class="container-fluid px-0">
					<section class="slider">
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
								<?php if (have_rows('slider')):
									while (have_rows('slider')): the_row(); ?>
										<div class="carousel-item <?php echo (get_row_index() == 1)? "active" : "" ?>">
											<?php $slider_img = get_sub_field('image_de_fond')?>
											<img class="d-block w-100" src="<?php echo $slider_img['url'] ?>" alt="<?php echo $slider_img['alt'] ?>">
											<div class="">
												<span><?php echo get_sub_field('titre_noir')?></span>
												<span><?php echo get_sub_field('titre_blanc')?></span>
												<a href="<?php echo get_sub_field('lien_bouton') ?>"><?php echo get_sub_field('texte_bouton') ?></a>
											</div>
										</div>
								<?php endwhile; endif; ?>
						  </div>
						</div>
					</section>
					<section class="container maitrise-expertise">
						<div class="row">
							<div class="col-6">
								<div class="row">
									<?php if (have_rows('blocs_maitrise')):
										while (have_rows('blocs_maitrise')): the_row(); ?>
										<div class="col-6">
											<?php $bg_img = get_sub_field('bg_img')?>
											<img src="<?php echo $bg_img['url'] ?>" alt="<?php echo $bg_img['alt'] ?>" width="100%">
											<?php $bg_img_hover = get_sub_field('bg_img_hover')?>
											<img src="<?php echo $bg_img_hover['url'] ?>" alt="<?php echo $bg_img_hover['alt'] ?>" width="100%">
											<p><?php echo get_sub_field('texte_au_survol') ?></p>
										</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
							<div class="col-6">
								<span><?php echo get_field('titre_maitrise') ?></span>
								<h2><?php echo get_field('sous_titre_maitrise') ?></h2>
								<p><?php echo get_field('texte_maitrise') ?></p>
								<a href="<?php echo get_field('lien_du_bouton_maitrise') ?>"><?php echo get_field('texte_du_bouton_maitrise') ?></a>
							</div>
						</div>
					</section>
					<section class="container realisations">
						<div class="row">
							<div class="col-6">
								<span><?php echo get_field('titre_projets') ?></span>
								<h3><?php echo get_field('sous_titre_projets') ?></h3>
								<ul>
									<?php if (have_rows('realisations')):
										while (have_rows('realisations')): the_row(); ?>
										<li><a href="<?php echo get_sub_field('lien')?>"><?php echo get_sub_field('titre')?></a></li>
									<?php endwhile; endif; ?>
								</ul>
							</div>
							<div class="col-6">
								<div class="row">
									<img style="background-color: grey; box-shadow: 0px 0px 10px rgb(0, 0, 0, .6); height: 200px; width: 200px;" src="" alt="" >
									<img style="background-color: grey; box-shadow: 0px 0px 10px rgb(0, 0, 0, .6); height: 200px; width: 200px;"  src="" alt="">
								</div>
							</div>
						</div>
					</section>
					<section class="container manehome-for-you">
						<div class="" style="background-color : GoldenRod">
							<span><?php echo get_field('titre_noir_for_you') ?></span>
							<span><?php echo get_field('titre_blanc_for_you') ?></span>
							<?php $logo_foryou = get_field('logo_for_you')?>
							<img class="logo-for-you" src="<?php echo $logo_foryou['url'] ?>" alt="<?php echo $logo_foryou['alt'] ?>">
							<p><?php echo get_field('texte_manehome_for_you') ?></p>
							<?php $bg_img_foryou = get_field('image_fond_for_you')?>
							<img class="bg-img" src="<?php echo $bg_img_foryou['url'] ?>" alt="<?php echo $bg_img_foryou['alt'] ?>" width="100%">
						</div>
					</section>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
