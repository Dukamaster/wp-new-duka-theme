<?php
/**
 * Normal template
 */
?>

<div id="post-<?php the_ID(); ?>" class="col-sm-4 post" style="height:350px;">
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
    <div class="caption">
      <?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      <i class="mdi-action-loyalty"></i>
      <?php the_category( ', ' ); ?>
<!--       <span>
        <?php the_tags( '#', ' #', '<br />' ); ?>  
      </span>
 -->      
    </div>

    <div class="post-footer">
      <i class="mdi-social-person"></i>
      <span class="author vcard">
        <a rel="author" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
      </span>
      <i class="mdi-device-access-time"></i>
      <time datetime="2014-12-06T04:56:17+00:00"><?php the_date(); ?></time>
      
      <p class="pull-right">
        <i class="fa fa-comment-o"></i>
        <?php
          if ( comments_open() )
          {
            comments_popup_link( __( '0', 'read' ), __( '1', 'read' ), __( '%', 'read' ) );
          }
        ?>
      </p>
      
    </div>
  </div>

</div>
