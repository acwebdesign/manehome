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
<section class="container realisation">
	<div class="row">
		<div class="col-12">
			<h1 class="my-5"><?php echo get_field('titre_realisations') ?></h1>
			<div class="row my-5">
				<div class=" col-12 col-lg-6 row px-5 realisation-introduction">
					<div class="col-12">
						<span class="texte-intro"><?php the_field('texte_intro') ?></span>
						<?php
						$image = get_field('image');
						if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" class="my-3"/>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-lg-6 px-5 paragraphe-type-1">
				<?php the_field('texte'); ?>
			</div>
		</div>
	</div>
</div>
<?php $args = array(
	'post_type' => "realisations",
	'posts_per_page'=> -1,
	'order' => 'ASC',
);
$posts = new WP_Query($args);
?>
<div class="container">
	<div class="row my-2">
		<div class="col-12 mx-auto d-flex justify-content-center flex-wrap">
			<button class="btn-rea btn btn-anima btn-tout btn-primary mx-2" data-category="tout">
				Tout
			</button>
			<?php
			$categories = get_categories( array(
				'orderby' => 'name',
				'parent'  => 0
			) );

			foreach ( $categories as $category ) {
				$link = get_category_link( $category->term_id );
				$name = $category->name;
				$slug = $category->slug;
				if ($slug != "non-classe") {
					?>
					<button class="btn-rea btn-anima btn btn-light mx-2" data-category="<?php echo $slug; ?>">
						<?php echo $name; ?>
					</button>
					<?php
				}
			} ?>
			<!-- <a href="https://v3.manehome.fr/galerie/" class="btn btn-secondary">Manehome for you</a> -->

		</div>
	</div>
	<div class="row">
		<?php
		while ($posts->have_posts()) :
			$posts->the_post();
			$categories = get_the_category();
			?>
			<div class="col-12 col-md-4 bloc-realisation my-2 " data-cat="<?php echo $categories[0]->slug; ?>">
				<a href="<?php echo get_permalink();?> ">
					<div class="bg-orange">
						<?php $img_compétences = get_the_post_thumbnail_url(); ?>
						<img class="img-realisation" src="<?php echo $img_compétences; ?>" alt="<?php echo $img_compétences;?>" height="186px" width="100%">
					</div>
					<span class="titre-realisation"><?php the_title(); ?></span>
				</a>
			</div>
			<?php
		endwhile;
		?>
	</div>
</div>
</section>

<?php
get_footer();
