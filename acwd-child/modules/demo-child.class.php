<?php
$className = 'DemoChild';

if (class_exists($className)) {
	// new $className();
}

// Nom de la classe à modifier ici
class DemoChild {
	
  function __construct(){
    // force login page
    add_action( 'init', array($this,'custom_post_type'));

  }


  function custom_post_type() {
	  
	$labelSingular = 'Demo-child';
	$labelPluriel = $labelSingular.'s';
	$classSlug = 'demo-child';
	$classIcon = 'dashicons-wordpress'; // https://developer.wordpress.org/resource/dashicons/

	$labels = array(
		'name'                  => _x( $labelPluriel, 'Post Type General Name', 'acwd' ),
		'singular_name'         => _x( $labelSingular, 'Post Type Singular Name', 'acwd' ),
		'menu_name'             => __( $labelSingular, 'acwd' ),
		'name_admin_bar'        => __( $labelSingular, 'acwd' ),
		'archives'              => __( 'Archive '.$labelSingular, 'acwd' ),
		'attributes'            => __( 'Attributs '.$labelSingular, 'acwd' ),
		'parent_item_colon'     => __( 'Parent', 'acwd' ),
		'all_items'             => __( 'Tou(te)s les '.$labelPluriel, 'acwd' ),
		'add_new_item'          => __( 'Ajouter un(e) '.$labelSingular, 'acwd' ),
		'add_new'               => __( 'Ajouter un(e) '.$labelSingular, 'acwd' ),
		'new_item'              => __( 'Nouveau(elle) '.$labelSingular, 'acwd' ),
		'edit_item'             => __( 'Editer', 'acwd' ),
		'update_item'           => __( 'Mettre à jour', 'acwd' ),
		'view_item'             => __( 'Voir', 'acwd' ),
		'view_items'            => __( 'Voir les '.$labelPluriel, 'acwd' ),
		'search_items'          => __( 'Recherche', 'acwd' ),
		'not_found'             => __( 'Non trouvé', 'acwd' ),
		'not_found_in_trash'    => __( 'Non trouvé dans la corbeille', 'acwd' ),
		'featured_image'        => __( 'Image à la une', 'acwd' ),
		'set_featured_image'    => __( 'Ajouter une image à la une', 'acwd' ),
		'remove_featured_image' => __( 'Supprimer l\'image', 'acwd' ),
		'use_featured_image'    => __( 'Utilisé comme image à la une', 'acwd' ),
		'insert_into_item'      => __( 'Insérer', 'acwd' ),
		'uploaded_to_this_item' => __( 'Mettre à jour', 'acwd' ),
		'items_list'            => __( 'Items list', 'acwd' ),
		'items_list_navigation' => __( 'Items list navigation', 'acwd' ),
		'filter_items_list'     => __( 'Filter items list', 'acwd' ),
	);
	$rewrite = array(
		'slug'                  => $classSlug,
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( $labelSingular, 'acwd' ),
		'description'           => __( 'Description du (de la) '.$labelSingular, 'acwd' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revisions', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => $classSlug,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'menu_icon'       		=> $classIcon,
		'taxonomies'			=> array('category'),
	);
	register_post_type( $classSlug, $args );

  }


}

?>