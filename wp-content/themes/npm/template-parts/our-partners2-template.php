<?php /* Template Name: Our Partners carousel Page Template */
$FrontPage = get_option('page_on_front'); ?>


	<main role="main">
    <?php $our_partners_text=get_field(our_partners_text, $FrontPage);  echo '<h2 class="title">' .$our_partners_text . '</h2>'  ?>
        <?php /// $bg_stri4_main=get_field('bg_stri4_main'); ?>
               <section>
                 <div>
                    <?php //echo do_shortcode('[wcfgallery items="5" ids="132,133,134,3663,1273,129,2874,2876,2878,2880,2882,2884,2886,2888,2890,2894,3254,3013"]') ?>
                    <?php echo do_shortcode('[wcfgallery items="5" ids=""]') ?>
                    <?php //echo do_shortcode('[sp_wpcarousel id="4712"]') ?>

                    <div class="clearfix"></div>
                 </div>
                </section>
	</main>
