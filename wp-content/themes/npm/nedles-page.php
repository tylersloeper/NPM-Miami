<?php /* Template Name: Nedles Page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image');$bg_main_needles= get_field('bg_main_needles');
$category1= get_field('category1');
$category2= get_field('category2');
$category3= get_field('category3');
$category4= get_field('category4');
$category5= get_field('category5');
$category6= get_field('category6');
$category7= get_field('category7');
$category72= get_field('category72_copy');
$category8= get_field('category8');/////for all select category tab 6

?>
<style>
/*.btn{display:none;}*/
.btn-gd-add-mylist{display: block;    margin: 0 auto;}
.rcCinside > .readmore{padding-left:0;}
.btn-gd-remove-mylist{max-width: none;width: 180px;margin: -10px 0 0 0;}
</style>
	<main role="main">

            <!--    <section id="topImage" class="row">
                    <img class="img-full top-banner"  src="<?php echo $topImage ;?>">
                </section>-->

				<!--Top banner with select image and text-->
								<section id="needles2" class="row needles2" style="/*background-color: #eee8ea;*/background-image: url(https://npmsite.goil.co.il//wp-content/themes/npm/img/background.jpg); background-repeat: no-repeat;">
									<div class="row ">
										<div class="col-7">
											 <img style="margin-left: 3%;" class="" src="<?php echo $bg_main_needles ;?>">
										</div>
									    <div class="col-5 center align-self-center">
												<span class="wrapper"> <?php $text_needles_top=get_field('text_needles_top');  echo '<h2 class="title">' .$text_needles_top . '</h2>'  ?></span>
										</div>
									</div>
								</section>
				<!--/ Top banner with select image and text-->

<style>
.sfas{dispaly:block;}
</style>
				<section id="project_map">

					                <section id="project_nedles">
					                    <div class="row center">

					                    <div class="wrapper">

<?php if (have_rows('project_needles')) : while (have_rows('project_needles')) : the_row(); ?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li class="nav-item nav-item-space">
<a class="nav-link clickcolor1" id="pills-home-tab" data-target="t1">
<!--	<img src="<?php //echo get_template_directory_uri(); ?>/img/11.png" alt="Logo" class="">-->
<img style="" src="<?php//  the_sub_field('needles1') ?>">
<p style="" class="margin-neddles margin-neddles4"><?php  the_sub_field('title_needles1') ?></p>
</a></li>
<li class="nav-item nav-item-space">
<a class="nav-link  clickcolor2" id="pills-profile-tab" data-target="t2">
<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/11_1.png" alt="Logo" class="">-->
<!--<p class="margin-neddles">EyeLiner</p>-->
<img style=""  src="<?php//  the_sub_field('needles2') ?>">
<p class="margin-neddles"><?php  the_sub_field('title_needles2') ?></p>

</a></li>
<li class="nav-item nav-item-space">
<a class="nav-link clickcolor3" id="pills-profile-tab2" data-target="t3">
	<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/22_1.png" alt="Logo" class="">
<p class="margin-neddles">EyeBrow</p>-->
<img  src="<?php  //the_sub_field('needles3') ?>">
<p class="margin-neddles"><?php  the_sub_field('title_needles3') ?></p>

</a></li>
<li class="nav-item nav-item-space">
<a class="nav-link clickcolor4" id="pills-profile-tab3" data-target="t4">
<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/lips.png" alt="Logo" class="">
<p class="margin-neddles">Lips</p>-->
<img style="" src="<?php // the_sub_field('needles4') ?>">
<p class="margin-neddles"><?php  the_sub_field('title_needles4') ?></p>

</a></li>
	<li class="nav-item nav-item-space">
		<a class="nav-link clickcolor5" id="pills-profile-tab4" data-target="t5">
<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/44_1.png" alt="Logo" class="">
<p class="margin-neddles">Areola</p>-->
<img style="" src="<?php // the_sub_field('needles5') ?>">
<p class="margin-neddles"><?php  the_sub_field('title_needles5') ?></p>

</a></li>
<li class="nav-item nav-item-space">
<a class="nav-link clickcolor6" id="pills-profile-tab5" data-target="t6">
<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/55_1.png" alt="Logo" class="">
<p class="margin-neddles">HFS</p>-->
<img style="" src="<?php // the_sub_field('needles6') ?>">
<p class="margin-neddles"><?php  the_sub_field('title_needles6') ?></p>

</a></li>

<!---new category-->

<li class="nav-item nav-item-space">
<a class="nav-link clickcolor7" id="pills-profile-tab52" data-target="t7">
<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/66_1.png" alt="Logo" class="">-->
<img  src="<?php // the_sub_field('needles52') ?>">
<p class="margin-neddles"><?php  the_sub_field('title_needles52') ?></p>
</a></li>

<!---new category--->


<li class="nav-item nav-item-space">
<a class="nav-link active clickcolor8" id="pills-profile-tab6" data-target="t8">
<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/66_1.png" alt="Logo" class="">-->
<img  src="<?php  //the_sub_field('all_needles1') ?>">
<p  class="margin-neddles">All</p>
</a></li>

</ul>
<?php endwhile; else: endif; ?>
</div>
<style>
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
    background-color: #29abe2;
}
.static {
  position:absolute;
  background: white;
}

.static:hover {
  opacity:0;
}
.ajax-load-more-wrap.blue .alm-load-more-btn{
	background:rgb(31, 195, 243) !important;
}
</style>
					                <!---nav with nedles-->
<div style="clear: both;height: 1px;    width: 100%;"></div>
					<div class="row sfas margin-auto">
					   <div class="tab-content" id="pills-tabContent">
					                        <!--TAb 1-->
					        <!--*******************tab 1*******************************-->
                          <div class="tab-pane " id="pills-home" data-target="t1"> <!--nav--->
                                <!--info 1 for nedles 1-->
                                <div class="" style="margin-top:80px">
												<!---show EyeShadow (property1)-->
							<!--**************************************************************************-->

	   									<!--category 2-->
	   								<section id="category_needs" class="category_needs">
	   										<?php query_posts('cat='.$category2.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
	   													 <div class="articlesList">
<div style="clear: both;"></div>
	   														 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	   															 <article>
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
	   											<!--/ category 2--->
	   			   							  <?php /// endwhile; else: endif; ?>
						                            </div>
					                                <!--nav end--->
												</div>

											 <!--***********************TAb2 nedles filter***************************-->

					                        <!--TAb 2  for countru nedles-->
	                         <div class="tab-pane" id="pills-profile" data-target="t2">
                                <div class="" style="margin-top:80px">
													<!--category needs2-->
									<section id="category_needs" class="category_needs">
										<?php query_posts('cat='.$category3.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
														 <div class="articlesList">

															 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
																 <article>
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
															<!--/ category--->
																 <!--needs 2-->
					                              </div>
					                             </div>
					                                <!--/ TAb 2-->


					      				  <!--************************tab 3 EyeBrow3**************************-->
		                                <!--TAb 3   EyeBrow3-->

		                           <div class="tab-pane" id="pills-profile2" data-target="t3">
                                    <div class="" style="margin-top:80px">
											<!--category needs3-->
									<section id="category_needs" class="category_needs">
									<?php query_posts('cat='.$category4.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
													 <div class="articlesList">
<div style="clear: both;"></div>
														 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
															 <article>
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
									<!--/ category3--->
		                                    </div>
		                                  </div>
		                                <!--/ TAb 2-->
					                        <!--**********************Lips****************************-->
					                                <!--TAb 4 Lips-->
					                 <div class="tab-pane" id="pills-profile3" data-target="t4">
                                     <div class="" style="margin-top:80px">
											<!--category needs4-->
									<section id="category_needs" class="category_needs">
									<?php query_posts('cat='.$category5.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
												 <div class="articlesList">
<div style="clear: both;"></div>
													 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
														 <article>
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
									<!--/ category--->
	                                    </div>
					                        <!-- /needs4-->
					               </div>
					                                <!--/ TAb 4-->
												    <!--**********************Areola filter****************************-->
				                                <!--TAb 4  Areola-->
					                      <div class="tab-pane" id="pills-profile4" data-target="t5">
	                                        <div class="" style="margin-top:80px">
												<!--category needs5-->
											<section id="category_needs" class="category_needs">
											<?php query_posts('cat='.$category6.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
														 <div class="articlesList">
<div style="clear: both;"></div>
															 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
																 <article>
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

											<!--/ category--->
		                                         </div>
												</div><!--/ TAb 4-->

													  <!--TAb 5 neddes5-->
													    <!--**********************NFS****************************-->
							<div class="tab-pane" id="pills-profile5" data-target="t6">
							<div class="" style="margin-top:80px">

									<!--category needs6-->
								<section id="category_needs" class="category_needs">
								<?php query_posts('cat='.$category7.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
											 <div class="articlesList">
<div style="clear: both;"></div>
												 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													 <article>
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
												<!--/ category--->

							</div>
						</div><!--/ TAb 5-->


						<!--new category  TAb  neddes52 correction-->
							<!--**********************Correction****************************-->
					<div class="tab-pane" id="pills-profile52" data-target="t7">
					<div class="" style="margin-top:80px">

					<!--category needs6-->
					<section id="category_needs" class="category_needs">
					<?php query_posts('cat='.$category72.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
					<div class="articlesList">
					<div style="clear: both;"></div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					 <article>
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
					<!--/ category--->

					</div>
				</div><!--/ TAbnew category correction-->


													<!--TAb 6  ALl begin-->

							 <!--**********************All Filter****************************-->
		<div class="tab-pane show active" id="pills-profile6" data-target="t8">
			<div  style="margin-top:80px">

	   								<!---show All (needles)-->
	   			<!--**************************************************************************-->


								   <!--category all-->
			<section id="category_needs" class="category_needs">
				 
											<div class="articlesList">
<div style="clear: both;"></div>
												<?php echo do_shortcode('[ajax_load_more id="3561058511" container_type="div" post_type="post" posts_per_page="10" category="areola,eyebrow,eyeliner,eyeshadow,nfs,lips" scroll="false" button_label="See more"]'); ?> 

										</div><!-- / main Content-->
									
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


	<!--strip 5 post   closed--> 	<!---for desktop gallery >1025-->
					<?php $bg_technologies=get_field('bg_technologies'); ?>
					  <section id="strip5" class="nogallery-desktop" <?php  echo $bg_technologies ? 'style="background-image:url(' . $bg_technologies .')"' : ' ' ?>>
							<div class="row">
								<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
								<?php echo do_shortcode('[gallery columns="5"  ids="144,143,142,140,139"]') ?>
								<div class="clearfix"></div>
							</div>
						</section>


				<!--for mobile slider strip 5 <1025--->
				 <!--section id="strip5" class="nogallery-mobile">
				<div class="">

						<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
					<?php //echo do_shortcode('[unitegallery gallery3]'); ?>
<?php echo do_shortcode('[instagramm]'); ?>
					  <div class="clearfix"></div>
				</div>
				</section-->



				<section id="contact-page">
				<?php  get_template_part('template-parts/contact-template'); ?>
				</section>


	</main>


<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
  $('.nav-link').on('click', function (event){
    event.preventDefault();
    var elem = $(this); //writing $(this) every time is bad
    var target = $('div[data-target="'+elem.attr("data-target")+'"]');

    if(elem.hasClass('active')){ 
        //remove from this
        //elem.removeClass("active");
        //close box    
        //target.slideUp("slow");
    } else { //toggle menu when clicking on some other link
        //remove from everywhere
        $('.nav-item a').removeClass('active');
        //slide every box up
        $('.tab-pane').slideUp("slow");
        //add to this only
        elem.addClass('active'); 
        //slide associated box down
        target.slideDown("slow");
    }
});
</script>
