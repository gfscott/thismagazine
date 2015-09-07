<?php
/**
* Template Part: Related Posts
* This template fragment displays the Related Posts content.
* Related posts are controlled by the Yet Another Related Posts Plugin.
* All presentational components are controlled through the YARPP template. Edit ../yarpp-template-this-2015.php
**/
?>
<?php if ( is_single() ) : ?>
  <?php related_posts(); ?>
<?php endif; ?>
