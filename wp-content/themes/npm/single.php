<style>
.btn-gd-remove-mylist{
	width: 270px !important;
	margin: -23px 0 0 0;
	max-width: none !important;
}
.btn-gd-add-mylist{
	width: 270px !important;
	margin-top: 5px;
	max-width: none !important;
}
.yuzo_related_post{
	display:none !important;
}

.glowh2{
  width:74%;
  text-align: left!important;
  padding-left: 11%;
}
.glowh3{
width: 99%;
text-align: left!important;
padding-left: 11%;
}
.glowcolor{
  color:#00ccff;
}
span.wrapper.glowrap {
    display: flex;
    flex-direction: column;
    margin-bottom: 294px;
}
</style>
<?php get_header();
global $post;
$post_meta_value = get_post_meta( 1060, 'test_silde', true );
$post_meta_text = get_post_meta( 1060, 'text_color', true );
$post_bmeta_value = get_post_meta( 639, 'test_silde', true );
$post_bmeta_text = get_post_meta( 639, 'text_color', true );
$topImage = get_field('inside_top_image');
$topgImage = 'https://localhost:8081/npm/wp-content/uploads/2018/09/GLOW.png';
$topaImage = 'https://localhost:8081/npm/wp-content/uploads/2018/11/NPM-Accessories.png';
$topIcolo = get_field('inside_color');
$bg_main_post= get_field('bg_main_post');
$selectwidget = get_field('select_widget');
$bg_main_needles= get_field('test_silde');
$bg_main_needless = get_post_meta($post->ID, 'test_silde', true);

$img = wp_get_attachment_image_src( $post_meta_value, array('700', '600'), "", array( "class" => "img-responsive" ));
$imgb = wp_get_attachment_image_src( $post_bmeta_value, array('700', '600'), "", array( "class" => "img-responsive" ));



$cat_id=get_the_category( $post->ID );
if($cat_id[0]->term_id == 23){
	//echo '12';
	$imged = $img[0];
	$text = $post_meta_text;
}elseif($cat_id[0]->term_id == 46){
	$imged = $topaImage;
	$text = $post_meta_text;
}elseif($cat_id[0]->term_id == 11){
	$imged = $topgImage;
	$text = $post_meta_text;
}else{
	$imged = $imgb[0];
	$text = $post_bmeta_text;
}
?>

	<main role="main">
		<div>
		<?php /*if(get_field('inside_top_image')){?>
			<div class="inside_top_image row top-banner">
				<img clsas="img-full img-top2" src="<?php  the_field('inside_top_image') ;?>">
			</div>
		<?php }*/?>
	</div>
		<section id="product_details" class="row" style="/*background-color: #eee8ea;*/background-image: url(https://localhost:8081/npm/wp-content/themes/npm/img/bg_strip5.jpg);    background-repeat: no-repeat;">
			<div class="row wrapper">
				<div class="col-7 align-self-end no-padding">
					 <img class="<?php $p = get_field('gadget_top',$post->ID); echo $p;?>" src="<?php if(get_field('gadget_top',$post->ID)){$p = get_field('gadget_top',$post->ID); echo $p;}else{echo $imged;} ?>">
				</div>
				<div class="col-5 center align-self-center top-imginpost">
					<span class="wrapper glowrap">
					<?php if(get_field('strip2_text',$post->ID)){$t = get_field('strip2_text',$post->ID); echo $t; }else{echo $text;}?><?php //$our_color=get_field('our_color');  echo '<h2 class="title">' .$our_color . '</h2>'  ?></span>
				</div>
			</div>
		</section>
<?php

/*
$FrontPage = get_field('imgder');
echo '<pre>';
print_r(count($FrontPage));
echo '</pre>';
*/
global $post;
$postcat = get_the_category($post->ID);
//$category5_gadget= get_field('inside_top_image');
/*$FrontPage = get_field('imgder');
echo '<pre>';
print_r($FrontPage);
echo '</pre>';
*/
//die();
/*if(!empty($postcat)){
    echo esc_html( $postcat[0]->cat_ID );
}

//die();
*/
if ( in_category('colors') ) {
	$strhtm = '<div id="icons_posts" class="row">
					<div class="col-4 center">
						<img class="img-space" src="'.get_template_directory_uri().'/img/icon1_post.png" alt="icon" >
						<h2>Range of colors</h2>
					</div>
					<div class="col-4 center">
						<img class="img-space" src="'.get_template_directory_uri().'/img/icon2_post.png" alt="icon" >
						<h2>Best Quality</h2>
					</div>
					<div class="col-4 center">
						<img class="img-space" src="'.get_template_directory_uri().'/img/icon3_post.png" alt="icon" >
						<h2>Special Price</h2>
					</div>
				</div>';
}else{
	$strhtm = '<div id="icons_posts" class="row">
					<div class="col-6 center">
						<img class="img-space" src="'.get_template_directory_uri().'/img/icon2_post.png" alt="icon" >
						<h2>Best Quality</h2>
					</div>
					<div class="col-6 center">
						<img class="img-space" src="'.get_template_directory_uri().'/img/icon3_post.png" alt="icon" >
						<h2>Special Price</h2>
					</div>
				</div>';
}


?>

	<!-- section -->
	<section class="wishlist-test" style="padding: 50px 0;">
     <div class="wrapper">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<div class="row">
			<!-- post thumbnail -->
		<div class="maImage col-md-4 col-12 left text-left" style="margin-top:50px">
			<div  class="single-imgmobile">




<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>

	     	</div>
		</div>
			<!-- /post thumbnail -->

			<!-- post title -->
				<div class="maContent col-md-8 col-12">
					<h1 style="margin:40px 0 0 0">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>


		<?php if(!empty($topIcolo['url'])){?>
			<div class="row top-banner" style="margin: 0 0 0 0;padding: 0 0 10px 0;">
				<img src="<?php  echo $topIcolo['url'] ;?>">
			</div>
		<?php }?>
					<h4><?php the_content(); ?></h4>
					<?php //echo $strhtm; ?>

					<div id="icons_posts" class="row justify-content-md-center">

						<!--btn widget-->
						<div class="col-6 text-left">
							<a class="btn" style="display:none">
							<!--	<span class="wishlist-btn">Add to Wish List</span>-->
							<img src="<?php echo get_template_directory_uri(); ?>/img/btn_widget.png" alt="icon" >
							</a>
							<div class="col">
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


							  <!--a value="sdfsd"  href="/my-wish-list/">
								<img class="btn-widget2" style="margin-left: -24px;  position: absolute; margin-top: 5px;" src="https://npmsite.goil.co.il//wp-content/themes/npm/img/btnfalse.png">
								<span class="span-text-b">Add</span> <span class="span-text-d">to Wish List</span>
							</a-->
								</div>

						</div>
						<!--btn contact-->
						<div class="col-6 ">
							<a  class="btn" href="/contact-page-m">
							<!--	<span class="contact-btn">Contact</span>-->
							<img style="vertical-align: super;" src="<?php echo get_template_directory_uri(); ?>/img/icon1_contact.png" alt="icon" >
						</a>
						</div>

					</div>
				</div>
	<!-- /post title -->
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

	</div>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
		<!-- /article -->

	<?php endif; ?>
</div>


	<!-- /section -->


	<!--related-products plugin-->
<section id="relatedproducts" class="related-products center row justify-content-md-center " style="clear: both;background-color: #f6f5f5; ">

	<h2>RELATED PRODUCTS</h2>
	<?php //echo do_shortcode( "[yuzo_related]" ); ?>

</section>
	<!--related-products -->

<!--new --->
<?php	/*<div id="relatedproducts" class=" category " style="background-color: #f6f5f5;">
							<h2>RELATED PRODUCTS</h2>
					<div>
					$category_id = get_the_ID();?>
					<?php echo 	$category_id; */?>

							<?php query_posts('cat='.$postcat[0]->cat_ID.'&post_status=publish,future&order=DESC&posts_per_page=5');?>
				 <div class="articlesList">
							<!--<h1><?php //single_cat_title(); ?></h1>-->
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
										 <!--a class="readmore" href="<?php echo the_permalink()?>"><?php
											 $curlang = substr(get_bloginfo('language'),0,2);
											 switch($curlang){
												 case "en":
													 echo 'Details';
													 break;
												 case "he":
													 echo 'קראי עוד';
													 break;
											 }
											 ?> </a-->
											 <?php echo do_shortcode( "[show_gd_mylist_btn]" ); ?>
									 </div>
								 </div>
								 <div class="clearfix"></div>
							 </article>
					 <?php endwhile; else: endif; ?>
			 </div><!-- / main Content-->
		 <?php wp_reset_query(); ?>

		 </div>
							 </div>
<!---new-->

</section>

		<?php // echo do_shortcode( "[wishlist id=1089]" ); ?>

	<section id="contact-page" style="clear: both;">
	<?php  get_template_part('template-parts/contact-template'); ?>
	</section>

	</main>



<?php get_footer(); ?>
