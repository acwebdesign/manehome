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
    <section>
      <div class="container">
        <div class="row">
          <div class="col"></div>
        </div>
        <div class="row">
          <div class="col-6">
            <?php the_field('texte_intro') ?>
            <img src="<?php echo get_field('image_text')['url']; ?>" alt="" width="100%">
          </div>
          <div class="col-6">
            <?php the_field('texte'); ?>
          </div>
        </div>
      </div>
    </section>
<?php
    get_template_part( 'template-parts/chiffres-cles');
get_footer();
