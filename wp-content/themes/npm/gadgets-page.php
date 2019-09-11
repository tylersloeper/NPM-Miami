<?php /* Template Name: Gadgets Page Template */ get_header();
  $SelectPropertyCategory = get_field('select_category');
  $link_catalog = get_field('link_catalog');
  $name_catalog = get_field('namecatalog');
    $selectcategorytutorials = get_field('select_categorytutorials');
   $FrontPage = get_option('page_on_front');
   $topImage = get_field('inside_top_image');
   $category1_gadget= get_field('category1_gadget');
   $category2_gadget= get_field('category2_gadget');
   $category3_gadget= get_field('category3_gadget');
   $category4_gadget= get_field('category4_gadget');
   $category5_gadget= get_field('category5_gadget');
 //  $category5= get_field('category5');
    ?>
<style>
/*.btn{display:none;}*/
.btn-gd-add-mylist{display: block;    margin: 0 auto;}
.rcCinside > .readmore{padding-left:0;}
.btn-gd-remove-mylist{max-width: none;width: 180px;margin: -10px 0 0 0;}
</style>
	<main role="main">

                <!--section id="topImage" class="row">
                    <img class="img-full top-banner" src="<?php echo $topImage ;?>">
                </section-->

				<!---Project collapse-->

					<?php $gadget_top=get_field('gadget_top'); ?>
				 <section class="gadget bg-about"  id="gadget" <?php // echo $bg_stri1_main ? 'style="background-image:url(' . $bg_stri1_main .')"' : ' ' ?>>
					  <div class="wrapper row">
						  <div class="col-md-7 col-7 align-self-end no-padding">
						  <img class="height-icon"  src="<?php echo $gadget_top; ?>" alt="" >
					 </div>
					 <div class="col-md-5 col-4 text-left padding-gadget" >
						<?php $strip2_text=get_field('strip2_text');  echo $strip2_text  ?>
							  <div class="mobile-catalog"><a class="btn-3d" target="_blank" href="<?php echo $link_catalog; ?>"><?php echo $name_catalog; ?></a></div>
					 </div>
					  </div>
				  </section>


<!---**********new filter gadget************--->

				<section id="project_map">
					                <!-- section begin-->
						                <section id="project_nedles">
					                    <div class="row center" >



                          <!--new nav-->
                                  <div class="row center wrapper">
                          <div class="wrapper">
					                    <?php /// $title_shedule_left = get_field(title_shedule_left,$FrontPage);echo '<h3 style="margin-bottom: 30px;">' . $title_shedule_left.'</h3>' ?>
					                        <!--gallery left  with shedule for city-->
					                        <!---nav with cities-->

									<?php if (have_rows('project_gadgets')) : while (have_rows('project_gadgets')) : the_row(); ?>
					                        <ul class="nav nav-pills mb-3 first-tab-section" id="pills-tab" role="tablist">
                                    <li class="nav-item nav-item-space">
                                      <a class="nav-link active click5" data-target="t1">
										<p class="margin-neddles"><?php  the_sub_field('title_needles4') ?></p>
									  </a>
									</li>


                          <li class="nav-item nav-item-space">
                            <a class="nav-link click4" data-target="t2">
								<p class="margin-neddles"><?php  the_sub_field('title_needles2') ?></p>
							</a>
						  </li>
                        <li class="nav-item nav-item-space">
                          <a class="nav-link click3" data-target="t3">

                    	<p class="margin-neddles"><?php  the_sub_field('title_needles3') ?></p>

												</a>

                      </li>

                        <li class="nav-item nav-item-space">
                          <a class="nav-link click6" data-target="t4">

                     <p class="margin-neddles"><?php  the_sub_field('title_needles1') ?></p>
            </a></li>

					                        </ul>
											 <?php endwhile; else: endif; ?>


										</div>
                  </div>
                          <!--new nav-->

					<div class="row" style="margin:0 auto;width:100%">
					   <div class="tab-content " id="pills-tabContent" style="width:100%">


											 <!--***********************TAb2 nedles filter***************************-->

                <!--TAb 2  for countru nedles-->
<div class="tab-pane second-tab-section" id="pills-profile1"  data-target="t2" >
<div class="min-mobile" style="margin-top:50px">



	<!--gadget2-->
	<!--category2-->
	<section id="category_needs" class="category">
		<div>
		<?php query_posts('cat='.$category3_gadget.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
		<div>
		<div class="articlesList">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class=" align-self-start">
		<a class="readmore" href="<?php echo the_permalink()?>">
		<div class="alImage">
		<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
		</div>
		<strong><?php echo wp_trim_words(get_the_title(), 10, ' ...')?> <span><?php the_field('sub_title')?></span></strong>
		</a>
		<div class="alContent">

		<div class="rcCinside">
		<p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
		<!--a class="readmore" href="<?php echo the_permalink()?>"></a-->
						<div class="col readmore">
								<a class="btn">
									<?php //echo do_shortcode( "[favorite_button]" ); ?>
										<?php //echo do_shortcode( "[favorite_count]" );
									//	get_users_who_favorited_post($post_id = null, $site_id = null);
									  //  get_total_favorites_count($site_id = null);
									  //  the_total_favorites_count($site_id = null);
									  //  get_favorites_button($post_id, $site_id);
									 //   the_favorites_button($post_id, $site_id);
										 ?>
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
		</div>
		<div class="clearfix"></div>

	</section>
	<!--/ category--->
	<!--needs 2-->
	</div>
</div>
<!--/ TAb 2-->


					      				  <!--************************tab 3 EyeBrow3**************************-->
		                                <!--TAb 3   GLOW7-->

<div class="tab-pane" id="pills-profile22" data-target="t3">
	<div class="" style="margin-top:50px">
	<!--category gadget3-->
		<section id="category_needs" class="category">
			<div>
			<?php query_posts('cat='.$category4_gadget.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
			<div class="articlesList">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="  align-self-start">
			<a class="readmore" href="<?php echo the_permalink()?>">
			<div class="alImage">
			<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
			</div>
			<strong><?php echo wp_trim_words(get_the_title(), 10, ' ...')?> <span><?php the_field('sub_title')?></span></strong>
			</a>
			<div class="alContent">

			<div class="rcCinside">
			<p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
			<!--a class="readmore" href="<?php echo the_permalink()?>"></a-->
			<div class="col readmore">
								<a class="btn">
									<?php //echo do_shortcode( "[favorite_button]" ); ?>
										<?php //echo do_shortcode( "[favorite_count]" );
									//	get_users_who_favorited_post($post_id = null, $site_id = null);
									  //  get_total_favorites_count($site_id = null);
									  //  the_total_favorites_count($site_id = null);
									  //  get_favorites_button($post_id, $site_id);
									 //   the_favorites_button($post_id, $site_id);
										 ?>
										<?php echo do_shortcode( "[show_gd_mylist_btn]" ); ?>
								</a>
								</div>
			</div>
			</div>
			<div class="clearfix"></div>
			</article>
			<?php endwhile; else: endif; ?>
			</div>

			</div><!-- / main Content-->
		<?php wp_reset_query(); ?>
		<div class="clearfix"></div>

		</section>

	<!--/ category3--->

	</div>
<!-- / row 2-->
</div>
		                                <!--/ TAb 2-->
					                        <!--**********************Lips****************************-->
					                                <!--TAb 4 Lips-->
<div class="tab-pane active" id="pills-profile33" data-target="t1">
<div class="" style="margin-top:50px">

<!--category gadget4-->
<section id="category_needs" class="category">
<div>
<?php query_posts('cat='.$category5_gadget.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
<div class="articlesList">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class=" align-self-start">
<a class="readmore" href="<?php echo the_permalink()?>">
<div class="alImage">
<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
</div>
<strong><?php echo wp_trim_words(get_the_title(), 30, '')?> <span><?php the_field('sub_title')?></span></strong>
</a>
<div class="alContent">

<div class="rcCinside">
<p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
<!--a class="readmore" href="<?php echo the_permalink()?>"></a-->
<div class="col readmore">
								<a class="btn">
									<?php //echo do_shortcode( "[favorite_button]" ); ?>
										<?php //echo do_shortcode( "[favorite_count]" );
									//	get_users_who_favorited_post($post_id = null, $site_id = null);
									  //  get_total_favorites_count($site_id = null);
									  //  the_total_favorites_count($site_id = null);
									  //  get_favorites_button($post_id, $site_id);
									 //   the_favorites_button($post_id, $site_id);
										 ?>
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
</div>
<div class="clearfix"></div>
</section>
<!--/ category--->
</div>
<!-- /gadget4-->
</div>
					                                <!--/ TAb 4-->
													<!--TAb 6  ALl-->

<!--**********************All Filter****************************-->
<div style="display:none;" class="tab-pane" id="pills-profile6" data-target="t9">
	<div class="" style="margin-top:50px">

	<!---show all EyeShadow (property1)-->
	<!--**************************************************************************-->
	<!--category-->
		<section id="category_needs" class="category">
			<div>
			<?php query_posts('cat='.$category2_gadget.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
			<div class="articlesList">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="  align-self-start">
			<a class="readmore" href="<?php echo the_permalink()?>">
			<div class="alImage">
			<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
			</div>
			<strong><?php echo wp_trim_words(get_the_title(), 30, '')?> <span><?php the_field('sub_title')?></span></strong>
			</a>
			<div class="alContent">

			<div class="rcCinside">
			<!-- <p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>-->

			</div>
			</div>
			<div class="clearfix"></div>
			</article>
			<?php endwhile; else: endif; ?>
			</div><!-- / main Content-->
			<?php wp_reset_query(); ?>
			</div>
		<div class="clearfix"></div>
		</section>
	<!--/ category--->

	<!---/ show All ()-->
	<!--*******************************EyeLiner*******************************************-->

	<!--nav end--->
	</div>
</div><!--/ TAb 6-->

    <!--change--->
                                                  <!--TAb 1-->
<!--*******************tab 1*******************************-->
<div class="tab-pane" id="pills-home1" data-target="t4"> <!--***********************oron*****************--->
	<!--info 1 for nedles 1-->
	<div class="" style="margin-top:50px">
		<!---show EyeShadow (property1)-->
		<!--**************************************************************************-->

		<!--category1-->
		<section id="category_needs" class="category">
			<div>
			<?php query_posts('cat='.$category2_gadget.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
				<div class="articlesList">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class=" align-self-start">
				<a class="readmore" href="<?php echo the_permalink()?>">
				<div class="alImage">
				<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
				</div>
				<strong><?php echo wp_trim_words(get_the_title(), 10, ' ...')?> <span><?php the_field('sub_title')?></span></strong>
				</a>
				<div class="alContent">
				<a class="readmore" href="<?php echo  the_permalink()?>">
				</a>
				<div class="rcCinside">
				<p><?php // echo wp_trim_words(get_the_content(), 25, '...')?></p>
				<a class="readmore" href="<?php echo the_permalink()?>"></a>
			</div>
		</div>
		<div class="clearfix"></div>
		</article>
		<?php endwhile; else: endif; ?>
		</div><!-- / main Content-->
		<?php wp_reset_query(); ?>
		</div>
		<div class="clearfix"></div>
		</section>
		<!--/ category--->
		<!---/ show All (needs 1)-->
	</div>
	<!--nav end--->
</div>

                                            <!---change-->

					                                </div>





					                            <!-- / end filter-->
					                            </div>    <!---close wrapper--->
					                    </div>
					                </section>
					                <!--/ filter gadgets-->
				</section>



<!---****************************/ new filter --->

<!--test--->
 <section id="carousel_gadget" >
<div class="">
    <div class="wrapper"><?php $label_toslider = get_field('label_toslider'); echo '<h2>' . $label_toslider . '</h2>' ?></div>
	<?php echo do_shortcode('[unitegallery tutorials catid=1]'); ?>
</div>
</section>
<!--test-->

			  <section id="carousel_gadget" style="display:none">
				  <div class="category_tutorial2">
   					<div class="wrapper"><?php $label_toslider = get_field('label_toslider'); echo '<h2>' . $label_toslider . '</h2>' ?></div>
                           <?php query_posts('cat='.$selectcategorytutorials.'&post_status=publish,future&order=DESC&posts_per_page=-1');?>
                              <div class="row ">
                                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                      <article class="col-md-4">
                                        <!--  <a class="readmore" href="<?php ///echo the_permalink()?>">-->
                                              <div class="alImage">
                                                  <?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
                                              </div>
                                         <!-- </a>-->
                                              <div class="clearfix"></div>
                                          </article>
                                  <?php endwhile; else: endif; ?>

                          </div><!-- / main Content-->
                      <?php wp_reset_query(); ?>
                          <div class="clearfix"></div>
				</div>

                	<?php ///echo do_shortcode('[unitegallery tutorials catid=1]'); ?>
			  </section>



<!--kat-->
<div style="clear:both; display:none">
<?php if($selectcategorytutorials):?>
  <section id="carousel_gadget" >
 <div class="category_tutorial2">
    <?php query_posts('cat=' . $selectcategorytutorials . '&posts_per_page=-1'); ?>
      <div class="row ">
    <h2 class="sectionTitle"><?php /// echo get_cat_name($rcID) ?></h2>
    <div class="recs row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="rec col">
                <div class="col" >
                     <div class="alImage">
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <?php the_post_thumbnail(120, 120, array('center', 'center')) ?>
                    <?php endif; ?>
                </div>

                </div>


            </div>
        <?php endwhile; else: endif; ?>
    </div>
</div>
    <?php wp_reset_query() ?>
    <?php query_posts('cat=' . $selectcategorytutorials . '&posts_per_page=-1'); ?>
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


/*

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

function showSlides(n){
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

*/
</script>

<?php endif;?>

</div>

<!--kat--->


				<section id="contact-page" style="padding: 10px 0;clear:both">
				<?php  get_template_part('template-parts/contact-template'); ?>
				</section>

	</main>
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
<!--script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".nav-item a").click(function(){
        $(this).tab({
        hide: {
            effect: "slide",
            duration: 10000
        });
    });
});/*
$(document).ready(function () {
    $('.nav-item a').tabs({
        hide: {
            effect: "slide",
            duration: 10000
        }
    });
});*/
</script-->

<?php get_footer(); ?>
