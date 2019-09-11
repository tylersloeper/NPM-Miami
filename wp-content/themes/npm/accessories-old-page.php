<?php /* Template Name: Accessories Page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image');$bg_main_needles= get_field('bg_main_needles');
$category2_color= get_field('category2_color');
$category3_color= get_field('category3_color');
$category4_color= get_field('category4_color');
$category5_color= get_field('category5_color');
$category6_color= get_field('category6_color');
$category7_color= get_field('category7_color');
$category8_allcolor= get_field('category8_allcolor');/////for all select category tab 6

?>



	<main role="main">

            <!--    <section id="topImage" class="row">
                    <img class="img-full top-banner"  src="<?php echo $topImage ;?>">
                </section>-->

				<!--Top banner with select image and text-->
								<section id="needles" class="row" style="/*background-color: #eee8ea;*/background-image: url(https://npmsite.goil.co.il//wp-content/themes/npm/img/bg_strip5.jpg); background-repeat: no-repeat;">
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




				<section id="project_map">

					                <!--map section begin-->

					                <section id="project_nedles">
					                    <div class="row center">
					                    <div class="wrapper">
										<?php if (have_rows('project_colors')) : while (have_rows('project_colors')) : the_row(); ?>
					                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					                          <li class="nav-item nav-item-space">
					                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
												<!--	<img src="<?php //echo get_template_directory_uri(); ?>/img/11.png" alt="Logo" class="">-->
													 <img style="" src="<?php  the_sub_field('needles1') ?>">
													 <p style="margin-top: 19px;" class="margin-neddles4 margin-neddles"><?php  the_sub_field('title_needles1') ?></p>
												</a></li>
					                          <li class="nav-item nav-item-space">
					                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
													<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/11_1.png" alt="Logo" class="">-->
													<!--<p class="margin-neddles">EyeLiner</p>-->
													<img style=""  src="<?php  the_sub_field('needles2') ?>">
													<p class="margin-neddles"><?php  the_sub_field('title_needles2') ?></p>

												</a></li>
					                          <li class="nav-item nav-item-space">
					                            <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false">
													<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/22_1.png" alt="Logo" class="">
													<p class="margin-neddles">EyeBrow</p>-->
													<img  src="<?php  the_sub_field('needles3') ?>">
													<p class="margin-neddles"><?php  the_sub_field('title_needles3') ?></p>

												</a></li>
					                          <li class="nav-item nav-item-space">
					                            <a class="nav-link" id="pills-profile-tab3" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile3" aria-selected="false">
												<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/lips.png" alt="Logo" class="">
													<p class="margin-neddles">Lips</p>-->
													<img style="" src="<?php  the_sub_field('needles4') ?>">
													<p class="margin-neddles"><?php  the_sub_field('title_needles4') ?></p>

												</a></li>
					                          <li class="nav-item nav-item-space">
					                            <a class="nav-link" id="pills-profile-tab4" data-toggle="pill" href="#pills-profile4" role="tab" aria-controls="pills-profile4" aria-selected="false">
													<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/44_1.png" alt="Logo" class="">
													<p class="margin-neddles">Areola</p>-->
													<img style="" src="<?php  the_sub_field('needles5') ?>">
													<p class="margin-neddles"><?php  the_sub_field('title_needles5') ?></p>

												</a></li>
												<li class="nav-item nav-item-space">
												  <a class="nav-link" id="pills-profile-tab5" data-toggle="pill" href="#pills-profile5" role="tab" aria-controls="pills-profile5" aria-selected="false">
													<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/55_1.png" alt="Logo" class="">
													  <p class="margin-neddles">HFS</p>-->
													  <img style="" src="<?php  the_sub_field('needles6') ?>">
													  <p class="margin-neddles"><?php  the_sub_field('title_needles6') ?></p>

												  </a></li>
												<li class="nav-item nav-item-space">
												  <a class="nav-link" id="pills-profile-tab6" data-toggle="pill" href="#pills-profile6" role="tab" aria-controls="pills-profile6" aria-selected="false">
												<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/66_1.png" alt="Logo" class="">-->
													  <img  src="<?php  the_sub_field('all_needles1') ?>">
													  <p  class="margin-neddles">All</p>
												  </a></li>

					                        </ul>
											 <?php endwhile; else: endif; ?>
										</div>
					                <!---nav with nedles-->

					<div class="row" style="margin:0 auto;">
					   <div class="tab-content " id="pills-tabContent">
					                        <!--TAb 1-->
					        <!--*******************tab 1*******************************-->
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> <!--nav--->
                                <!--info 1 for nedles 1-->
                                <div class="" style="margin-top:80px">
												<!---show EyeShadow (property1)-->
							<!--**************************************************************************-->
							<?php /// if (have_rows('project_property1')) : while (have_rows('project_property1')) : the_row(); ?>
							   								  <!--row1 -->

	   									<!--category 2-->
	   								<section id="category_needs" class="category_needs">
	   								<?php query_posts('cat='.$category2_color.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
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
	   																			 <a class="readmore" href="<?php echo the_permalink()?>"><?php
	   																				 $curlang = substr(get_bloginfo('language'),0,2);
	   																				 switch($curlang){
	   																					 case "en":
	   																						 echo 'Details';
	   																						 break;
	   																					 case "he":
	   																						 echo 'קראי עוד';
	   																						 break;
	   																				 }
	   																				 ?> </a>
	   																		 </div>
	   																	 </div>
	   																	 <div class="clearfix"></div>
	   																 </article>
	   														 <?php endwhile; else: endif; ?>
	   												 </div><!-- / main Content-->
	   											 <?php wp_reset_query(); ?>
	   												 <div class="clearfix"></div>
	   									 </section>
	   											<!--/ category 2--->
	   			   							  <?php /// endwhile; else: endif; ?>
						                            </div>
					                                <!--nav end--->
												</div>

											 <!--***********************TAb2 nedles filter***************************-->

					                        <!--TAb 2  for  nedles-->
	                         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="" style="margin-top:80px">
									<!--Section filter-->
									<div id="filter" style="display:none">
										<div class="row inner-filter justify-content-around show-filter">
									  <div class="col-md-3 filter-border filter_for_category filter_for_category_top margin-filter" style="margin-top: 19px;">
											<?php echo do_shortcode( '[searchandfilter taxonomies="search,category,post_tag,post_format,shay_menu_tax,colors,color1,color2,color3""   fields="color1,color2,color3,category,post_tag,colors" hierarchical="1" add_search_param="1"]' ); ?>


										</div>
										</div>
									</div> <!--filter-->

													<!-- needs2-->
									<section id="category_needs" class="category_needs">
										<?php query_posts('cat='.$category3_color.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
														 <div class="articlesList">
															 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
																 <article class="">
																	 <a class="readmore" href="<?php echo the_permalink()?>">
																		 <div class="alImage">
																			 <?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
																		 </div>
																	 </a>
																		 <div class="alContent">
																				 <a class="readmore" href="<?php echo  the_permalink()?>">
																			 <strong><?php echo wp_trim_words(get_the_title(),30, '')?> <span><?php the_field('sub_title')?></span></strong></a>
																			 <div class="rcCinside">
																				 <p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
																				 <a class="readmore" href="<?php echo the_permalink()?>"><?php
																					 $curlang = substr(get_bloginfo('language'),0,2);
																					 switch($curlang){
																						 case "en":
																							 echo 'Details';
																							 break;
																						 case "he":
																							 echo 'קראי עוד';
																							 break;
																					 }
																					 ?> </a>
																			 </div>
																		 </div>
																		 <div class="clearfix"></div>
																	 </article>
															 <?php endwhile; else: endif; ?>
													 </div><!-- / main Content-->
												 <?php wp_reset_query(); ?>
													 <div class="clearfix"></div>
										 </section>
															<!--/ category--->
																 <!--needs 2-->
					                              </div>
					                             </div>
					                                <!--/ TAb 2-->


					      				  <!--************************tab 3 EyeBrow3**************************-->
		                                <!--TAb 3   EyeBrow3-->

		                           <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                    <div class="" style="margin-top:80px">
											<!--category needs3-->
									<section id="category_needs" class="category_needs">
									<?php query_posts('cat='.$category4_color.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
													 <div class="articlesList">
														 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
															 <article class="">
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
																			 <a class="readmore" href="<?php echo the_permalink()?>"><?php
																				 $curlang = substr(get_bloginfo('language'),0,2);
																				 switch($curlang){
																					 case "en":
																						 echo 'Details';
																						 break;
																					 case "he":
																						 echo 'קראי עוד';
																						 break;
																				 }
																				 ?> </a>
																		 </div>
																	 </div>
																	 <div class="clearfix"></div>
																 </article>
														 <?php endwhile; else: endif; ?>
												 </div><!-- / main Content-->
											 <?php wp_reset_query(); ?>
											 <div class="clearfix"></div>
									 </section>
									<!--/ category3--->
		                                    </div>
		                                  </div>
		                                <!--/ TAb 2-->
					                        <!--**********************Lips****************************-->
					                                <!--TAb 4 Lips-->
					                 <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab3">
                                     <div class="" style="margin-top:80px">
											<!--category needs4-->
									<section id="category_needs" class="category_needs">
									<?php query_posts('cat='.$category5_color.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
												 <div class="articlesList">
													 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
														 <article class="">
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
																		 <a class="readmore" href="<?php echo the_permalink()?>"><?php
																			 $curlang = substr(get_bloginfo('language'),0,2);
																			 switch($curlang){
																				 case "en":
																					 echo 'Details';
																					 break;
																				 case "he":
																					 echo 'קראי עוד';
																					 break;
																			 }
																			 ?> </a>
																	 </div>
																 </div>
																 <div class="clearfix"></div>
															 </article>
													 <?php endwhile; else: endif; ?>
											 </div><!-- / main Content-->
										 <?php wp_reset_query(); ?>
											 <div class="clearfix"></div>
									</section>
									<!--/ category--->
	                                    </div>
					                        <!-- /needs4-->
					               </div>
					                                <!--/ TAb 4-->
												    <!--**********************Areola filter****************************-->
				                                <!--TAb 4  Areola-->
					                      <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile-tab4">
	                                        <div class="" style="margin-top:80px">
												<!--category needs5-->
											<section id="category_needs" class="category_needs">
										<?php query_posts('cat='.$category6_color.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
														 <div class="articlesList">
															 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
																 <article class="">
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
																				 <a class="readmore" href="<?php echo the_permalink()?>"><?php
																					 $curlang = substr(get_bloginfo('language'),0,2);
																					 switch($curlang){
																						 case "en":
																							 echo 'Details';
																							 break;
																						 case "he":
																							 echo 'קראי עוד';
																							 break;
																					 }
																					 ?> </a>
																			 </div>
																		 </div>
																		 <div class="clearfix"></div>
																	 </article>
															 <?php endwhile; else: endif; ?>

													 </div><!-- / main Content-->
												 <?php wp_reset_query(); ?>
													 <div class="clearfix"></div>
											</section>

											<!--/ category--->
		                                         </div>
												</div><!--/ TAb 4-->

													  <!--TAb 5 neddes5-->
													    <!--**********************NFS****************************-->
							<div class="tab-pane fade" id="pills-profile5" role="tabpanel" aria-labelledby="pills-profile-tab5">
							<div class="" style="margin-top:80px">

									<!--category needs6-->
								<section id="category_needs" class="category_needs">
								<?php query_posts('cat='.$category7_color.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
											 <div class="articlesList">
												 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													 <article class="">
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
																	 <a class="readmore" href="<?php echo the_permalink()?>"><?php
																		 $curlang = substr(get_bloginfo('language'),0,2);
																		 switch($curlang){
																			 case "en":
																				 echo 'Details';
																				 break;
																			 case "he":
																				 echo 'קראי עוד';
																				 break;
																		 }
																		 ?> </a>
																 </div>
															 </div>
															 <div class="clearfix"></div>
														 </article>
												 <?php endwhile; else: endif; ?>

										 </div><!-- / main Content-->
									 <?php wp_reset_query(); ?>
										 <div class="clearfix"></div>
								</section>
												<!--/ category--->

							</div>
						</div><!--/ TAb 5-->

													<!--TAb 6  ALl begin-->

							 <!--**********************All Filter****************************-->
		<div class="tab-pane fade" id="pills-profile6" role="tabpanel" aria-labelledby="pills-profile-tab6">
			<div  style="margin-top:80px">

	   								<!---show All (needles)-->
	   			<!--**************************************************************************-->


								   <!--category all-->
			<section id="category_needs" class="category_needs">
				 <?php query_posts('cat='.$category8_allcolor.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
											<div class="articlesList">
												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													<article class="">
														<a class="readmore" href="<?php echo the_permalink()?>">
															<div class="alImage">
																<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
															</div>
														</a>
															<div class="alContent">
																	<a class="readmore" href="<?php echo  the_permalink()?>">
																<strong><?php echo wp_trim_words(get_the_title(), 30, ' ')?> <span><?php the_field('sub_title')?></span></strong></a>
																<div class="rcCinside">
																	<p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
																	<a class="readmore" href="<?php echo the_permalink()?>"><?php
																		$curlang = substr(get_bloginfo('language'),0,2);
																		switch($curlang){
																			case "en":
																				echo 'Details';
																				break;
																			case "he":
																				echo 'קראי עוד';
																				break;
																		}
																		?> </a>
																</div>
															</div>
															<div class="clearfix"></div>
														</article>
												<?php endwhile; else: endif; ?>

										</div><!-- / main Content-->
									<?php wp_reset_query(); ?>
										<div class="clearfix"></div>
						</section>
										<!---/ show All ()-->
						   		</div>
						   			<!--nav end--->
						  </div>
					  </div><!--/ TAb 6-->
                </div>
                    <!-- / end filter-->
                    </div>    <!---close wrapper--->
                </div>
            </section>
<!--/ filter nedles-->
	</section>


	<!--strip 5  post closed--> 	<!---for desktop gallery >1025-->
					<?php $bg_technologies=get_field('bg_technologies'); ?>
					  <section id="strip5" class="nogallery-desktop" <?php  echo $bg_technologies ? 'style="background-image:url(' . $bg_technologies .')"' : ' ' ?>>
							<div class="row">
								<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
								<?php echo do_shortcode('[gallery columns="5"  ids="144,143,142,140,139"]') ?>
								<div class="clearfix"></div>
							</div>
						</section>


				<!--for mobile slider strip 5 <1025--->
				 <section id="strip5" class="nogallery-mobile">
				<div class="">

						<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
					<?php //echo do_shortcode('[unitegallery gallery3]'); ?>
<?php echo do_shortcode('[instagramm]'); ?>
					  <div class="clearfix"></div>
				</div>
				</section>




				<section id="contact-page">
				<?php  get_template_part('template-parts/contact-template'); ?>
				</section>


	</main>


<?php get_footer(); ?>
