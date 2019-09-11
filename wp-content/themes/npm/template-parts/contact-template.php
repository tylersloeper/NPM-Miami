<?php /* Template Name: contact Page Template */
 $FrontPage = get_option('page_on_front'); ?>

	<main role="main">
             <?php /// $title_footer1=get_field(title_footer1,$FrontPage); echo '<h2>' .$title_footer1 . '</h2>'?>
				<!--Section 2 about-->
				<section id="contact_form" class="row justify-content-md-center">
			    <div class="wrapper">
                    <h2>CONTACT</h2>
                    <?php /// $title_footer1=get_field('title_footer1'); echo '<h2>' .$title_footer1 . '</h2>'?>
					<?php echo do_shortcode('[contact-form-7 id="263" title="Contact page"]'); ?></div>
				</section>
	</main>
