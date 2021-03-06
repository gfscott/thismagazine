<?php
/**
* Article Part: Widget Sidebar following article text
* A dynamic widget area that appears below the main text on a single article page.
**/
?>
<?php if ( is_single() && is_active_sidebar('article_after') ) : ?>
<div class="Wrap-sidebar Wrap-sidebar--article_after">
  <?php dynamic_sidebar( 'article_after' ); ?>
</div>
<?php endif; ?>

<div class="Wrap-sidebar Wrap-sidebar--donate">
  <script>var donateWidget = true;</script>
  <?php dynamic_sidebar( 'donate' ) ?>
</div>