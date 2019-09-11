<?php /* Template Name: Explore Page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image'); ?>
	<main role="main">
<style>
li{
	list-style-type: none;
}
</style>
                <section id="topImage" class="row">
                    <img class="img-full top-banner"  src="<?php echo $topImage ;?>">
                </section>

				<!--strip 5 post-->
								<section id="strip6_explore" class="row">
									<div class="row">
										<div>
											<?php $post_object = get_field('strip_explore');
											$post_title = $post_object->post_title;
											$postID = $post_object->ID;
											$content_post = get_post($postID);
											$content = $content_post->post_content;
											$content = apply_filters('the_content', $content);
											$content = str_replace(']]>', ']]&gt;', $content);
											/*echo '<pre>';
												print_r($post_object);
												echo '</pre>';
												die();*/
											?>

											</div>
											<!--text about left--->
											<div class="maContent col-md-7 col-12 padding-explore">
												<h2><?php  echo $post_title ?></h2>
												<p><?php echo $content; ?></p>
												<a style="display:none" class="readmore" href="<?php echo the_permalink($postID) ?>">קראו עוד >></a>
												<br>
												<!--icon--->
												<!--icon--->
											</div>
												<!-- / text about left--->

											<div class=" col-md-4 col-12 right" >
												<?php  the_post_thumbnail(175, 175,  array( 'top', 'center'))?>
												<?php the_content();?>
												<?php echo do_shortcode('[twenty20 img1="132" img2="129" offset="0.5" align="right" hover="true" before=”Before” after=”After”]'); ?>
												<?php $before_after1=get_field('before_after1');  echo '<h2 class="title">' .$before_after1 . '</h2>'  ?>
											</div>

<script>

(function(){
    var product = $('#twenty20-1').find('.twentytwenty-before');
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
								</div>
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

								<script>
								/* function moveDivisor(){
									var divisor = document.getElementById("divisor"),
									slider = document.getElementById("slider");
									console.log(slider.value);
									divisor.style.width = slider.value+"%";
								}
								function moveDivisor2(){
								   var divisor2 = document.getElementById("divisor2"),
								   slider2 = document.getElementById("slider2");
								   console.log(slider2.value);
								   divisor2.style.width = slider2.value+"%";
							   }
							   function moveDivisor3(){
								  var divisor3 = document.getElementById("divisor3"),
								  slider3 = document.getElementById("slider3");
								  console.log(slider3.value);
								  divisor3.style.width = slider3.value+"%";
							  }
							  function moveDivisor4(){
							   var divisor4 = document.getElementById("divisor4"),
							   slider4 = document.getElementById("slider4");
							   console.log(slider4.value);
							   divisor4.style.width = slider4.value+"%";
						   }*/

								</script>
	</main>

<?php get_footer(); ?>
