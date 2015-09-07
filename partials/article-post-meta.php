<?php
/**
* Template Part: Article metadata — Categories and Tags
* This template fragment controls display of metadata at the end of single article pages. It combines Categories and Tags into one list of taxonomical terms.
**/  
?>
<?php if ( is_single() ) : ?>
<aside class="Categories">
  <ul class="Categories-list">
    <li class="Categories-label">Topics:</li>
  <?php 
    
    $categories   = get_the_category();
    $tags         = get_the_tags();
        
    foreach($categories as $category){
      echo '<li class="Categories-list-item"><a class="Categories-link" href="'. esc_url( get_category_link( $category->term_id ) ) .'">' . $category->name . '</a></li>';
    }
    
    foreach($tags as $tag){
      echo '<li class="Categories-list-item"><a class="Categories-link" href="'. esc_url( get_tag_link( $tag->term_id ) ) .'">' . $tag->name . '</a></li>';
    }
      
  ?>
  </ul>
</aside>
<?php endif; ?>