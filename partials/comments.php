<?php
/**
* Template Part: Comments
* This template fragment controls the display of the third-party Disqus widget. 
**/ 
  
  
?>
<?php if ( is_single() ) : ?>
<div class="Wrap-comments">
<a href="#" class="Comments-reveal">Show Comments</a>
<aside class="Comments is-hidden">
	<h2 class="Comments-header">Comments</h2>
  <div id="disqus_thread"></div>
  <script type="text/javascript">
      
  </script>
</aside>
</div>
<?php endif; ?>