<!doctype html>
<html lang="en-CA">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo("name"); wp_title(" → ", true, "left"); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style-7804afc3d0.min.css">
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-3071219-4', 'auto');
      ga('send', 'pageview');
    </script>
        
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