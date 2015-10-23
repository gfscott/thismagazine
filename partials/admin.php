<?php if ( is_user_logged_in() ) : ?>
    <?php $editlink = get_edit_post_link( get_the_id() ); ?> 
    <div class="Admin">
      <a class="Admin-dashboard-link" href="/wp-admin/">Dashboard</a>
      <a class="Admin-new-post" href="/wp-admin/post-new.php">New Post</a>
      <?php if ( is_singular() ) : ?>          
      <a class="Admin-edit-link" href="<?php echo $editlink ?>">Edit this post »</a>
      <?php endif; ?>
    </div>
<?php endif; ?>