<div class="Wrap-menu">
  <a href="#" id="Nav-toggle" class="Nav-toggle">Menu</a>
    
    <div class="Wrap-nav-primary is-hidden">
    <?php 
      $primary_menu = array(
      	'theme_location'  => 'Primary Site Menu',
      	'menu'            => '',
      	'container'       => 'nav',
      	'container_class' => 'Nav-primary',
      	'container_id'    => '',
      	'menu_class'      => 'Nav-list',
      	'menu_id'         => '',
      	'echo'            => true,
      	'fallback_cb'     => '',
      	'before'          => '',
      	'after'           => '',
      	'link_before'     => '',
      	'link_after'      => '',
      	'depth'           => 2,
      	'walker'          => ''
      ); 
    ?>
    
    <?php wp_nav_menu( $primary_menu ); ?>
    
    <div class="Wrap-searchbar">
      <form class="Searchbar" action="/search">
        <input class="Searchbar-query" type="text" name="q">
        <button class="Searchbar-submit" type="submit">Search</button>
      </form>
    </div>
    
    </div>
    
</div>