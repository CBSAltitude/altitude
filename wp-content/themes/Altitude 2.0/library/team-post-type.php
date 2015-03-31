<?php

// let's create the function for the custom type
function team_post_type() { 
	// creating (registering) the custom type 
	register_post_type( 'team', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Team' ), /* This is the Title of the Group */
			'singular_name' => __( 'Team Member'), /* This is the individual type */
			'all_items' => __( 'All Team Members' ), /* the all items menu item */
			'add_new' => __( 'Add New Team Membmer' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Team Member' ), /* Add New Display Title */
			'edit' => __( 'Edit'), /* Edit Dialog */
			'edit_item' => __( 'Edit Team Member' ), /* Edit Display Title */
			'new_item' => __( 'New Team Member' ), /* New Display Title */
			'view_item' => __( 'View Team Member' ), /* View Display Title */
			'search_items' => __( 'Search Team Members' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'The people who make Altitude so great' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/team-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'team', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'team-members', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'team_post_type');
	

?>
