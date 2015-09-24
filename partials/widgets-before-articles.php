<?php
/**
* Template Part: Widget Sidebar following site navigation
* A dynamic widget area that appears below the main text on a single article page.
**/
?>
<?php if ( is_active_sidebar( 'article_before' ) ) : ?>
  <div class="Wrap-sidebar Wrap-sidebar--article_before">
    <?php dynamic_sidebar( 'article_before' ); ?>
  </div>
<?php endif; ?>