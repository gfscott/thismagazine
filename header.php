<!doctype html>
<html lang="en-CA">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo("name"); wp_title(" → ", true, "left"); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css">
    
    <?php get_template_part('partials/ad-header-scripts'); ?>
    
  </head>
  <body>
    
    <?php get_template_part('partials/admin'); ?>
    
    <?php get_template_part('partials/ad-leaderboard'); ?>
    
    <?php get_template_part('partials/skybar'); ?>
    
    
      
    <div class="Wrap-header">

      <?php get_template_part('partials/branding'); ?>
      
      <?php get_template_part('partials/header-featured'); ?>
    
    </div>
    
    <?php get_template_part('partials/navigation'); ?>
    
    <?php get_template_part('partials/widgets-before-articles') ?>