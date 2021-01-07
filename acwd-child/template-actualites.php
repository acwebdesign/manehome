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

<section class="py-5">
	<div class="container position-relative template-actualites">
		<div class="row">
			<div class="col">
				<h1><?php echo get_the_title(); ?></h1>
				<p class="chapo py-5"><?php echo get_field('chapo_actualités') ?></p>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-9 col-12 order-md-1 order-2 d-flex flex-wrap">
				<?php
				$actus = array(
						'post_type' => 'post',
						'posts_per_page' => '8',
						'orderby' => 'date',
						'order' => 'DESC'
				);
				$wp_actus= new WP_Query( $actus );
				if( $wp_actus->have_posts() ) :
             while( $wp_actus->have_posts()) :
               $wp_actus->the_post();?>
							 	<div class="col-md-6 col-12 bloc-actu">
									<a href="<?php echo get_permalink(); ?>">
										<div class="position-relative">
											<div class="position-absolute bg-orange w-100 h-100 actu-cache" ></div>
											<img src="<?php echo get_the_post_thumbnail_url();?>" alt="" width="100%">
											<div class="d-flex position-absolute align-items-start" style="top:0; left:0;">
												<div class="bg-orange d-flex flex-column px-2 pt-2 pb-1 text-center">
													<span class="jour mx-2"><?php echo get_the_date('d') ?></span>
													<span class="mois"><?php echo get_the_date('m') ?></span>
													<span class="annee"><?php echo get_the_date('Y') ?></span>
												</div>
													<span class="categorie text-grey bg-white bord-gris p-2"><?php echo get_the_category()[0]->name ?></span>
											</div>
										</div>
										<div class="content py-3">
											<span class="text-grey titre-actu"><?php echo get_the_title(); ?></span>
											<p class="text-grey mt-2"><?php echo get_the_excerpt() ?></p>
										</div>
									</a>
								</div>
			<?php endwhile; endif; wp_reset_postdata();?>
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
