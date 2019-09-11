<?php /* Template Name: Product details Page Template */ get_header();

$topImage = get_field('inside_top_image');
$bg_main_post= get_field('bg_main_post');
 ?>
	<main role="main">

                <section id="topImage" class="row" style="display:none">
                    <img class="img-full top-banner" src="<?php echo $topImage ;?>">

                </section>
<!--Top banner with select image and text-->
				<section id="product_details" class="row" style="background-color: #eee8ea;">
					<div class="row wrapper">
						<div class="col-7">
							 <img class="" src="<?php echo $bg_main_post ;?>">
						</div>
					    <div class="col-5 center align-self-center" style="margin-top: 50px;">
								<span class="wrapper"> <?php $our_color=get_field('our_color');  echo '<h2 class="title">' .$our_color . '</h2>'  ?></span>
						</div>
					</div>
				</section>
<!--/ Top banner with select image and text-->


				<!--strip 5 post-->
				      <?php $bg_stri7_main=get_field('bg_stri7_main'); ?>
							<section id="strip6_product" class="row">
								<div>
									<?php $post_object = get_field('strip5_post');
									$post_title = $post_object->post_title;
									$postID = $post_object->ID;
									$content_post = get_post($postID);
									$content = $content_post->post_content;
									$content = apply_filters('the_content', $content);
									$content = str_replace(']]>', ']]&gt;', $content);
									?>
									<div class="maContent col-md-9 right inner-padd">
										<h2><?php echo $post_title ?></h2>
										<p><?php echo $content; ?></p>

										<a style="display:none" class="readmore" href="<?php echo the_permalink($postID) ?>">קראו עוד >></a>
									</div>
									<div class=" col-md-3" >
										<?php  the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
										 <img class="img-bottle" src="<?php echo $bg_stri7_main ;?>">
									</div>
								</div>
								<div class="clearfix"></div>
							</section>


							<section id="related-product">
							<h2>RELATED PRODUCTS</h2>
							</section>

							<section id="contact-page">
							<?php  get_template_part('template-parts/contact-template'); ?>
							</section>

	</main>


<?php get_footer(); ?>
