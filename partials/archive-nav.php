<?php
/**
* Template Part: Archive Navigation
* This template fragment controls next/previous links for archive pages.
**/
?>
<?php if ( ! is_single() ) : ?>
<nav class="Pagination">
  <ul class="Pagination-list">
    <li class="Pagination-list-item"><?php previous_posts_link("Newer"); ?></li>
    <li class="Pagination-list-item"><?php next_posts_link("Older"); ?></li>
  </ul>
</nav>
<?php endif; ?>