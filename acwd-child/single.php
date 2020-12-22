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
			<div class="col-md-10 row col-12 pb-5 order-md-1 order-2">
				<div class="col-4">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="100%">
				</div>
				<div class="col-8">
					<div class="w-100 p-5" style="background: #f6f6f6">
						<span class="titre-article"><?php echo get_the_title(); ?></span>
						<div class="texte-article pt-3"><?php echo get_field('texte'); ?></div>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-12 pb-5 order-md-2 order-1 d-flex flex-column">
				<ul class="categories m-0 pl-0 text-center">
					<li>Catégories</li>
					<li><a href="#">Chantier (2)</a></li>
					<li><a href="#">Manehome (1)</a></li>
					<li><a href="#">Technique et réglementation</a></li>
				</ul>
				<div class="d-flex flex-column last-actu text-center pt-5">
					<span>Article Récent</span>
					<a class="my-3 mx-auto position-relative" href="#">
						<div class="position-absolute bg-orange w-100 h-100 last-actu-cache" style="top:0; left:0"></div>
						<img src="https://v3.manehome.fr/wp-content/uploads/chantier.jpg" alt="" width="100%">
					</a>
					<form id="search" class="search-actu p-3 text-left" action="" method="get">
						<i class="fas fa-search fa-lg text-grey" style="cursor: pointer"></i>
						<input id="search-bar" type="text" name="search" value="" class="w-100 border-0" style="display:none">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
