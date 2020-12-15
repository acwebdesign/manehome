<?php
$postSlider = '';
if ( $wp_query->is_page || $wp_query->is_category ) {
	$postSlider = get_option('page_on_front');
} 
else {
	$postSlider = get_the_ID();
}

$slider = get_field('sliders',$postSlider);
// preprint($slider);
$silderID = $slider[0]->ID;
$slides = get_field('slide',$silderID);
// preprint($slides);
?>

<?php
if( have_rows('slide',$silderID) ):
?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
<?php
	$i=0;
    while ( have_rows('slide',$silderID) ) : the_row();
        // Your loop code
?>
      <div class="carousel-item <?php echo (empty($i))? 'active' : '';?>">
        <img src="<?php the_sub_field('image');?>" class="d-block w-100" alt="">
		<?php
		$caption = get_sub_field('caption');
		if(!empty($caption)) {
		?>
        <div class="container">
          <div class="carousel-caption text-left">
			<?php the_sub_field('caption');?>
          </div>
        </div>
		<?php
		}
		?>
      </div>
<?php
		$i=1;
    endwhile;
?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><img src="<?php echo get_template_directory_uri();?>/../acwd-child/img/diaporama-fleche-g.png" /></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><img src="<?php echo get_template_directory_uri();?>/../acwd-child/img/diaporama-fleche-d.png" /></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php
else :
    // no rows found
endif;
?>
