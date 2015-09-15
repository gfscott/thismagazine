<?php
/**
* Template Part: Archive Navigation
* This template fragment controls next/previous links for archive pages.
**/
?>
<?php if ( ! is_single() ) : ?>
<nav class="Pagination">
  <ul class="Pagination-list">
    <li class="Pagination-list-item Pagination-list-item--newer">
      <a href="<?php previous_posts(true); ?>" class="Pagination-link Pagination-link--newer Pagination-link--previous"><span class="Pagination-icon Pagination-icon--newer"></span> Newer</a>
    </li>
    <li class="Pagination-list-item Pagination-list-item--older">
      <a href="<?php next_posts(true); ?>" class="Pagination-link Pagination-link--older Pagination-link--next">Older <span class="Pagination-icon Pagination-icon--older"></span></a>
    </li>
  </ul>
</nav>
<?php endif; ?>