<?php
/**
 * Plugin Name: Altitude Actions
 * Plugin URI: http://cbsaltitudegroup.com
 * Description: Core Functionality for Altitude Site
 * Author: Nate Mecham
 * Author URI: http://natemecham.com
 * Version: 0.1.0
 */



function ag_home_two_posts( $query ) {
	if ( is_home() ) {
	        // Display only 1 post for the original blog archive
	        $query->set( 'posts_per_page', 2 );
	        return;
	    }
}
add_action( 'pre_get_posts', 'ag_home_two_posts', 1 );




//-----------------------------------------------Reorder Dashboard Menu
function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
     
    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php', // Posts
        'edit.php?post_type=page', // Pages
        'edit.php?post_type=cases', // Cases
        'edit.php?post_type=assets', // Assets
        'edit.php?post_type=market', // Market
        'edit.php?post_type=team', // Team
        'separator2', // ---------------------separator
        'upload.php', // Media
        'users.php', // Users
        'plugins.php', // Plugins
        'themes.php', // Appearance
        
        'options-general.php', // Settings
        'edit.php?post_type=acf', // Advanced Custom Feilds
        'separator-last', // Last separator
        'link-manager.php', // Links
        'tools.php' // Tools -- Hidden
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');



//--------------------------------------Remove Dashboard Menu Items

function edit_admin_menus() {
    global $menu;
    global $submenu;
    
     remove_menu_page('edit-comments.php'); // Remove the Comments Menu
     remove_menu_page('tools.php'); // Remove the Tools Menu
}
add_action( 'admin_menu', 'edit_admin_menus' );



?>