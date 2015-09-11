<?php            
// WP_Query arguments
$args = array (
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'published' ),
	'posts_per_page'         => '4',
	'featured'               => 'yes',
);

// The Query
$featured = new WP_Query( $args );

$posts = $featured->posts;


$output = [];

foreach ( $posts as $post ) {
  
  $id = $post->ID;
  $permalink = get_the_permalink($id);
  $title = $post->post_title;
  
  array_push($output, [$id, $permalink, $title]);
  
}




echo json_encode($output);





?>