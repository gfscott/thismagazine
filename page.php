<?php get_header(); ?>

<div class="Wrap-content Wrap-page">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h1 class="Page-hed"><?php the_title(); ?></h1>
          
    <div class="Page-text">
      <?php the_content(); ?>
    </div>
        
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>