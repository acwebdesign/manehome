<?php
get_header();
get_template_part( 'template-parts/content', 'header');
?>
<section class="py-5">
	<div class="container position-relative">
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
	</section>
	<section class="single-realisation container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div id="slider" class="flexslider">
					<ul class="slides">
						<?php
						$i=0;
						if( have_rows('galerie') ): while( have_rows('galerie') ): the_row(); $i++; ?>
							<li>
									<div data-toggle="modal" data-target="#exampleModal<?php echo $i; ?>">
										<?php
										$image = get_sub_field('image');
										if( !empty( $image ) ):
											?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
									<?php endif; ?>
									</div>
							</li>
						<?php endwhile; endif; ?>
					</ul>
				</div>
				<div id="carousel" class="flexslider">
					<ul class="slides">
						<?php if( have_rows('galerie') ): while( have_rows('galerie') ): the_row();?>
							<li>
								<?php
								$image = get_sub_field('image');
								if( !empty( $image ) ):
									?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>

								<?php endif; ?>
							</li>
						<?php endwhile; endif; ?>
					</ul>
				</div>
				<?php
				$i=0;
				if( have_rows('galerie') ): while( have_rows('galerie') ): the_row();  $i++;?>
					<div class="modal fade " id="exampleModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<?php the_custom_logo(); ?>

									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body p-0">
									<?php
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-12 col-md-6  ">
			<div class="py-5 px-3 caracteristiques-container">
				<h2><?php echo get_field("titre"); ?></h2>
				<div class="row col-12 caracteristiques">
					<!-- <?php if( have_rows('caracteristiques') ): while( have_rows('caracteristiques') ): the_row();?>
						<div class="col-12 col-md-3 py-2 caracteristiques-titre">
							<?php echo get_sub_field("titre"); ?>
						</div>
						<div class="col-12 col-md-9 py-2 ">
							<?php echo get_sub_field("texte"); ?>
						</div>
					<?php endwhile; endif; ?> -->
					<div class="col-12 col-md-3 py-2 caracteristiques-titre">
						<?php echo get_field("caracteristique_lieux"); ?>
					</div>
					<div class="col-12 col-md-9 py-2 ">
						<?php echo get_field("caracteristique_lieux_texte"); ?>
					</div>
					<div class="col-12 col-md-3 py-2 caracteristiques-titre">
						<?php echo get_field("caracteristique_categorie"); ?>
					</div>
					<div class="col-12 col-md-9 py-2 ">
						<?php echo get_field("caracteristique_categorie_texte"); ?>
					</div>
					<div class="col-12 col-md-3 py-2 caracteristiques-titre">
						<?php echo get_field("caracteristique_activites"); ?>
					</div>
					<div class="col-12 col-md-9 py-2 ">
						<?php echo get_field("caracteristique_activites_texte"); ?>
					</div>
					<div class="col-12 col-md-3 py-2 caracteristiques-titre">
						<?php echo get_field("caracteristique_prestation"); ?>
					</div>
					<div class="col-12 col-md-9 py-2 ">
						<?php echo get_field("caracteristique_prestation_texte"); ?>
					</div>
					<div class="col-12 col-md-3 py-2 caracteristiques-titre">
						<?php echo get_field("caracteristique_annees"); ?>
					</div>
					<div class="col-12 col-md-9 py-2 ">
						<?php echo get_field("caracteristique_annees_texte"); ?>
					</div>
				</div>
				<!-- <div class="realisation_defi py-5">
					<h3><?php echo get_field("titre_le_defi"); ?></h3>
					<?php echo get_field("texte_le_defi"); ?>
				</div>
				<div class="realisation_points_forts ">
					<h3><?php echo get_field("titre_les_points_forts_de_manehome"); ?></h3>
					<?php echo get_field("texte_les_points_forts_de_manehome"); ?>
				</div> -->
			</div>
			<div class="">
				<div class="col-12 py-5">
					<nav>
						<div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Le défi</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Les points forts manehome</a>
						</div>
					</nav>
					<div class="tab-content pt-4" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<?php echo get_field("texte_le_defi"); ?>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<?php echo get_field("texte_les_points_forts_de_manehome"); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- <div class="col-12 py-5">
			<nav>
				<div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Le défi</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Les points forts manehome</a>
				</div>
			</nav>
			<div class="tab-content pt-4" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<?php echo get_field("texte_le_defi"); ?>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<?php echo get_field("texte_les_points_forts_de_manehome"); ?>
				</div>
			</div>
		</div> -->
		<div class="pre-suiv col-12 d-flex justify-content-between py-5">
			<div class="col-3 pl-0 ">
				<?php previous_post_link( '%link','Projet précédent' ) ?>
				<br />
				<i class='fas fa-arrow-left text-left'></i>
			</div>
			<div class="col-3 text-right pr-0">
				<?php next_post_link( '%link','Projet suivant' ) ?>
				<br />
				<i class="fas fa-arrow-right text-left"></i>
			</div>

		</div>



	</section>

	<?php
	get_footer();
