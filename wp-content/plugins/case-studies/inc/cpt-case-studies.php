<?php

// Register Custom Post Type

if(!function_exists('case_studies_post_type')){
	function case_studies_post_type() {

	$labels = array(
		'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Case Study', 'text_domain' ),
		'name_admin_bar'        => __( 'Case Study', 'text_domain' ),
		'archives'              => __( 'Case Study Archives', 'text_domain' ),
		'attributes'            => __( 'Case Study Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Case Study:', 'text_domain' ),
		'all_items'             => __( 'All Case Studies', 'text_domain' ),
		'add_new_item'          => __( 'Add New Case Study', 'text_domain' ),
		'add_new'               => __( 'Add New Case Study Item', 'text_domain' ),
		'new_item'              => __( 'New Case Study Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Case Study', 'text_domain' ),
		'update_item'           => __( 'Update Case Study', 'text_domain' ),
		'view_item'             => __( 'View Case Study', 'text_domain' ),
		'view_items'            => __( 'View Case Study', 'text_domain' ),
		'search_items'          => __( 'Search Case Study', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Case Study', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Case Study', 'text_domain' ),
		'items_list'            => __( 'Case Study list', 'text_domain' ),
		'items_list_navigation' => __( 'Case Study list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Case Study list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Case Study', 'text_domain' ),
		'description'           => __( 'Content for each Case Study Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'case_study', $args );

	}
}

?>