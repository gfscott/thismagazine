<div class="Wrap-featured">
  <nav class="Featured">
    
    <?php if ( ! is_home() && $paged != 1 ) : ?>
    
    <?php
      $excludeThisPage = array();
      array_push($excludeThisPage, $post->ID);
    ?>
        
    <?php            
    // WP_Query arguments
    $args = array (
    	'post_type'         => array( 'post' ),
    	'posts_per_page'    => '4',
    	'featured'          => 'yes',
    	'post__not_in'      => $excludeThisPage
    );
    
    // The Query
    $featured = new WP_Query( $args );
    ?>          
    <?php if ( $featured->have_posts() ) : ?>
    <?php for ( $i = 1; $i <=4; $i++ ) { $featured->the_post(); // `posts_per_page` was breaking so a hardcoded `for` loop was necessary ?>
    		<div class="Featured-article">
      		<a class="Featured-article-link" href="<?php the_permalink(); ?>">
        		<?php if ( has_post_thumbnail() ) : ?>
            	<?php the_post_thumbnail(); ?>
            <?php endif; ?>
        		<h2 class="Featured-article-hed<?php if ( ! has_post_thumbnail() ) { echo " Featured-article-hed--nothumb"; } ?>"><?php the_title(); ?></h2>
      		</a>
    		</div>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
    	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
    <?php endif; ?>
    
  </nav>
  
</div>