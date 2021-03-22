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
 <header class="header-global" style="background-image: url(<?php echo get_field('image_background',229)['url']; ?>);">
   <div class="triangle"></div>
   <div class="container">
     <div class="row">
       <div class="col-auto mx-auto">
         <p class="font-weigh-bolder h1 text-white text-center"><?php echo single_cat_title(); ?></p>
         <p class="h2 text-white text-center"><?php echo get_field('sous_titre_header') ?></p>
       </div>
     </div>
   </div>
 </header>
 <section class="py-5">
 	<div class="container position-relative template-actualites">

 		<div class="row my-5">
 			<div class="col-md-9 col-12 order-md-1 order-2 d-flex flex-wrap">
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
              <div class="col-md-6 col-12 bloc-actu">
                <a href="<?php echo get_permalink(); ?>">
                  <div class="position-relative actualite_encart">
                    <div class="position-absolute actualite_encart_img bg-orange w-100 h-100 actu-cache" ></div>
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
              <?php
						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
          ?>
        </div>
          <div class="col-md-3 col-12 pb-5 order-md-2 order-1 d-flex flex-column">
            <ul class="categories m-0 pl-0 text-center">
              <li>Catégories</li>
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
                  <!-- <button class="btn-rea btn btn-light mx-2" data-category="<?php echo $slug; ?>">
                    <?php echo $name; ?>
                  </button> -->
                  <li><a href="<?php echo $link; ?> "><?php echo $name; ?></a></li>

                  <?php
                }
              } ?>
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
<?php get_footer(); ?>
