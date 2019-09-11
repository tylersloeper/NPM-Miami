
<?php get_header();
    $topImage = get_field('inside_top_image');

?>

	<main role="main">
		<!-- section -->
		<section>
            <div class="wrapper" style="text-align:center">
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="saImage <?php $field = get_field_object('select_a_side');
                $value = $field['value'];
                if(get_field_object('select_a_side'));
                echo $value.'-side'; ?>" >
                    <?php if ( has_post_thumbnail() ) {the_post_thumbnail('postImage');}?>
                    <div class="clearfix"></div>
                </div>
				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
