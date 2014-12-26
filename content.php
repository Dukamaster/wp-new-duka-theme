<?php
/**
 * Normal template
 */
?>

<div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 col-sm-6 col-xs-12 post">
	<div class="thumbnail panel">
    <div class="caption">
      <div class="panel-body">
        <?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <div>
          <i class="mdi-social-person"></i>
          <?php the_author_posts_link(); ?>
        </div>
        <div>
          <i class="mdi-action-loyalty"></i>
          <?php the_category( ', ' ); ?>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <i class="mdi-device-access-time"></i>
      <time datetime="<?php the_date('Y-m-d hh:mm:ss'); ?>"><?php the_date(); ?></time>

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
