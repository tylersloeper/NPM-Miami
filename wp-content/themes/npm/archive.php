<?php get_header(); ?>

	<main class="cat" role="main">
		<div class="category">
		<!-- section -->

		<div class="articlesList wrapper">


<?php if(have_posts()) : while(have_posts()) : the_post() ;?>
            <article>
                <a class="readmore" href="<?php echo the_permalink()?>">
                    <div class="alImage">
                        <?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
                    </div>
                </a>

                    <div class="alContent">
                        <a class="readmore" href="<?php echo the_permalink() ?>">
                            <strong><?php echo wp_trim_words(get_the_title(), 4, ' ...')?> <span><?php the_field('sub_title')?></span></strong>
                       </a>
                        <div class="rcCinside">
                            <p><?php /// echo wp_trim_words(get_the_content(), 25, '...')?></p>
                            <a class="readmore" href="<?php echo the_permalink()?>"><?php
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
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </article>
            <?php endwhile; else: endif;?>
        </div>
	</div>


		<!--Section Category-->

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
