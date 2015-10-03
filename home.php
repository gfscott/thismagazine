<?php get_header(); ?>

<div class="Wrap-content Wrap-home">
    
  <?php if ( have_posts() ) : while ( have_posts() ) :  the_post(); ?>
  
  <?php $thumbYes = has_post_thumbnail(); ?>
  
  <div class="Home-article<?php if ( ! $thumbYes ) { echo " Home-article--nothumb"; } ?>">
    <a class="Home-link" href="<?php the_permalink(); ?>">
      <?php if ( $thumbYes ) { the_post_thumbnail('fixed300', array( 'class' => 'Home-thumbnail' ) ); } ?>
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
    
</div>

<?php get_footer(); ?>