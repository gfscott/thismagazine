<?php get_header(); ?>

<div class="Wrap-content Wrap-archive">
  
  <?php if ( is_category() || is_tag() ) : ?>
  
    <h1 class="Archive-label"><?php single_cat_title(); ?></h1>
  
  <?php elseif ( is_date() ) : ?>
    
    <h1 class="Archive-label">Published <?php
      
      if ( is_day() )   { echo "on " . "<time datetime=" . get_the_date("Y-m-d") . ">" . get_the_date("F j, Y"); }
      if ( is_month() ) { echo "in " . "<time datetime=" . get_the_date("Y-m") . ">" . get_the_date("F Y"); } 
      if ( is_year() )  { echo "in " . "<time datetime=" . get_the_date("Y") . ">" . get_the_date("Y"); }
      
    ?></h1>
  
  <?php endif; ?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="Wrap-archive-item">
  
    <?php get_template_part('partials/article-hed'); ?>    
            
    <div class="Wrap-excerpt">
      <?php echo get_the_excerpt(); ?>
    </div>
    
  </div>
</a>    
  

    
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <?php get_template_part('partials/archive-nav'); ?>

</div>

<?php get_footer(); ?>