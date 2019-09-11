


<div class="category">

    <div class="articlesList ">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" >

		<a  class="readmore">
			<div class="alImage fixhover-gallery-overlay fixhover-gallery-overlay-green">
				<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
			</div>
		</a>
			<div class="alContent">
				<!--kat must change link to popup-->
				<a class="readmore" href="<?php echo the_permalink() ?>">
					<strong><?php echo wp_trim_words(get_the_title(), 30, '')?> <span><?php the_field('sub_title')?></span></strong>
			   </a>
				   <!--must change link to popup-->
				<div class="rcCinside">
					<p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
					<a class="readmore" href="<?php echo the_permalink()?>">

						<?php
						$curlang = substr(get_bloginfo('language'),0,2);
						switch($curlang){
							case "en":
								echo 'More details';
								break;
							case "he":
								echo 'לפרטים';
								break;
						}
						?> </a>



		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>
</div>
</div>



	<!-- article -->
	<article>

    		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
