<?php /* Template Name: client Page Template */
$FrontPage = get_option('page_on_front');
 ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>
	<main role="main">
					<!--strip7 post  slider from category--->
				<?php $strip5_img = get_field('strip5_img'); ?>
				<?php $bg_strip5 = get_field('bg_strip5'); ?>
            <section>
                <?php /// echo do_shortcode('[wcp-carousel id="1313"]'); ?>
            </section>


									<?php $rcID = get_field('select_recommindation_category');
									if($rcID):?>
								<section id="strip7" class="row"  <?php echo $bg_strip5 ? 'style="background-image:url(' . $bg_strip5 .')"' : ' '?>>
									<div class="padding-clients">

										<?php query_posts('cat=' . $rcID . '&posts_per_page=-1'); ?>
										<h2 class="sectionTitle"><?php /// echo get_cat_name($rcID) ?></h2>
                                        <div class="recs">

											<?php $i=0; if (have_posts()) : while (have_posts()) : the_post(); $i++; ?>
												<div class="rec">
													    <?php $icon_video = get_field('icon_video'); ?>
													<div class="col-md-6 rcImage left" >
                                                        <div class="showimg" href="#multiCollapseExample1" onclick="StartVideo2()" aria-controls="multiCollapseExample1">
                                                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
															<!--div class="icon-watch"><img  id="tgfr<?php echo $i; ?>" src="<?php echo $icon_video; ?>"></div-->
                                                        	<div id="clientsvideo<?php echo $i; ?>"><?php the_post_thumbnail(120, 120, array('center', 'center')) ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="" id="multiCollapseExample<?php echo $i; ?>">
                                                    <div class="">
                                                        <?php $video_post = get_field('video_post');
                                                       if ($video_post):?>
                                                          <div class="">
                                                              <?php //echo $video_post; ?>
                                                          </div>
                                                      <?php endif; ?>
                                                  </div>
                                                  </div>
													</div>

                                                    <div class="rcContent col-md-6 right">
                                                        <div class="rcCinside">
                                                            <h2 class="pageTitle"><?php  //the_title()?></h2>
                                                            <?php $title_add = get_field('title_add');?>
                                                              <h2 class="pageTitle"><?php echo $title_add; ?></h2>
                                                            <?php the_content() ?>
                                                        </div>
                                                    </div>
												</div>
											<?php endwhile; else: endif; ?>
										</div>

										<?php wp_reset_query() ?>
										<?php query_posts('cat=' . $rcID . '&posts_per_page=-1'); ?>
										<div class="recDots">
											<ul>
												<?php $dotes = 1;
												if (have_posts()) : while (have_posts()) : the_post(); ?>
													<li class="dot" onclick="currentSlide(<?php  echo $dotes++?>)"></li>
												<?php endwhile; else: endif; ?>
											</ul>
										</div>
										<?php wp_reset_query()  ?>
									</div><!-- / main Content-->
								</section>

								<script type="text/javascript">
									var slideIndex = 1;
									showSlides(slideIndex);

									// Next/previous controls
									function plusSlides(n) {
										showSlides(slideIndex += n);
									}

									// Thumbnail image controls
									function currentSlide(n) {
										showSlides(slideIndex = n);
									}

									function showSlides(n) {
										var i;
										var slides = document.getElementsByClassName("rec");
										var dots = document.getElementsByClassName("dot");
										if (n > slides.length) {
											slideIndex = 1
										}
										if (n < 1) {
											slideIndex = slides.length
										}
										for (i = 0; i < slides.length; i++) {
											slides[i].className = "rec";
										}
										//slideIndex++;
										for (i = 0; i < dots.length; i++) {
											dots[i].className = dots[i].className.replace(" active", "");
										}
										slides[slideIndex-1].className += " showing fadeInRight animated";
										dots[slideIndex-1].className += " active";
										setTimeout(showSlides, 1000);
									}

								</script>
							<?php endif;?>

<script>
/*function StartVideo(){
var vt = document.getElementById('techno').style.display = "none";
document.getElementById('multiCollapseExample6').innerHTML = '<div style="padding:20px"><iframe style="border:none;" src="https://www.youtube.com/embed/XIMLoLxmTDw?playlist=kCfVv3RsGw4c&amp;autoplay=1&amp;VQ=HD720&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;mute=1&amp;loop=1" width="100%" height="515"></iframe></div>';
}
 function StartVideo2(){
var vt = document.getElementById('clientsvideo1').style.display = "none";
var vt2 = document.getElementById('clientsvideo2').style.display = "none";
var vt3 = document.getElementById('tgfr1').style.display = "none";
var vt4 = document.getElementById('tgfr2').style.display = "none";

document.getElementById('multiCollapseExample1').innerHTML = '<iframe style="border:none;" src="https://www.youtube.com/embed/XIMLoLxmTDw?playlist=kCfVv3RsGw4c&amp;autoplay=1&amp;VQ=HD720&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;mute=1&amp;loop=1" width="100%" height="515"></iframe>';
document.getElementById('multiCollapseExample2').innerHTML = '<iframe style="border:none;" src="https://www.youtube.com/embed/XIMLoLxmTDw?playlist=kCfVv3RsGw4c&amp;autoplay=1&amp;VQ=HD720&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;mute=1&amp;loop=1" width="100%" height="515"></iframe>';
}*/
                                           </script>
     
	</main>
