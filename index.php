<?php get_template_part('parts/header'); ?>

	<div class="container">
		<div class="row">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('parts/footer'); ?>
