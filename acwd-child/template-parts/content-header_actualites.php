<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */

?>


<header class="header-global" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
  <div class="w-100 h-100 d-flex justify-content-center align-items-center" style="background: rgb(255, 255, 255, .8)">
    <div class="triangle"></div>
    <div class="container">
      <div class="row">
        <div class="col-auto mx-auto">
          <p class="font-weigh-bolder h1 text-black text-center"><?php echo get_the_title(); ?></p>
          <p class="h2 text-white text-center"><?php echo get_field('sous_titre_header') ?></p>
        </div>
      </div>
    </div>
  </div>
</header>
