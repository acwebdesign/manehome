<?php
//hide admin bar on front
add_filter('show_admin_bar', '__return_false');

function preprint($value) {
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}
/*
 * Function creates post duplicate as a draft and redirects then to the edit post screen
 */
function duplicate_post_as_draft(){
        global $wpdb;
        if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
                wp_die('No post to duplicate has been supplied!');
        }

        /*
         * Nonce verification
         */
        if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
                return;

        /*
			* get the original post id
         */
        $post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
        /*
         * and all the original post data then
         */
        $post = get_post( $post_id );

        /*
         * if you don't want current user to be the new post author,
         * then change next couple of lines to this: $new_post_author = $post->post_author;
         */
        $current_user = wp_get_current_user();
        $new_post_author = $current_user->ID;

        /*
         * if post data exists, create the post duplicate
         */
        if (isset( $post ) && $post != null) {

                /*
                 * new post data array
                 */
                $args = array(
                        'comment_status' => $post->comment_status,
                        'ping_status'    => $post->ping_status,
                        'post_author'    => $new_post_author,
                        'post_content'   => $post->post_content,
                        'post_excerpt'   => $post->post_excerpt,
                        'post_name'      => $post->post_name,
                        'post_parent'    => $post->post_parent,
                        'post_password'  => $post->post_password,
                        'post_status'    => 'draft',
                        'post_title'     => $post->post_title,
                        'post_type'      => $post->post_type,
                        'to_ping'        => $post->to_ping,
                        'menu_order'     => $post->menu_order
                );

                /*
                 * insert the post by wp_insert_post() function
                 */
                $new_post_id = wp_insert_post( $args );

                /*
                 * get all current post terms ad set them to the new post draft
                 */
                $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
                foreach ($taxonomies as $taxonomy) {
                        $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
                        wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
                }

                /*
                 * duplicate all post meta just in two SQL queries
                 */
                $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
                if (count($post_meta_infos)!=0) {
                        $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
                        foreach ($post_meta_infos as $meta_info) {
                                $meta_key = $meta_info->meta_key;
                                if( $meta_key == '_wp_old_slug' ) continue;
                                $meta_value = addslashes($meta_info->meta_value);
                                $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
                        }
                        $sql_query.= implode(" UNION ALL ", $sql_query_sel);
                        $wpdb->query($sql_query);
                }


                /*
                 * finally, redirect to the edit post screen for the new draft
                 */
                wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
                exit;
        } else {
                wp_die('Post creation failed, could not find original post: ' . $post_id);
        }
}
add_action( 'admin_action_duplicate_post_as_draft', 'duplicate_post_as_draft' );

/*
 * Add the duplicate link to action list for post_row_actions
 */
function duplicate_post_link( $actions, $post ) {
        if (current_user_can('edit_posts')) {
                $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Dupliquer</a>';
        }
        return $actions;
}

add_filter('page_row_actions', 'duplicate_post_link', 10, 2);
add_filter('post_row_actions', 'duplicate_post_link', 10, 2);

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

add_filter('show_admin_bar', '__return_false');

/**
 * Enqueue scripts and styles.
 */
function custom_scripts() {
	/* CSS */
	wp_enqueue_style( 'opensans', 'https://fonts.googleapis.com/css?family=Open+Sans' );

	/* JQUERY */
    wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );

	/* Materialize */
	/*
	wp_enqueue_style( 'acwd-materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' );
	wp_enqueue_script( 'acwd-materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js' );
	*/

	/* Bootstrap */
	/*
	wp_enqueue_style( 'bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrapfa', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
	*/

	/* Google map */
	wp_enqueue_script('acwd', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDfs0alsJAwKDpP1K0Ro_dk-kzsEFuO0gQ');
	wp_enqueue_script('acwd-gmap', get_template_directory_uri() . '/js/acwd-gmap.js', array( 'jquery' ),'',true );

	/* CUSTOM JS */
	wp_enqueue_script('acwd', get_template_directory_uri() . '/js/acwd.js', array( 'jquery' ),'',true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts', 1 );


function custom_customize_register( $wp_customize ) {
	 /**
	 * Social site icons for Quick Menu bar
	 *
	 * @link: https://www.competethemes.com/social-icons-wordpress-menu-theme-customizer/
	 */
	 $wp_customize->add_section( 'social_settings', array(
		 'title' => __( 'Social Media Icons', 'custom' ),
		 'priority' => 1000,
	 ));

	 $social_sites = get_social_sites();
	 // print_r($social_sites);
	 $priority = 5;
	 if(!empty($social_sites)) {
		 foreach( $social_sites as $social_site ) {

			 $wp_customize->add_setting( "$social_site", array(
				 'type' => 'theme_mod',
				 'capability' => 'edit_theme_options',
				 'sanitize_callback' => 'esc_url_raw',
			 ));

			 $wp_customize->add_control( $social_site, array(
				 'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
				 'section' => 'social_settings',
				 'type' => 'text',
				 'priority' => $priority,
			 ));

			 $priority += 5;
		 }
	 }
	 //seconde Tagline
	 $wp_customize->add_setting( "Tagline2");

	 $wp_customize->add_control( 'Tagline2', array(
			 'label' => "Tagline2",
			 'section' => 'title_tagline',
			 'type' => 'text',
			 'settings' => 'Tagline2',
		 ));
	//company infos
	 $wp_customize->add_section( 'company_info', array(
		 'title' => __( 'Company Informations', 'custom' ),
		 'priority' => 1000,
	 ));
	$company_info = array(
		'company_name' => 'Company Name',
		'company_address' => 'Company Address',
		'company_zipcode' => 'Company Zipcode',
		'company_city' => 'Company City',
		'company_phone' => 'Company Phone',
		'company_mobile' => 'Company Mobile',
		'company_email' => 'Company Email',
		'company_lat' => 'Company Latitude',
		'company_long' => 'Company Longitude',
		'company_designer' => 'Company Designer',
	);
	foreach($company_info as $slug => $label) {
		 $wp_customize->add_setting( $slug);
		 $wp_customize->add_control( $slug, array(
				 'label' => $label,
				 'section' => 'company_info',
				 'type' => 'text',
				 'settings' => $slug,
			 ));
	}
	//SEO
	 $wp_customize->add_section( 'seo', array(
		 'title' => __( 'SEO', 'custom' ),
		 'priority' => 1200,
	 ));
	$footer = array(
		'ga' => 'Google Analytics',
	);
	foreach($footer as $slug => $label) {
		 $wp_customize->add_setting( $slug);
		 $wp_customize->add_control( $slug, array(
				 'label' => $label,
				 'section' => 'seo',
				 'type' => 'text',
				 'settings' => $slug,
			 ));
	}

}
add_action( 'customize_register', 'custom_customize_register' );

function get_social_sites() {

     // Store social site names in array
     $social_sites = array(
         'twitter',
         'facebook',
         'google-plus',
         'flickr',
         'pinterest',
         'youtube',
         'vimeo',
         'tumblr',
         'dribbble',
         'rss',
         'linkedin',
         'instagram',
         'email'
     );
 return $social_sites;
}
// Get user input from the Customizer and output the linked social media icons
function show_social_icons() {

     $social_sites = get_social_sites();
// echo '<pre>';
// print_r($social_sites);
// echo '</pre>';
     // Any inputs that aren't empty are stored in $active_sites array
     foreach( $social_sites as $social_site ) {
         if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
             $active_sites[] = $social_site;
         }
     }

     // For each active social site, add it as a list item
     if ( !empty( $active_sites ) ) {
         echo "<ul class='social-media-icons'>";

         foreach ( $active_sites as $active_site ) { ?>

             <li>
             <a href="<?php echo get_theme_mod( $active_site ); ?>">
             <?php if( $active_site == 'vimeo' || $active_site == 'twitter' ) { ?>
                 <i class="fa fa-<?php echo $active_site; ?>-square"></i> <?php
             }
			 else if( $active_site == 'email' ) { ?>
                 <i class="fa fa-envelope"></i> <?php
             }
			 /*
			 else if( $active_site == 'facebook' ) { ?>
                 <i class="fa fa-<?php echo $active_site; ?>-official"></i> <?php
             }
			 */
			 else { ?>
                 <i class="fab fa-<?php echo $active_site; ?>"></i> <?php
             } ?>
             </a>
             </li> <?php
         }
         echo "</ul>";
     }
}

require_once dirname( __FILE__ ) . '/plugin_install.php';

/**
 * Activation de la licence ACF Pro
 */
define( 'ACF_5_KEY', 'b3JkZXJfaWQ9NjAzNzd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE1LTA3LTIxIDE4OjQzOjQ5' );

function auto_set_license_keys() {

  if ( ! get_option( 'acf_pro_license' ) && defined( 'ACF_5_KEY' ) ) {

    $save = array(
		'key'	=> ACF_5_KEY,
		'url'	=> home_url()
	);

	$save = maybe_serialize($save);
	$save = base64_encode($save);

    update_option( 'acf_pro_license', $save );
  }
}
add_action( 'after_switch_theme', 'auto_set_license_keys' );

/* ACF Google Maps */
function wpc_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDfs0alsJAwKDpP1K0Ro_dk-kzsEFuO0gQ');
}
add_action('acf/init', 'wpc_acf_init');

//Ajout du phpinfo dans outils
add_action('admin_menu', 'acwd_add_menu_pages');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

function acwd_add_menu_pages() {
    // Add a new submenu under Tools:
    add_management_page( __('PHP INFO','menu-acwd'), __('PHP INFO','menu-acwd'), 'manage_options', 'acwd', 'acwd_phpinfo');

}

function acwd_phpinfo() {
 ob_start();
 phpinfo();
 $c = ob_get_contents();
 ob_end_clean();

?>
<style type="text/css">
	td, th {font-family: sans-serif;}
	pre {margin: 0; font-family: monospace;}
	a:link {color: #000099; text-decoration: none; }
	a:hover {text-decoration: underline;}
	table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
	.center {text-align: center;}
	.center table {margin: 1em auto; text-align: left;}
	.center th {text-align: center !important;}
	td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
	h1 {font-size: 150%;}
	h2 {font-size: 125%;}
	.p {text-align: left;}
	.e {background-color: #ccf; width: 300px; font-weight: bold;}
	.h {background-color: #99c; font-weight: bold;}
	.v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
	.v i {color: #999;}
	img {float: right; border: 0;}
	hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
</style>
<?php

 $pos1 = strpos($c, '<table');
 $pos2 = strrpos($c, '</table>', $pos1);

 echo '<div style="margin:10px">';
 echo substr($c, $pos1, $pos2-$pos1+8 );
 // echo $c;
 echo '</div>';
}

add_image_size( 'fhd', 1920, 1080 );
add_image_size( 'retina', 2560, 1600 );
add_image_size( 'uhd', 3840, 2160 );
