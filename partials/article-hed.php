<?php
/**
* Template Part: Article Header
* This template fragment manages the headline, author, date, and other article metadata that precedes article content.
**/
?>
<header class="Article-header">
  <time class="Article-pubdate" datetime="<?php echo get_the_date('c')?>" pubdate><?php echo get_the_date("F j, Y"); ?></time>   
  <?php get_template_part('partials/article-issue'); ?>
  
  <?php if ( is_single() ) : ?>
    <h1 class="Article-hed" itemprop="title"><?php the_title(); ?></h1>
  <?php else : ?>
    <h1 class="Article-hed" itemprop="title"><a href="<?php the_permalink(); ?>" class="Article-hed-link"><?php the_title(); ?></a></h1>
  <?php endif; ?>
  <?php
    // display subhead if it exists.
    $dek = get_post_meta( get_the_ID(), 'subhead', true );
    if ( ! empty( $dek ) ) {
      echo '<h2 class="Article-dek">' . $dek . '</h2>';
    }
  ?>  
  <?php get_template_part('partials/author'); ?>
</header>