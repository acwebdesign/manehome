<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */

?>


    <section class="position-relative my-5">
      <div class="container py-5">
        <div class="row py-3">
					<div class="w-100">
	          <p class="sous-titre-cles text-center"><?php echo get_field('titre_1', 'option') ?></p>
		        <p class="titre-cles text-center"><?php echo get_field('titre_2', 'option') ?></p>
					</div>
        </div>
        <div class="row align-items-end pb-5 px-5">
          <?php if( have_rows('chiffres', 'option') ): ?>
              <?php while( have_rows('chiffres', 'option') ): the_row();
                  ?>
                  <div class="col-12 col-md-3 d-flex flex-column justify-content-center align-items-center">
                      <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="" class="w-25">
                      <p class="row align-items-center text-grey"><span class="font-weight-bold text-white mb-0 mr-2 h4"><?php echo get_sub_field('chiffre'); ?></span> <?php echo get_sub_field('label'); ?></p>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="bg-orange bg-clip-cles">
        <div class="position-relative" style="height: 100%;">
          <div class="clip-path-cles"></div>
        </div>
      </div>
    </section>
    <section>
      <div class="container py-5 my-5">
        <div class="row">
          <?php if( have_rows('chiffres_batiments', 'option') ): ?>
              <?php while( have_rows('chiffres_batiments', 'option') ): the_row();
                  ?>
                  <div class="col d-flex flex-column align-items-center">
                      <p class="font-weight-bold text-orange h2 text-center"><?php echo get_sub_field('chiffre'); ?></p>
                      <p class="text-center text-grey"> <?php echo get_sub_field('label'); ?></p>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
