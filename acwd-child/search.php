<?php
/**
 * Template Name: Search Page
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header();

  $images_default = array(
    get_home_url()."/wp-content/uploads/pgc-chantier.jpg",
    get_home_url()."/wp-content/uploads/Reception-chantier-BatiScript.jpg",
    get_home_url()."/wp-content/uploads/chantier.jpg",
    get_home_url()."/wp-content/uploads/2020/12/header.png",
  );


?>

        <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
              <header class="header-global" style="background-image: url(<?php echo get_home_url(); ?>/wp-content/uploads/headerFAQmanehome-scaled.jpg);">
                <div class="triangle"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-auto mx-auto">
                      <p class="font-weigh-bolder h1 text-black text-center"><?php printf( __( 'Résultats pour la recherche : %s', 'shape' ), '<span>"' . get_search_query() . '"</span>' ); ?></p>
                    </div>
                  </div>
                </div>
              </header>
            <?php if ( have_posts() ) : ?>



                <div class="container py-5">
                    <!-- <h1 class="page-title"><?php printf( __( 'Résultats pour la recherche : %s', 'shape' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1> -->

                  <!--Start the Loop -->
                  <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                    $image = get_the_post_thumbnail_url();
                    $random_key = array_rand($images_default);
                    if (!empty( $image )) {
                      $image_url = $image;
                    }
                    else {
                      $image_url = $images_default[$random_key];
                    }
                    ?>

                    <div class="row m-3 shadow archive-item">
                      <div class="col d-flex flex-wrap py-3">
                          <img src="<?php echo $image_url ?>" class="col-12 col-md-4 pl-md-0"  alt="">
                        <div class="col py-4">
                          <h2><?php echo get_the_title(); ?></h2>
                          <div class="mt-5">
                            <?php the_excerpt(); ?>
                          </div>
                          <!-- <a href="<?php echo get_permalink(); ?>">
    												<i class="far fa-arrow-alt-circle-right fa-2x"></i>
    											</a> -->
                        </div>
                      </div>
                    </div>

                  <?php endwhile; ?>

                </div>

                <?php else : ?>
                  <h1 class="page-title"><?php printf( __( 'Aucun résultats : %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>


                <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->

<?php get_footer(); ?>
