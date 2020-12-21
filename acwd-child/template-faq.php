<?php
/**
 * Template Name: Template FAQ
 *
 * This is the template that displays contact page.
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

					<section class="container py-5">
						<h1 class="col-8 mx-auto pb-5"><?php echo get_field('titre_faq') ?></h1>
						<div class="row">
							<?php if (have_rows('blocs_faq')):
								while (have_rows('blocs_faq')): the_row(); ?>
								<div data-display="hide" class="col-6 question my-3">
									<div class="row align-items-center justify-content-between bord-gris mx-0 px-3 py-2 rounded">
										<span class="col-11 pl-0 text-dark"><?php echo get_sub_field('question') ?></span>
										<a class="col-1 pr-0 text-center text-dark" data-toggle="collapse" href="#reponse-<?php echo get_row_index(); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
											<i class="fas fa-minus" style="display: none;"></i>
											<i class="fas fa-plus"></i>
										</a>
									</div>
									<div id="reponse-<?php echo get_row_index();?>" class="collapse px-3 mt-4 mb-3">
										<?php echo get_sub_field('reponse') ?>
									</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</section>

					<script type="text/javascript">
						jQuery(document).ready(function(){
							jQuery('.question').find('a').click(function(e){
								var parent = jQuery(this).parent().parent();
								jQuery(this).parent().toggleClass('bg-warning');
								jQuery(this).parent().children().toggleClass('text-white');
								jQuery(this).parent().children().toggleClass('text-dark');
								jQuery(this).parent().toggleClass('bord-gris');
								jQuery(this).parent().toggleClass('bord-orange');
									if (parent.attr('data-display') == 'hide') {
										parent.find('.fa-minus').show();
										parent.find('.fa-plus').hide();
										parent.attr('data-display', 'show');
									}else if (parent.attr('data-display') == 'show') {
										parent.find('.fa-minus').hide();
										parent.find('.fa-plus').show();
										parent.attr('data-display', 'hide');
									}
							});
						});
					</script>


<?php
get_footer();
