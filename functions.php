<?php
/**
// IMPORTANT NOTE:
// Many functions are actually handled with a site-specific plugin.
// The plugin is intended to handle functions that would be 
// carried out regardless of presentational behaviour specific
// to the theme.
// This funtion file is intended to handle functions that
// are theme-specific — that is, things that wouldn't make any sense
// out of the context of this particular theme.
//
// Please see this-plugin.php to alter other aspects of the site.
*/

//----------------------------------------------------------
// On homepage, four "Featured" posts are displayed.
// Therefore exclude them from the main Wordpress loop query
// Reference: http://wordpress.stackexchange.com/questions/56489/wp-query-in-functions-php

/*


// Get the featured posts
// WP_Query arguments
$featuredArgs = array (
	'post_type'         => array( 'post' ),
	'post_status'       => array( 'published' ),
	'posts_per_page'    => '4',
	'featured'          => 'yes'
);

// The Query
$featured = new WP_Query( $featuredArgs );

// empty array to hold IDs
$featuredPostIDs = array();
// Loop to retrieve the IDs and add to array
while ( $featured->have_posts() ) : $featured->the_post();
  array_push( $featuredPostIDs, $post->ID );
endwhile;
print_r($featured);

function exclude_featured_posts_home( $query ) {
  if ($query->is_home() && $query->is_main_query()) {
    $query->set( 'post__not_in', $featuredPostIDs );
  }
}
add_action('pre_get_posts', 'exclude_featured_posts_home');


*/

?>