<?php
//Add Custom Post Types ----
require_once('team-post-type.php');
require_once('markets-post-type.php');
require_once('assets-post-type.php');
require_once('cases-post-type.php');

//Truncate Excperts that are too long
function ag_truncate( $text, $length ) {
    if ($length > 0 && strlen($text) > $length) // Truncate the item text if it is too long.
    {
            $tmp = substr($text, 0, $length); // Find the first space within the allowed length.
            $tmp = substr($tmp, 0, strrpos($tmp, ' '));
            if (strlen($tmp) >= $length - 3) { // If we don't have 3 characters of room, go to the second space within the limit.
                    $tmp = substr($tmp, 0, strrpos($tmp, ' '));
            }
            $text = $tmp.'...';
    }
    return $text;

}

// Flush rewrite rules for custom post types -- This was in the Custom Post Type Template page, but was only needed once. 
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

	
?>