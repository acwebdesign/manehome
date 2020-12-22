<?php
function acwd_enqueue_styles(){
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'acwd_enqueue_styles' );

require  get_template_directory() . '/../acwd-child/inc/customfunct.php';

/**
 * Enqueue scripts and styles.
 */
function child_scripts() {
	/* CSS */
	// wp_enqueue_style( 'child-', '' );

  // wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/../acwd-child/vendor/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/../acwd-child/vendor/fontawesome-free/css/all.min.css' );
  wp_enqueue_style( 'greyscale-style', get_template_directory_uri() . '/../acwd-child/css/nav.css' );
  wp_enqueue_style( 'navigo-mediume-style', 'https://use.typekit.net/grf2kww.css' );

	/* JS */
	// wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/../acwd-child/vendor/jquery/jquery.min.js' );
	wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/../acwd-child/vendor/bootstrap/js/bootstrap.bundle.min.js' );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
    // wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/../acwd-child/vendor/jquery-easing/jquery.easing.min.js' );
    wp_enqueue_script( 'easing-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js' );

	wp_enqueue_script( 'child-js', get_template_directory_uri() . '/../acwd-child/js/child.js' );

}
add_action( 'wp_enqueue_scripts', 'child_scripts' );

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts-varela', 'https://fonts.googleapis.com/css?family=Varela+Round', false );
    wp_enqueue_style( 'wpb-google-nunito', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i', false );

}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

require_once get_template_directory() . '/../acwd-child/inc/wp-bootstrap-navwalker.php';

if ( ! function_exists( 'autoload_modules' ) ) :
	foreach(glob(get_template_directory() .'/../acwd-child/modules/*.php') as $file) {
		// echo $file;
		include_once $file;
	}
endif;

add_theme_support('woocommerce');

add_filter( 'woocommerce_add_to_cart_fragments', 'acwd_add_to_cart_fragment' );

function acwd_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	if ($woocommerce->cart->cart_contents_count != 0) {
		$fragments['.acwd-cart'] = '<a href="' . wc_get_cart_url() . '" class="acwd-cart text-primary"><i class="fas fa-shopping-basket"></i><span class="nb-product">' . $woocommerce->cart->cart_contents_count . '</span></a>';
	}
	else {
		$fragments['.acwd-cart'] = '<a href="' . wc_get_cart_url() . '" class="acwd-cart text-primary"><i class="fas fa-shopping-basket"></i></a>';
	}
 	return $fragments;

 }

 /*
* Plugin Name: Course Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/User:Aternus
*/

function wporg_register_taxonomy_type() {
     $labels = array(
         'name'              => _x( 'Type', 'taxonomy general name' ),
         'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Type' ),
         'all_items'         => __( 'All Type' ),
         'parent_item'       => __( 'Parent Type' ),
         'parent_item_colon' => __( 'Parent Type:' ),
         'edit_item'         => __( 'Edit Type' ),
         'update_item'       => __( 'Update Type' ),
         'add_new_item'      => __( 'Add New Type' ),
         'new_item_name'     => __( 'New Type Name' ),
         'menu_name'         => __( 'Type' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'type' ],
     );
     register_taxonomy( 'type', [ 'realisations' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_type' );
