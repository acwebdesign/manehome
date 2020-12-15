<?php

$className = 'Demo';
$labelSingular = $className; //à modifier si nom avec espace et accents
$classIcon = 'dashicons-wordpress'; // https://developer.wordpress.org/resource/dashicons/

// Nom de la classe à modifier ici et décommenter pour activer
if (class_exists($className)) {
	// new $className($className, $classSlug, $classIcon, $labelSingular);
}

// Nom de la classe à modifier ici
class Demo {
	
  function __construct($className, $classSlug, $classIcon, $labelSingular){
    add_action( 'init', array($this,'custom_post_type'));
	// add_action('pre_get_posts',array($this,'custom_post_type_cat_filter'));
	$this->className = $className;
	$this->labelSingular = $labelSingular;
	$this->labelPluriel = $labelSingular.'s';
	$this->classSlug = strtolower($className);
	$this->classIcon = $classIcon;
  }


  function custom_post_type() {
	  
	

	$labels = array(
		'name'                  => _x( $this->labelPluriel, 'Post Type General Name', 'acwd' ),
		'singular_name'         => _x( $this->labelSingular, 'Post Type Singular Name', 'acwd' ),
		'menu_name'             => __( $this->labelSingular, 'acwd' ),
		'name_admin_bar'        => __( $this->labelSingular, 'acwd' ),
		'archives'              => __( 'Archive '.$this->labelSingular, 'acwd' ),
		'attributes'            => __( 'Attributs '.$this->labelSingular, 'acwd' ),
		'parent_item_colon'     => __( 'Parent', 'acwd' ),
		'all_items'             => __( 'Tou(te)s les '.$this->labelPluriel, 'acwd' ),
		'add_new_item'          => __( 'Ajouter un(e) '.$this->labelSingular, 'acwd' ),
		'add_new'               => __( 'Ajouter un(e) '.$this->labelSingular, 'acwd' ),
		'new_item'              => __( 'Nouveau(elle) '.$this->labelSingular, 'acwd' ),
		'edit_item'             => __( 'Editer', 'acwd' ),
		'update_item'           => __( 'Mettre à jour', 'acwd' ),
		'view_item'             => __( 'Voir', 'acwd' ),
		'view_items'            => __( 'Voir les '.$this->labelPluriel, 'acwd' ),
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
		'slug'                  => $this->classSlug,
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( $this->labelSingular, 'acwd' ),
		'description'           => __( 'Description du (de la) '.$this->labelSingular, 'acwd' ),
		'labels'                => $this->labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revisions', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => $this->classSlug,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'menu_icon'       		=> $this->classIcon,
		'taxonomies'			=> array('category'),
	);
	register_post_type( $this->classSlug, $args );

  }
	function custom_post_type_cat_filter($query) {
	  if ( !is_admin() && $query->is_main_query() ) {
		if ($query->is_category()) {
		  $query->set( 'post_type', array( 'post', $this->classSlug ) );
		}
	  }
	}


}

?>