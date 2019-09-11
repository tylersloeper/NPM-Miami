<?php /* Template Name: site tnx */ get_header();
$FrontPage = get_option('page_on_front');$topImage = get_field('inside_top_image'); ?>

	<main role="main">


			
				<?php  $FrontPage = get_option('page_on_front'); ?>
				






<section class="row margin-auto"  id="strip2" <?php /// echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>
<div class="wrapper row">
<div class="center2">
<br /><br /><br /><br />
<h1>Thanks for writing</h1>
<br /><br /><br /><br />
</div>
</div>

		

</section>

					<!--strip7 post  slider from category--->


									<?php $bg_strip5 = get_field(bg_strip5,$FrontPage); ?>
									<div>
									<?php $rcID = get_field(select_recommindation_category,$FrontPage);

									if($rcID):?>
									 <section id="strip7" class="row" <?php echo $bg_strip5 ? 'style="background-image:url(' . $bg_strip5 .')"' : ' '?>>
									<div class="wrapper padding-clients2">
										<?php query_posts('cat=' . $rcID . '&posts_per_page=-1'); ?>
										<h2 class="sectionTitle"><?php /// echo get_cat_name($rcID) ?></h2>
										<h2 class="sectionTitle"><?php // echo get_cat_name($rcID) ?></h2>

										<div class="recs">
											<?php $i=0; if (have_posts()) : while (have_posts()) : the_post(); $i++; ?>
												<!---show post desctop-->
												<div class="rec  show-desctoppost">
													    <?php $icon_video = get_field('icon_video'); ?>
																	<div class="col-md-6 rcImage left no-padding" >
                                                        <div class="showimg" href="#multiCollapseExample1" role="button" aria-expanded="false" onclick="StartVideo2()" aria-controls="multiCollapseExample1">
                                                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
																								
                                                        	<div id="clientsvideo<?php echo $i; ?>"><?php the_post_thumbnail(120, 120, array('center', 'center')) ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class=" multi-collapse" id="multiCollapseExample<?php echo $i; ?>">
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
                                                            <h2 class="pageTitle"><?php  ///the_title()?></h2>
															<?php $title_add = get_field('title_add');?>
															<h2 class="pageTitle"><?php echo $title_add; ?></h2>
                                                            <?php the_content() ?>
                                                        </div>
                                                    </div>
												</div>
												<!--show /desctop-->


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
										<?php wp_reset_query() ?>
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
						</div>


						<!--strip8 post  close map--->
								
								   <section id="strip8" class="row" style="display:none">
										<div class="wrapper row">
											<div class="center2">
											<?php $strip7_partners_text=get_field('strip7_partners_text');  echo '<h2 class="title">' .$strip7_partners_text . '</h2>'  ?>
											</div>
											<div>
											<img src="<?php  echo get_template_directory_uri(); ?>/img/All-White.png" alt="Logo" >
											</div>
											 <div style="margin: 0 auto">	<a href="/partners/" class="">MORE</a> </div>
											<div class="clearfix"></div>
											</div>
										</section>


										<!--****from partner map*******--->

	<section id="map2" >
		<!--************************map main**************************-->

	   <div class="partner-padd">
				  <div class="wrapper width-grid" style="margin-top:120px;">
					<!--map picture-->
					<div class="center2">
					<?php $strip7_partners_text=get_field('strip7_partners_text');  echo '<h4 class="title">' .$strip7_partners_text . '</h4>'  ?>
					</div>
					  <div class="nomap-desktop">
					  <img src="<?php  echo get_template_directory_uri(); ?>/img/MapGifFix.gif" alt="Logo" >
					  </div>
					  <div class="nomap-mobile">
					 <img src="<?php  echo get_template_directory_uri(); ?>/img/MapMobileGifFix.gif" style="max-width: 100% !important;width:100%" alt="Logo" >

					 </div>
					  <?php if (have_rows('project_map_color')) : while (have_rows('project_map_color')) : the_row(); ?>
						  <!--s amerika-->
								   <div class="row">
								 <div class="col-5">
									 <div class="center cursor-pointer ">
										 <a class="btn  usa" data-toggle="modal" data-target="#exampleModal">
										 <!--img style="" src="<?php the_sub_field('icon_map') ?>"-->
											 <p  class="text-grid-tab text-days"><?php //the_sub_field('title_map1') ?></p>
										 </a>
									 </div>
											<!-- Modal -->
											<div class="modal fade" id="exampleModal-close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-close" aria-hidden="true">
											  <div class="modal-dialog" role="document">
												<div class="modal-content padding1">
												  <div class="modal-body">
													  <!--USA-->
											  <?php if (have_rows('popup_details')) : while (have_rows('popup_details')) : the_row(); ?>
															<div class="row tab-border popup-style" style="background-color:#2fc7f4;padding: 24px 0px;display:none">
															  <div class="col-md-5 col-12 align-self-center nopadding-right">
																	  <!--img class="map-height" src="<?php the_sub_field('distributername') ?>"-->
															  </div>
															   <div class="col-md-7 col-12" >
															   <div class="center cursor-pointer scroll-modal scroll-modal">
																<p style="text-align:left" class=""><?php the_sub_field('description_popup') ?></p>
															   </div>
															   </div>
													   </div>
											<?php endwhile; else: endif; ?>
												  </div>
												</div>
											  </div>
											</div>
												<!-- Modal -->
									 </div>
						<!--test  pomenat map-->




													   <!--Europe-->
														 <div class="col-5 no-padding ">
															<!--China-->
															 <div class="center cursor-pointer ">
																<a class="btn  china2" data-toggle="modal" data-target="#exampleModal12">
																<!--img style="" src="<?php the_sub_field('icon_map') ?>"-->
																<!--	 <p class="text-grid-tab">CHINA</p>-->
																</a>
															</div>
																   <!-- Modal -->
																   <div class="modal fade" id="exampleModal12-close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel12-close" aria-hidden="true">
																	 <div class="modal-dialog" role="document">
																	   <div class="modal-content padding2">
																	 <div class="modal-body">
																<?php if (have_rows('popup_details_china')) : while (have_rows('popup_details_china')) : the_row(); ?>
																					   <!--row3 -->
																				   <div class="row tab-border popup-style" style="background-color:#2fc7f4; padding: 24px 0px;display:none">
																					 <div class="col-md-5 col-12 align-self-center nopadding-right">
																							 <!--img class="map-height" src="<?php the_sub_field('distributername') ?>"-->
																					 </div>
																					  <div class="col-md-7 col-12" >
																					  <div class="center cursor-pointer scroll-modal">
																					   <p style="text-align:left" class=""><?php the_sub_field('description_popup') ?></p>
																					  </div>
																					  </div>
																			  </div>
																   <?php endwhile; else: endif; ?>
																		 </div>
																	   </div>
																	 </div>
																   </div>
																	   <!-- Modal -->

																	   <!--INDIA-->
																	 <div class="center cursor-pointer ">
																		<a class="btn india no-maptitle" data-toggle="modal" data-target="#exampleModal13">
																		<!--img style="" src="<?php the_sub_field('icon_map') ?>"-->
																		<!--	 <p class="text-grid-tab">INDIA</p>-->
																		</a>
																	</div>
																		   <!-- Modal -->
																		   <div class="modal fade" id="exampleModal13-close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel13-close" aria-hidden="true">
																			 <div class="modal-dialog" role="document">
																			   <div class="modal-content padding3">
																				 <div class="modal-body">
																 <?php if (have_rows('popup_details_india')) : while (have_rows('popup_details_india')) : the_row(); ?>
																						   <div class="row tab-border popup-style" style="background-color:#2fc7f4; padding: 24px 0px;display:none">
																							 <div class="col-md-5 col-12 align-self-center nopadding-right">
																									 <!--img class="map-height" src="<?php the_sub_field('distributername') ?>"-->
																							 </div>
																							  <div class="col-md-7 col-12" >
																							  <div class="center cursor-pointer scroll-modal">
																							   <p style="text-align:left" class=""><?php the_sub_field('description_popup') ?></p>
																							  </div>
																							  </div>
																					  </div>
																		   <?php endwhile; else: endif; ?>
																				 </div>
																			   </div>
																			 </div>
																		   </div>
																			   <!-- Modal -->

																<!-- / popup INDIA-->
															</div>
												   </div>

												   <div class="row">
													   <!--n amerika-->
													  <div class="col-5  text-left" style="">
															 <p class="text-grid-tab"><?php //the_sub_field('title_map2') ?></p>
													  </div>
													   <!--afrika-->
													  <div class="col-6 margin-map ">
														   <!--icon click  to Germany popup-->
														 <div class="center cursor-pointer ">
															<a class="btn germany " data-toggle="modal" data-target="#exampleModal14">
															<!--img style="" src="<?php the_sub_field('icon_map') ?>"-->
															<!--	 <p class="text-grid-tab">Europe</p>-->
															</a>
														</div>
															   <!-- Modal -->
															   <div class="modal fade" id="exampleModal14-close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel14-close" aria-hidden="true">
																 <div class="modal-dialog" role="document">
																   <div class="modal-content padding4">
																	 <div class="modal-body">
															 <?php if (have_rows('popup_details_germany')) : while (have_rows('popup_details_germany')) : the_row(); ?>
																				   <div class="row tab-border popup-style" style="background-color:#2fc7f4;  padding: 24px 0px;display:none">
																				 <div class="col-md-5 col-12 align-self-center nopadding-right">
																						 <img class="map-height" src="<?php the_sub_field('distributername') ?>">
																				 </div>
																				  <div class="col-md-7 col-12" >
																				  <div class="center cursor-pointer scroll-modal">
																				   <p style="text-align:left" class=""><?php the_sub_field('description_popup') ?></p>
																				  </div>
																				  </div>
																		  </div>
															   <?php endwhile; else: endif; ?>
																	 </div>
																   </div>
																 </div>
															   </div>
																   <!-- Modal -->

													<!-- / popup Germany-->

													<!--icon click THE NETHERLANDS popup-->
													<div class="center cursor-pointer ">
													 <a class="btn niderlandy " data-toggle="modal" data-target="#exampleModal15">
													 <!--img style="" src="<?php the_sub_field('icon_map') ?>"-->
														 <!-- <p class="text-grid-tab">THE NETHERLANDS</p>-->
													 </a>
													</div>
														<!-- Modal -->
														<div class="modal fade" id="exampleModal15-close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel15-close" aria-hidden="true">
															<div class="modal-dialog" role="document">
															<div class="modal-content padding5">
																<div class="modal-body">
													 <?php if (have_rows('popup_details_niderlandy')) : while (have_rows('popup_details_niderlandy')) : the_row(); ?>
																		<div class="row tab-border popup-style" style="background-color:#2fc7f4; display:none">
																			<div class="col-md-4 col-12 align-self-center">
																					<img class="map-height" src="<?php the_sub_field('distributername') ?>">
																			</div>
																			 <div class="col-md-8 col-12" >
																			 <div class="center cursor-pointer scroll-modal">
																			<p style="text-align:left" class=""><?php the_sub_field('description_popup') ?></p>
																			 </div>
																			 </div>
																	 </div>
														<?php endwhile; else: endif; ?>
																</div>
															</div>
															</div>
														</div>
															<!-- Modal -->

													<!-- / popup THE NETHERLANDS-->



											 <!--click icon popup THE Israel-->
											<div class="center cursor-pointer ">
											   <a class="btn israel " data-toggle="modal" data-target="#exampleModal16">
										<!--	   <img style="margin: -7px 0 0 -60px;" src="<?php //the_sub_field('icon_map') ?>">-->
												    <!--img style="" src="<?php the_sub_field('icon_map') ?>"-->
											<!--		<p class="text-grid-tab">ISRAEL</p>-->
											   </a>
										   </div>
												  <!-- Modal -->
												  <div class="modal fade" id="exampleModal16-close" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel16-close" aria-hidden="true">
													<div class="modal-dialog" role="document">
													  <div class="modal-content padding6">
														<div class="modal-body">
													<?php if (have_rows('popup_details_israel')) : while (have_rows('popup_details_israel')) : the_row(); ?>
																  <div class="row tab-border popup-style" style="background-color:#2fc7f4; padding: 24px 0px;display:none">
																	<div class="col-md-5 col-12 align-self-center nopadding-right">
																			<img class="map-height" src="<?php the_sub_field('distributername') ?>">
																	</div>
																	 <div class="col-md-7 col-12" >
																	 <div class="center cursor-pointer scroll-modal scroll-modal">
																	  <p style="text-align:left" class=""><?php the_sub_field('description_popup') ?></p>
																	 </div>
																	 </div>
															 </div>
												  <?php endwhile; else: endif; ?>
														</div>
													  </div>
													</div>
												  </div>
													  <!-- Modal -->
									   <!-- / *********************popup THE Israel*******************-->
													 </div>
												</div>
													 <?php endwhile; else: endif; ?>
											<!--   <div style="margin: 0 auto">	<a href="/partners/" class="">MORE</a> </div>-->
											  <div class="clearfix"></div>
											<!--map-->

								  </div>
								  <div class="margin-auto">	<a class="more-map" href="/partners/" class="">ALL</a> </div>

								</div>
							  <!--/ TAb 2-->
								  <!--**************************/map****************************-->
							</section>

																<!--end from partner map-->


						<?php /// $bg_stri4_main=get_field('bg_stri4_main'); ?>


							<section id="strip9">

									<?php  get_template_part('template-parts/our-partners-template'); ?>
									<div class="clearfix"></div>

							</section>
									<section id="contact-page">
									<?php  get_template_part('template-parts/contact-template'); ?>
									</section>

																	






							</main>




						<?php get_footer(); ?>

<script>
								$('.show-form').on('click', function (event){
									event.preventDefault();
									var elem = $(this); //writing $(this) every time is bad
									var target = $('div[data-target="'+elem.attr("data-target")+'"]');

									if(elem.hasClass('active')){
											//remove from this
											elem.removeClass("active");
											//close box
											target.slideUp("slow");
									} else { //toggle menu when clicking on some other link
											//remove from everywhere
											$('.show-form').removeClass('active');
											//slide every box up
											$('.collapse').slideUp("slow");
											//add to this only
											elem.addClass('active');
											//slide associated box down
											target.slideDown("slow");
									}
							});
							</script>
