<?php get_header(); ?>

<div role="main">
	<!-- section -->
	<div>

		<?php /* The loop */ ?>
		<?php get_template_part( 'templates/page', 'home' ); ?>

		<?php get_template_part( 'pagination' ); ?>

	</div>
	<!-- /section -->
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
