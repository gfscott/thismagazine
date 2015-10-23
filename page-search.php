<?php get_header(); ?>

<div class="Wrap-page Wrap-search">
  
  <div class="Search">
    
    <?php $searchterm = $_GET["q"]; ?>
    
    <h1 class="Search-hed">Search: <span class="Search-query"><?php echo $searchterm; ?></span></h1>
      
      <div class="Search-results">

        <script>
          (function() {
            var cx = '016219809144295526682:j77gu7abwwm';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:searchresults-only></gcse:searchresults-only>
      
      </div>
    
  </div>
  
</div>

<?php get_footer(); ?>