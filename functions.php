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

//==========================================================
// WIDGETS

$args = array(
		'id'            => 'footer_widgets',
		'class'         => 'Footer-widgets',
		'name'          => 'Footer',
		'description'   => 'The Footer widget zone',
		'before_title'  => '<h2 class="Footer-header Footer-header--one">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Footer-segment Footer-segment--one">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $args );



//==========================================================
// THUMBNAILS
// Control thumbnail sizes
//https://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 160, 90, true );
add_image_size('dynamic300', 300, 9999);
add_image_size('fixed300', 300, 170, true);
add_image_size('dynamic960', 960, 9999);
add_image_size('fixed960', 960, 540, true);






?>



