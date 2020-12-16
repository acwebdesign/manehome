<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACWD
 */

?>


<header class="header-global" style="background-image: url(<?php echo get_field('image_background')['url']; ?>);">
  <div class="container">
    <div class="row">
      <div class="col-auto mx-auto">
        <p class="font-weigh-bolder h1 text-white text-center"><?php echo get_field('titre_header') ?></p>
        <p class="h2 text-white text-center"><?php echo get_field('sous_titre_header') ?></p>
      </div>
    </div>
  </div>
</header>
