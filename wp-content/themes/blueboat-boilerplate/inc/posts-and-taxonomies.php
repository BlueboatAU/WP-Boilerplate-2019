<?php


/*
* File to keep all posts and taxonomies in
*/



// Register Custom Post Type
function custom_post_type_generate() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'boilerplate' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'boilerplate' ),
		'menu_name'             => __( 'Post Types', 'boilerplate' ),
		'name_admin_bar'        => __( 'Post Type', 'boilerplate' ),
		'archives'              => __( 'Item Archives', 'boilerplate' ),
		'parent_item_colon'     => __( 'Parent Item:', 'boilerplate' ),
		'all_items'             => __( 'All Items', 'boilerplate' ),
		'add_new_item'          => __( 'Add New Item', 'boilerplate' ),
		'add_new'               => __( 'Add New', 'boilerplate' ),
		'new_item'              => __( 'New Item', 'boilerplate' ),
		'edit_item'             => __( 'Edit Item', 'boilerplate' ),
		'update_item'           => __( 'Update Item', 'boilerplate' ),
		'view_item'             => __( 'View Item', 'boilerplate' ),
		'search_items'          => __( 'Search Item', 'boilerplate' ),
		'not_found'             => __( 'Not found', 'boilerplate' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'boilerplate' ),
		'featured_image'        => __( 'Featured Image', 'boilerplate' ),
		'set_featured_image'    => __( 'Set featured image', 'boilerplate' ),
		'remove_featured_image' => __( 'Remove featured image', 'boilerplate' ),
		'use_featured_image'    => __( 'Use as featured image', 'boilerplate' ),
		'insert_into_item'      => __( 'Insert into item', 'boilerplate' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'boilerplate' ),
		'items_list'            => __( 'Items list', 'boilerplate' ),
		'items_list_navigation' => __( 'Items list navigation', 'boilerplate' ),
		'filter_items_list'     => __( 'Filter items list', 'boilerplate' ),
	);
	$rewrite = array(
		'slug'                  => 'custom-post-type-base',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Post Type', 'boilerplate' ),
		'description'           => __( 'Post Type Description', 'boilerplate' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'custom-post-type',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'custom_post_type', $args );

}
// add_action( 'init', 'custom_post_type_generate', 0 );



// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'boilerplate' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'boilerplate' ),
		'menu_name'                  => __( 'Taxonomy', 'boilerplate' ),
		'all_items'                  => __( 'All Items', 'boilerplate' ),
		'parent_item'                => __( 'Parent Item', 'boilerplate' ),
		'parent_item_colon'          => __( 'Parent Item:', 'boilerplate' ),
		'new_item_name'              => __( 'New Item Name', 'boilerplate' ),
		'add_new_item'               => __( 'Add New Item', 'boilerplate' ),
		'edit_item'                  => __( 'Edit Item', 'boilerplate' ),
		'update_item'                => __( 'Update Item', 'boilerplate' ),
		'view_item'                  => __( 'View Item', 'boilerplate' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'boilerplate' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'boilerplate' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'boilerplate' ),
		'popular_items'              => __( 'Popular Items', 'boilerplate' ),
		'search_items'               => __( 'Search Items', 'boilerplate' ),
		'not_found'                  => __( 'Not Found', 'boilerplate' ),
		'no_terms'                   => __( 'No items', 'boilerplate' ),
		'items_list'                 => __( 'Items list', 'boilerplate' ),
		'items_list_navigation'      => __( 'Items list navigation', 'boilerplate' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'taxonomy', array( 'post', 'custom_post_type' ), $args );

}
// add_action( 'init', 'custom_taxonomy', 0 );