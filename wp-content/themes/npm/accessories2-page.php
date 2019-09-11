<?php /* Template Name: Accessories2 Page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image');$bg_main_needles= get_field('bg_main_needles');


$accessories_category= get_field('accessories_category');

?>

<style>
/*.btn{display:none;}*/
.btn-gd-add-mylist{display: block;    margin: 0 auto;}
.rcCinside > .readmore{padding-left:0;}
.btn-gd-remove-mylist{max-width: none;width: 180px;margin: -10px 0 0 0;}
.category_needs .articlesList article{width: 18%;}
</style>

	<main role="main">

            <!--    <section id="topImage" class="row">
                    <img class="img-full top-banner"  src="<?php echo $topImage ;?>">
                </section>-->

				<!--Top banner with select image and text-->
								<section id="needles" class="row" style="/*background-color: #eee8ea;*/background-image: url(https://npmsite.goil.co.il//wp-content/themes/npm/img/bg_strip5.jpg); background-repeat: no-repeat;background-size:100%">
									<div class="row wrapper">
										<div class="col-7">
											 <img class="" src="<?php echo $bg_main_needles ;?>">
										</div>
									    <div class="col-5 center align-self-center">
												<span class="wrapper"> <?php $text_needles_top=get_field('text_needles_top');  echo '<h2 class="title">' .$text_needles_top . '</h2>'  ?></span>
										</div>
									</div>
								</section>
				<!--/ Top banner with select image and text-->



				<!--category 2-->
			<section id="category_needs" class="category_needs">
			<?php query_posts('cat='.$accessories_category.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
					<h2 class="class-h"><?php single_cat_title(); ?></h2>
								 <div class="articlesList">
									 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
										 <article >
											 <a class="readmore" href="<?php echo the_permalink()?>">
												 <div class="alImage">
													 <?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
												 </div>
											 </a>
												 <div class="alContent">
													<a class="readmore" href="<?php echo  the_permalink()?>">
													 <strong><?php echo wp_trim_words(get_the_title(), 30, '')?> <span><?php the_field('sub_title')?></span></strong></a>
													 <div class="rcCinside">
														 <p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
														 <div class="col readmore">
																	<a class="btn">
																		<?php echo do_shortcode( "[show_gd_mylist_btn]" ); ?>
																	</a>
																	</div>
													 </div>
												 </div>
												 <div class="clearfix"></div>
											 </article>
									 <?php endwhile; else: endif; ?>
							 </div><!-- / main Content-->
						 <?php wp_reset_query(); ?>
							 <div class="clearfix"></div>
				 </section>

				<!--for mobile slider strip 5 <1025--->
				 <!--section id="strip5" class="nogallery-mobile">
				<div class="">

						<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
					<?php //echo do_shortcode('[unitegallery gallery3]'); ?>
<ul id='insta'></ul>
					  <div class="clearfix"></div>
				</div>
				</section-->




				<section id="contact-page">
				<?php  get_template_part('template-parts/contact-template'); ?>
				</section>


	</main>


<?php get_footer(); ?>
