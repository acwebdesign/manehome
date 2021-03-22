<?php

/*
Template Name: Template mentions légales
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
    <div class="container my-5 py-3">
      <div class="row">
        <div class="col">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

<?php
get_footer();
