<?php
/*
/*
Plugin Name: Site Plugin for Codeline
Description: Custom type creation for wordpress
Version: 1.0
Author: Oluwaseyi

*/

// Creating a Films Custom Post Type
function crunchify_films_custom_post_type() {
	$labels = array(
		'name'                => __( 'Films' ),
		'singular_name'       => __( 'Film'),
		'menu_name'           => __( 'Film'),
		'parent_item_colon'   => __( 'Parent Film'),
		'all_items'           => __( 'All Films'),
		'view_item'           => __( 'View Film'),
		'add_new_item'        => __( 'Add New Film'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Film'),
		'update_item'         => __( 'Update Film'),
		'search_items'        => __( 'Search Film'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'films'),
		'description'         => __( 'Best Films'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'films', $args );
}
add_action( 'init', 'films_custom_post_type', 0 );
    
?>