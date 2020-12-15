<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACWD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
	  <header>
		<div class="bg-transparent">
			<div class="container">
			  <div class="row">
				<div class="col-sm-8 col-md-7 py-4">
				  <h4 class="text-white">About</h4>
				  <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
				</div>
				<div class="col-sm-4 offset-md-1 py-4">
				  <h4 class="text-white">Contact</h4>
				  <ul class="list-unstyled">
					<li><a href="#" class="text-white">Follow on Twitter</a></li>
					<li><a href="#" class="text-white">Like on Facebook</a></li>
					<li><a href="#" class="text-white">Email me</a></li>
				  </ul>
				</div>
			  </div>
			</div>
		</div>	  
		  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent">
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php the_custom_logo();?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'menu-1',
				// 'depth'             => 2,
				'container'         => 'div',
				'container_id'      => 'navbarCollapse',
				'container_class'   => 'collapse navbar-collapse',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker())
			);
			?>
			<?php
			/*
			<div class="collapse navbar-collapse" id="navbarCollapse">
			  <ul class="navbar-nav mr-auto">
				<li class="nav-item active">
				  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link disabled" href="#">Disabled</a>
				</li>
			  </ul>
			</div>
			 */
			 ?>
		  </nav>
		</header>
		<main role="main">
<?php
// require_once get_template_directory() . '/../acwd-child/inc/slider_header.php';
?>

