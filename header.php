<!doctype html>
<html lang="en-CA">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo("name"); wp_title(" → ", true, "left"); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    
    <script type='text/javascript'>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
      (function() {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        var useSSL = 'https:' == document.location.protocol;
        gads.src = (useSSL ? 'https:' : 'http:') +
          '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
      })();
    </script>
    
    <script type='text/javascript'>
      googletag.cmd.push(function() {
        googletag.defineSlot('/88049707/this_org_leaderboard_728x90', [728, 90], 'div-gpt-ad-1442538440237-0').addService(googletag.pubads());
        googletag.defineSlot('/88049707/this_org_big_box_300x250', [[300, 250], [300, 600]], 'div-gpt-ad-1442538440237-1').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>
    
    <?php // wp_head(); ?>
  </head>
  <body>
    <?php // include_once 'img/icons.svg'; ?>
    
    <?php get_template_part('partials/ad-leaderboard'); ?>
    
    <?php get_template_part('partials/skybar'); ?>
      
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
    
    <?php get_template_part('partials/navigation'); ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    