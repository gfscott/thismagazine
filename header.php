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
    
    <div class="Wrap-header">
    
      <div class="Wrap-branding">
        <a href="<?php bloginfo('url'); ?>">
          <header class="Branding">
            <h1 class="Branding-sitename"><?php bloginfo('name'); ?></h1>
            <p class="Branding-tagline"><?php bloginfo('description'); ?></p>
          </header>
        </a>
      </div>
      
      
      
      <div class="Wrap-featured">
        <nav class="Featured">
          
          
          <?php            
          // WP_Query arguments
          $args = array (
          	'post_type'         => array( 'post' ),
          	'post_status'       => array( 'published' ),
          	'posts_per_page'    => '4',
          	'featured'          => 'yes'
          );
          
          // The Query
          $featured = new WP_Query( $args );
          ?>          
          <?php if ( $featured->have_posts() ) : ?>
          	<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
          	  
          		<div class="Featured-article">
            		<a class="Featured-article-link" href="<?php the_permalink(); ?>">
              		<img src="http://unsplash.it/300/250/" alt="">
<!--
              		<?php if ( has_post_thumbnail() ) : ?>
                  	<?php the_post_thumbnail(); ?>
                  <?php endif; ?>
-->
              		<h2 class="Featured-article-hed"><?php the_title(); ?></h2>
            		</a>
          		</div>
          	
          	<?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
          	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          
          
          
        </nav>
        
      </div>
    
    </div>
    
    <div class="Wrap-menu">
      <a href="#" id="Nav-toggle" class="Nav-toggle">Menu</a>
        
        <?php 
          $primary_menu = array(
          	'theme_location'  => 'Primary Site Menu',
          	'menu'            => '',
          	'container'       => 'nav',
          	'container_class' => 'Nav-primary is-hidden',
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
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    