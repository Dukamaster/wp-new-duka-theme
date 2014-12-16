<?php
//Register new menu.
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Add class active to menu-active
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

//Add search box to menu
add_filter('wp_nav_menu_items','my_search_form');
function my_search_form($items){
  $form = '<form role="search" method="get" class="navbar-form navbar-right" action="' . home_url( '/' ) . '" >
		<input type="text" class="form-control col-lg-8" placeholder="Search" required value="' . get_search_query() . '" name="s" id="s" />
		<span class="material-input"></span>
		</form>';

  return $items . $form;
}
