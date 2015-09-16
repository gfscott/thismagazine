<div class="Wrap-featured">
  <nav class="Featured">
    
    <?php            
    // WP_Query arguments
    $args = array (
    	'post_type'         => array( 'post' ),
    	'post_status'       => array( 'published' ),
    	'posts_per_page'    => '4',
    	'featured'          => 'yes'
    );
    
    // The Query
    $featured = new WP_Query( $args );
    ?>          
    <?php if ( $featured->have_posts() ) : ?>
    	<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
    	  
    		<div class="Featured-article">
      		<a class="Featured-article-link" href="<?php the_permalink(); ?>">
        		<?php if ( has_post_thumbnail() ) : ?>
            	<?php the_post_thumbnail(); ?>
            <?php endif; ?>
        		<h2 class="Featured-article-hed<?php if ( ! has_post_thumbnail() ) { echo " Featured-article-hed--nothumb"; } ?>"><?php the_title(); ?></h2>
      		</a>
    		</div>
    	
    	<?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
    	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
    
    
  </nav>
  
</div>