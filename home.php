<?php get_header(); ?>

<div class="Wrap-content Wrap-home">
  
  <?php //============== Featured Loop ====================================  ?>
  
  <?php            
    // WP_Query arguments
    $featured_args = array (
    	'post_type'         => array( 'post' ),
    	'posts_per_page'    => '4',
    	'featured'          => 'yes'
    );
    
    // The Query
    $featured = new WP_Query( $featured_args );
    ?>
    <?php 
      $postCounter = 0;
      $excludeFeatures = array();
    ?>
    <?php if ( $featured->have_posts() ) : ?>
    	<?php
      	while ( $featured->have_posts() ) : $featured->the_post();
        // increment the post counter
        $postCounter++;
        // add the post ID to the array of excluded posts so they don't show up twice on the page
        array_push($excludeFeatures, $post->ID);    
      ?>
    	  
    	  <?php $featureThumb = has_post_thumbnail(); ?>
    		<div class="Home-feature <?php echo "Home-feature--" . $postCounter; ?><?php if ( ! $featureThumb ) { echo " Home-feature--nothumb"; } ?>">
      		<a class="Home-feature-link" href="<?php the_permalink(); ?>">
        		<?php if ( has_post_thumbnail() ) : ?>
            	<?php the_post_thumbnail('fixed960'); ?>
            <?php endif; ?>
        		<h1 class="Home-feature-hed<?php if ( ! $featureThumb ) { echo " Featured-article-hed--nothumb"; } ?>"><?php the_title(); ?></h1>
        		<?php
          		// display author if it exists.
              $author = get_post_meta( get_the_ID(), 'guest_author_name', true );
              if ( ! empty( $author ) ) {
                echo '<p class="Home-author">' . $author . '</p>';
              } else {
                echo '<p class="Home-author">' . get_the_author() . '</p>';
              }
              $dek = get_post_meta( get_the_ID(), 'subhead', true );
                if ( ! empty( $dek ) ) {
                  echo '<h2 class="Home-feature-dek">' . $dek . '</h2>';
                } else {
                  echo '<span class="Home-feature-dek">' . get_the_excerpt() . '</span>';
                }
        		?>
      		</a>
    		</div>
    	
    	<?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
    	  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  
  <?php //============== Main Loop ====================================  ?>
  
  <?php
    
    // WP_Query arguments
    $home_args = array (
    	'post_type'         => array( 'post' ),
    	'post__not_in'      => $excludeFeatures
    );
    
    // The Query
    $home = new WP_Query( $home_args );
    
  ?>
    
  <?php if ( $home->have_posts() ) : while ( $home->have_posts() ) :  $home->the_post(); ?>
  
  <?php $thumbYes = has_post_thumbnail(); ?>
  
  <div class="Home-article<?php if ( ! $thumbYes ) { echo " Home-article--nothumb"; } ?>">
    <a class="Home-link" href="<?php the_permalink(); ?>">
      <?php if ( $thumbYes ) { the_post_thumbnail('fixed960', array( 'class' => 'Home-thumbnail' ) ); } ?>
      <h1 class="Home-hed"><?php the_title(); ?></h1>
      <?php
        
        // display author if it exists.
        $author = get_post_meta( get_the_ID(), 'guest_author_name', true );
        if ( ! empty( $author ) ) {
          echo '<p class="Home-author">' . $author . '</p>';
        } else {
          echo '<p class="Home-author">' . get_the_author() . '</p>';
        }
        
        // display subhead if it exists.
        $dek = get_post_meta( get_the_ID(), 'subhead', true );
        if ( ! empty( $dek ) ) {
          echo '<h2 class="Home-dek">' . $dek . '</h2>';
        } else {
          echo '<span class="Home-excerpt">' . get_the_excerpt() . '</span>';
        }
        
      ?>
    
      </a>       
  </div>
    
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <div class="Wrap-home-categories">
    <h1 class="Home-categories-umbrella">More topics in-depth</h1>
    <div class="Home-categories">
      <?php dynamic_sidebar( 'category_widgets' ); ?>
    </div>
  </div>
  
    
</div>

<?php get_footer(); ?>