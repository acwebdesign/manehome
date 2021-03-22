<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */
 get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="bandeau-article position-relative">
      <img src="https://cgt41.fr/wp-content/uploads/2020/09/cgt1.png" alt="<?php echo $image_alt; ?>" class="d-block w-100" alt="" height="415px">
        <div class="d-flex align-items-center slider-content" >
          <div class="titre-article p-3">
            <h1 class=" pr-5 mb-0">
              <?php echo (!empty(post_type_archive_title()))? post_type_archive_title(): single_cat_title(); ?>
              <!-- <?php echo single_cat_title(); ?> -->
            </h1>
        </div>
      </div>
    </section>
    <div class="container ">
      <?php
							if ( have_posts() ) :?>
						<?php

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							// get_template_part( 'template-parts/content', get_post_type() );
              ?>
                <div class="row my-3 shadow archive-item">
                  <div class="col d-flex py-3">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="col-12 col-md-4 pl-md-0"  alt="">
                    <div class="col py-4">
                      <h2><?php echo get_the_title(); ?></h2>
                      <div class="mt-5">
                        <?php the_excerpt(); ?>
                      </div>
                      <a href="<?php echo get_permalink(); ?>">
												<i class="far fa-arrow-alt-circle-right fa-2x"></i>
											</a>
                    </div>
                  </div>
                </div>
              <?php
						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
          ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>
