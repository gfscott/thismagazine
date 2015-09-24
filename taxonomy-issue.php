<?php get_header(); ?>

<div class="Wrap-content Wrap-archive Wrap-issue">
  
  <header class="Wrap-issue-header">
  
    <?php if (function_exists('z_taxonomy_image_url')) { 
        $issueImg = z_taxonomy_image_url(NULL, 'dynamic300');
        $issueImgUrl = z_taxonomy_image_url();
      }
    ?>
    <?php if ( $issueImg ) : ?>
      <figure class="Wrap-cover-image">
        <a class="Cover-link" href="<?php echo $issueImgUrl ?>" title="View larger image" target="_blank">
          <img class="Cover-image" src="<?php echo $issueImg; ?>" alt="<?php single_cat_title(); ?> issue of This Magazine">
        </a>
      </figure>  
    <?php endif; ?>
    
    <h1 class="Archive-label"><?php single_cat_title(); ?></h1>
    <?php if ( category_description() != "" ): ?>
      <div class="Wrap-archive-description">
        <?php echo category_description(); ?>
      </div>
    <?php endif; ?>
  
  </header>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class="Wrap-archive-item">
  
    <?php get_template_part('partials/article-hed'); ?>    
            
    <div class="Wrap-excerpt">
      <?php echo get_the_excerpt(); ?>
    </div>
    
  </div>   
  

    
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <?php get_template_part('partials/archive-nav'); ?>

</div>

<?php get_footer(); ?>