<?php

// Register Custom Post Type

if(!function_exists('blog_post_type')){
	function blog_post_type() {

	$labels = array(
		'name'                  => _x( 'Blog', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Blog', 'text_domain' ),
		'name_admin_bar'        => __( 'Blog', 'text_domain' ),
		'archives'              => __( 'Blog Archives', 'text_domain' ),
		'attributes'            => __( 'Blog Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Blog Study:', 'text_domain' ),
		'all_items'             => __( 'All Blog', 'text_domain' ),
		'add_new_item'          => __( 'Add New Blog', 'text_domain' ),
		'add_new'               => __( 'Add New Blog Item', 'text_domain' ),
		'new_item'              => __( 'New Blog Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Blog', 'text_domain' ),
		'update_item'           => __( 'Update Blog', 'text_domain' ),
		'view_item'             => __( 'View Blog', 'text_domain' ),
		'view_items'            => __( 'View Blog', 'text_domain' ),
		'search_items'          => __( 'Search Blog', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Blog', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Blog', 'text_domain' ),
		'items_list'            => __( 'Blog list', 'text_domain' ),
		'items_list_navigation' => __( 'Blog list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Blog list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Blog', 'text_domain' ),
		'description'           => __( 'Content for each Blog Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blog', $args );

	}
}

?>