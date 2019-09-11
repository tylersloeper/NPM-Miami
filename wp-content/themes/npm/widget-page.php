<?php /* Template Name: Widget List Page Template */ get_header();
$FrontPage = get_option('page_on_front');
$topImage = get_field('inside_top_image');$bg_main_needles= get_field('bg_main_needles');
 $selectwidget = get_field('select_widget');

?>

	<main role="main">

            <!--    <section id="topImage" class="row">
                    <img class="img-full top-banner"  src="<?php echo $topImage ;?>">
                </section>-->

				<section id="widget-list" class="widget-list">
					<div style="margin: 0 auto; display: table; margin-bottom: 50px;" class="">
 					<!--<h1 ><?php ///single_cat_title(); ?></h1>-->
					<h2><span style="color: #2ec6f3; font-size: 43px;">MY WISH</span> <span style="font-size: 43px; color: #595959;">LIST</span></h2>
					</div>


            <div class="wrapper row">
    		<?php echo do_shortcode( "[show_gd_mylist_list share_list='no' show_count='no']" ); ?>
        </div>

</section>

    <div class="row">

         <div  style="display: table;  margin: 0 auto;margin-top:40px; padding:40px 0">
		 <input type="text" id="exmail" name="exmail" value="" placeholder="email address" style="padding:0 10px;margin: 15px auto;width: 100%;border-radius: 15px;" />
		 <a class="btn-widget3" onclick="sendo()" href="javascript:void(0)">GET A PRICE OFFER</a></div>
    </div>
<script>
function sendo(){
	var fdfghf = $('.cvfrde');
	console.log(fdfghf.length);
$.each(fdfghf, function(index,element){
	document.getElementById('tname').value += $(element).html() + ',';
	document.getElementById('pru').value += $(element).attr('href') + ',';
});
	if(document.getElementById('exmail').value){
		send();
	}else{
		alert('Please enter an email address');
	}
}
function send(){
	var http = new XMLHttpRequest();
	var url = 'https://localhost:8081/npm/get_data.php';
	var names = document.getElementById('tname').value;
	var link = document.getElementById('pru').value;
	var exmail = document.getElementById('exmail').value;
	var params = 'names=' + encodeURI(names) + '&link=' + encodeURI(link) + '&exmail=' + encodeURI(exmail);
	http.open('POST', url, true);
	http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	http.onreadystatechange = function() {
		if(http.readyState == 4 && http.status == 200) {
			document.getElementById('exmail').value = '';
			alert('Email successfully sent');
		}
	}
	http.send(params);
}

</script>
					<div id="relatedproducts" class=" category " style="background-color: #f6f5f5;">
                        <h2>RELATED PRODUCTS</h2>
                    <div>
                        <?php query_posts('post_type=post&post_status=publish,future&order=DESC&orderby=rand&posts_per_page=5');?>
									 <div class="articlesList">
										 		<!--<h1><?php ///single_cat_title(); ?></h1>-->
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

							 </div>
                         </div>


				    <!--Section Category-->
	<?php //get_sidebar(); ?>


        		<!--related-products plugin-->
        	<section id="relatedproducts" class="related-products center row justify-content-md-center " style="clear: both;background-color: #f6f5f5;display:none">
        		<h2>RELATED PRODUCTS</h2>
        		<?php echo do_shortcode( "[yuzo_related]" ); ?>
        	</section>
        		<!--related-products -->

				<section id="contact_form" class="row justify-content-md-center">
				<div class="wrapper">
					<h2>GET A PRICE OFFER</h2>
					<?php /// $title_footer1=get_field('title_footer1'); echo '<h2>' .$title_footer1 . '</h2>'?>
					<?php echo do_shortcode('[contact-form-7 id="277" title="Contact  form with country"]'); ?></div>
				</section>



	</main>


<?php get_footer(); ?>
