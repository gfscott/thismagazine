<?php 
/*
YARPP Template: This2015 Custom YARPP Template
Author: Graham F. Scott
Description: The custom template to display related posts for the This2015 Theme.
*/
?>
<?php if ( have_posts() ) : ?>
<aside class="Related">
  <h2 class="Related-header">Read more of THIS</h2>
  <ul class="Related-list">
  	<?php while (have_posts()) : the_post(); ?>
  	<li class="Related-list-item"><a class="Related-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
  	<?php endwhile; ?>
  </ul>
</aside>
<?php else : ?>
<!-- No Related Posts Available -->
<?php endif; ?>