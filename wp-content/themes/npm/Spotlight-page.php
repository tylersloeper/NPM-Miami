<?php /* Template Name: Spotlight page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image');
$rip = get_field('rip');
$num=count($rip);
if(isset($_GET['id'])){
	if($_GET['id']>0){
		$id=$_GET['id']-1;
	}else{
		$id=$_GET['id'];
	}

}
$supindex = $_REQUEST["id"];
$supurl = "";
if($num > 0){

 $supurl = $rip[$supindex-1]['clients']['csupimg'];

}


/*
while ( have_rows('rip') ) : the_row();
$cname = the_sub_field('cname');
echo '<pre>';
print_r($cname);

endwhile;

echo '<pre>';
print_r(count($rip));
//print_r($rip[0]['clients']['cimg']['url']);
//print_r($rip[0]['clients']['cdis']);
die();
 */
?>
	<main role="main">

			    <?php
                   if(empty($supurl))
				   {
				 ?>
                <section id="topImage" class="row">
                    <img class="img-full top-banner"  style="" src="<?php echo $topImage;?>">
                </section>
                 <?php
			 }else{
				  ?>
				  <section id="topImage" class="row">
					  <img class="img-full top-banner"  style="" src="<?php echo $supurl;?>">
				  </section>
				<?php
			      }
			    ?>
				<!--strip 5 post-->
								<section id="strip6_explore" class="row">
									<!--div class="row"-->



<style>
#strip6_explore h2{
	font-weight: 300 !important;
}
#gallery-1 img {
    border: 0px solid #cfcfcf !important;
}
.ahsgdh{
	color: #18b3e1 !important;
	font-size: 48px !important;
	text-align: center !important;
    letter-spacing: 3.2px !important;
    font-weight: 300 !important;
}
#gallery-1 .gallery-item {
    float: left;
    margin-top: 10px !important;
    text-align: center !important;
    border: 1px solid #b3b3b3 !important;
    width: 23% !important;
    margin: 10px 0 0 10px !important;
}
#gallery-1 img {
    vertical-align: middle;
    width: auto;
    height: auto;
	background-color: rgb(255, 255, 255); filter: grayscale(100%);
}
#gallery-1 .gallery-item:hover img{
	 filter: grayscale(0%);
	 transform: scale(1.1);
}
#gallery-1 img:hover{
	 filter: grayscale(0%);
	 transform: scale(1.1);
}
dt {
    font-weight: 700;
    display: block;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 260px;
    padding: 23px;
    vertical-align: bottom;
}
.righticon {
    width: 45px;
    display: block;
    height: 88px;
    background: url(https://localhost:8081/npm/wp-content/themes/npm/img/rowr.png) no-repeat;
}
.lefticon {
    width: 45px;
    display: block;
    height: 88px;
    background: url(https://localhost:8081/npm/wp-content/themes/npm/img/rowr.png) no-repeat;
}
.owl-prev{
	position: absolute;
    left: -58px;
	background:none !important;
    height: 100%;
    width: 27px;
	transform: rotate(180deg);
    top: -25px;
}
.owl-next{
	position: absolute;
    right: -58px;
	background:none !important;
    height: 100%;
    width: 27px;
    top: -25px;
}
#strip6_explore p{
	text-align: center !important;
}
.sbannertr{
		width: 31%;max-width: 500px;
	}
	.contedftre{
		width:65%;margin: 0 auto;
	}
.owl-carousel.owl-rtl .owl-item {
	float: right;
	padding: 0 10px !important;
}

/*Custom changes*/
#gallery-1 .gallery-item img {
    width:90%;
}
section#topImage {
    box-shadow: 0px 0 17px #fbebeb, 0px 0 8px #ffffff, 0px 0px 8px #ffffff;
    margin-top: -97px;
}
.logo-top {
    /*margin-top: -47px;
    text-align: left;
    transform: scale(0.9);*/
}
#strip6_explore{
	padding:0;
}

@media all and (max-width: 550px) {

	#gallery-1 .gallery-item{
		margin:10px 1px !important;
		    width: 47% !important;
	}

	dt{
		height: 175px;
	}
	.img-full{
		height: 50vw;
	}
	#strip6_explore h2 {
		font-size: 20px !important;
	}
	.sbannertr{
		width: 75%;
		max-width: 500px;
	}
	.owl-theme .owl-nav {
		margin-top: 10px;
		display: none;
	}
	.contedftre{
		width:95%;
	}

	#strip5 {
		padding-top: 0px;
	}

	section#topImage {
       box-shadow: 0px 0 17px #fbebeb, 0px 0 8px #ffffff, 0px 0px 8px #ffffff;
       margin-top: -33px;
   }
   .logo-top {
    margin-top: -13px;
    text-align: left;
    transform: scale(0.9);
}

}
</style>
											<!-- [twenty20 img1="3093" img2="3108" offset="0.5"]

[twenty20 img1="3103" img2="3098" offset="0.5"] -->
											<!--text about left--->
											<div class="col-12 padding-explore" id="paddingplore">
												<h2 class="ahsgdh"><?php  echo $rip[$id]['clients']['cname']; ?></h2>
												<p style="text-align:center;margin: 55px auto; max-width:550px;"><img class="sbannertr"  src="<?php echo $rip[$id]['clients']['cimg']['url']; ?>"></p>

												<ul>

												<?php echo do_shortcode($rip[$id]['clients']['cbefor']); ?>
												</ul>
												<div class="contedftre">

												<?php
												/*
												$post_object = get_field('strip_explore');
												$post_title = $post_object->post_title;
												$postID = $post_object->ID;
												$content_post = get_post(5154);
												$content = $content_post->post_content;
												$content = apply_filters('the_content', $content);
												$content = str_replace(']]>', ']]&gt;', $content);
												*/
												?>


												<!--p style="text-align:center;"><?php echo $rip[$id]['clients']['cdis']; ?></p-->


												<?php /*$post_object = get_field('strip_explore');
												$postID = $post_object->ID;
												$content_post = get_post($postID);
												$content = $content_post->post_content;
												$content = apply_filters('the_content', $content);
												$content = str_replace(']]>', ']]&gt;', $content);*/
												?>
												<br><br>
												<p style="text-align:center;"><?php echo $rip[$id]['clients']['cdis']; ?></p>



												<?php
												for($i=0; $i<$num; $i++){
													$p=$i+1;
													 $act = null;
													 if($p == $_REQUEST["id"]){
														 $act = ' border-top:7px solid #1FC3F3;border-bottom: 7px solid #1FC3F3;';
													 }
													 else{
														  $act = '';
													 }
													?>
													<div id="gallery-1" class="gallery galleryid-4842 gallery-columns-4 gallery-size-full">
														<div class="articlesList">
															<dl class="gallery-item">
																<dt class="gallery-icon landscape" style="<?php echo $act;?>">
																	<a href="https://localhost:8081/npm/spotlight/?id=<?php echo $p; ?>">
																	<img src="<?php echo $rip[$i]['clients']['cimg']['url']; ?>" class="attachment-175 size-175 wp-post-image" alt="" 0="" srcset="<?php echo $rip[$i]['clients']['cimg']['url']; ?> 155w, <?php echo $rip[$i]['clients']['cimg']['url']; ?> 120w" sizes="(max-width: 155px) 100vw, 155px">
																	<!--img class="sbannertr"  src="<?php echo $rip[$i]['clients']['cimg']['url']; ?>"--></a>
																</dt>
															</dl>
														</div><!-- / main Content-->
													</div>
													<?php
												}
												?>

												<!--div id="gallery-1" class="gallery galleryid-4842 gallery-columns-4 gallery-size-full">
												<?php query_posts('cat=179&post_status=publish,future&order=DESC&posts_per_page=-1');?>
													<div class="articlesList">
														<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
														<dl class="gallery-item">
															<dt class="gallery-icon landscape">
																<?php the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
															</dt>
														</dl>
														<?php endwhile; else: endif; ?>
													</div>
												<?php wp_reset_query(); ?>
												</div-->









												</div>


											</div>
												<!-- / text about left--->



<script>



    $('#paddingplore>ul').addClass('owl-carousel owl-theme');
    $(function(){
        $('#paddingplore>ul').owlCarousel({
            rtl: true,
            items: 4,
            margin: 1,
            dots: true,
            touchDrag: false,
            mouseDrag: false,
            nav: true,
            navText:  [' <i class="righticon">&nbsp;</i> ' , '  <i class="lefticon">&nbsp;</i> '] ,
            lazyLoad: true,
            loop: false,
            rewind: false,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    });




(function(){
    //var product = $('#twenty20-1').find('.twentytwenty-before');
	//var befor = product.getElementById("twentytwenty-before"),
    //var befor = $('#twenty20-1');


console.log(product);
    var maxHeight = 0;

    product.each(function(){
        var height = $(this).outerHeight();
        console.log(height);
        if(height > maxHeight){
            maxHeight = height;
        }
    });

    product.css({'min-height': maxHeight});

})();

</script>

									   <!---1 before and after-->
								   <!--	<div class="col align-self-end margin-before no-padding" >-->
									<div class="" style="display:none">

										<div class="col-md-5 col-12">
							 			<div id="comparison">
											  <figure>
											    <div id="divisor"></div>
											  </figure>
											  <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
										</div>
									   </div>
									   <div class="col-md-5 col-12 ">
										   <div id="comparison2"  >
											 <figure>
											   <div id="divisor2"></div>
											 </figure>
											 <input type="range" min="0" max="100" value="50" id="slider2" oninput="moveDivisor2()">
									   </div>
									  </div>
									  <div class="col-md-5 col-12 ">
										  <div id="comparison3" >
											<figure>
											  <div id="divisor3"></div>
											</figure>
											<input type="range" min="0" max="100" value="50" id="slider3" oninput="moveDivisor3()">
									  </div>
									 </div>
									 <div class="col-md-5 col-12 ">
										 <div id="comparison4">
										   <figure>
											 <div id="divisor4"></div>
										   </figure>
										   <input type="range" min="0" max="100" value="50" id="slider4" oninput="moveDivisor4()">
									 </div>
									</div>
								      </div>
								   	<!--- end 1 before and after-->
								<!--/div-->
							</div>
							<div class="clearfix"></div>
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
						 <section id="strip5" class="nogallery-mobile">
						<div class="">

								<div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
							<?php // echo do_shortcode('[unitegallery gallery3]'); ?>
							<?php echo do_shortcode('[instagramm]'); ?>
							  <div class="clearfix"></div>
						</div>
						</section>



								<section id="strip9">
										<?php  get_template_part('template-parts/our-partners-template'); ?>
										<div class="clearfix"></div>
								</section>


	</main>

<?php get_footer(); ?>
