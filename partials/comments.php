<?php
/**
* Template Part: Comments
* This template fragment controls the display of the third-party Disqus widget. 
**/ 
  
  
?>
<?php if ( is_single() ) : ?>
<div class="Wrap-comments">
<aside class="Comments">
	<h2 class="Comments-header">Comments</h2>
  <div id="disqus_thread"></div>
  <script type="text/javascript">
      /* * * CONFIGURATION VARIABLES * * */
      var disqus_shortname = 'thismagazine';
      
      /* * * DON'T EDIT BELOW THIS LINE * * */
      (function() {
          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
      })();
  </script>
</aside>
</div>
<?php endif; ?>