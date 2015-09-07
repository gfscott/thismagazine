<?php
  
/**
* Template Part: Author
* This template fragment retrieves author metadata. This site uses custom content fields to manage the names of authors who don't have user accounts in the CMS.
* It also tracks their Twitter handles and their websites, if applicable.
**/
  
  // Open the .Author block  
  echo '<p class="Author">'; 
  
    // If the post has the guest author specified in a custom field, display that.
    
    if ( get_post_custom_values('guest_author_name')[0] != "" ) {
      echo '<span class="Author-name">' . get_post_custom_values('guest_author_name')[0] . '</span>';
    }
    
    // ...Otherwise fall back to the standard author provided by Wordpress.
    
    else {
      echo '<span class="Author-name">' . get_the_author() . '</span>';
    }
    
    //--------------------------------------------------------------------------------
    // WEBSITE
    // If the author has a website url included, insert it.
        
    if ( get_post_custom_values('guest_author_url')[0] != "" ) {
      
      $website = get_post_custom_values('guest_author_url')[0];     
      
      echo '<a class="Author-website" href="'.$website.'" target="_blank"><svg viewBox="0 0 100 100" class="icon icon-link Author-website--icon"><use xlink:href="#icon-link"></use></svg> Website</a>';
    }
    
    //--------------------------------------------------------------------------------
    // TWITTER
    // If the author has a Twitter handle included, insert it.
    
    if ( get_post_custom_values('guest_author_twitter')[0] != "" ) {
      
      $handle = get_post_custom_values('guest_author_twitter')[0];
      
      // If the Twitter handle has been entered in the CMS as '@example' instead of 'example', then chop off the '@'
      if ( $handle[0] = "@" ) {
        $handle = substr($handle, 1);
      }                  
            
      echo '<a class="Author-twitter" href="https://twitter.com/' . $handle . '" target="_blank"><svg viewBox="0 0 100 100" class="icon icon-twitter  Author-twitter--icon"><use xlink:href="#icon-twitter"></use></svg> @' . $handle . '</a>';
    }
    
    
    
  // Close the .Author block  
  echo '</p>';
    
  
?>