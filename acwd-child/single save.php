<?php
get_header();
get_template_part( 'template-parts/content', 'header_actualites');
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
		<div class="row">
			<div class="col-md-9 row col-12 pb-5 order-md-1 order-2">
				<div class="col-md-4 col-12">
					<?php
					$image = get_field('image_de_fond');
					if( !empty( $image ) ):
						?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%"/>
					<?php endif; ?>
				</div>
				<div class="col-md-8 col-12">
					<div class="position-relative w-100 p-5" style="background: #f6f6f6">
						<div class=" pl-4 pt-2">
							<span class="titre-article"><?php echo get_the_title(); ?></span>
						</div>
						<div class="texte-article pt-3"><?php echo get_field('texte'); ?></div>

						<div class="d-flex position-absolute align-items-start" style="top:0; left:0;">
							<div class="bg-orange d-flex flex-column px-2 pt-2 pb-1 text-center">
								<span class="jour mx-2"><?php echo get_the_date('d') ?></span>
								<span class="mois"><?php echo get_the_date('m') ?></span>
								<span class="annee"><?php echo get_the_date('Y') ?></span>
							</div>
								<span class="categorie text-grey bg-white bord-gris p-2"><?php echo get_the_category(0)->name ?></span>


						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-12 pb-5 order-md-2 order-1 d-flex flex-column">
				<ul class="categories m-0 pl-0 text-center">
					<li>Catégories</li>
					<li><a href="#">Chantier (2)</a></li>
					<li><a href="#">Manehome (1)</a></li>
					<li><a href="#">Technique et réglementation</a></li>
				</ul>
				<div class="d-flex flex-column last-actu text-center pt-5">
					<span>Article Récent</span>
					<?php
					$last_actus = array(
							'post_type' => 'post',
							'posts_per_page' => '1',
							'orderby' => 'date',
							'order' => 'DESC'
					);
					$wp_last_actus= new WP_Query( $last_actus );
					if( $wp_last_actus->have_posts() ) :
							 while( $wp_last_actus->have_posts()) :
								 $wp_last_actus->the_post();?>
										<a class="my-3 mx-auto position-relative" href="<?php echo get_permalink(); ?>">
											<div class="position-absolute d-flex align-items-center justify-content-center bg-orange w-100 h-100 last-actu-cache" style="top:0; left:0">
												<span><?php echo get_the_title() ?></span>
											</div>
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="100%">
										</a>
					<?php endwhile; endif; wp_reset_postdata(); ?>
					<form id="search" class="search-actu p-3 text-left" action="" method="get">
						<i class="fas fa-search fa-lg text-grey" style="cursor: pointer"></i>
						<input id="search-bar" type="text" name="search" value="" class="w-100 border-0" style="display:none">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#search').click(function(e){
			jQuery('#search').find('.fa-search').hide();
			jQuery('#search-bar').show();
			e.stopPropagation();
		});
		jQuery(document).click(function(e){
				jQuery('#search').find('.fa-search').show();
				jQuery('#search-bar').hide();
		})
	})
</script>

<?php
get_footer();
