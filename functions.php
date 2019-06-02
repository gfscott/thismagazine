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
// Register Sidebars
function widget_zones() {

	$article_before_args = array(
		'id'            => 'article_before',
		'class'         => 'Sidebar-article_before',
		'name'          => 'Before Articles',
		'description'   => 'This widget area is added to every site page, just after the header.',
		'before_title'  => '<h2 class="Widget-header">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Widget">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $article_before_args );

	$article_after_args = array(
		'id'            => 'article_after',
		'class'         => 'Sidebar-article_after',
		'name'          => 'After Articles',
		'description'   => 'This widget area is added to the end of very post.',
		'before_title'  => '<h2 class="Widget-header">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Widget">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $article_after_args );

	$donate_args = array(
		'id'            => 'donate',
		'class'         => 'Sidebar-donate',
		'name'          => 'Donation appeal',
		'description'   => 'Link and text of the donation appeal that appears on every article page.',
		'before_title'  => '<h2 class="Widget-header Widget-donate-header">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Widget Widget-donate">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $donate_args );
  
  $footer_args = array(
		'id'            => 'footer_widgets',
		'class'         => 'Footer-widgets',
		'name'          => 'Footer',
		'description'   => 'The Footer widget zone',
		'before_title'  => '<h2 class="Footer-header">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Footer-segment">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $footer_args );

  $category_args = array(
		'id'            => 'category_widgets',
		'class'         => 'Home-categories',
		'name'          => 'Homepage Categories',
		'description'   => 'Category directory on the homepage',
		'before_title'  => '<h2 class="Home-category-hed">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Home-category-list">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $category_args );
	
	$cover_args = array(
		'id'            => 'cover_widget',
		'class'         => 'Home-cover',
		'name'          => 'Homepage Cover Image',
		'description'   => 'Display the latest cover on the homepage',
		'before_title'  => '<h2 class="Home-cover-hed">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Home-cover">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $cover_args );
	
	$shop_args = array(
		'id'            => 'shop_widget',
		'class'         => 'Shop-menu',
		'name'          => 'Alternate Subscription Options',
		'description'   => 'Other options for buying the magazine',
		'before_title'  => '<h2 class="Shop-menu-hed">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="Shop-menu">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $shop_args );
  
  
}
add_action( 'widgets_init', 'widget_zones' );

//==========================================================
// WP CRUFT
// Remove useless WordPress stuff from <head>
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// don't load the default gutenberg block css library since we don't use gutenberg
add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'wp-block-library' );
} );
// don't show the wordpress version
remove_action('wp_head', 'wp_generator');
// don't expose the xmlrpc endpoint
remove_action ('wp_head', 'rsd_link');
// remove wlwmanifest
remove_action( 'wp_head', 'wlwmanifest_link');

// completely disable wp-json access
// https://gist.github.com/timwhitlock/ef62645c41ca61718fb2be7adcb641c6
add_filter( 'rest_authentication_errors', function( $access ){
    return new WP_Error( 'rest_cannot_access', 'Bye', array( 'status' => 403 ) );
} );
// also remove actions added by wp-includes/default-filters.php
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header' );

// Dequeue yarpp Widgets CSS Style Sheet
// https://crunchify.com/deregister-yarpp-contact-form-7-css-wordpress-optimization/
add_action('wp_print_styles','crunchify_dequeue_header_styles');
function crunchify_dequeue_header_styles()
{
  wp_dequeue_style('yarppWidgetCss');
}
// Dequeue yarpp Related CSS Style Sheet
add_action('get_footer','crunchify_dequeue_footer_styles');
function crunchify_dequeue_footer_styles()
{
  wp_dequeue_style('yarppRelatedCss');
}

//==========================================================
// MENUS
// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'Primary Site Menu' => 'The most important links on the site.',
		'Secondary Menu' => 'Good links to have available, but not of primary importance',
		'Footer Menu' => 'Links about This Magazine that appear in the footer'
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


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