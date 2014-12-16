<?php
/**
 * Normal template
 */
?>

<div id="post-<?php the_ID(); ?>" class="col-sm-4" style="height:450px;">
	<div class="thumbnail panel">
		<?php
      if ( has_post_thumbnail() )
      {
        the_post_thumbnail( 'full', array( 'alt' => get_the_title(),
           'title' => get_the_title(), 'class'=>'img-responsive') );
      }
      else {
        echo '<img class="img-responsive" src="http://placehold.it/700x400" alt="">';
      }
    ?>
    <?php the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    <div class="post-meta">
      By 
      <span class="author vcard">
        <a rel="author" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
      </span>
       • 
      <time datetime="2014-12-06T04:56:17+00:00"><?php the_date(); ?></time>
    </div>
  </div>

</div>
