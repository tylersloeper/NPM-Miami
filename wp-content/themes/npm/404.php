<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<div class="wrapper">
			<!-- article -->
			<article id="post-404">
				<h1 class="center"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2 class="center">
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>
			</article>
			<!-- /article -->
		</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
