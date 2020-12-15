<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */

?>


    <section class="bg-warning">
      <div class="container">
        <div class="row">
					<div class="w-100">
	          <p class="text-center"><?php echo get_field('titre_1', 'option') ?></p>
		        <p class="text-center"><?php echo get_field('titre_2', 'option') ?></p>
					</div>
        </div>
        <div class="row">
          <?php if( have_rows('chiffres', 'option') ): ?>
              <?php while( have_rows('chiffres', 'option') ): the_row();
                  ?>
                  <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                      <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="" class="w-25">
                      <p><span class="font-weight-bold text-white h4"><?php echo get_sub_field('chiffre'); ?></span> <?php echo get_sub_field('label'); ?></p>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="row">

        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <?php if( have_rows('chiffres_batiments', 'option') ): ?>
              <?php while( have_rows('chiffres_batiments', 'option') ): the_row();
                  ?>
                  <div class="col d-flex flex-column justify-content-center align-items-center">
                      <p class="font-weight-bold text-warning h2 text-center"><?php echo get_sub_field('chiffre'); ?></p>
                      <p class="text-center"> <?php echo get_sub_field('label'); ?></p>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
