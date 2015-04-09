<?php
/**
 * The template for displaying all single posts.
 *
 * @package duka
 */
?>

<?php get_template_part('parts/header'); ?>

<div class="container-fluid">
	<div class="row">	
		<?php get_template_part( 'content', 'post' ); ?>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_template_part('parts/footer'); ?>
