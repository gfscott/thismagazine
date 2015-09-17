<?php
/**
* Template Part: Archive Navigation
* This template fragment controls next/previous links for archive pages.
**/
?>
<?php if ( ! is_single() ) : ?>
<nav class="Pagination">
  <ul class="Pagination-list">
    <?php global $paged, $wp_query; ?>
    
    <?php if ( $paged > 1 ) : ?>
    <li class="Pagination-list-item Pagination-list-item--newer">
      <a href="<?php previous_posts(true); ?>" class="Pagination-link Pagination-link--newer Pagination-link--previous"><span class="Pagination-icon Pagination-icon--newer"></span> Newer</a>
    </li>
    <?php endif; ?>
    
    <?php 
      $max_page = $wp_query->max_num_pages; 
      $nextpage = intval($paged) + 1;
    ?>
    <?php if ( $nextpage <=$max_page ) : ?>
    <li class="Pagination-list-item Pagination-list-item--older">
      <a href="<?php next_posts(true); ?>" class="Pagination-link Pagination-link--older Pagination-link--next">Older <span class="Pagination-icon Pagination-icon--older"></span></a>
    </li>
    <?php endif; ?>
  </ul>
</nav>
<?php endif; ?>