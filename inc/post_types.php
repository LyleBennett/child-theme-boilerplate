<?php
// // Register Custom Post Type Examples below
// function pf_post_types() {

//     $features_labels = array(
// 		'name'                  => _x( 'Features', 'Post Type General Name', 'child' ),
// 		'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'child' ),
// 		'menu_name'             => __( 'Features', 'child' ),
// 		'name_admin_bar'        => __( 'Features', 'child' ),
// 		'archives'              => __( 'Feature Archives', 'child' ),
// 		'attributes'            => __( 'Feature Attributes', 'child' ),
// 		'parent_item_colon'     => __( 'Parent Feature:', 'child' ),
// 		'all_items'             => __( 'All Features', 'child' ),
// 		'add_new_item'          => __( 'Add New Feature', 'child' ),
// 		'add_new'               => __( 'Add New', 'child' ),
// 		'new_item'              => __( 'New Feature', 'child' ),
// 		'edit_item'             => __( 'Edit Feature', 'child' ),
// 		'update_item'           => __( 'Update Feature', 'child' ),
// 		'view_item'             => __( 'View Feature', 'child' ),
// 		'view_items'            => __( 'View Features', 'child' ),
// 		'search_items'          => __( 'Search Features', 'child' ),
// 		'not_found'             => __( 'Not found', 'child' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'child' ),
// 		'featured_image'        => __( 'Featured Image', 'child' ),
// 		'set_featured_image'    => __( 'Set featured image', 'child' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'child' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'child' ),
// 		'insert_into_item'      => __( 'Insert into item', 'child' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'child' ),
// 		'items_list'            => __( 'Items list', 'child' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'child' ),
// 		'filter_items_list'     => __( 'Filter items list', 'child' ),
// 	);
// 	$features_args = array(
// 		'label'                 => __( 'Feature', 'child' ),
// 		'labels'                => $features_labels,
// 		'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes'),
// 		'hierarchical'          => true,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-superhero',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'show_in_rest'          => true,
//         'rewrite'               => array('slug' => "features", 'with_front' => false),
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);

// 	register_post_type( 'features', $features_args );

//     $resources_labels = array(
// 		'name'                  => _x( 'Resources', 'Post Type General Name', 'child' ),
// 		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'child' ),
// 		'menu_name'             => __( 'Resources', 'child' ),
// 		'name_admin_bar'        => __( 'Resources', 'child' ),
// 		'archives'              => __( 'Resource Archives', 'child' ),
// 		'attributes'            => __( 'Resource Attributes', 'child' ),
// 		'parent_item_colon'     => __( 'Parent Resource:', 'child' ),
// 		'all_items'             => __( 'All Resources', 'child' ),
// 		'add_new_item'          => __( 'Add New Resource', 'child' ),
// 		'add_new'               => __( 'Add New', 'child' ),
// 		'new_item'              => __( 'New Resource', 'child' ),
// 		'edit_item'             => __( 'Edit Resource', 'child' ),
// 		'update_item'           => __( 'Update Resource', 'child' ),
// 		'view_item'             => __( 'View Resource', 'child' ),
// 		'view_items'            => __( 'View Resources', 'child' ),
// 		'search_items'          => __( 'Search Resources', 'child' ),
// 		'not_found'             => __( 'Not found', 'child' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'child' ),
// 		'resourced_image'        => __( 'Resourced Image', 'child' ),
// 		'set_resourced_image'    => __( 'Set resourced image', 'child' ),
// 		'remove_resourced_image' => __( 'Remove resourced image', 'child' ),
// 		'use_resourced_image'    => __( 'Use as resourced image', 'child' ),
// 		'insert_into_item'      => __( 'Insert into item', 'child' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'child' ),
// 		'items_list'            => __( 'Items list', 'child' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'child' ),
// 		'filter_items_list'     => __( 'Filter items list', 'child' ),
// 	);
// 	$resources_args = array(
// 		'label'                 => __( 'Resource', 'child' ),
// 		'labels'                => $resources_labels,
// 		'supports'              => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes'),
// 		'hierarchical'          => true,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-superhero-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'show_in_rest'          => true,
//         'rewrite'               => array('slug' => "resources/guides-and-insights" ,'with_front' => false),
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);


// 	register_post_type( 'resources', $resources_args );


//     $integrations_args = array(
// 		'label' => __( 'Integrations', 'generatepress' ),
// 		'labels' => array(
//   		'name' => _x( 'Integrations', 'Post Type General Name', 'generatepress' ),
//   		'singular_name' => _x( 'Integrations', 'Post Type Singular Name', 'generatepress' ),
//   		'menu_name' => _x( 'Integrations', 'Admin Menu text', 'generatepress' ),
//   		'name_admin_bar' => _x( 'Integrations', 'Add New on Toolbar', 'generatepress' ),
//   		'archives' => __( 'Integrations Archives', 'generatepress' ),
//   		'attributes' => __( 'Integrations Attributes', 'generatepress' ),
//   		'parent_item_colon' => __( 'Parent Integrations:', 'generatepress' ),
//   		'all_items' => __( 'All Integrations', 'generatepress' ),
//   		'add_new_item' => __( 'Add New Integrations', 'generatepress' ),
//   		'add_new' => __( 'Add New', 'generatepress' ),
//   		'new_item' => __( 'New Integrations', 'generatepress' ),
//   		'edit_item' => __( 'Edit Integrations', 'generatepress' ),
//   		'update_item' => __( 'Update Integrations', 'generatepress' ),
//   		'view_item' => __( 'View Integrations', 'generatepress' ),
//   		'view_items' => __( 'View Integrations', 'generatepress' ),
//   		'search_items' => __( 'Search Integrations', 'generatepress' ),
//   		'not_found' => __( 'Not found', 'generatepress' ),
//   		'not_found_in_trash' => __( 'Not found in Trash', 'generatepress' ),
//   		'featured_image' => __( 'Featured Image', 'generatepress' ),
//   		'set_featured_image' => __( 'Set featured image', 'generatepress' ),
//   		'remove_featured_image' => __( 'Remove featured image', 'generatepress' ),
//   		'use_featured_image' => __( 'Use as featured image', 'generatepress' ),
//   		'insert_into_item' => __( 'Insert into Integrations', 'generatepress' ),
//   		'uploaded_to_this_item' => __( 'Uploaded to this Integrations', 'generatepress' ),
//   		'items_list' => __( 'Integrations list', 'generatepress' ),
//   		'items_list_navigation' => __( 'Integrations list navigation', 'generatepress' ),
//   		'filter_items_list' => __( 'Filter Integrations list', 'generatepress' ),
//   	),
// 		'menu_icon' => 'dashicons-cart',
// 		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
// 		'taxonomies' => array('integration_categories'),
// 		'public' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,
// 		'menu_position' => 5,
// 		'show_in_admin_bar' => true,
// 		'show_in_nav_menus' => true,
// 		'can_export' => true,
// 		'rewrite' => array('slug' => "integration/shopping-carts" ,'with_front' => false),
// 		'has_archive' => false,
// 		'hierarchical' => false,
// 		'exclude_from_search' => false,
// 		'show_in_rest' => true,
// 		'publicly_queryable' => true,
// 		'capability_type' => 'post',
// 	);



//   register_post_type( 'integrations', $integrations_args );



//     // Register Custom Taxonomies
// $integration_categories_args = array(
//     'labels' => array(
//       'name'              => _x( 'Integration Categories', 'taxonomy general name', 'generatepress' ),
//       'singular_name'     => _x( 'Integration Category', 'taxonomy singular name', 'generatepress' ),
//       'search_items'      => __( 'Search Integration Categories', 'generatepress' ),
//       'all_items'         => __( 'All Integration Categories', 'generatepress' ),
//       'parent_item'       => __( 'Parent Integration Category', 'generatepress' ),
//       'parent_item_colon' => __( 'Parent Integration Category:', 'generatepress' ),
//       'edit_item'         => __( 'Edit Integration Category', 'generatepress' ),
//       'update_item'       => __( 'Update Integration Category', 'generatepress' ),
//       'add_new_item'      => __( 'Add New Integration Category', 'generatepress' ),
//       'new_item_name'     => __( 'New Integration Category Name', 'generatepress' ),
//       'menu_name'         => __( 'Categories', 'generatepress' ),
//   ),
//     'description' => __( '', 'generatepress' ),
//     'hierarchical' => true,
//     'public' => true,
//     'publicly_queryable' => true,
// 	'rewrite'               => array('with_front' => false),
//     'show_ui' => true,
//     'show_in_menu' => true,
//     'show_in_nav_menus' => true,
//     'show_tagcloud' => false,
//     'show_in_quick_edit' => true,
//     'show_admin_column' => true,
//     'show_in_rest' => true,
// );


// register_taxonomy( 'integration_categories', array('integrations'), $integration_categories_args );

// }
// add_action( 'init', 'pf_post_types', 0 );



