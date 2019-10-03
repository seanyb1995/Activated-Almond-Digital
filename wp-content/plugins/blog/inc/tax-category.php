<?php

// Register Custom Taxonomy
if(!function_exists('blog_category_taxonomy')){
	function blog_category_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Category', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Category', 'text_domain' ),
		'all_items'                  => __( 'All Category', 'text_domain' ),
		'parent_item'                => __( 'Parent Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Category Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Category', 'text_domain' ),
		'update_item'                => __( 'Update Category', 'text_domain' ),
		'view_item'                  => __( 'View Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Category with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Category', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Category', 'text_domain' ),
		'search_items'               => __( 'Search Category', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Category', 'text_domain' ),
		'items_list'                 => __( 'Category list', 'text_domain' ),
		'items_list_navigation'      => __( 'Category list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'category', array( 'blog' ), $args );

}
}

?>