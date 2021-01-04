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
					<section class="slider mb-5">
						<div class="triangle"></div>
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
								<?php if (have_rows('slider')):
									while (have_rows('slider')): the_row(); ?>
										<div class="carousel-item <?php echo (get_row_index() == 1)? "active" : "" ?>">
											<div class="position-absolute z-index-1" style="top: 40%; left: 20%;">
												<div class="d-flex flex-column mb-5">
													<span class="slider-black"><?php echo get_sub_field('titre_noir')?></span>
													<span class="slider-white"><?php echo get_sub_field('titre_blanc')?></span>
												</div>
												<div class="">
													<a class="btn py-3 px-5 rounded bg-orange" href="<?php echo get_sub_field('lien_bouton') ?>"><?php echo get_sub_field('texte_bouton') ?></a>
												</div>
											</div>
											<?php $slider_img = get_sub_field('image_de_fond')?>
											<img class="d-block w-100" src="<?php echo $slider_img['url'] ?>" alt="<?php echo $slider_img['alt'] ?>">
										</div>
								<?php endwhile; endif; ?>
						  </div>
						</div>
					</section>
					<section class="container position-relative maitrise-expertise py-5 my-5">
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
						<div class="row">
							<div class="col-12 col-md-6 px-5">
								<div class="row">
									<?php if (have_rows('blocs_maitrise')):
										while (have_rows('blocs_maitrise')): the_row(); ?>
										<div class="col-6">
											<div class="flip my-3">
												<div class="card">
													<div class="face front">
														<div class="inner">
															<?php $bg_img = get_sub_field('bg_img')?>
															<img src="<?php echo $bg_img['url'] ?>" alt="<?php echo $bg_img['alt'] ?>" width="100%">														</div>
													</div>
													<div class="face back">
														<div class="inner row justify-content-center align-items-center">
															<p class="position-absolute text-center"><?php echo get_sub_field('texte_au_survol') ?></p>
															<?php $bg_img_hover = get_sub_field('bg_img_hover')?>
															<img src="<?php echo $bg_img_hover['url'] ?>" alt="<?php echo $bg_img_hover['alt'] ?>" width="100%">
														</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
							<div class="col-12 col-md-6 px-5 d-flex flex-column justify-content-center">
								<h1 class="small-title pb-3"><?php echo get_field('titre_maitrise') ?></h1>
								<h2 class="pb-2"><?php echo get_field('sous_titre_maitrise') ?></h2>
								<p><?php echo get_field('texte_maitrise') ?></p>
								<div class="py-5">
									<a class="btn py-3 px-5 rounded bg-orange" href="<?php echo get_field('lien_du_bouton_maitrise') ?>"><?php echo get_field('texte_du_bouton_maitrise') ?></a>
								</div>
							</div>
						</div>
					</section>
					<section class="position-relative realisations py-3 my-5">
						<div class="container my-5">
							<div class="row">
							<div class="col-12 col-md-6 py-5 d-flex flex-column">
								<span class="small-title pb-3"><?php echo get_field('titre_projets') ?></span>
								<h2 class="pb-5"><?php echo get_field('sous_titre_projets') ?></h3>
								<ul>
									<?php if (have_rows('realisations')):
										while (have_rows('realisations')): the_row(); ?>
										<li class="realisations-item my-3"><a href="<?php echo get_sub_field('lien')?>"><?php echo get_sub_field('titre')?></a></li>
									<?php endwhile; endif; ?>
								</ul>
							</div>
							<div class="col-12 col-md-6">
								<div class="position-relative" style="height: 100%">
									<a href="<?php echo get_field('realisation_lien_image_1')?>">
										<?php
										$image = get_field('realisation_image_1');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" class="realisations-img" style="bottom: 10%; left: 0;" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
										<?php endif; ?>
										<!-- <img class="realisations-img" style="bottom: 10%; left: 0;" src="https://v3.manehome.fr/wp-content/uploads/Reception-chantier-BatiScript.jpg" alt="" > -->
									</a>
									<a href="<?php echo get_field('realisation_lien_image_2')?>">
										<?php
										$image = get_field('realisation_image_2');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" class="realisations-img"  style="top: 10%; right: 0;" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
										<?php endif; ?>
										<!-- <img class="realisations-img" style="top: 10%; right: 0;"src="https://v3.manehome.fr/wp-content/uploads/pgc-chantier.jpg" alt=""> -->
									</a>
								</div>
							</div>
						</div>
						</div>
						<div class="bg-clip">
							<div class="position-relative" style="height: 100%;">
								<div class="clip-path-left"></div>
								<div class="clip-path-center"></div>
								<div class="clip-path-right"></div>
							</div>
						</div>
					</section>
					<section class="container manehome-for-you py-5 my-5" id="manehome_for_you">
						<div class="bg-orange position-relative row align-items-center pl-5">
							<div class="manehome-for-you-container col-12 col-md-6 position-absolute pl-5 pb-5">
								<div class="pl-3 row align-items-end flex-nowrap pb-3">
									<span class="foryou-black pb-2 pr-2"><?php echo get_field('titre_noir_for_you') ?></span>
									<span class="foryou-white pr-2"><?php echo get_field('titre_blanc_for_you') ?></span>
									<?php $logo_foryou = get_field('logo_for_you')?>
									<img class="logo-for-you d-none d-md-block" src="<?php echo $logo_foryou['url'] ?>" alt="<?php echo $logo_foryou['alt'] ?>" width="25%">
								</div>
									<p class="foryou-text pr-5"><?php echo get_field('texte_manehome_for_you') ?> </p>
							</div>
							<?php $bg_img_foryou = get_field('image_fond_for_you')?>
							<img class="bg-img ml-auto" src="<?php echo $bg_img_foryou['url'] ?>" alt="<?php echo $bg_img_foryou['alt'] ?>" width="65%">
						</div>
					</section>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
