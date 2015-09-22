<div class="Wrap-skybar">        
  <?php 
    $secondary_menu = array(
    	'theme_location'  => 'Secondary Menu',
    	'menu'            => '',
    	'container'       => 'nav',
    	'container_class' => 'Skybar',
    	'container_id'    => '',
    	'menu_class'      => 'Skybar-list',
    	'menu_id'         => '',
    	'echo'            => true,
    	'fallback_cb'     => '',
    	'before'          => '',
    	'after'           => '',
    	'link_before'     => '',
    	'link_after'      => '',
    	'depth'           => -1,
    	'walker'          => ''
    ); 
  ?>
  <?php wp_nav_menu( $secondary_menu ); ?>
</div>