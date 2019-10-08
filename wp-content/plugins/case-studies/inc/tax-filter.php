<?php

// Register Custom Taxonomy
if(!function_exists('case_study_filter_taxonomy')){
	function case_study_filter_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Filter', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Filter', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Filter', 'text_domain' ),
		'all_items'                  => __( 'All Filter', 'text_domain' ),
		'parent_item'                => __( 'Parent Filter', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Filter:', 'text_domain' ),
		'new_item_name'              => __( 'New Filter Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Filter', 'text_domain' ),
		'edit_item'                  => __( 'Edit Filter', 'text_domain' ),
		'update_item'                => __( 'Update Filter', 'text_domain' ),
		'view_item'                  => __( 'View Filter', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Filter with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Filter', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Filter', 'text_domain' ),
		'search_items'               => __( 'Search Filter', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Filter', 'text_domain' ),
		'items_list'                 => __( 'Filter list', 'text_domain' ),
		'items_list_navigation'      => __( 'Filter list navigation', 'text_domain' ),
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
	register_taxonomy( 'filter', array( 'case_study' ), $args );

}
}

?>