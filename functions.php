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