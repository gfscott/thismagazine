<?php get_header(); ?>

<div class="Wrap-content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="Wrap-article">
    
    <?php get_template_part('partials/article-hed'); ?>
      
    <?php get_template_part('partials/share-tools'); ?>
    
    <div class="Wrap-text">
      <?php the_content(); ?>
    </div>
          
    <?php get_template_part('partials/share-tools'); ?>
    
    <?php get_template_part('partials/article-post-meta'); ?>
        
  </div>
  
  <?php get_template_part('partials/related') ?>

  <?php get_template_part('partials/widgets-after-articles') ?>
    
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <?php get_template_part('partials/comments'); ?>
  
  <?php get_template_part('partials/archive-nav'); ?>

</div>

<?php get_footer(); ?>