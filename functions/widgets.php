<?php
// Register widget for sidebar
function dukaweb_widgets_init() {
  register_sidebar( array(
    'name' => 'Right sidebar',
    'id' => 'right-sidebar',
    'description' => 'Appears in the sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s panel panel-info">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
  ) );
}
add_action('widgets_init', 'dukaweb_widgets_init');

//Add class to widget sidebars.
add_filter('widget_title', 'widget_title');
function widget_title( $title ) {
  if ( $title )
      $title = '<div class="panel-heading"><h3 class="panel-title">' . $title . '</h3></div>';
  $title .= '<div class="panel-body">';
  return $title;
}

//Wrap the close div class to widget sidebar
add_filter('dynamic_sidebar_params', 'dynamic_sidebar_params');
function dynamic_sidebar_params( $params ) {
  $params[0]['after_widget'] = '</div>' . $params[0]['after_widget'];
  return $params;
}