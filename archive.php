<?php get_header(); ?>

<div class="Wrap-content Wrap-archive">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="Wrap-archive-item">
    
    <?php get_template_part('partials/article-hed'); ?>
      
    <div class="Wrap-excerpt">
      <?php the_excerpt(); ?>
    </div>   
        
  </div>
  

    
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <?php get_template_part('partials/archive-nav'); ?>

</div>

<?php get_footer(); ?>