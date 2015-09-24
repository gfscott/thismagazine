<?php
  
/**
* Template Part: Issue
* This template fragment retrieves Issue metadata, captured in the "issue" taxonomy. 
* Any post can be tagged as being part of an issue; if present, display it, and link to the issue's archive page
**/
?>
<?php
 
  $issues = get_the_terms( get_the_ID(), 'issue');
  
  if ( $issues && ! is_tax( 'issue' ) ) {
  
    foreach ( $issues as $issue ) {
      echo '<a class="Issue-link" href="' . get_term_link( $issue ) . '">' . $issue->name . '</a>';
    }
  }
  
?>