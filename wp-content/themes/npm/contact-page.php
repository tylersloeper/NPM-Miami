<?php /* Template Name: contact Page  main full menu Template */ get_header();

$topImage = get_field('inside_top_image');

$FrontPage = get_option('page_on_front');
global $post;
 ?>
<link rel='stylesheet' id='fontawesome-all-css'  href='<?php echo get_template_directory_uri(); ?>/css/fontawesome-all.css' media='all' />
	<main role="main">
				<!--Section 2 about-->
                <section id="topImage" class="row">
                    <img class="img-full top-banner" src="<?php echo $topImage ;?>">
                </section>

        <?php $bg_stri7_main=get_field('bg_stri7_main'); ?>
        <section id="contact_form2" class="row justify-content-md-center" <?php  echo $bg_stri7_main ? 'style="background-image:url(' . $bg_stri7_main .')"' : ' ' ?>>
                <div class="wrapper">
                    <?php $title_footer1=get_field('title_footer1'); echo '<h2>' .$title_footer1 . '</h2>'?>


<div class="col-md-12 ">
<div class="row">
<div class="col-md-6 ">
	<div style="text-align:left">
	<h2 class="no-padding" style="margin-bottom: 30px;font-size:25px; text-align: left; padding:0 !important">Contact Information</h2>
	<p class="fa" >Phone: <a href="tel:<?php if(get_field('phone_number',$post->ID)){$pn = get_field('phone_number',$post->ID); echo $pn; }?>" data-fontsize="18"><?php if(get_field('phone_number',$post->ID)){$pn = get_field('phone_number',$post->ID); echo $pn; }?></a></p>
	<p class="fa" >Mobile: <a href="tel:<?php if(get_field('mobile_number',$post->ID)){$mn = get_field('mobile_number',$post->ID); echo $mn; }?>" data-fontsize="18"><?php if(get_field('mobile_number',$post->ID)){$mn = get_field('mobile_number',$post->ID); echo $mn; }?></a></p>
	<p class="fa" >Email: <a href="mailto:<?php if(get_field('email',$post->ID)){$eml = get_field('email',$post->ID); echo $eml; }?>" data-fontsize="18"><?php if(get_field('email',$post->ID)){$eml = get_field('email',$post->ID); echo $eml; }?></a></p>
    <p class="wh fa" data-fontsize="18">Address:<?php if(get_field('address',$post->ID)){$adrs = get_field('address',$post->ID); echo $adrs; }?></p>
	<p class="wh fa" data-fontsize="18"><?php if(get_field('timetable',$post->ID)){$tmbl = get_field('timetable',$post->ID); echo $tmbl; }?></p>
	</div>
  <!--icon--->
	<div class="social-icons align-self-center center left">
	<?php if(function_exists('dynamic_sidebar') || dynamic_sidebar('footer-social-icons2')):?>
	<div class="">
		<?php dynamic_sidebar('footer-social-icons2');?>
	</div>
	<?php endif ;?>
	</div>



</div>
<div class="col-md-6">
<?php echo do_shortcode('[contact-form-7 id="277" title="Contact  form with country"]'); ?>
</div>
</div>
</div>



                    </div>
                    	<div class="clearfix"></div>
        </section>

        <section id="strip9">
                <?php  get_template_part('template-parts/our-partners-template'); ?>
                <div class="clearfix"></div>
        </section>

	</main>
<style>

strong{
    display: block;
    font-size: 23px;
    text-decoration: underline;
    margin: 16px 0 5px 0;
	color:#2ec6f3
}
.fa {
	display:block;
	padding: 8px 0 0 12px;
}
</style>

<?php get_footer(); ?>
