<?php
/**
 *
 */
?>

<div id="post-<?php the_ID(); ?>" class="col-sm-4">
	<div class="thumbnail panel">
    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
    <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
  </div>

</div>
