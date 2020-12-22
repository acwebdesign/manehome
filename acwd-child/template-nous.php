<?php

/*
Template Name: Template Qui sommes nous
*/
/**
* The template for displaying legal mention
*
* This is the template that displays all legal mention by default.
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
          <div class="col">
            <h1><?php echo get_field('titre_page'); ?></h1>
          </div>
        </div>
        <div class="row my-5">
          <div class=" col-12 col-lg-6 row px-5">
            <div class="col-12">
              <span class="texte-intro"><?php the_field('texte_intro') ?></span>
            </div>
            <div class="col-12">
              <img class="mb-5" src="<?php echo get_field('image_text')['url']; ?>" alt="" width="100%">
            </div>
          </div>
          <div class="col-12 col-lg-6 px-5 paragraphe-type-1">
            <?php the_field('texte'); ?>
          </div>
        </div>
      </div>
    </section>
<?php
    get_template_part( 'template-parts/chiffres-cles');
get_footer();
