<?php
/**
 * The template for displaying all pages
 *
 * Template Name: NPM Tnx Mobile
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package npm
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 grey">
                        <div class="logo">
                            <div class="logo-npm">
                                <?php
                                the_custom_logo();
                                if ( is_front_page() && is_home() ) :
                                    ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php
                                else :
                                    ?>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                    <?php
                                endif;
                                $leo_description = get_bloginfo( 'description', 'display' );
                                if ( $leo_description || is_customize_preview() ) :
                                    ?>
                                    <p class="site-description"><?php echo $leo_description; /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!--div class="image-big-npm">
                            <img src="<?php echo ( get_template_directory_uri() ); ?>/images/image-big-npm2.png" alt="NPM"/>
                        </div-->
						<div class="image-big-npm" style="position: relative;height:240px">
							
                            <img src="<?php echo ( get_template_directory_uri() ); ?>/images/sas.gif" style="width: 18%;margin-top: 27%;" id="powasas" alt="NPM"/>
                            <img src="<?php echo ( get_template_directory_uri() ); ?>/images/HandsAnimMobileFIX.gif" style="display:none;" id="powa" alt="NPM"/>
							<img src="<?php echo ( get_template_directory_uri() ); ?>/images/HandsAnimPNG.png"  style="display:none;top: 0; position: absolute;" id="setry" alt="NPM"/>
							<div class="rowas"><img src="<?php echo ( get_template_directory_uri() ); ?>/images/str.png" class="bounce" style="display:none;width: 85%;" id="stry" alt="NPM"/></div>
                        </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$("#powa").load(function() {
	$("#powasas").fadeOut("fast");
		document.getElementById('powa').style.display = 'block';
		setTimeout(function(){ str() }, 2000);
});
setTimeout(function(){document.getElementById('tree').style.display = 'block';
document.getElementById('trees').style.display = 'none';}, 1000);
function str(){
document.getElementById('powa').style.display = 'none';
document.getElementById('setry').style.display = 'block';
document.getElementById('stry').style.display = 'block';

}


</script>
<style>
.bounce {
  position: absolute;
      left: 16%;
  top:0;
  margin-top:-25px;
  margin-left:-25px;
  height:50px;
  width:50px;
  -webkit-animation:bounce 1s infinite;
}

@-webkit-keyframes bounce {
  0%       { top:5px; }
  50%      { top:20px; }
  100%     {top:5px;}
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
.simg{
    width: 42%;
    margin: -8px 0 0 -4px;
}
/*style="visibility:hidden;"*/
.rowas{
top: 21px;
    position: relative;
}
.logo{
    position: relative;
    z-index: 99999;
    top: -25px;
}
</style>
                        <div class="header-npm-mobile">
                            <h1><?php the_field('title-header'); ?></h1>

                        </div>
                    </div>


                    <div class="col-xs-12 white">
                        <div class="header-npm2"><a class="btm-header-join" href="#contact-us">JOIN THE REVOLUTION NOW</a>
                            <h5><?php the_field('decriptions-header'); ?></h5>
                        </div>
                        <div class="header-img">
                            <img src="<?php echo ( get_template_directory_uri() ); ?>/images/header-img2.png" alt="header images"/>
                        </div>

                        <div class="all_adv">
                            <div class="advantage col-xs-6">
                                <?php
                                $image = get_field('adv_1');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_description_1'); ?>
                                </div>
                            </div>

                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_2');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_2'); ?>
                                </div>
                            </div>
<div class="clearfix"></div>
                            <!--div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_3');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_3'); ?>
                                </div>
                            </div-->
                            
                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_4');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_4'); ?>
                                </div>
                            </div>

                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_5');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_5'); ?>
                                </div>
                            </div>
<div class="clearfix"></div>
                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_6');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_6'); ?>
                                </div>
                            </div>
                            
                            <!--div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_7');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_7'); ?>
                                </div>
                            </div-->

                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_8');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_8'); ?>
                                </div>
                            </div>
<div class="clearfix"></div>
                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_9');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_9'); ?>
                                </div>
                            </div>
                            
                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_10');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_10'); ?>
                                </div>
                            </div>
<div class="clearfix"></div>
                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_11');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_11'); ?>
                                </div>
                            </div>

                            <div class="advantage  col-xs-6">
                                <?php
                                $image = get_field('adv_12');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <div class="content">
                                    <?php the_field('adv_decription_12'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid grey2">
                <div id="contact-us">
                    <div class="contact-us">
                        <div class="form_description">
                            <h2><?php the_field('form_description'); ?></h2>
                        </div>
						<p>Thanks for writing</p>
                        <?php //echo do_shortcode(' [contact-form-7 id="5" title="Contact form"] ') ?>
                    </div>
                </div>
            </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
