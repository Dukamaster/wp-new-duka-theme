<div class="col-lg-9">
	<?php if ( function_exists('yoast_breadcrumb') ) {
    $breadcrumbs = yoast_breadcrumb( '<ol class="breadcrumb"><li>', '</li></ol>', false );
    echo str_replace( '|', ' <span class="divider">/</span></li><li>', $breadcrumbs );
  } ?>
	<div class="panel panel-body">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" itemscope="" itemtype="http://schema.org/BlogPosting">
				<header class="article-header">
					<h1 class="post-title entry-title"><?php the_title(); ?></h1>
					<!-- Author -->
<!-- 		      <p class="lead">
		          by <a href="#"><?php the_author(); ?></a>
		      </p> -->
		      <p class="article-time"><i class="mdi-device-access-time"></i> Post on <?php the_date(); ?> at <?php the_time(); ?></p>
				</header>
				<hr>
				<section class="article-body">
					<?php the_content(); ?>
				</section>
			</article>
		<?php endwhile; // end of the loop. ?>
	</div>
				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
</div>
