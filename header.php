<!doctype html>
<html lang="en-CA">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo("name"); wp_title(" → ", true, "left"); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    
    <?php // wp_head(); ?>
  </head>
  <body>
    <?php // include_once 'img/icons.svg'; ?>
    
    <?php get_template_part('partials/ad-leaderboard'); ?>
    
    <div class="Wrap-skybar">        
        <?php 
          $secondary_menu = array(
          	'theme_location'  => 'Secondary Menu',
          	'menu'            => '',
          	'container'       => 'nav',
          	'container_class' => 'Skybar',
          	'container_id'    => '',
          	'menu_class'      => 'Skybar-list',
          	'menu_id'         => '',
          	'echo'            => true,
          	'fallback_cb'     => '',
          	'before'          => '',
          	'after'           => '',
          	'link_before'     => '',
          	'link_after'      => '',
          	'depth'           => -1,
          	'walker'          => ''
          ); 
        ?>
        
        <?php wp_nav_menu( $secondary_menu ); ?>
    </div>
    
    
    <div class="Wrap-header">
    
      <div class="Wrap-branding">
        <a href="<?php bloginfo('url'); ?>">
          <header class="Branding">
            <h1 class="Branding-sitename"><?php bloginfo('name'); ?></h1>
            <p class="Branding-tagline"><?php bloginfo('description'); ?></p>
          </header>
        </a>
      </div>
      
      <?php get_template_part('partials/header-featured'); ?>
    
    </div>
    
    <div class="Wrap-menu">
      <a href="#" id="Nav-toggle" class="Nav-toggle">Menu</a>
        
        <div class="Wrap-nav-primary is-hidden">
        <?php 
          $primary_menu = array(
          	'theme_location'  => 'Primary Site Menu',
          	'menu'            => '',
          	'container'       => 'nav',
          	'container_class' => 'Nav-primary',
          	'container_id'    => '',
          	'menu_class'      => 'Nav-list',
          	'menu_id'         => '',
          	'echo'            => true,
          	'fallback_cb'     => '',
          	'before'          => '',
          	'after'           => '',
          	'link_before'     => '',
          	'link_after'      => '',
          	'depth'           => -1,
          	'walker'          => ''
          ); 
        ?>
        
        <?php wp_nav_menu( $primary_menu ); ?>
        
        <div class="Wrap-searchbar">
          <form class="Searchbar" action="/search">
            <input class="Searchbar-query" type="text" name="q">
            <button class="Searchbar-submit" type="submit">Search</button>
          </form>
        </div>
        
        </div>
        
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    