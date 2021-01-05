<?php
/**
 * Template Name: Template Galerie
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
$i=0;
?>
<section class="container my-5 galerie">
	<div class="row">
		<?php		if( have_rows('galerie') ): while( have_rows('galerie') ): the_row(); $i++;?>
			<div class="col-12 col-md-4 my-3">
				<div class="col-12 bloc_galerie row" data-toggle="modal" data-target="#exampleModal<?php echo $i; ?>">
					<?php
					$image = get_sub_field('image');
					if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
					<?php endif; ?>
				</div>
			</div>
			<div class="modal fade " id="exampleModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-xl">
			    <div class="modal-content">
			      <div class="modal-header">
							<?php the_custom_logo(); ?>

			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body p-0">
							<?php
							$image = get_sub_field('image');
							if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="100%" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
								<a href="<?php echo esc_url($image['url']); ?>" class="btn bg-orange download_rea_img" src="<?php echo esc_url($image['url']); ?>" download>
										<i class="fas fa-download"></i>  Télécharger
								</a>

							<?php endif; ?>

			      </div>
			    </div>
			  </div>
			</div>
		<?php		endwhile;	endif;?>
	</div>





	<!-- Modal -->

</section>


<?php
get_footer();
