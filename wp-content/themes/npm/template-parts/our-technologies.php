<?php /* Template Name: Our Technologies Page Template */
$FrontPage = get_option('page_on_front'); ?>


	<main role="main">
        <!--strip 5 post-->
        <?php /// $bg_stri5_main=get_field('bg_stri5_main');	?>
            <?php /// $sbg3_strip5 = get_field('sbg3_strip5'); ?>
                <section id="strip5">
                    <div class="row">
                        <div class="bottom-title"><?php $our_technology_text=get_field(our_technology_text,$FrontPage);  echo '<h2 class="title">' .$our_technology_text . '</h2>'  ?></div>
                        <?php echo do_shortcode('[gallery columns="5"  ids="144,143,142,140,139"]') ?>
                        <div class="clearfix"></div>
                    </div>
                </section>
	</main>
