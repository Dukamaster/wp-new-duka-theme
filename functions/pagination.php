<?php
	
function pagination() {
	global $wp_query;

  $big = 999999999; // need an unlikely integer
  $pages = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'prev_next' => false,
    'type'  => 'array',
    'prev_next'   => TRUE,
		'prev_text'    => __('«'),
		'next_text'    => __('»'),
  ) );

  if( is_array( $pages ) ) {
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    echo '<div class="col-md-12"><ul class="pagination pagination-lg">';
    foreach ( $pages as $page ) {
      if (strpos($page, "$paged") !== false) {
        echo "<li class='active'>$page</li>";
      }
      else {
        echo "<li class='disabled'>$page</li>";  
      }
    }
    echo '</ul></div>';
  }
}