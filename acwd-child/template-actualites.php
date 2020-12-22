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
	<div class="container position-relative">
		<div class="row">
			<div class="col">
				<h1><?php echo get_field('titre_actualités'); ?></h1>
				<p class="chapo py-5"><?php echo get_field('chapo_actualités') ?></p>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-10 d-flex flex-wrap">
				<div class="col-6 bloc-actu">
					<div class="position-relative">
						<div class="position-absolute bg-orange w-100 h-100 actu-cache" ></div>
						<img src="https://v3.manehome.fr/wp-content/uploads/2020/12/logoManehome.png" alt="" width="100%">
						<div class="d-flex position-absolute align-items-start" style="top:0; left:0;">
							<div class="bg-orange d-flex flex-column px-2 pt-2 pb-1 text-center">
								<span class="jour mx-2">03</span>
								<span class="mois">01</span>
								<span class="annee">2020</span>
							</div>
								<span class="bg-white bord-gris p-2">CATEGORIE</span>
						</div>
					</div>
					<div class="content py-3">
						<span class="titre-actu">Actualité 1</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
				<div class="col-2 d-flex flex-column">
					<ul class="categorie m-0 pl-0 text-center">
						<li>Catégories</li>
						<li>Chantier (2)</li>
						<li>Manehome (1)</li>
						<li>Technique et réglementation</li>
					</ul>
					<div class="last-actu text-center pt-5">
						<span>Article Récent</span>
						<img class="py-3" src="https://v3.manehome.fr/wp-content/uploads/forYou.png" alt="">
						<form class="" action="" method="post">
							<i id="search" class="fas fa-search"></i>
							<input type="text" name="search" value="">
						</form>
					</div>
				</div>
		</div>
	</div>
</section>


<?php
get_footer();
