<?php

function codeilo_get_dump() {
	return time();
}

// 
function codeilo_create_post_type_banner() {
    $labels = array(
        'name' => __( 'Banners' ),
        'singular_name' => __( 'banner' ),
        'add_new' => __( 'New banner' ),
        'add_new_item' => __( 'Add New banner' ),
        'edit_item' => __( 'Edit banner' ),
        'new_item' => __( 'New banner' ),
        'view_item' => __( 'View banner' ),
        'search_items' => __( 'Search banners' ),
        'not_found' =>  __( 'No banners Found' ),
        'not_found_in_trash' => __( 'No banners found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'page-attributes'
        ),
        'taxonomies' => array( 'post_tag', 'category'),
    );
    register_post_type( 'banner', $args );
}
add_action( 'init', 'codeilo_create_post_type_banner' );

function codeilo_create_post_type_team() {
    register_post_type( 'team',
		array(
			'labels' => array(
				'name' => __( 'Team' ),
                'singular_name' => __( 'Team' ),
				'menu_name' => __( 'Our Team' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'team'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'codeilo_create_post_type_team' );

function codeilo_create_post_type_service() {
    register_post_type( 'service',
		array(
			'labels' => array(
				'name' => __( 'Service' ),
				'singular_name' => __( 'Service' ),
                'menu_name' => __( 'Our Services' ),
       			'add_new' => __( 'Add Service' ),
       			'add_new_item' => __( 'Add New Service' ),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'service'),
		)
	);
}

// Hooking up our function to theme setup
add_action( 'init', 'codeilo_create_post_type_service' );
