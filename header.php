<!doctype html>
<html lang="en-CA" class="no-js">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo("name"); wp_title(" → ", true, "left"); ?></title>

    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style-5cf543e1fc.min.css">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-3071219-4', 'auto');
      ga('send', 'pageview');
    </script>

    <?php get_template_part('partials/ad-header-scripts'); ?>

    <script>
    /*! modernizr 3.2.0 (Custom Build) | MIT *
     * http://modernizr.com/download/?-svg !*/
    !function(e,n,s){function o(e,n){return typeof e===n}function a(){var e,n,s,a,t,f,r;for(var c in l)if(l.hasOwnProperty(c)){if(e=[],n=l[c],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(s=0;s<n.options.aliases.length;s++)e.push(n.options.aliases[s].toLowerCase());for(a=o(n.fn,"function")?n.fn():n.fn,t=0;t<e.length;t++)f=e[t],r=f.split("."),1===r.length?Modernizr[r[0]]=a:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=a),i.push((a?"":"no-")+r.join("-"))}}function t(e){var n=r.className,s=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+s+"no-js(\\s|$)");n=n.replace(o,"$1"+s+"js$2")}Modernizr._config.enableClasses&&(n+=" "+s+e.join(" "+s),c?r.className.baseVal=n:r.className=n)}var i=[],l=[],f={_version:"3.2.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var s=this;setTimeout(function(){n(s[e])},0)},addTest:function(e,n,s){l.push({name:e,fn:n,options:s})},addAsyncTest:function(e){l.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=f,Modernizr=new Modernizr,Modernizr.addTest("svg",!!n.createElementNS&&!!n.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var r=n.documentElement,c="svg"===r.nodeName.toLowerCase();a(),t(i),delete f.addTest,delete f.addAsyncTest;for(var u=0;u<Modernizr._q.length;u++)Modernizr._q[u]();e.Modernizr=Modernizr}(window,document);
    </script>

    <?php wp_head(); ?>

  </head>
  <body>

    <?php // get_template_part('partials/admin'); ?>

    <?php get_template_part('partials/ad-leaderboard'); ?>

    <?php get_template_part('partials/skybar'); ?>



    <div class="Wrap-header">

      <?php get_template_part('partials/branding'); ?>

      <?php get_template_part('partials/header-featured'); ?>

    </div>

    <?php get_template_part('partials/navigation'); ?>

    <?php get_template_part('partials/widgets-before-articles') ?>
