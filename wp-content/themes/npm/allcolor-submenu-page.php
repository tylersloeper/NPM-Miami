<?php /* Template Name: All Colors  for summenu Page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image');$bg_main_needles= get_field('bg_main_needles');
$category2_color= get_field('category2_color');
$category3_color= get_field('category3_color');
$category4_color= get_field('category4_color');
$category5_color= get_field('category5_color');
$category6_color= get_field('category6_color');
$category7_color= get_field('category7_color');
$category72_color= get_field('category72_color_copy');
$category8_allcolor= get_field('category8_allcolor');/////for all select category tab 6

?>
<style>
.btn{display:none;}
.category .articlesList article{width: 18% !important;}
.btn-gd-add-mylist, .btn-gd-remove-mylist{display: block;width: 180px;}
.rcCinside > .readmore{padding-left:0;margin: 0 auto; width: 190px;}
.ajax-load-more-wrap.blue .alm-load-more-btn{
	background:rgb(31, 195, 243) !important;
}
@media all and (max-width: 600px) {
	.btn-gd-add-mylist{width: 120% !important;}
}
</style>
	<main role="main">

            <!--    <section id="topImage" class="row">
                    <img class="img-full top-banner"  src="<?php echo $topImage ;?>">
                </section>-->

				<!--Top banner with select image and text-->
								<section id="needles" class="row" style="/*background-color: #eee8ea;*/background-image: url(https://localhost:8081/npm/wp-content/uploads/2019/01/BG.png); background-repeat: no-repeat;">
									<div class="row wrapper">
										<div class="col-7 align-self-end no-padding">
											 <img class="" src="<?php echo $bg_main_needles ;?>">
										</div>
									    <div class="col-5 center align-self-center">
												<span class="wrapper"> <?php $text_needles_top=get_field('text_needles_top');  echo '<h2 class="title">' .$text_needles_top . '</h2>'  ?></span>
										</div>
									</div>
								</section>
				<!--/ Top banner with select image and text-->




				<section id="project_map">

<section id="project_nedles">
   <div class="row center">
		 <div class="wrapper">

<?php if (have_rows('project_colors')) : while (have_rows('project_colors')) : the_row(); ?>
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item nav-item-space">
				<a class="nav-link  clickcolor1" id="pills-profile-tab6" data-target="t8">
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


				<li class="nav-item nav-item-space ">
				<a class="nav-link clickcolor8 active" id="pills-profile-tab6"  data-target="t1">
				<!--<img src="<?php //echo get_template_directory_uri(); ?>/img/66_1.png" alt="Logo" class="">-->
				<img  src="<?php  //the_sub_field('all_needles1') ?>">
				<p  class="margin-neddles">All</p>
				</a></li>

		</ul>
			 <?php endwhile; else: endif; ?>
		</div>
  <!---nav with nedles-->

					<div class="row" style="margin:0 auto;">
					   <div class="tab-content " id="pills-tabContent">
					                      
                          <div class="tab-pane show active" id="pills-home" data-target="t1"> 
                                
                                <div class="" style="margin-top:80px">
												
							
							<?php /// if (have_rows('project_property1')) : while (have_rows('project_property1')) : the_row(); ?>
							   								
													<div class="col-12" style="display:none">
													  <div class="center cursor-pointer">
					   										  <img  src="<?php // the_sub_field('icon_property2') ?>">
					   									   </div>
			   												<p class=""><?php // the_sub_field('title2') ?></p>
								 							<p class=""><?php // the_sub_field('description2') ?></p>
													</div>


	   									
	   								<section id="category_needs" class="category_needs">
	   										
	   													 <div class="articlesList">
	   														<?php echo do_shortcode('[ajax_load_more id="4669388433" container_type="div" post_type="post" category="areola_color,correction_color,eyebrow_color,eyeliner_color,eyeshadow_color,hfs_color,lips_color" images_loaded="false" posts_per_page="10" scroll="false" button_label="See more"]'); ?>
	   												 </div>
	   											 
	   												 <div class="clearfix"></div>
	   									 </section>
										 <?php //echo do_shortcode('[ajax_load_more id="7073396595" container_type="div" post_type="post" category="correction_color" scroll="false" images_loaded="true"]'); ?>
	   											
	   			   							  <?php /// endwhile; else: endif; ?>
						                            </div>
					                                
												</div>

											 <!--***********************TAb2 nedles filter***************************-->

					                        <!--TAb 2  EyeLiner-->
	                         <div class="tab-pane" id="pills-profile" data-target="t2">
                                <div class="" style="margin-top:80px">
													
									<section id="category_needs" class="category_needs">
										
														 <div class="articlesList">
															
															<?php echo do_shortcode('[ajax_load_more id="6804924527" container_type="div" post_type="post" category="eyeliner_color" images_loaded="false" posts_per_page="10" button_label="See more"]'); ?> 
													 </div>
												 
													 <div class="clearfix"></div>
										 </section>
															
					                              </div>
					                             </div>
					                                <!--/ TAb 2-->


					      				  <!--************************tab 3 EyeBrow3**************************-->
		                                <!--TAb 3   eyebrow_color -->

           <div class="tab-pane" id="pills-profile2"  data-target="t3">
                <div class="" style="margin-top:80px">
											
									<section id="category_needs" class="category_needs">
									
													 <div class="articlesList">
														 <?php echo do_shortcode('[ajax_load_more id="8502778293" container_type="div" post_type="post" category="eyebrow_color" images_loaded="false" posts_per_page="10" button_label="See more"]'); ?> 
												 </div>
											 
											 <div class="clearfix"></div>
									 </section>
									
              </div>
            </div>
		                                <!--/ TAb 2-->
					                        <!--**********************Lips****************************-->
					                                <!--TAb 4 Lips-->
					                 <div class="tab-pane" id="pills-profile3" data-target="t4">
                                     <div class="" style="margin-top:80px">
											
									<section id="category_needs" class="category_needs">
									
												 <div class="articlesList">
													<?php echo do_shortcode('[ajax_load_more id="6055144376" container_type="div" post_type="post" category="lips_color" images_loaded="true" posts_per_page="10" button_label="See more"]'); ?>  
											 </div>
										 
											 <div class="clearfix"></div>
									</section>
									
                </div>
             </div>
					                                <!--/ TAb 4-->
												    <!--**********************Areola filter****************************-->
				                                <!--TAb 4  Areola-->
        <div class="tab-pane" id="pills-profile4" data-target="t5">
                  <div class="" style="margin-top:80px">
												
											<section id="category_needs" class="category_needs">
														 <div class="articlesList">
															 
<?php echo do_shortcode('[ajax_load_more id="6562432053" container_type="div" post_type="post" category="areola_color" images_loaded="true" posts_per_page="10" button_label="See more"]'); ?>  
													 </div>
												 
													 <div class="clearfix"></div>
											</section>

											
		                                         </div>
												</div><!--/ TAb 4-->

													  <!--TAb 5 neddes5-->
													    <!--**********************NFS****************************-->
							<div class="tab-pane" id="pills-profile5" data-target="t6">
							<div class="" style="margin-top:80px">

									
								<section id="category_needs" class="category_needs">
											 <div class="articlesList">
												
<?php echo do_shortcode('[ajax_load_more id="7564187731" container_type="div" post_type="post" category="hfs_color" images_loaded="true" posts_per_page="10" button_label="See more"]'); ?>  
										 </div>
									 
										 <div class="clearfix"></div>
								</section>
												

							</div>
						</div><!--/ TAb 5-->

						<!--TAb 52 neddes52 new category Correction-->
							<!--**********************Correction****************************-->
				<div class="tab-pane" id="pills-profile52" data-target="t7">
				<div class="" style="margin-top:80px">

				
				<section id="category_needs" class="category_needs">
				
				<div class="articlesList">
				 <?php echo do_shortcode('[ajax_load_more id="8988486945" container_type="div" post_type="post" category="correction_color" images_loaded="true" posts_per_page="10" button_label="See more"]'); ?>  

				</div>
				
				<div class="clearfix"></div>
				</section>
				

				</div>
			</div><!--/ TAb 52 new category correction-->



													<!--TAb 6  ALl begin-->

							 <!--**********************All Filter****************************-->
		<div class="tab-pane" id="pills-profile6" data-target="t8">
			<div  style="margin-top:80px">

	   								
			<section id="category_needs" class="category_needs">
				
											<div class="articlesList">
												
<?php echo do_shortcode('[ajax_load_more id="6186658087" container_type="div" post_type="post" category="eyeshadow_color" images_loaded="true" posts_per_page="10" button_label="See more"]'); ?>  
										</div>
									
										<div class="clearfix"></div>
						</section>
										
						   		</div>
						   			 
						  </div>
					  </div><!--/ TAb 6-->
                </div>
                    <!-- / end filter-->
                    </div>    <!---close wrapper--->
                </div>
            </section>
<!--/ filter nedles-->
	</section>


	<!--strip 5 post closed--> 	<!---for desktop gallery >1025-->
					<?php $bg_technologies=get_field('bg_technologies'); ?>
					  <section id="strip5" class="nogallery-desktop" <?php  echo $bg_technologies ? 'style="background-image:url(' . $bg_technologies .')"' : ' ' ?>>
							<div class="row">
								<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
								<?php echo do_shortcode('[gallery columns="5"  ids="144,143,142,140,139"]') ?>
								<div class="clearfix"></div>
							</div>
						</section>


				<!--for mobile slider strip 5 <1025--->
				 <!--*****for mobile slider strip 5 <1025******--->
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
