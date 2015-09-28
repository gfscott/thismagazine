<?php get_header(); ?>

<div class="Wrap-content Wrap-home">
  
  <?php if ( is_home() && ! is_paged() ) : // only if it's the homepage ?>
  
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
    $featurenum = 0;
    
    // track the featured article IDs, so they can be excluded from the main loop later
    $excludeFeatures = array();
    
    ?>          
    <?php if ( $featured->have_posts() ) : ?>
    	<?php 
      	while ( $featured->have_posts() ) : $featured->the_post();
        $featurenum++;
        array_push($excludeFeatures, $post->ID);
      ?>
    	  
    		<div class="Home-featured<?php echo " Home-featured--" . $featurenum ; ?><?php if ( ! has_post_thumbnail() ) { echo " Home-featured--nothumb" ; } ?>">
      		<a class="Home-featured-link" href="<?php the_permalink(); ?>">
        		<?php if ( has_post_thumbnail() ) : ?>
            	<figure class="Home-featured-img">
            	<?php the_post_thumbnail('fixed960'); ?>
            	</figure>
            <?php endif; ?>
            
            <?php $issues = get_the_terms( get_the_ID(), 'issue');
              if ( $issues && ! is_tax( 'issue' ) ) {
              foreach ( $issues as $issue ) {
                  echo $issue->name;
                }
              }
            ?>
            
        		<h1 class="Home-featured-hed"><?php the_title(); ?></h1>
        		
        		<?php
              // display subhead if it exists.
              $dek = get_post_meta( get_the_ID(), 'subhead', true );
              if ( ! empty( $dek ) ) {
                echo '<h2 class="Home-featured-dek">' . $dek . '</h2>';
              }
            ?>
            
            <?php
              // display author if it exists.
              $author = get_post_meta( get_the_ID(), 'guest_author_name', true );
              if ( ! empty( $author ) ) {
                echo '<p class="Home-featured-author">' . $author . '</p>';
              } else { echo '<p class="Home-featured-author">' . get_the_author() . '</p>'; }
            ?>
        		
      		</a>
    		</div>
    	
    	<?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
    	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  
    
  <?php endif; // end homepage-only loop ?>
  
  <?php 
    
    // enable unique styling for the first post
    // https://wordpress.org/support/topic/styling-fist-post?replies=2
    $postnum = 0; 
    
    
    if ( have_posts() ) : while ( have_posts() ) :  the_post();
    
    // increment the counter
    $postnum++;
  ?>
  
  <div class="Home-article<?php if ( is_home() && ! is_paged() ) { echo " Home-article--" . $postnum ; } ?>">
    
    <h1 class="Home-hed"><a class="Home-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    
    <?php the_excerpt(); ?>
            
  </div>
    
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
    
</div>

<?php get_template_part('partials/archive-nav'); ?>


<?php get_footer(); ?>