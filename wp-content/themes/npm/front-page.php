<?php /* Template Name: front Page Template */ get_header();
$FrontPage = get_option('page_on_front');$topImage = get_field('inside_top_image'); ?>

	<main role="main">


			<!--	<section id="topImage" class="row">
					<img class="img-top2 img-full top-banner-home img-responsive" src="<?php /// echo $topImage ;?>">
					   <div class="btn-home ">  <a class="readmore" href="/contact-form/ <?php /// echo the_permalink($postID) ?>">הצטרפו עוד היום  </a></div>
				</section>-->
				<?php  $FrontPage = get_option('page_on_front'); ?>
				<?php  ///$bg_stri1_main=get_field('bg_stri1_main'); ?>
				<?php /// $strip1_img=get_field('strip1_img'); ?>

<section class="strip2 row margin-auto"  id="strip2" <?php /// echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>

				 	<img class="height-icon"  src="<?php ///echo $strip1_img; ?>" alt="" >

	<div class="text-top">
			<a id="top" class="smoothScroll cursor-pointer" href="#bottom"></a>
	<?php  $strip1_text=get_field('strip1_text');  echo '<h1 class="title" id="trfdehtc">' .$strip1_text . '</h1>'  ?>
	</div>

	<div class="sketchfab-embed-wrapper" style="text-align:center;margin: 0 auto; width: 100%;">

<div class="thert"></div>
<!--div id="bistart" style="width:100%; height:auto;   text-align:center;   z-index: 9999;"><img src="<?php  echo get_template_directory_uri(); ?>/img/UnlimitedGlow.png" alt="Logo" ></div-->
<style>
.bounce {
  position:relative;
  left:50%;
  bottom:0;
  margin-top:-25px;
  margin-left:-25px;
  height:50px;
  width:50px;
  -webkit-animation:bounce 1s infinite;
}

@-webkit-keyframes bounce {
  0%       { bottom:5px; }
  50%      { bottom:20px; }
  100%     {bottom:5px;}
}

* {
  box-sizing: border-box;
}

.item {
  width: 200px;
  height: 200px;
  margin: 50px auto;
  padding-top: 75px;
  background: #ccc;
  text-align: center;
  color: #FFF;
  font-size: 3em;
}

.memorisme{
	    width: 350px;
    height: 55px;
    margin: -90px auto 0 auto;

}

/*style="visibility:hidden;"*/
</style>
<img id="bistart" style="cursor: pointer;" src="<?php echo get_template_directory_uri(); ?>/img/simg1.png" />

<div class="memorisme" id="bistarts"><img style="cursor: pointer;" src="<?php echo get_template_directory_uri(); ?>/img/3D.png" /></div>
<div id="memoriframe"></div>
						<!--iframe class="height-frame"  id="frts"  width="1920" height="650"   src="https://sketchfab.com/models/960cff85a59849d88a8a4e4859d7815b/embed?api_version=1.3.0&api_id=1_hero-viewer&autostart=1&internal=1&scrollwheel=0&sound_enable=0&transparent=1&ui_animations=0&ui_annotations=0&ui_controls=0&ui_fadeout=0&ui_fullscreen=0&ui_help=0&ui_infos=0&ui_inspector=0&ui_settings=0&ui_snapshots=0&ui_stop=0&ui_theatre=0&ui_watermark=0" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
						<div class="up bounce"> <a href="#strip5"><img class="height-icon" style="position: relative; top: -424px;  width: 54px;     right: 48.5%;" src="<?php echo get_template_directory_uri(); ?>/img/download.png" alt="" > </a></div>
					<p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A; display:none">
					    <a href="https://sketchfab.com/models/960cff85a59849d88a8a4e4859d7815b?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Tablet NPM</a>
					    by <a href="https://sketchfab.com/mormizrahi?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">3D_Interactive</a>
					    on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
					</p-->

				</div>

				  <!-- 	<a class="btn-3d">INTERACT</a>-->


		</section>
<script>
	//bistart
$('#bistart').click(function (e) {
	document.getElementById('bistart').style.display = "none";
	document.getElementById('trfdehtc').style.top = "-200px";
	document.getElementById('trfdehtc').style.position = "relative";

	document.getElementById('bistarts').style.display = "none";
	var ifrm = document.createElement('iframe');
	ifrm.setAttribute('class', 'height-frame'); // assign an id
	ifrm.setAttribute('width', '1920'); // assign an id
	ifrm.setAttribute('height', '650'); // assign an id
	ifrm.setAttribute('frameborder', '0'); // assign an id
	ifrm.setAttribute('allow', 'autoplay; fullscreen; vr'); // assign an id
	ifrm.setAttribute('mozallowfullscreen', 'true'); // assign an id

	//document.body.appendChild(ifrm); // to place at end of document

	// to place before another page element
	var el = document.getElementById('memoriframe');
	el.parentNode.insertBefore(ifrm, el);

	// assign url
	ifrm.setAttribute('src', 'https://sketchfab.com/models/960cff85a59849d88a8a4e4859d7815b/embed?api_version=1.3.0&api_id=1_hero-viewer&autostart=1&internal=1&scrollwheel=0&sound_enable=0&transparent=1&ui_animations=0&ui_annotations=0&ui_controls=0&ui_fadeout=0&ui_fullscreen=0&ui_help=0&ui_infos=0&ui_inspector=0&ui_settings=0&ui_snapshots=0&ui_stop=0&ui_theatre=0&ui_watermark=0');
});
$('#bistarts').click(function (e) {
	document.getElementById('bistart').style.display = "none";

	document.getElementById('trfdehtc').style.top = "-200px";
	document.getElementById('trfdehtc').style.position = "relative";

	document.getElementById('bistarts').style.display = "none";
	var ifrm = document.createElement('iframe');
	ifrm.setAttribute('class', 'height-frame'); // assign an id
	ifrm.setAttribute('width', '1920'); // assign an id
	ifrm.setAttribute('height', '650'); // assign an id
	ifrm.setAttribute('frameborder', '0'); // assign an id
	ifrm.setAttribute('allow', 'autoplay; fullscreen; vr'); // assign an id
	ifrm.setAttribute('mozallowfullscreen', 'true'); // assign an id

	//document.body.appendChild(ifrm); // to place at end of document

	// to place before another page element
	var el = document.getElementById('memoriframe');
	el.parentNode.insertBefore(ifrm, el);

	// assign url
	ifrm.setAttribute('src', 'https://sketchfab.com/models/960cff85a59849d88a8a4e4859d7815b/embed?api_version=1.3.0&api_id=1_hero-viewer&autostart=1&internal=1&scrollwheel=0&sound_enable=0&transparent=1&ui_animations=0&ui_annotations=0&ui_controls=0&ui_fadeout=0&ui_fullscreen=0&ui_help=0&ui_infos=0&ui_inspector=0&ui_settings=0&ui_snapshots=0&ui_stop=0&ui_theatre=0&ui_watermark=0');
});

</script>
<!-- /Section Category  3D-->

<!-- test-->

<section>
				<a class="smoothScroll" href="#top" id="bottom"> </a>
</section>

<?php $strip2_img=get_field('strip2_img'); ?>

<!---Project collapse-->


<?php  $FrontPage = get_option('page_on_front'); ?>
    <section id="strip2_gallery" style="display:none">
		<div class="wrapper width-grid">
			<div class="row-space">  <!--row-->
				<?php $strip2_text=get_field('strip2_text');  echo '<h2 class="title">' .$strip2_text . '</h2>'  ?>
				<div>
			   <img class="height-icon"  src="<?php echo $strip2_img; ?>" alt="" >
			  </div>
			</div>
	    </div>
	</section>


	<section  id="strip2_gallery" >
	<!--<a id="top" class="smoothScroll cursor-pointer" href="#bottom">Click to bottom</a>-->


<!--<a name="strip5"></a>-->
			<?php  //get_template_part('template-parts/panelhome-template'); ?>

	</section>

<!--mobile-->

<section>



<?php /*
<section id="strip2_gallery2" class="show-mobilepanel">
<div class="row center" >
<!--new nav-->
<div class="wrapper">
<div class="wrapper" style="padding-top: 60px">

<a href="" class="show-form btn  col-3" data-target="t1">
<div class="">
<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>

		<div class="bg-grid-no">
		<div class="center cursor-pointer">
		   <img class="strip3-img " src="<?php the_sub_field(image_cat1,$FrontPage) ?>">
		       <p class="text-grid"><?php the_sub_field(title_panel1,$FrontPage) ?></p>
		</div>
		</div>

<?php endwhile; else: endif; ?>
</div>
<!--tab 1--->
</a>
<a href="" class="show-form btn  col-3" data-target='t2'>
<!---tab 2-->

<div class="">
<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
		<div class="">
		<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
		<div class="bg-grid-no">
		<div class="center cursor-pointer">
		<img class="strip3-img " src="<?php the_sub_field(image_cat2,$FrontPage) ?>">
		   <p class="text-grid"><?php the_sub_field(title_panel2,$FrontPage) ?></p>
		</div>
		</div>
		<!--        </a>-->
		</div>
<?php endwhile; else: endif; ?>
</div>

</a>
<!---tab3-->
<a href="" class="show-form btn  col-3" data-target='t3'>
<div class="">
<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>

		<div class="bg-grid-no">
		<div class="center cursor-pointer">
		<img class="strip3-img " src="<?php the_sub_field(image_cat3,$FrontPage) ?>">
		    <p class="text-grid"><?php the_sub_field(title_panel3,$FrontPage) ?></p>
		</div>
		</div>

<?php endwhile; else: endif; ?>
</div>

</a>
<!--description block 1--->
<div>

<div class="collapse" data-target='t1'>
<div class="card card-body line1 tab-content">
<!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
<div class="row justify-content-md-center justify-content-center">

<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>

		<div class="bg-grid-no">
		   <div class="center cursor-pointer col text-left">
		             <p class="description col" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_1,$FrontPage) ?></p>
		   </div>
		</div>

<?php endwhile; else: endif; ?>

</div>



</div>
</div>
<div >
<div class="collapse" data-target='t2'>
<div class="card card-body line1 tab-content">
<!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
<div class="row justify-content-md-center justify-content-center">

<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>

		<div class="bg-grid-no">
		   <div class="center cursor-pointer col text-left">
		            <p class="description col" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_2,$FrontPage) ?></p>
		   </div>

		</div>
<?php endwhile; else: endif; ?>

</div>


</div>
</div>
</div>
<div class="collapse" data-target='t3'>
<div class="card card-body line1 tab-content">
<!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
<div class="row justify-content-md-center justify-content-center">

<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
<div class="bg-grid-no">
 <div class="center cursor-pointer col text-left">

          <p class="description col" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_3,$FrontPage) ?></p>
 </div>
</div>
<!--        </a>-->
</div>
<?php endwhile; else: endif; ?>

</div>


</div>
</div>
</div>

<!-- /description block 1--->

</div>
</div>
</div>
<!--/ block1--->

<div class="wrapper" style="margin-top:50px; width:80%">
<img src="http://npmsite.goil.co.il/wp-content/uploads/2018/10/UnlimitedGlow.png">
</div>


<!--block2--->
<div class="row center" >
<!--new nav-->
<div class="row center wrapper">
<!--description block 2--->
<div>
<div >
<div class="collapse" data-target='t4'>
<div class="card card-body line1 tab-content">
<!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
<div class="row justify-content-md-center justify-content-center">

<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
<div class="bg-grid-no">
   <div class="center cursor-pointer col text-left">
           <p class="description col" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_4,$FrontPage) ?></p>
   </div>
</div>
<!--        </a>-->
</div>
<?php endwhile; else: endif; ?>

</div>
</div>

</div>
</div>
<div >
<div class="collapse" data-target='t5'>
<div class="card card-body line1 tab-content">
<!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
<div class="row justify-content-md-center justify-content-center">

<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
 <div class="bg-grid-no">
     <div class="center cursor-pointer col text-left">

              <p class="" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_5,$FrontPage) ?></p>
     </div>
 </div>
<!--        </a>-->
</div>
<?php endwhile; else: endif; ?>

</div>

</div>
</div>
</div>

<div >
<div class="collapse" data-target='t6'>
<div class="card card-body line1 tab-content">
<!--  <img src="http://npmsite.goil.co.il//wp-content/themes/npm/img/Line-052.svg">-->
<div class="row justify-content-md-center justify-content-center">

<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
<div class="bg-grid-no">
   <div class="center cursor-pointer col text-left">
            <p class="description col" style="padding-left: 3%;  padding-right: 3%;"><?php the_sub_field(description_6,$FrontPage) ?></p>
   </div>
</div>
<!--        </a>-->
</div>
<?php endwhile; else: endif; ?>

</div>

</div>
</div>
</div>
</div>

<!-- /description block 1--->

<div class="wrapper" style="padding: 60px 0">

<a href="" class="show-form btn  col-3" data-target='t4'>
<!---tab4-->
<div class="">
<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
<div class="bg-grid-no">
<div class="center cursor-pointer">
<img class="strip3-img " src="<?php the_sub_field(image_cat4,$FrontPage) ?>">
  <p class="text-grid"><?php the_sub_field(title_panel4,$FrontPage) ?></p>
</div>
</div>
<!--        </a>-->
</div>

<?php endwhile; else: endif; ?>
</div>

</a>
<a href="" class="show-form btn col-3" data-target='t5'>
<!--ta 5-->

<div class="">
<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
<div class="bg-grid-no">
<div class="center cursor-pointer">
<img class="strip3-img " src="<?php the_sub_field(image_cat5,$FrontPage) ?>">
<p class="text-grid"><?php the_sub_field(title_panel5,$FrontPage) ?></p>
</div>
</div>
<!--        </a>-->
</div>

<?php endwhile; else: endif; ?>
</div>

</a>
<a href="" class="show-form btn  col-3" data-target='t6'>
<!--ta 6-->

<div class="">
<?php if (have_rows(strip2_gallery, $FrontPage)) : while (have_rows('strip2_gallery')) : the_row(); ?>
<div class="">
<!--	<a href="<?php /// the_sub_field('link_to') ?>" >-->
<div class="bg-grid-no">
<div class="center cursor-pointer">
<img class="strip3-img " src="<?php the_sub_field(image_cat6,$FrontPage) ?>">
<p class="text-grid"><?php the_sub_field(title_panel6,$FrontPage) ?></p>
</div>
</div>
<!--        </a>-->
</div>
<?php endwhile; else: endif; ?>
</div>

</a>





</div>
</div>
</div>

</section>
*/ ?>
<!--block2--->


</section>





    				<!--strip 5 post  *****for desktop gallery >1025*********-->

    			<?php /// $bg_stri5_main=get_field('bg_stri5_main');	?>
    				<?php /// $sbg3_strip5 = get_field('sbg3_strip5'); ?>
    				    <!--section id="strip5" class="nogallery-desktop">
    				        <div class="row" style="background-color:#f9f8f9">
								<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
								<?php //echo do_shortcode('[gallery columns="5"  ids="144,143,142,140,139"]') ?>

    				            <div class="clearfix"></div>
    				        </div>
    				    </section-->


						<!--*****for mobile slider strip 5 <1025******--->
						 <section id="strip5" class="nogallery-mobile">
						<div class="">
							<div class="bottom-title"><?php $our_technology_text=get_field('our_technology_text',$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
							<?php //echo do_shortcode('[unitegallery gallery3]'); ?>
						 	<?php echo do_shortcode('[instagramm]'); ?>
							  <div class="clearfix"></div>
						</div>
						</section>



			<?php /// $bg_stri4_main=get_field('bg_stri4_main'); ?>
				<?php $strip4_img = get_field('strip4_img'); ?>
				   <section id="strip6"  <?php echo $strip4_img ? 'style="background-image:url(' . $stri4_img .')"' : ' '?>>


						<div class=" row">
								<div class="maContent  fade-right col-md-6 padding-strip6" style="text-align: left;" data-aos="fade-right">
									<?php $post_object = get_field('strip4_post');
									$post_title = $post_object->post_title;
									$postID = $post_object->ID;
									$content_post = get_post($postID);
									$content = $content_post->post_content;
									/*$content = apply_filters('the_content', $content);
									$content = str_replace(']]>', ']]&gt;', $content);*/?>
									<h2 style="display:none"><?php // echo $post_title ?></h2>
									<p><?php echo $content; ?></p>
									<div class="text-left">
									<!--<a  class="readmore" href="<?php /// echo the_permalink($postID) ?>">MORE </a>-->
									  <?php $link_to_more = get_field('link_to_more'); ?>
									<a class="readmore" href=" <?php echo $link_to_more; ?>" class="btn-3d">MORE</a>
								   </div>
								</div>
								<div class="maImage fade-left col-md-6 right no-paddingmob" data-aos="fade-left" style="padding-left: 7%;padding-top: 3%;">
									<iframe style="margin:0 10px 0 -15px;height: 23.9vw;" width="100%" height="450" src="https://www.youtube.com/embed/eXlty0Ecgu4?playlist=eXlty0Ecgu4&autoplay=1&VQ=HD720&controls=0&rel=0&showinfo=0&mute=1&loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<!--open video modal-->
								<div class="collapse multi-collapse" id="multiCollapseExample6">
								<div class="">
									<?php $video_behind_technologies = get_field('video_behind_technologies');
								   if ($video_behind_technologies):?>
									  <div class="">
										  <?php echo $video_behind_technologies; ?>
									  </div>
								  <?php endif; ?>
							  </div>
							  </div>
								</div>


							<div class="clearfix"></div>

						</div>


					</section>
<script>
AOS.init({
  duration: 1200,
})
</script>



					<!--strip7 post  slider from category--->


									<?php $bg_strip5 = get_field('bg_strip5',$FrontPage); ?>
									<div>
									<?php $rcID = get_field('select_recommindation_category',$FrontPage);

									if($rcID):?>
									 <section id="strip7" class="row" <?php echo $bg_strip5 ? 'style="background-image:url(' . $bg_strip5 .')"' : ' '?>>
									<div class="wrapper padding-clients2">
										<?php query_posts('cat=' . $rcID . '&orderby=rand&posts_per_page=-1'); ?>
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
																								<!--div class="icon-watch"><img id="tgfr<?php echo $i; ?>" src="<?php echo $icon_video; ?>"></div-->
                                                        	<div id="clientsvideo<?php echo $i; ?>"><br /><br /><?php the_post_thumbnail(120, 120, array('center', 'center')) ?></div>
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
								<?php /// $bg_stri4_main=get_field('bg_stri4_main'); ?>
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
<!-- <img src="<?php  echo get_template_directory_uri(); ?>/img/map-gif.gif" style="max-width: 113% !important;" alt="Logo" > -->
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

<!-- instagramm -->

							<!--section id="strip9">

									<?php  //get_template_part('template-parts/our-partners-template'); ?>
									<div class="clearfix"></div>

							</section-->

							<section id="strip9">

									<?php  get_template_part('template-parts/our-partners-template'); ?>
									<div class="clearfix"></div>

							</section>


									<section id="contact-page">
									<?php  get_template_part('template-parts/contact-template'); ?>
									</section>

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



						$(function() {
						  // This will select everything with the class smoothScroll
						  // This should prevent problems with carousel, scrollspy, etc...
						/*$(window).bind('mousewheel', function(event) {
						    if (event.originalEvent.wheelDelta >= 0) {
						        console.log('Scroll up');
						    }
						    else {
						        if($(this).scrollTop() < 50){
									  var target = $('#bottom');
									  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
									  if (target.length) {
										$('html,body').animate({
										  scrollTop: target.offset().top
										}, 1000);
										return true;
									  }
								}
						    }
						});*/





						/*$(window).scroll(function(event){
								event.preventDefault();
						    if($(this).scrollTop() < 50){
								  var target = $('#bottom');
								  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
								  if (target.length) {
									$('html,body').animate({
									  scrollTop: target.offset().top
									}, 1000);
									return false;
								  }
						    }else{
								return false;
							}
						});*/



						/*$('.smoothScroll').click(function() {
						     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
								  var target = $(this.hash);
								  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
								  if (target.length) {
									$('html,body').animate({
									  scrollTop: target.offset().top
									}, 1000); // The number here represents the speed of the scroll in milliseconds
									return false;
								  }
								}
						  });*/
						});




																	</script>






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
