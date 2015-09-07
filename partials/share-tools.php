<?php
/**
* Template Part: Social Sharing Tools
* This template fragment inserts social sharing tools. It’s inserted twice in each article page, at the top and bottom.
* In order to cut down on third-party scripts and try to keep things snappy, we use Jon Suh’s Responsible Share Links method
* https://jonsuh.com/blog/social-share-links/
**/
?>
<?php if ( is_single() ) :  // We’re only going to show this on single article pages ?>
<?php
  // Article metadata
  $url = get_permalink(); // permalink for the post
  $title = get_the_title(); // title of the post
  // Urlencoded versions, necessary for using in share URLs
  $encoded_title = urlencode($title);
  $encoded_url = urlencode($url);
  
  // Email settings
  $email_subject = urlencode($title . ' from This.org');
  $email_content = urlencode('An article from This Magazine you might be interested in: ');
  $email_content .= "%0D%0A%0D%0A";
  $email_content .= $encoded_title;
  $email_content .= "%0D%0A";
  $email_content .= $encoded_url;
  
?>
<aside class="Share">
  <a href="https://www.facebook.com/sharer/sharer.php?<?php echo $encoded_url ?>" class="Share-button Share-button--popup Share-button--facebook" target="_blank">Share</a>
	<a href="https://twitter.com/intent/tweet/?<?php echo 'text=' . $encoded_title . '&url=' . $encoded_url . '&via=thismagazine'; ?>" class="Share-button Share-button--popup Share-button--twitter" target="_blank">Tweet</a>
	<a href="mailto:?subject=<?php echo $email_subject; ?>&body=<?php echo $email_content; ?>" class="Share-button Share-button--email" target="_blank">Email</a>
	<a href="#" onclick="window.print()" class="Share-button Share-button--print">Print</a>
</aside>
<?php endif; ?>